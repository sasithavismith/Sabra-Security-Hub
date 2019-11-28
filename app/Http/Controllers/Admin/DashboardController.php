<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
    public function registered(){
      
        $users=User::all();


        return view('admin.register')->with('users',$users);
    }
    public function registerededit(Request $request,$id){
        $users=User::findOrfail($id);
        return view('admin.register-edit')->with('users',$users);

    }
    public function registeredupdate(Request $request,$id){
$users= User::find($id);
$users->name= $request->input('username');
$users->usertype= $request->input('usertype');
$users->update();
 return redirect('/role-register')->with('status','You are data is update');
    }
    public function registereddelete($id){
        $users =User::findOrfail($id);
$users->delete();
return redirect('/role-register')->with('status','You are data is deleted');
   
    }
}
