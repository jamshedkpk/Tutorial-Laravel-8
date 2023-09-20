<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class Form_Validation extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return 
[
/*
bail:To stop validation rules ofter this rule
'tas'=>'accepted',  // To accept terms and conditions
'startdate'=>'required|date',  // To accept date
'enddate'=>'required|date|after:startdate', // To accept only date and this date must be after start date.
'username'=>'bail|required|alpha|between:3,6',
// between:3,6 means that the name should be between 3 and 6 characters in case of files it means that the size of file must be between 3Kb to 6Kb
'password'=>'required|confirmed|min:8',
// To check password confirm
'password_confirmation'=>'required|min:8',
'nic'=>'required|regex:/^[0-9]{5}[-][0-9]{7}[-][0-9]$/i',
'url'=>'required|url',
'imagefile' => 'bail|required|image',
// if you want to give extension then write in this way 'bail|image|mimes:jpeg,jpg,ico,png,gif'
'name'=>'required|max:5',
*/
'name'=>'required|bail|regex:/^[a-zA-Z ]+$/i',
'email'=>'required|bail|email',
'password'=>'required|bail|min:4|confirmed',
'password_confirmation'=>'required|bail|min:4',
'zipcode'=>'required|bail|regex:/^[0-9]{6}$/',
'mobileno'=>'required|bail|regex:/^[0][0-9]{10}$/',
'nicno'=>'required|bail|regex:/^[0-9]{5}[-][0-9]{7}[-][0-9]$/',
'url'=>'nullable|url',
'startdate'=>'required|date',
'enddate'=>'required|date|after:startdate',
'profileimagefile'=>'required|bail|file|mimes:jpg,png,gif,ico,jpeg',
'profilecvfile'=>'required|bail|file|mimes:docx,doc,xlsx,txt',
'tor'=>'required|bail|accepted',
];
}
public function attributes()
{
return
[
'name'=>'Name',
'email'=>'Email',
'password'=>'Password',
'password_confirmation'=>'Confirm',
'zipcode'=>'Zip Code',
'mobileno'=>'Mobile No',
'nicno'=>'Nic No',
'url'=>'URL',
'startdate'=>'Start Date',
'enddate'=>'End Date',
'profileimagefile'=>'Image',
'profilecvfile'=>'CV File',
'tor'=>'Term Of Services',
];    
}
}
