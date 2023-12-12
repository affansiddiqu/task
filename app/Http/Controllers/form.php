<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form2;
use App\Models\data;

class form extends Controller
{
    public function form(){
        return view('view');
    }

    public function reg(Request $request){
       print_r($request->all());
       $request->validate([
        'name' =>'required',
        'email' =>'required',
        'password' =>'required'
       ]);

       $students = new form2 ();
       $students-> name = $request['name'];
       $students-> email = $request['email'];
       $students-> password = $request['password'];
       $students->save();
       return redirect('view');
    }
    public function view(){
        $stddata= form2::all();
        $data = compact('stddata');
        return view('view')->with($data);
    }

    public function delete($id){
        $delete = form2::find($id)->delete();
        return redirect('view');
    }

    public function home(){
        return view ('home');
    }

}
