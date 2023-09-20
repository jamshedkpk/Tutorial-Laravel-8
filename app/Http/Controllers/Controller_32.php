<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class Controller_32 extends Controller
{
public function index()
{
//$students=Student::all();
//return view('View_32',['students'=>$students]);
$obj=new Student;
$obj->student_name='Jamshed Khan';
$obj->save();
}
}
