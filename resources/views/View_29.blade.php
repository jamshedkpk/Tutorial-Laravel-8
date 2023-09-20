@extends('Layout.Layout')
@section('Signin')
<br>
<center>
<h3>Signin And Signout In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-6 offset-3">
<form method="post" action="{{route('signin')}}">
@csrf
@method('POST')
<label>Email :</label>
<input type="text" name="email" class="form-control" />
<br>
<label>Password :</label>
<input type="text" name="password" class="form-control" />
<br>
<button class="btn btn-success btn-block">Signin</button>
</form>
</div>	
</div>
</div>
@endsection
