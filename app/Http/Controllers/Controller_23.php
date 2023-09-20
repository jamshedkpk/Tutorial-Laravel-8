<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_23 extends Controller
{
public function index()
{
if(Session()->has('username'))
{
return redirect()->route('controller24.index');    
}
else
{
return view('View_23');
}
}
public function create()
{
}
public function store(Request $request)
{
$data=$request->input();
$name=$data['name'];
$password=$data['password'];
$request->Session()->put('username',$name);
return redirect()->route('controller24.index');
}
public function show($id)
{
}
public function edit($id)
{
}
public function update(Request $request, $id)
{
}
public function destroy($id)
{
}
}
