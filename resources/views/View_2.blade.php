@extends('Layout.Layout')
@section('Routing')
<br>
<center>
<h3>Routing In Laravel</h3>
</center>
<div class="container" style="padding:20px;">
<hr>
<p>
Basically routing means mapping our laravel pages through a specific URl. In routing we tell the laravel framework, to open which page on which URL. In order to define a route we use a class called Route and its specific method like get, post, resource, view etc to open each type of a route.Each route has 2 parts one is URL and second one is page

</p>
<br>
{{--  
(1) Simple Routes : 
use App\Http\Controllers\AdminController;
Route::get('/Admin', [AdminController::class, 'index'])->name('Admin');
<br>
(2) Required Parameters :
use App\Http\Controllers\AdminController;
Route::get('/Admin/{Name}', [AdminController::class, 'index'])->name('Admin');
<br>
(3) Optional Parameters : 
use App\Http\Controllers\AdminController;
Route::get('/Admin/{Name ?}', [AdminController::class, 'index'])->name('Admin');
<br>
Route::view('View_1')
<br>
How call these routes
<br>
Simply write {{route('Admin')}} Because we have given the name as admin or type Admin in your url
</div>
--}}
@endsection