<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CategoryRelated;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Logs;

use App\Models\Store;
use App\Models\StoreRelated;
use App\Models\MetaStores;
use App\Models\Blog;

use App\Helpers\helper as Helper;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:store-list|store-create|store-edit|store-delete', ['only' => ['index','store']]);
        $this->middleware('permission:store-create', ['only' => ['create','store']]);
        $this->middleware('permission:store-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:store-delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Category::where('categories.title', 'like', '%'.$search.'%')
                        ->orWhere('categories.name', 'like', '%'.$search.'%')
                        ->orderBy('categories.id','DESC')
                        ->paginate(15);
            return view('categories_stores.index', compact('record') );
        }else{

            $record = Category::orderBy('categories.id','DESC')->paginate(15);

            if($record != false){
                return view('categories_stores.index', compact('record') );
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
        $blogs = Blog::select('id', 'name')->get();
        $stores = Store::select('id', 'name')->get();

        return view('categories_stores.add', compact('blogs', 'stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->all());

        $related_stores = $request->related_stores ;

        unset( $request['related_stores'] );

        if(!empty($related_stores)){
            foreach($related_stores as $key => $value){

                CategoryRelated::create([
                    'category_id' => $category['id'],
                    'related_store_id' => $value,
                ]);
            }
        }

        if(isset($request['image'])){

            $image = Helper::upload_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $category->update($data2);

        }

        Logs::add_log(Category::getTableName(), $category->id, $request->all(), 'add', '');
        return redirect()->route('categories_stores.index')->with('success','Record Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $record = Category::select(
            'categories.*'
        )
            ->where('id', $id)
            ->first();

        $stores = Store::select('id', 'name')->whereNotIn('id', [$id])->get();

        $related_store_ids = CategoryRelated::where('category_id', $id)
                                ->pluck('related_store_id')
                                ->toArray();

        $logs = Logs::get_logs_details(Category::getTableName(), $id);

        if($record != false){
            return view('categories_stores.edit', compact('record','logs','stores','related_store_ids'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category, $id)
    {
        $request['popular'] = $request->popular == "1" ? 1 : 0 ;
        $status = $request->status == "on" ? 1 : 0 ;
        $request['status'] = $status ;

        $category = Category::find($id);

        $related_stores = $request->related_stores ;

        unset( $request['related_stores'] );
        $category->update($request->all());

        if(!empty($related_stores)){
            CategoryRelated::where('category_id', $category->id)->delete();

            foreach($related_stores as $key => $value){

                CategoryRelated::create([
                    'category_id' => $category->id,
                    'related_store_id' => $value,
                ]);
            }
        } else {
            CategoryRelated::where('category_id', $category->id)->delete();
        }

        if(isset($request['image'])){

            $image = Helper::upload_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $category->update($data2);

        }

        Logs::add_log(Category::getTableName(), $category->id, $request->all(), 'edit', 1);
        return redirect()->route('categories_stores.index')->with('success','Record Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $category_id)
    {
        $category = Category::find($category_id);
        $category->delete();
        return redirect()->route('categories_stores.index')->with('success', 'Record Deleted !');
    }
}
