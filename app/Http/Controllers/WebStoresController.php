<?php

namespace App\Http\Controllers;
use App\Models\CategoryRelated;
use App\Models\Store;
use App\Models\StoreRelated;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\Category;

class WebStoresController extends Controller
{
    public function index() {
        $search = request('search');
        if (!empty($search)) {

            $record = Store::select(
                'id',
                'name',
                'slug',
                'image',
                'banner_image'
            )
                ->withCount('coupon');

            if( $search == '0-9'){
                $record = $record->where('stores.name', 'regexp', '^[0-9]');
            }else{
                $record = $record->where('stores.name', 'like', $search.'%');
            }

            $record = $record->orderBy('stores.id','DESC')
                        ->get();
            return view('stores', compact('record') );

        }else{
            $record = Store::select(
                'id',
                'name',
                'slug',
                'image',
                'banner_image'
            )
                ->withCount('coupon')
                ->get();
            return view('stores', compact('record') );
        }

    }

    public function categories(){
//        $record = Store::select(
//            'id',
//            'name',
//            'slug',
//            'image'
//        )
//            ->where('type', 2) // type 2 Categories
//            ->orderBy('stores.id','DESC')
//            ->get();

        $record = Category::select(
            'id',
            'name',
            'title',
            'slug',
            'image'
        )
            ->where('status', 1)
            ->orderBy('categories.name','ASC')
            ->get();

//        dd( $record );

        return view('categories', compact('record') );
    }

    public function category_slug($slug){
        $category = Category::whereSlug($slug)
            ->withCount('stores')
            ->first();

        if( $category != false){

            $related_store_ids = CategoryRelated::where('category_id', $category->id)
                ->pluck('related_store_id')
                ->toArray();

            $record = Store::select('id','name','slug','image')
                ->where('status', 1)
                ->withCount('coupon')
                ->whereIn('id', $related_store_ids)
                ->get();

            return view('category_stores', compact('record', 'category') );

        }else {
            abort(404);
        }

    }

    public function stores_slug($slug){

        $store = Store::whereSlug($slug)
            ->withCount('coupon','code','deal')
            ->with('meta:store_id,meta_keywords,meta_description')
            ->with('coupon')
            ->first();

        if($store != false){

            $related_store_ids = StoreRelated::where('store_id', $store->id)
                ->pluck('related_store_id')->toArray();

            $related_stores = Store::select('id','name','slug')
                ->where('status', 1)
                ->whereIn('id', $related_store_ids)
                ->get();

            $popular_categories = Store::select('id','name','slug')
                ->where('status', 1)
                ->where('type', 2)
                ->where('popular', 1)
                ->whereNotIn('id', [$store->id])
                ->get();

//            dd( $store->coupon );

            return view('store_details', compact('store', 'related_stores', 'popular_categories') );
        }else{
            abort(404);
        }


    }

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Store::select(
            'name',
            'image',
            'slug'
        )->withCount('coupon')
            ->where('name', 'LIKE', '%'.$query.'%')
            ->get();

        return response()->json($filter_data);
    }

    function views(Request $request){
        $data = $request->all();
        Coupon::find($data['id'])->increment('views');

        return response()->json(['message' => 'Coupon View has been updated']);
    }

}
