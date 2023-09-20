@extends('Layout.Layout')
@section('Terminate A Session')
<form method="post" action="{{route('controller24.store')}}">
@csrf
<h3 class="text-center">
Terminate A Session	
</h3>
<hr>
<p class="text-success text-bw text-center">
Welcome To MR. {{Session('username')}} Here Is Your Homepage To Signout Please Click The Button
<br>
<br>
<button class="btn btn-danger">
Signout
</button>
</p>
</form>
@endsection