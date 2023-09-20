<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;

class Controller_34 extends Controller
{
public function index()
{
$department=Department::find(5);
$students=Department::find(5)->getstudents;
return view('View_34',['department'=>$department,'students'=>$students]);
}
public function create()
{
}
public function store(Request $request)
{
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
