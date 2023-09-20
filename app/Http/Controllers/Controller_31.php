<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class Controller_31 extends Controller
{
public function index()
{
$students=Student::all();
return view('View_31',compact('students'));	
}
}
