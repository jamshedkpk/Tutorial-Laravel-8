<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Profile;

class Controller_33 extends Controller
{
public function index()
{
$student=Student::find(4);
$profile=Student::find(4)->getprofile;
return view('View_33',['student'=>$student,'profile'=>$profile]);
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
