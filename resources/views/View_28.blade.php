@extends('Layout.Layout')
@section('Pagination')
<br>
<center>
<h3>Pagination In Laravel</h3>
</center>
<hr>
<div class="container">
<div class="row">
<div class="col-md-6 offset-3">
<table class="table table-bordered table-hover table-striped">
<thead>
<tr>
<th>Student ID</th>
<th>Student Name</th>
</tr>
</thead>
<tbody>
@if($students)
@foreach($students as $std)
<tr>
<td>{{$std->student_id}}</td>
<td>{{$std->student_name}}</td>
</tr>
@endforeach
@endif
</tbody>
</table>
{{$students->links()}}
<style>
.w-5{
display:none;
}	
</style>
</div>	
</div>
</div>
@endsection