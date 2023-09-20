<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
/*
CRUD operation by using query builder in laravel
In order to save data in database we can simply use a command promit called Tinker CLI
In order to run a Tinker CLI follwing command is used
PHP artisan tinker
when we run this query then we can use query builder to search, insert, update and delete data
// To select whole data in a table
//$data=DB::table('table_user')->get();
// To select a record by using where clause
//$data=DB::table('table_user')->where('user_id','=',8)->get();
// To select a single column in a record
//$data=DB::table('table_user')->pluck('user_name');
// To select a single column in a single record 
//$data=DB::table('table_user')->where('user_id',7)->value('user_name');
//$data=DB::table('table_user')->select('user_name','user_email')->get();
// To check no of records in a table
// To use aggrigate functions like count,max,min
// sum and avg
//$data=DB::table('table_user')->count();
// To use sum method for sum a column values
//$data=DB::table('table_user')->sum('user_marks');
// To use avg method for average a column values
//$data=DB::table('table_user')->avg('user_marks');
// To use max method for finding maximum value
//$data=DB::table('table_user')->max('user_marks');
// To use min method for finding minimum value
//$data=DB::table('table_user')->min('user_marks');
// To check if record exist or not
//$data=DB::table('table_user')->where('user_id','=',20)->exist();
// To check if record does not exist
//$data= DB::table('table_user')->where('user_id','=',20)->doesntExist();
 // To select distinct record
$data=DB::table('table_user')->select('user_name')->distinct()->get();
// To use union join
//$data=DB::table('table_user')->join('table_profile','table_user.user_id','=','table_profile.user_id')->get();
// To use simple where clause
//$data=DB::table('table_user')->where('user_id','=',20)->get();
// To use multiple conditions using where clause
//$data=DB::table('table_user')->where(['user_name'=>'samreena'],['user_email'=>'samreenakpk@gmail.com'])->get();
// To use order escending or desending
//$data=DB::table('table_user')->order('user_id','asc')->get();
//$data=DB::table('table_user')->orderby('user_id','desc')->get();
// To use limit
//$data=DB::table('table_user')->limit(2)->get();
// To use random no
//$data=DB::table('table_user')->inRandomorder()->get();
// To use limit and offset
//$data=DB::table('table_user')->offset(2)->limit(2)->get();
// To insert a new record
//DB::table('table_user')->insert(['user_name'=>'Fathma','user_email'=>'Fathmakpk@gmail.com','user_marks'=>500]);
// To update a record
//$data=DB::table('table_user')->where('user_id',22)->update(['user_name'=>'Kamran']);
// To delete a record
//DB::table('table_user')->where('user_id',23)->delete();
*/

class Controller_13 extends Controller
{
public function index()
{
return view('View_13');
}
public function create()
{
$students=DB::table('students')->get();
print_r($students);
}
public function store(Request $request)
{
$save=DB::table('students')->insert(['student_name'=>'Hameed Khan']);
if($save)
{
echo("<h3><center>Record is successfully stored</center></h3>");    
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
$update=DB::table('students')->where(['student_id'=>14])->update(['student_name'=>'Naila Bibi']);
if($update)
{
echo("<h3><center>Record is successfully updated</center></h3>");    
}

}
public function destroy($id)
{
$delete=DB::table('students')->where(['student_id'=>12])->delete();
if($delete)
{
echo("<h3><center>Record is successfully deleted</center></h3>");        
}
}
}
