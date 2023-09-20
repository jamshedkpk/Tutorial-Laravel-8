<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;

class Controller_35 extends Controller
{
public function index()
{
$student=Student::find(5);
$subjects=Student::find(5)->getsubjects;
return view('View_35',['student'=>$student,'subjects'=>$subjects]);
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
