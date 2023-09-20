@extends('Layout.Layout')
@section('Request Properties')
<form method="post" action="{{route('controller10.store')}}">
@csrf
<br>
<center>
<h3>Request Properties In Laravel</h3>
</center>
<div class="container" style="padding:20px;">
<hr>
<div class="row">
<div class="col-md-6 offset-3">
<div class="form-group">
<label>Name :</label>
<input type="text" name="name" class="form-control" />
</div>
<label>Password :</label>
<input type="password" name="password" class="form-control" />
<br>
<button class="btn btn-success btn-block">Submit
</button>
</div>
</div>
<br>
<?php
if(isset($data))
print_r($data);
?>
</form>
<br>
Note: Whenever we want to fetch some data or store some data then it is called a Http request. It has different methods Post is used to store some data, Get is used to fetch some Data, Put is used to update some data and delete is used for deleting some data.
@endsection