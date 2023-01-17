<?php

namespace App\Http\Controllers\Admin;

use App\Models\Logs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminRequest;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);

    }

    public function index() {
        $search = request('search');

        if (!empty($search)) {
            $admins = User::where('users.is_admin', 1)
                ->where('users.name', 'like', '%'.$search.'%')
                ->orWhere('users.email', 'like', '%'.$search.'%')
                ->orderBy('users.id','DESC')
                ->paginate(10);
        } else {
            $admins = User::where('users.is_admin', 1)->orderBy('users.id','DESC')->paginate(15);
        }

        return view('admins.index', compact('admins') );
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admins.add', compact('roles'));
    }

    public function store(StoreAdminRequest $request)
    {

        $data = [
            'name'  => $request->name,
            'email'  => $request->email,
            'password' => Hash::make($request->password),
        ];

        $record = User::create( $data );
        $record->assignRole($request->roles); // Add new line for Role

        Logs::add_log(User::getTableName(), $record->id, $data, 'add', '');

        return redirect()->route('admins.index')->with('success','Record Added !');
    }

    public function edit($id)
    {
        $record = User::whereId($id)->where('users.is_admin', 1)->first();

        $logs = Logs::get_logs_details(User::getTableName(), $id);

        $roles = Role::pluck('name','name')->all();

        $userRole = $record->roles->pluck('name','name')->all();

        if($record != false){
            return view('admins.edit', compact('record','logs', 'roles', 'userRole'));
        }else{
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($id),
            ],
        ]);

        $user = User::find($id);
        $input = $request->all();

        if($request->password == null || $request->password == NULL || $request->password == ''){
            $input = $request->except(['password']);
        }else{
            $input['password'] = Hash::make($input['password']);
        }

        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$id)->delete(); // check this working or not 
        $user->assignRole($request->input('roles')); // if $request->roles ; for input //

        Logs::add_log(User::getTableName(), $id, $input, 'edit', 1);
        return redirect()->route('admins.index')->with('success','Record Updated !');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
 
        return redirect()->route('admins.index')->with('success', 'Record Deleted !');
    }
}
