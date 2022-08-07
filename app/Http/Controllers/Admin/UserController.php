<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index(){
        $users=new User();
        $data['users']=$users->where('users.is_deleted',0)->join('tbl_roles','users.role_as','=','tbl_roles.role_id')->paginate(12);
        return view('admin.users.index',compact('data'));
    }
    public function add(){
        $data['role']= Role::all();
        $data['formtype']="add";
        return view('admin.users.add',compact('data'));
    }
    public function insert(Request $request){
        $user=new User();

        $user->firstname=$request->input('firstname');
        $user->surname=$request->input('lastname');
        $user->email=$request->input('email');
        $user->role_as=$request->input('role');
        $user->password=Hash::make($request->password);

        $user->save();
        return redirect('users')->with('status','User Added Successfully.');
    }
    public function edit($id){
        $data['formtype']="edit";
        $data['role']= Role::all();
        $data['user']=User::find($id);

        return view('admin.users.add',compact('data'));
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $user->firstname=$request->input('firstname');
        $user->surname=$request->input('lastname');
        $user->email=$request->input('email');
        $user->role_as=$request->input('role');

        $user->update();
        return redirect('users')->with('status','User Updated Successfully.');
    }
    public function delete(Request $request,$id){
        $user=User::find($id);
        $user->delete();
        return redirect('users')->with('status','User Deleted Successfully.');
    }
    
}
