<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\PageMetas;
use App\Models\Logs;
use Illuminate\Http\Request;
//use App\Helpers\helper as Helper;

use App\Http\Controllers\Controller;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index','store']]);
        $this->middleware('permission:page-create', ['only' => ['create','store']]);
        $this->middleware('permission:page-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:page-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Page::where('pages.title', 'like', '%'.$search.'%')
                ->where('pages.parent_id', '!=', 0)
                ->orWhere('pages.name', 'like', '%'.$search.'%')
                ->orWhere('pages.short_description', 'like', '%'.$search.'%')
                ->orWhere('pages.long_description', 'like', '%'.$search.'%')
                ->orderBy('pages.id','DESC')
                ->paginate(5);
            return view('pages.index', compact('record') );
        }else{

            $record = Page::orderBy('pages.id','DESC')
                            ->where('pages.parent_id', '!=', 0)
                            ->paginate(10);

            if($record != false){
                return view('pages.index', compact('record') );
            }else{
                abort(404);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::select('id', 'title')->where('parent_id', 0)->get();
        return view('pages.add', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        $record = Page::create( $request->except(['meta_keywords', 'meta_description']) );

        $metaData = $request->only('meta_keywords', 'meta_description');

        $metaData['page_id'] = $record->id;

        PageMetas::create($metaData);

        Logs::add_log(Page::getTableName(), $record->id, $request->all(), 'add', '');
        return redirect()->route('pages.index')->with('success','Record Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $record = Page::select('pages.id','pages.parent_id','pages.name','pages.title', 'pages.type', 'pages.short_description','pages.long_description','pages.status', 'page_metas.meta_keywords', 'page_metas.meta_description')
            ->join('page_metas', 'page_metas.page_id', 'pages.id')
            ->where('pages.id', $page->id)
            ->first();

        $pages = Page::select('id', 'title')
                        ->where('parent_id', 0)
                        ->whereNotIn('id', [$page->id])->get();

        $logs = Logs::get_logs_details(Page::getTableName(), $page->id);

        if($record != false){
            return view('pages.edit', compact('record','logs','pages'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageRequest  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page = Page::find($page->id);

        $metaData = PageMetas::where('page_id', $page->id)->first();

        $status = $request->status == "on" ? 1 : 0 ;
        $request['status'] = $status ;

        $page->update( $request->except(['meta_keywords', 'meta_description']) );

        $metaData->update($request->only('meta_keywords', 'meta_description'));

        Logs::add_log(Page::getTableName(), $page->id, $request->all, 'edit', 1);
        return redirect()->route('pages.index')->with('success','Record Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page = Page::find($page->id);
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Record Deleted !');
    }
}
