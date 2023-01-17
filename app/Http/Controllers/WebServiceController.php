<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\CoreService;
use Illuminate\Http\Request;

class WebServiceController extends Controller
{
    // Render services view
    public function index() {
        $records = CoreService::where('status',1)
            ->select('id','title','short_description','image')
            ->get();
            
        return view('services', compact('records'));
    }

    public function service_detail($slug){

        $record = Service::where('slug', $slug)
            ->with('meta:service_id,meta_keywords,meta_description')
            ->first();

        if($record != false){
            return view('service_details', compact('record'));
        }else{
            abort(404);
        }

    }

}
