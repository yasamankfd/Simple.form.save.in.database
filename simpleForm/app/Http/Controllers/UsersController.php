<?php

namespace App\Http\Controllers;
use App\Models\myUsers;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        return view('add.index');
    }
    public function addingUser(Request  $request){

        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'pass' => 'required',
        ]);
        var_dump($data);
        $new_user = myUsers::create($data);
        return redirect(route('add.index'));
    }
    public function show(){
        return view('add.form');
    }
}
