<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class WebBlogPagesController extends Controller
{
    public function page_detail($slug){

        $record = Page::where('slug', $slug)
                    ->where('type', 0)
                    ->with('meta:page_id,meta_keywords,meta_description')
                    ->first();

        if($record != false){
            return view('blog_page_details', compact('record'));
        }else{
            abort(404);
        }

    }
}
