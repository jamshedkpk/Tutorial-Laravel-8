<style>
.row
{
border:1px solid grey;
text-align: justify;	
}
img
{
margin-top:20px;
padding: 20px;
border:1px solid grey;
border-radius:10px;
}	
</style>
@extends('Layout.Layout')
@section('MVC')
<br>
<div class="container">
<center>
<h3>Introduction To MVC</h3>
</center>
<hr>
<div class="row">
<div class="col-md-8">
<p>
Software: Software are used to manage data in other words we can say that it is used to Store, Search, Update, and Delete data in computer.
Generally whenever we want to make a project or a software whether it is a web project, or Mobile App or my be a Desktop Application it Has 2 parts.
<br>
(1)-Front End
<br>
(2)-Back End
<br>
Front End is used for user interaction it takes data from user apply all logical operations and then send to database for permanently storage. Basically this part can be further divided into three parts.
Backend is a data which is stored permanently in computer
</p>
</div>		
<div class="col-md-4">
<img class="image-fluid" src="{{asset('Public/Assets/Images/Image-1.jpg')}}">
</div>		
</div>

<div class="row">
<div class="col-md-8">
<p>
(a)-Presentation Layer
This layer is used for user interaction. Each user is directly linked to Presentation Layer.
This layer includes user interface components and UI controls as well as presentation logic components that process and manage the user interaction.	
</p>
</div>
<div class="col-md-4">
<img src="{{asset('Public/Assets/Images/Image-2.png')}}" class="img-fluid">		
</div>
</div>

<div class="row">
<div class="col-md-8">
<p>
(b)- Business Logic Layer
This layer is a bridge between Presentation Layer and Database Layer. It sends data from Presentation Layer to Database Layer and aslo fetch data from Database Layer To Presentation Layer. This layer apply all logic which is required by any project
</p>
</div>
<div class="col-md-4">
<img src="{{asset('Public/Assets/Images/Image-2.png')}}" class="img-fluid">		
</div>
</div>

<div class="row">
<div class="col-md-8">
<p>
(c)- Database Layer
This layer is responsable to store data in database permanently. It is linked to Business Logic Layer.
</p></div>
<div class="col-md-4">
<img src="{{asset('Public/Assets/Images/Image-2.png')}}" class="img-fluid">		
</div>
</div>
<div class="row">
<div class="col-md-8">
<p>
MVC: MVC stands for Model, View and Controller. MVC is one of the most imporat programming pattern now a days. It uses a frameworks like Laravel, Codignator, Cakephp etc.... View is used as a presentation Layer, Controller is used as a Business Logic Layer and Model is used as a Database Layer. 	
</p></div>
<div class="col-md-4">
<img src="{{asset('Public/Assets/Images/Image-3.png')}}" class="img-fluid">	
</div>
</div>
</div>
@endsection