<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_29 extends Controller
{

public function index()
{
return view('View_29');
}

public function signin(Request $request)
{
$request->Session()->put('user','jamshed');
return redirect('controller30');
}
}
