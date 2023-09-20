@extends('Layout.Layout')
@section('BladeTemplate')
<br>
<center>
<h3>Blade Template In Laravel</h3>
</center>
<div class="container" style="padding:20px;">
<hr>
<p>
It is a template engine of laravel that convert plain text to php code.
Laravel provide a special syntax called blade template for MVC pattern for web designing. It is a syntax which is used to convert plane text to php code. 
{{--
for simple echo we use {{type some text here}}
for if statement 
@if (condition){{statement}}
@endif
for if else statement
@if (condition)
{{statement}}
@else
{{statement}}
@endif
for if else if statement 
@if (condition){{statement}}
@elseif {{statement}}
@elseif {{statement}}
@endif
for for loop
@for($i=0; $i<=10; $i++)
{{statement}}
@endif
for foreach loop
@foreach($users as $user)
{{statement}}
@endforeach
for writting php code 
@php
@endphp
for section
@section
@endsection
for csrf toker
@csrf
for method
@method('PUT')
for including other page
@include('path is written here')
--}}
</p>
@endsection
<script type="text/javascript">
console.warn('ok');
</script>