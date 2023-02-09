<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Logs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Blog::where('parent_id', 0)
                ->where('is_coupon_site', 0)
                ->where(function($query) use ($search) {
                    $query->where('blogs.title', 'like', '%'.$search.'%')
                    ->orWhere('blogs.name', 'like', '%'.$search.'%')
                    ->orWhere('blogs.short_description', 'like', '%'.$search.'%')
                    ->orWhere('blogs.long_description', 'like', '%'.$search.'%');
                })                
                ->orderBy('blogs.sort','ASC')
                ->paginate(10);
            return view('categories.index', compact('record') );
        }else{

            $record = Blog::where('parent_id', 0)
                            ->where('is_coupon_site', 0)
                            ->orderBy('blogs.sort','ASC')->paginate(15);

            if($record != false){
                return view('categories.index', compact('record') );
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
        return view('categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $details = $request->validate([
            'name'                  => 'required|min:3|max:150|string|unique:blogs',
            'title'                 => 'required|min:3|max:150|string',
            'short_description'     => 'required|min:3|max:200|string',
            'meta_keywords'         => 'required|min:3|max:160',
            'meta_description'      => 'required|min:3|max:160'
        ]);

        $max_sort = Blog::max('sort');
        $max_sort++;

        $details['parent_id'] = 0;
        $details['is_coupon_site'] = 0;
        $details['sort'] = $max_sort;        

        Blog::create($details);

        return redirect()->route('categories.index')->with('success','Record Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Blog::find($id)->select('blogs.id', 'blogs.name', 'blogs.title', 'blogs.short_description', 'blogs.status')
                ->where('parent_id', 0)
                ->where('is_coupon_site', 0)
                ->first();

        if($category != false){
            return view('blogs.edit', compact('record','logs','blogs','blog_categories','related_blog_ids','tags','blogTag'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Blog::find($id);

        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Record Deleted !');
    }
}
