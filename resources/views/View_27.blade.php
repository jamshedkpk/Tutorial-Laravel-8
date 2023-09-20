@extends('Layout.Layout')
@section('File Upload')
<br>
<center>
<h3>File Upload In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-6 offset-3">
<p class="text-success">
@if(session('upload'))
{{session('upload')}} File Has Been Uploaded
@endif	
</p>
<form method="post" enctype="multipart/form-data" action="{{route('controller27.store')}}">
@csrf
<input type="file" name="imagefile" class="form-control">
<br>
<button class="btn btn-success btn-block">Submit</button>
</form>	
</div>	
</div>
</div>
@endsection