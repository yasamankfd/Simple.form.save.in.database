<?php

namespace app\Http\Controllers\Controller;

use app\Http\Controllers;
use Illuminate\Http\Request;

class MyUsersController extends Controller
{
    //
    public function addingUser(Request  $request){

}
public function index(){
    return view('form');
}
}
