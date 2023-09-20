<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Form_Validation;

class Controller_11 extends Controller
{
public function index()
{
return view('view_11');
}
public function create()
{
}
public function store(Form_Validation $request)
{
echo('ok');
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
