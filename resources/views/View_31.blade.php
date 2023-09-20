@extends('Layout.Layout')
@section('Accessors')
<br>
<center>
<h3>Accessors In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<p>Accessors:
Accessors are used to modify data before displaying it for user in laravel. It does not change data in database. For e.g. to show name of students with capitalize case we can use accessors.
</p>
<hr>
@if($students)
@foreach ($students as $std)
{{$std['student_name']}}
<br>
@endforeach
@endif
</div>	
</div>
</div>
@endsection
