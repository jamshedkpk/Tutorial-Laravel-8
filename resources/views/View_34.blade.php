@extends('Layout.Layout')
@section('One To Many Relationship')
<br>
<center>
<h3>One To Many Relationship In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<h2>Department:</h2>
@if($department)
{{$department}}
@endif
<hr>
<h2>Students:</h2>
@if($students)
{{$students}}
@endif
</p>
<hr>
</div>	
</div>
</div>
@endsection
