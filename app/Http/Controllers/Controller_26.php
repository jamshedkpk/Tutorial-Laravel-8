<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_26 extends Controller
{
public function index()
{
return view('View_26');
}
public function create()
{
}
public function store(Request $request)
{
$name=$request->name;
$request->session()->flash('user',$name);
/*
we can also use flash session like
return back()->with('key','value');
*/
return redirect()->route('controller26.index');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}
}
