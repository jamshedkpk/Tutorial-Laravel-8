@extends('Layout.Layout')
@section('Many To Many Relationship')
<br>
<center>
<h3>Many To Many Relationship In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<hr>
<h2>Students:</h2>
@if($student)
{{$student['student_name']}}
@endif
<hr>
<h2>Students and their Subject</h2>
@if($subjects)
@foreach($subjects as $sub)
{{$sub['subject_name']}}
{{'-'}}
@endforeach
@endif
<hr>
</div>	
</div>
</div>
@endsection
