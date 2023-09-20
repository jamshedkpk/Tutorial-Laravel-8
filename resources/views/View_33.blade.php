@extends('Layout.Layout')
@section('One To One Relationship')
<br>
<center>
<h3>One To One Relationship In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<h2>Student:</h2>
@if($student)
{{$student}}
@endif
<hr>
<h2>Profile:</h2>
@if($profile)
{{$profile}}
@endif
</p>
<hr>
</div>	
</div>
</div>
@endsection
