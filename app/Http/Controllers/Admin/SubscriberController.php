<?php

namespace App\Http\Controllers\Admin;

use App\Models\Logs;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:subscriber-list|subscriber-create|subscriber-edit|subscriber-delete', ['only' => ['index','subscriber']]);
        $this->middleware('permission:subscriber-create', ['only' => ['create','subscriber']]);
        $this->middleware('permission:subscriber-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:subscriber-delete', ['only' => ['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');

        if (!empty($search)) {
            $record = Subscriber::where('subscribers.email', 'like', '%'.$search.'%')
                ->orderBy('subscribers.id','DESC')
                ->paginate(5);
            return view('subscribers.index', compact('record') );
        }else{

            $record = Subscriber::orderBy('subscribers.id', 'DESC')->paginate(10);

            if ($record != false) {
                return view('subscribers.index', compact('record'));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Subscriber::whereId($id)->first();

        if($record != false){
            return view('subscribers.show', compact('record'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function multi_delete(Request $request)
    {
        $ids = $request->ids;
        foreach ($ids as $id) {
            Subscriber::findOrFail($id)->delete();
        }
        return redirect()->route('subscribers.index')->with('success', 'Record Delete!');
    }
}
