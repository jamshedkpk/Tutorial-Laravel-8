<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
/*
Eloquent ORM Model
A class of model which is used to create a table or a model. 
To create a simple model
php artisan make:model User
To create a model with factory
php artisan make:model User -f
To create a model with migration 
php artisan make:model User -m
To create a model with Controller
php artisan make:model User -C
To create a model with seeds
php artisan make:model User -s
To create a model with all
php artisan make:model User -a
It will create User model with factory, seeds, controller and migrations
To fetch all data from database
App\User::all();
or
$obj=User::all();
print_r($obj);
To fetch data by using primary key
App\User::find(2);
or
$obj=User::find(2);
To insert data
we create an object of User class
$user=new User();
To assign values
$user->user_name='jamshed';
$user->user_address='lakki';
$user->user_email='jamshedkpk@gmail.com';
To update a record 
first we create an object of that record
$user=App\User::find(2);
$user->user_name='kamran';
$user->save();
to save it in database 
$user->save();
To delete a record we use either delete or destroy
To delete a single record we use delete
$user=App\User::find(12);
$user->delete();
To delete multiple records
App\User::destroy([1,2,3,4]);
*/
class Controller_17 extends Controller
{
public function index()
{
return view('View_17');
}
public function create()
{
/*
We will search record by using ORM in laravel
*/
// Create an object of model class
$students=Student::all();
foreach($students as $std)
{
print_r($std->student_id."<br>");
print_r($std->student_name."<br>");
}
}
public function store(Request $request)
{
// Create an object of model class
$obj=new Student();
$obj->student_name="Kamran";
$save=$obj->save();
if($save)
{
echo("<center><h3>Record is successfully stored</h3></center>"); 
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
// First we will retreive the record which we want to update and store it in an object.
$obj=Student::find(18);
$obj->student_name="samreena bibi";
$update=$obj->save();
if($update)
{
 echo("<center><h3>Record is successfully updated</h3></center>"); 
}
}
public function destroy($id)
{
// First we will retreive the record which we want to delete and store it in an object.
$obj=Student::find(16);
$delete=$obj->delete();
if($delete)
{
 echo("<center><h3>Record is successfully deleted</h3></center>"); 
}

}
}
