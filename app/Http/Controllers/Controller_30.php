<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_30 extends Controller
{

public function index()
{
return view('View_30');
}

public function signout(Request $request)
{
if(Session()->has('user'))
$request->Session()->put('user');
return redirect('controller29');
}
}
