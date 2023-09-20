<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Http;
class Controller_22 extends Controller
{
public function index()
{
$posts= http::get('https://jsonplaceholder.typicode.com/posts');
return view('View_22',compact('posts'));
}
}
