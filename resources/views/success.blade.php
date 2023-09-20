@extends("Layout.Layout")
@section("CRUD Operation Through Ajax")
<meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
<!-- Start of 1st container-->
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="text-center text-primary">
CRUD Operations Through Ajax In Laravel	
</h2>
</div>	
</div>
</div>
<hr style="height:20px; background-color: grey;">
<!--End of 1st container-->

<!--Start of 2nd container-->
<div class="container">
<div class="row">
<div class="col-md-10 offset-1">
<h3 class="text-center text-primary">
Add Record Through Ajax
</h3>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modaladd">
Add New Department
</button>
<br>
<br>
<table class="table table-bordered table-hover table-striped" id="tabledepartment">
<thead>
<tr>
<th>
Department ID  
</th>
<th>
Department Name  
</th>
<th colspan="2">
Action 
</th>
</tr>
</thead>
<tbody id="tbody">
@if($departments)
@foreach($departments as $dept)
<tr>
<td>
{{$dept['department_id']}}</td>	
<td>
{{$dept['department_name']}}</td><td>
<a href="#">
Update	
</a>
</td>
<td>
<a href="#" id="{{$dept['department_id']}}" class="delete">
Delete	
</a>
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
<!-- Start of modal add-->
<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header d-block text-center">
<h5 class="modal-title" id="exampleModalLabel">Welcome To The Department Section</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="formadd">
@csrf
<div class="form-group">
<label for="name">Enter Department Name :</label>
<input type="text" class="form-control" id="name" placeholder="Enter Department Name">
</div>
<button id="btnadd" type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
</div>
</div>
</div>
</div> 
<!-- End of modal add-->
<!-- Start of modal update-->
<div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header d-block text-center">
<h5 class="modal-title" id="exampleModalLabel">Welcome To The Department Section</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="formadd">
@csrf
<div class="form-group">
<label for="name">Enter Department Name :</label>
<input type="text" class="form-control" id="newname" placeholder="Enter Department Name">
</div>
<button id="btnupdate" type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
</div>
</div>
</div>
</div> 
<!-- End of modal update-->	
</div>
</div>
</div>
<!--End of 2nd container-->

<script type="text/javascript">
$(document).ready(function(){ 
// Start of add record
$('#btnadd').click(function(e){
event.preventDefault();
var name=$('#name').val();
if(name=='')
{
alert('Please Enter A Department Name');
}
else
{
// Start of ajax for add
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
}
});
$.ajax
({
url:'{{route("controller39.store")}}',
type:'POST',
data:{'name':name},
dataType:'json',
cache:'false',	
success:function(response)
{
if(response)
{
$('#tbody').empty();
$('#formadd')[0].reset();
search();
}}
});
// End of ajax for add
}
});
// End of add record

// Start of delete record
$('.delete').click(function(e)
{
event.preventDefault();
var id=$(this).attr('id');
// Start of ajax delete
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
}
});
$.ajax
({
url:'controller39/'+id,
type:'DELETE',
dataType:'json',
data:{'id':id},
success:function(response)
{
if(response)
{	
alert('Record Is Successfully Deleted');
search();
location.reload();
}
}	
});
// End of ajax delete
});
// End of delete record

// Start of update record

// End of update record

// Start of Search record 
function search()
{
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
}
});
$.ajax
({
url:'controller39/create',
type:'GET',
data:{1:1},
success:function(response)
{
if(response)
{
var count=response['data'].length;
for(i=0;i<count;i++)
{
$('#tbody').append("<tr><td>"+response['data'][i].department_id+"</td><td>"+response['data'][i].department_name+"</td><td><a class='update' href='#'>Update</a></td><td><a id='del' class='delete' href='#'>Delete</a></td></tr>");	
}
}
}
});
}
// End of search record

});
// When close class of modal is clicked then refresh the page
$('.close').click(function(){
location.reload();
});
</script>

@endsection