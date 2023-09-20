@extends('Layout.Layout')
@section('View')
<br>
<center>
<h3>View In Laravel</h3>
</center>
<div class="container" style="padding:20px;">
<hr>
<h3 class="text-danger">Welcome To Mr : {{$user}}</h3>
<p>
View is also called presentation layer. It is the HTML part of our web project. It is used for user interface. It is directly linked to controller. It receive data from user and send this data to controller. It can be called from Route directly
</p>
@endsection