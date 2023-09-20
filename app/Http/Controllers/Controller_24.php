<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_24 extends Controller
{
public function index()
{
if(Session()->has('username'))
{
return view('View_24');
}
else
{
return redirect()->route('controller23.index');
}
}
public function create()
{
}
public function store(Request $request)
{
if(Session()->has('username'))
{
Session()->pull('username');
return redirect()->route('controller23.index');
}
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
