<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Models\StoreRelated;
use App\Models\MetaStores;
use App\Models\Blog;
use App\Models\Logs;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;

use App\Helpers\helper as Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class StoreController extends Controller
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
            $record = Store::where('stores.title', 'like', '%'.$search.'%')
                ->orWhere('stores.name', 'like', '%'.$search.'%')
                ->orWhere('stores.short_description', 'like', '%'.$search.'%')
                ->orWhere('stores.long_description', 'like', '%'.$search.'%')
                ->orderBy('stores.id','DESC')
                ->paginate(15);
            return view('stores.index', compact('record') );
        }else{

            $record = Store::orderBy('stores.id', 'DESC')->paginate(15);

            if ($record != false) {
                return view('stores.index', compact('record'));
            } else {
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
        return view('stores.add', compact('blogs', 'stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        $request['uuid'] = rand(10000,9999999);
        $store = Store::create($request->except(['meta_keywords', 'meta_description']));

        $metaData = $request->only('meta_keywords', 'meta_description');

        $metaData['store_id'] = $store->id;

        MetaStores::create($metaData);

        $related_stores = $request->related_stores ;

        unset( $request['related_stores'] );

        if(!empty($related_stores)){
            foreach($related_stores as $key => $value){

                StoreRelated::create([
                    'store_id' => $store['id'],
                    'related_store_id' => $value,
                ]);
            }
        }

        if(isset($request['image'])){

            $image = Helper::upload_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $store->update($data2);

        }

        // if(isset($request['banner_image'])){

        //     $banner_image = Helper::upload_banner_image($request->file('banner_image'));

        //     $data2 = array(
        //         'banner_image'        => $banner_image,
        //     );

        //     $store->update($data2);

        // }

        Logs::add_log(Store::getTableName(), $store->id, $request->all(), 'add', '');
        return redirect()->route('stores.index')->with('success','Record Added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        $record = Store::select(
            'stores.*',
            'meta_stores.meta_keywords',
            'meta_stores.meta_description'
        )
            ->join('meta_stores', 'meta_stores.store_id', 'stores.id')
            ->where('stores.id', $store->id)
            ->first();

        $stores = Store::select('id', 'name')->whereNotIn('id', [$store->id])->get();

        $related_store_ids = StoreRelated::where('store_id', $store->id)
            ->pluck('related_store_id')->toArray();

        $logs = Logs::get_logs_details(Store::getTableName(), $store->id);

        if($record != false){
            return view('stores.edit', compact('record','logs','stores','related_store_ids'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreRequest $request, Store $store)
    {
        $request['top'] = $request->top == "1" ? 1 : 0 ;
        $request['popular'] = $request->popular == "1" ? 1 : 0 ;

        $store = Store::find($store->id);
        $store->updated_at = now();

        $metaData = MetaStores::select('meta_keywords', 'meta_description')->where('store_id', $store->id);

        $status = $request->status == "on" ? 1 : 0 ;
        $request['status'] = $status ;

        $related_stores = $request->related_stores ;
        unset( $request['related_stores'] );

        $store->update($request->except(['meta_keywords', 'meta_description']));

        $metaData->update($request->only('meta_keywords', 'meta_description'));

        if(!empty($related_stores)){
           StoreRelated::where('store_id', $store->id)->delete();

            foreach($related_stores as $key => $value){

                StoreRelated::create([
                    'store_id' => $store->id,
                    'related_store_id' => $value,
                ]);
            }
        } else {
            StoreRelated::where('store_id', $store->id)->delete();
        }

        if(isset($request['image'])){

            $image = Helper::upload_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $store->update($data2);

        }

        // if(isset($request['banner_image'])){

        //     $banner_image = Helper::upload_banner_image($request->file('banner_image'));

        //     $data2 = array(
        //         'banner_image'        => $banner_image,
        //     );

        //     $store->update($data2);

        // }

        Logs::add_log(Store::getTableName(), $store->id, $request->all(), 'edit', 1);
        return redirect()->route('stores.index')->with('success','Record Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store = Store::find($store->id);

        $image = public_path("images\\") .$store->image ;
        $banner_image = public_path("images\\") .$store->banner_image ;

        if(File::exists($image)) {
            File::delete($image);
            File::delete($banner_image);
        }

        $store->delete();
        return redirect()->route('stores.index')->with('success', 'Record Deleted !');
    }
}
