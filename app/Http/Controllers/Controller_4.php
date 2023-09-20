<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_4 extends Controller
{
public function index()
{
$user="Jamshed Khan";
return view('View_4',compact('user'));	
/*
We can also pass values in the form of Assosiative array like
$user=['user'=>'Jamshed','email'=>'Jamshedkpk@gmail.com','address'=>'Lakki Marwat'];
*/
}
}
