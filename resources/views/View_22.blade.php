@extends('Layout.Layout')
@section('Http For API')
<br>
<br>
<div class="container">
<h3 class="text-center">
Http For API
</h3>
<hr>
<p class="text-center">
Http is a resource locator which is used for fetching data from any other website through API service
<hr>
@if($posts)
{{$posts}}
@endif
</p>

</div>		
@endsection