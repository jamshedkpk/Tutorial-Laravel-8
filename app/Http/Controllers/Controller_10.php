<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_10 extends Controller
{
public function index()
{
return view('View_10');
}
public function create()
{
}
public function store(Request $request)
{
/*
Below are the most important methods of request which is submitted by the user.....
To show all data which is submitted in request
$data=$request->all();
To show route name
$data=$request->path();
To show full url
$data=$request->url();
To show url with query string
$data=$request->fullUrl();
To show only query string in url
$data=$request->string('nameofquerystring');
To show only field value
$data=$request->input('fieldname');
or
$data=$request->fieldname;
To show only values
$data=$request->only(['fieldname','fieldname']);
To show values except
$data=$request->except(['fieldname','fieldname']);
To show a field exist or not
$data=$request->has('fieldname');
To show value in a field exist or not
$data=$request->filled('fieldname');
To put old value in the field it is used in valition purposes when some values are not valid that it remain in the field
$data->request->flash();
and put old('fieldname') in input field value...
like this <input type="text" name="name" value="<?php echo old('name');?>">
*/
$data=$request->all();
return view('View_10',compact('data'));
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
