<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\contact;
use Illuminate\Support\Facades\DB;


class testController extends Controller
{
    //


    public function index()
    {
    	return view("index");
    }

    public function store(Request $request)
    {
    	$user = new contact;
    	$user->name = Input::get("name");
    	$user->email = Input::get("email");
    	$user->subject = Input::get("subject");
    	$user->message = Input::get("message");
    	$user->save();
    	return redirect('/show');
    }

    public function show()
    {
    	$user = DB::table('contacts')->get();
    	return view('show',['user' => $user]);
    }

     public function delete($id)
    {
    	$user = DB::table('contacts')->where ('id', $id)->delete();
    	return redirect('/show');
    }

      public function edit($id)
    {
    	$user = contact::find($id);
    	return view("edit",compact('user'));
    	
    }
    public function update(Request $request,$id)
    {

    	$user = contact::find($id);
    	$user->name = $request-> Input("name");
    	$user->email = $request-> Input("email");
    	$user->subject = $request-> Input("subject");
    	$user->message = $request-> Input("message");
    	$user->update();
    	return redirect('/show');
    }
}
