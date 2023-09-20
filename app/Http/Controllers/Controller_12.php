<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class Controller_12 extends Controller
{
public function index()
{
return view('View_12');
}
public function create()
{
/*
DB is the name of class and select is its method
we can pass query to fetch record form database.
Crud operation by using raw sql query by using the following cammands...
DB::select('query'); To select a record from database
DB::insert('query'); To insert a record into database
DB::update('query'); To update a record into database
DB::delete('query'); To delete a record into database
*/
$query="select * from students";
$students=DB::select($query);
print_r($students);
}
public function store(Request $request)
{
$students=DB::insert("insert into students (student_name) values(:name)",['name'=>'Jamshed Khan']);
if($students)
{
echo('<h3><center>Record is successfully inserted</center></h3>');	
}
}
public function show($id)
{
}
public function edit($id)
{
}
public function update(Request $request, $id)
{
$update=DB::update("update students set student_name='Jamshed' where student_id=13");
if($update)
{
echo("<h3><center>Record is successfully updated</center></3>");	
}
}
public function destroy($id)
{
$delete=DB::delete("delete from students where student_id=13");
if($delete)
{
echo("<h3><center>Record is successfully deleted</center></3>");	
}
}
}

