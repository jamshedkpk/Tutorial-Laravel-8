@extends('Layout.Layout')
@section('Signout')
<br>
<center>
<h3>Signout In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">

@if(session('user'))
<h2 class="text-success text-center">
Welcome To Mr. 	{{session('user')}}
Here Is Your Profile Page
<hr>
<form method="post" action="{{route('signout')}}">
@csrf
<button class="btn btn-danger btn-block">Signout</button>
</form>
</h2>

@endif

</div>	
</div>
</div>
@endsection
