@extends('Layout.Layout')
@section('CRUD Operation Using Query Builder')
<br>
<br>
<div class="container">
<h3 class="text-center">CRUD Operation Using Query Builder</h3>
<hr>
<div class="row">
<div class="col-md-3">

<a href="{{route('controller13.create')}}" class="btn btn-info btn-block">Search Record</a>	

</div>		
<div class="col-md-3">
<form action="{{route('controller13.store')}}" method="post">
@csrf
<button class="btn btn-success btn-block">Add Record</button>	
</form>
</div>		
<div class="col-md-3">
<form method="post" action="{{route('controller13.update',13)}}">
@METHOD('PUT')
@csrf
<button class="btn btn-warning btn-block">Update Record</button>	
</form>
</div>		
<div class="col-md-3">
<form method="post" action="{{route('controller13.destroy',13)}}">
@csrf
@METHOD('DELETE')
<button class="btn btn-danger btn-block">Delete Record</button>	
</form>	
</div>		
</div>
</div>
@endsection