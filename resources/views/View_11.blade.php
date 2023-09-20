@extends('Layout.Layout')
@section('Form Validation')
<form method="post" action="{{route('controller11.store')}}" enctype="multipart/form-data">
@csrf	
<div class="container">
<h3 class="text-center">Form Validation In Laravel</h3>
<hr>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Name :</label>
<input type="text" name="name" class="form-control" value="{{old('name')}}">
<strong class="text-danger">
@if($errors->has('name'))
@foreach($errors->get('name') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Email :</label>
<input type="text" name="email" class="form-control" value="{{old('email')}}">
<strong class="text-danger">
@if($errors->has('email'))
@foreach($errors->get('email') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Password :</label>
<input type="text" name="password" class="form-control" value="{{old('password')}}">
<strong class="text-danger">
@if($errors->has('password'))
@foreach($errors->get('password') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Confirm :</label>
<input type="text" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
<strong class="text-danger">
@if($errors->has('password_confirmation'))
@foreach($errors->get('password_confirmation') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Zip Code :</label>
<input type="text" name="zipcode" class="form-control" value="{{old('zipcode')}}">
<strong class="text-danger">
@if($errors->has('zipcode'))
@foreach($errors->get('zipcode') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Mobile No :</label>
<input type="text" name="mobileno" class="form-control" value="{{old('mobileno')}}">
<strong class="text-danger">
@if($errors->has('mobileno'))
@foreach($errors->get('mobileno') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Nic No :</label>
<input type="text" name="nicno" class="form-control" value="{{old('nicno')}}">
<strong class="text-danger">
@if($errors->has('nicno'))
@foreach($errors->get('nicno') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Website :</label>
<input type="text" name="url" class="form-control" value="{{old('url')}}">
<strong class="text-danger">
@if($errors->has('url'))
@foreach($errors->get('url') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
</div>
<div class="row">
<div class="col-md-3">
<div class="form-group">
<label>Start Date :</label>
<input type="date" name="startdate" class="form-control" value="{{old('startdate')}}">
<strong class="text-danger">
@if($errors->has('startdate'))
@foreach($errors->get('startdate') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>End Date :</label>
<input type="date" name="enddate" class="form-control" value="{{old('enddate')}}">
<strong class="text-danger">
@if($errors->has('enddate'))
@foreach($errors->get('enddate') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Profile Image :</label>
<input type="file" name="profileimagefile" class="form-control" value="{{old('profileimagefile')}}">
<strong class="text-danger">
@if($errors->has('profileimagefile'))
@foreach($errors->get('profileimagefile') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
<div class="col-md-3">
<div class="form-group">
<label>Profile CV :</label>
<input type="file" name="profilecvfile" class="form-control" value="{{old('profilecvfile')}}">
<strong class="text-danger">
@if($errors->has('profilecvfile'))
@foreach($errors->get('profilecvfile') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>	
</div>
</div>
<div class="row">
<div class="col-md-12">
<label>
<input type="checkbox" name="tor">
Term Of Services	
</input>
<strong class="text-danger">
@if($errors->has('tor'))
@foreach($errors->get('tor') as $error)
{{$error}}
@endforeach
@endif
</strong>
</label>	
</div>
</div>
<div class="row">
<div class="col-md-12">
<button class="btn btn-success btn-block">Submit Form</button>
</div>
</div>
</div>
</form>
@endsection