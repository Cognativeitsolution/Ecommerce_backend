<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

use App\Http\Controllers\Controller;

use App\Models\Logs;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:tag-list|tag-create|tag-edit|tag-delete', ['only' => ['index','store']]);
        $this->middleware('permission:tag-create', ['only' => ['create','store']]);
        $this->middleware('permission:tag-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:tag-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Tag::where('tags.name', 'like', '%'.$search.'%')
                ->orderBy('tags.id','DESC')
                ->paginate(5);
            return view('tags.index', compact('record') );
        }else{
            $record = Tag::orderBy('tags.id','DESC')->paginate(10);

            if($record != false){
                return view('tags.index', compact('record') );
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
        return view('tags.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $record = Tag::create( $request->all() );

        Logs::add_log(Tag::getTableName(), $record->id, $request->all(), 'add', '');
        return redirect()->route('tags.index')->with('success','Record Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {

        $record = Tag::whereId($tag->id)->first();

        $logs = Logs::get_logs_details(Tag::getTableName(), $tag->id);

        if($record != false){
            return view('tags.edit', compact('record','logs'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag = Tag::find($tag->id);

        $tag->update($request->all());

        Logs::add_log(Tag::getTableName(), $tag->id, $request->all, 'edit', 1);
        return redirect()->route('tags.index')->with('success','Record Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag = Tag::find($tag->id);
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Record Deleted !');
    }
}
