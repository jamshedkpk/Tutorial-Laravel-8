@extends('Layout.Layout')
@section('Controller')
<br>
<center>
<h3>Controller In Laravel</h3>
</center>
<div class="container" style="padding:20px;">
<hr>
<p>
Controller is one of the most important and central unit of any MVC framework. It is used as a bridge between View and Model. It controlls all the logic of our project. It sends data from View to Model and also fetch data from Model To View.
All Routers are directly connected to our Controller.
<br>
We can create a controller by two ways.
<br>
(1)- Using command line like php artisan make:controller nameofcontroller
<br>
(2)- Writting manually inside app\http\controllers...
</p>
@endsection