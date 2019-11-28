<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\vis;
class Aboutuscontroller extends Controller
{
    public function index(){
        return view('admin.aboutus');
    }
    public function store(Request $request){
        

         $vis=new vis;



         $vis->title= $request->input('title');
         $vis->subtitle= $request->input('subtitle');
         $vis->descrption=$request->input('description');
         
         $vis->save();
         $allcars=vis::all();
         return redirect('/aboutus')->with('vis',$vis);
    }
}
