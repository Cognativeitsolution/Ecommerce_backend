<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Redirect to index page
//    protected function index() {
//        $data['slider_items'] = Slider::get();
//        return view('index')->with($data);
//    }

    public function page_detail($slug){

        $record = Page::where('slug', $slug)
                    ->with('meta:page_id,meta_keywords,meta_description')
                    ->first();

        if($record != false){
            return view('page_details', compact('record'));
        }else{
            abort(404);
        }

    }
}