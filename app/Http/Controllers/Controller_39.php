<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;

class Controller_39 extends Controller
{
public function index()
{
$departments=Department::all();
return view('View_39',['departments'=>$departments]);
}


public function create()
{
$departments=Department::all();
return response()->json(['data'=>$departments]);	
}
public function store(Request $request)
{
$name=$request->name;
$obj=new Department;
$obj->department_name=$name;
$obj->save();
return response()->json(200);	
}
public function show($id)
{
}
public function edit($id)
{
$dept=Department::find($id);
return response()->json(['data'=>$dept]);
}
public function update(Request $request, $id)
{
$obj=Department::find($id);
$obj->department_name=$request->name;
$result=$obj->save();
if($result)
{
return response()->json(200);
}
}

public function destroy($id)
{
$department=Department::find($id);
$delete=$department->delete();
if($delete)
{
return response()->json(200);	
}
}
}
