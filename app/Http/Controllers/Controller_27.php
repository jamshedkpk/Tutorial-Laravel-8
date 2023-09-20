<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller_27 extends Controller
{
public function index()
{
return view('View_27');
}
public function create()  
{
}
public function store(Request $request)
{
if($request->hasFile('imagefile'))
{
// To store a simple file with its own name
    // $request->file('imagefile')->store('jamshed');
// To store a file by giving its a name
$request->file('imagefile')->storeAs('jamshed','jamshedkhan'.'.jpg');
}
else
{
echo('Please Upload A File');
}
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
