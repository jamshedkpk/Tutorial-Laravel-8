@extends('Layout.Layout')
@section('Password Hash')
<div class="container">
<div class="row">
<div class="col-md-8 offset-2">
<h3 class="text-center">Password Hash Technique</h3>	
<hr>
<p class="text-center">
Password is stored in database in encrypted form. Encrypted form means sequire form. It is converted into other text which is not understandable. 
</p>
<hr>
Password = jamshed khan
<br>
Encripted Form = {{$encripted}}
<form method="post" action="{{route('controller25.store')}}">
@csrf	
<div class="input-group">
<input type="text" name="password" class="form-control" placeholder="Enter Above Password To Match With Database Password">
<button class="btn btn-success">Submit</button>
</div>
</form>
@if(session('status'))
<h3 class="text-success">
{{session('status')}}
</h3>
@endif
@if(session('failed'))
<h3 class="text-danger">
{{session('failed')}}
</h3>
@endif
</div>	
</div>
<hr>

</div>
@endsection