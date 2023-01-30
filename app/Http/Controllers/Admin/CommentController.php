<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\Models\Logs;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {

            if( $search == "active"){
                $record = Comment::where('comments.status', 1);
            }elseif($search == "inactive"){
                $record = Comment::where('comments.status', 0);
            }else{
                $record = Comment::where('comments.name', 'like', '%'.$search.'%')
                    ->orWhere('comments.email', 'like', '%'.$search.'%')
                    ->orWhere('comments.description', 'like', '%'.$search.'%');
            }

                $record = $record->orderBy('comments.id','DESC')
                    ->paginate(15);
                return view('comments.index', compact('record') );
        }else{

            $record = Comment::orderBy('comments.id','DESC')->paginate(15);

            if($record != false){
                return view('comments.index', compact('record') );
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        //$comment = Comment::create($request->all());
        //return redirect()->back()->with('success','We have received your comment, Thank you !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $record = Comment::where('comments.id', $comment->id)
                    ->with('blog:id,name')
                    ->first();

        if($record != false){
            $logs = Logs::get_logs_details(Comment::getTableName(), $comment->id);
            return view('comments.edit', compact('record', 'logs'));
        }else{
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function old_comment(Request $request, $id){

        $commentData = Comment::where('id', $id)->first();

        $status = $request->status == "on" ? 1 : 0 ;
        $request['status'] = $status ;

        $commentData->update($request->only('status'));
        Logs::add_log(Comment::getTableName(), $id, $request->all(), 'edit', 1);

        return redirect()->route('comments.index')->with('success','Comment Record Updated !');
    }

    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
    public function multi_delete(Request $request){
        $ids = $request->ids;
        foreach ($ids as $id) {
            Comment::findOrFail($id)->delete();
        }
        return redirect()->route('comments.index')->with('success', 'Record Delete!');
    }

}
