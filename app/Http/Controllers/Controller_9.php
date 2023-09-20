<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_9 extends Controller
{
public function index()
{
return view('View_9');
}

public function create()
{
return view('View_9');
}
public function store(Request $request)
{
echo("<center>
<h2>
Your Form Is Successfully Submitted	
</h2>
</center>
");
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
