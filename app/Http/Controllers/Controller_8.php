<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_8 extends Controller
{
// This function is used to display a page
public function index()
{
return view('View_8');
}
// This function is used to make a request page for e.g. to show input form page for data
public function create()
{
return view('View_9');
}
// This function is used to submit your form or store your data in database
public function store(Request $request)
{
}
// This function is used to show a particuler record
public function show($id)
{
}
// This function is used to show and edit a particuler record
public function edit($id)
{
}
// This function is used to update a record
public function update(Request $request, $id)
{
}
// This function is used to delete a record
public function destroy($id)
{
}
}
