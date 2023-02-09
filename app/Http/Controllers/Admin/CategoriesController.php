<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Logs;
use App\Models\BlogMetas;
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

        $category = Blog::create($details);

        $metaData = $request->only('meta_keywords', 'meta_description');

        $metaData['blog_id'] = $category->id;

        BlogMetas::create($metaData);

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
        $category = Blog::select('blogs.sort', 'blogs.id', 'blogs.name', 'blogs.title', 'blogs.short_description', 'blogs.status', 'blog_metas.meta_keywords', 'blog_metas.meta_description')
                ->join('blog_metas', 'blog_metas.blog_id', 'blogs.id')
                ->where('blogs.id', $id)
                ->where('parent_id', 0)
                ->where('is_coupon_site', 0)
                ->first();

        if($category != false){
            return view('categories.edit', compact('category'));
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
        // $details = $request->validate([
        //     'name'                  => 'required|min:3|max:150|string|unique:blogs',
        //     'title'                 => 'required|min:3|max:150|string',
        //     'short_description'     => 'required|min:3|max:200|string',
        //     'meta_keywords'         => 'required|min:3|max:160',
        //     'meta_description'      => 'required|min:3|max:160'
        // ]);

        // $details['sort'] = $request->sort;
        // $details['status'] = $request->status;

        // $category = Blog::find($id);

        // $metaData = BlogMetas::select('meta_keywords', 'meta_description')->where('blog_id', $blog->id);

        // $status = $request->status == "on" ? 1 : 0 ;
        // $request['status'] = $status ;

        // $related_blogs = $request->related_blogs ;
        // unset( $request['related_blogs'] );

        // $blog->update($request->except(['meta_keywords', 'meta_description']));

        // $metaData->update($request->only('meta_keywords', 'meta_description'));

        // if(!empty($related_blogs)){
        //     BlogRelated::where('blog_id', $blog->id)->delete();

        //     foreach($related_blogs as $key => $value){

        //         BlogRelated::create([
        //             'blog_id' => $blog->id,
        //             'related_blog_id' => $value,
        //         ]);
        //     }
        // } else {
        //     BlogRelated::where('blog_id', $blog->id)->delete();
        // }

        // if(isset($request['blog_image'])){

        //     $blog_image = Helper::upload_banner_image($request->file('blog_image'));

        //     $data2 = array(
        //         'blog_image'        => $blog_image,
        //     );

        //     $blog->update($data2);

        // }

        // if ($request->has('tags')) {
        //     DB::table('blog_tag')->where('blog_id',$blog->id)->delete();
        //     $blog->tags()->attach($request->tags);
        // }
        
        // Logs::add_log(Blog::getTableName(), $blog->id, $request->all(), 'edit', 1);
        // return redirect()->route('blogs.index')->with('success','Record Updated !');
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
