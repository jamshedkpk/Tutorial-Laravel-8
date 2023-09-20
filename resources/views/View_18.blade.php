@extends('Layout.Layout')
@section('Middleware')
<br>
<br>
<div class="container">
<h3 class="text-center">
Middleware In Laravel	
</h3>
<hr>
<p>
Middleware is a piece of code that can filter out user request. For e.g. sign in if a user is successfully sign in than he can visit our entire website else he would redirected to sign in page. Middleware just make a condition
in this case to access website if user is sign in. Similerly we say that if a user is uner 18 than he can visit our site else not in this Middleware create a restriction. Their are three types of a middleware (1) Global Middleware (2) Group Middleware (3) Routed Middleware
</p>
</div>		
@endsection