<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;

use App\Models\Store;
use App\Models\Logs;
use Illuminate\Http\Request;

use App\Helpers\helper as Helper;
use App\Http\Controllers\Controller;
use File;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:coupon-list|coupon-create|coupon-edit|coupon-delete', ['only' => ['index','store']]);
        $this->middleware('permission:coupon-create', ['only' => ['create','store']]);
        $this->middleware('permission:coupon-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:coupon-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Coupon::where('coupons.title', 'like', '%'.$search.'%')
                ->orWhere('coupons.coupon_code', 'like', '%'.$search.'%')
                ->orWhere('coupons.short_description', 'like', '%'.$search.'%')
                ->orWhere('coupons.long_description', 'like', '%'.$search.'%')
                ->orderBy('coupons.id','DESC')
                ->paginate(15);
            return view('coupons.index', compact('record') );
        }else{
            $record = Coupon::orderBy('coupons.id', 'DESC')->paginate(15);

            if ($record != false) {
                return view('coupons.index', compact('record'));
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
        $stores = Store::select('id', 'name')->get();
        return view('coupons.add', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCouponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouponRequest $request)
    {
        $request['start_date'] = date('Y-m-d', strtotime($request->start_date));
        $request['expire_date'] = date('Y-m-d', strtotime($request->expire_date));
        $request['verified_on'] = date('Y-m-d', strtotime($request->start_date));

        $coupon = Coupon::create($request->all());

        if(isset($request['image'])){

            $image = Helper::upload_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $coupon->update($data2);

        }
        if(isset($request['banner_image'])){

            $banner_image = Helper::upload_banner_image($request->file('banner_image'));

            $data2 = array(
                'banner_image'        => $banner_image,
            );

            $coupon->update($data2);

        }

        Logs::add_log(Coupon::getTableName(), $coupon->id, $request->all(), 'add', '');
        return redirect()->route('coupons.index')->with('success','Record Added !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        $record = Coupon::find($coupon->id);
        $stores = Store::select('id', 'name')->get();

        $logs = Logs::get_logs_details(Coupon::getTableName(), $coupon->id);

        if($record != false){
            return view('coupons.edit', compact('record','logs','stores'));
        }else{
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouponRequest  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $request['featured'] = $request->featured == "1" ? 1 : 0 ;
        $request['latest'] = $request->latest == "1" ? 1 : 0 ;

        $request['start_date'] = date('Y-m-d', strtotime($request->start_date));
        $request['expire_date'] = date('Y-m-d', strtotime($request->expire_date));
        $request['verified_on'] = date('Y-m-d', strtotime($request->start_date));

        $coupon = Coupon::find($coupon->id);
        $coupon->updated_at = now();

        $coupon->update($request->all());

        if(isset($request['image'])){

            $image = Helper::upload_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $coupon->update($data2);

        }

        if(isset($request['banner_image'])){

            $banner_image = Helper::upload_banner_image($request->file('banner_image'));

            $data2 = array(
                'banner_image'        => $banner_image,
            );

            $coupon->update($data2);

        }

        Logs::add_log(Coupon::getTableName(), $coupon->id, $request->all(), 'edit', 1);
        return redirect()->route('coupons.index')->with('success','Record Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon = Coupon::find($coupon->id);

        $image = public_path("images\\") .$coupon->image ;
        $banner_image = public_path("images\\") .$coupon->banner_image ;

        if(File::exists($image)) {
            File::delete($image);
            File::delete($banner_image);
        }

        $coupon->delete();
        return redirect()->route('coupons.index')->with('success', 'Record Deleted !');
    }
}
