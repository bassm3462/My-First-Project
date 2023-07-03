<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userControler extends Controller
{
public function register(){
    return view('user.register');
}
public function insert(Request $request){
// return view("user.insert");
// return $request;
$create=date('y-m-w');
$update=date('y-m-w');

$insert=DB::table('flights')->insert([
'name'=>$request->name ,
'email'=>$request->email,
'password'=>$request->pass,
'conform_password'=>$request->cpass,
'select'=>$request->select,
// 'created_at'=$creat
]);
return response('insert successful');
}
public function display(){
    $display=DB::table('flights')->get();
    return view('user.index',compact('display'));
}
}

