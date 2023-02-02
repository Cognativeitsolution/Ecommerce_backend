<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Models\Logs;
use App\Http\Controllers\Controller;

use App\Helpers\helper as Helper;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Validation\Rule;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:slider-list|slider-create|slider-edit|slider-delete', ['only' => ['index','store']]);
        $this->middleware('permission:slider-create', ['only' => ['create','store']]);
        $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:slider-delete', ['only' => ['destroy']]);

    }
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Slider::where('sliders.title', 'like', '%'.$search.'%')
                ->orWhere('sliders.description', 'like', '%'.$search.'%')
                ->orderBy('sliders.id','DESC')
                ->paginate(5);
            return view('sliders.index', compact('record') );
        }else{
            $record = Slider::orderBy('sliders.id','DESC')
                ->paginate(10);

            if($record != false){
                return view('sliders.index', compact('record') );
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
        return view('sliders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        $data = [
            'title'  => $request->title,
            'description'  => $request->description,
            'url'  => !is_null($request->url) ? $request->url : '#'
        ];

        $record = Slider::create( $data );

        if(isset($request['image'])){

            $image = Helper::upload_banner_image($request->file('image'));

            $data2 = array(
                'image'        => $image,
            );

            $record->update($data2);

        }

        Logs::add_log(Slider::getTableName(), $record->id, $data, 'add', '');
        return redirect()->route('sliders.index')->with('success','Record Added !');
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
        $record = Slider::whereId($id)->first();

        $logs = Logs::get_logs_details(Slider::getTableName(), $id);

        if($record != false){
            return view('sliders.edit', compact('record','logs'));
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
    public function update(UpdateSliderRequest $request, $id)
    {
        $slider = Slider::find($id);
        $slider->updated_at = now();

        $slider->update($request->all());

        if(isset($request['image'])){

            $image = Helper::upload_banner_image($request->file('image'));

            $data = array(
                'image'        => $image,
            );

            $slider->update($data);

        }

        Logs::add_log(Slider::getTableName(), $id, $request->all, 'edit', 1);
        return redirect()->route('sliders.index')->with('success','Record Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Record Deleted !');
    }
}
