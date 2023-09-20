@extends('Layout.Layout')
@section('Flash Session')
<br>
<center>
<h3>Flash Session In Laravel</h3>
<p>
Flash session is used to store data for only once show after showing data it is automatically expire. It is used for showing message on the same view
</p>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-6 offset-3">
<p class="text-success">
@if(session('user'))
{{session('user')}} Has Been Added To The Database
@endif	
</p>
<form method="post" action="{{route('controller26.store')}}">
@csrf
<input type="text" name="name" class="form-control">
<br>
<input type="text" name="email" class="form-control"/>
<br>
<input type="text" name="password" class="form-control"/>
<br>
<button class="btn btn-success btn-block">Submit</button>
</form>	
</div>	
</div>
</div>
@endsection