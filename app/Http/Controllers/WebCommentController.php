<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class WebCommentController extends Controller
{
    public function store_comments(Request $request)
    {

        $details = $request->validate([
            'name'   => 'required',
            'email' => 'required|email',
            'description'   => 'required',
        ]);

        $comment = Comment::create($request->all());
        return redirect()->back()->with('success','We have received your comment, Thank you !');
    }
}
