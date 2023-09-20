<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;

class Controller_38 extends Controller
{
public function index()
{
return view('View_38');
}
public function create()
{
$data=Department::all();
return $data;
}
public function store(Request $request)
{
echo($request);
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
