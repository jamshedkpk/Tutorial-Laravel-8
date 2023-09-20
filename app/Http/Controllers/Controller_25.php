<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class Controller_25 extends Controller
{
public function index()
{
$password="jamshed khan";
$encripted=Hash::make($password);
return view('View_25',compact('encripted'));
}
public function create()
{
}
public function store(Request $request)
{
$dbpassword="jamshed khan";
$encripted=hash::make($dbpassword);
$newpassword=$request->password;
if(hash::check($newpassword,$encripted))
{
return back()->with('status','Password is matched to the database');
}
else
{
return back()->with('failed','Access Denied! Password is not matching with database');
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
}
public function destroy($id)
{
}
}
