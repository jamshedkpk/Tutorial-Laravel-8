@extends('Layout.Layout')
@section('Start A Session')
<form method="post" action="{{route('controller23.store')}}">
@csrf
<br>
<center>
<h3>
Start A Session
</h3>
</center>
<div class="container" style="padding:20px;">
<hr>
<h3 class="text-center">Please Signin</h3>
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
</form>
@endsection