<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function upload(Request $request) {
        $file = $request->file('file');
        $fileName = time() . $file->getClientOriginalName();
        $destinationPath = public_path().'/images' ;
        $file->move($destinationPath, $fileName);
        $imgpath = url('images/' . $fileName);
        return response()->json(['location'=> "$imgpath"]);
    }
}
