<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Page In Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
	<div class="container-fluid">
		@if(Session::has('insert_msg'))
		<div class="col-md-12">
			<div class="alert alert-success">
				{{session::get('insert_msg')}}
			</div>
		</div>
		@endif
		@if(Session::has('delete_msg'))
		<div class="col-md-12">
			<div class="alert alert-danger">
				{{session::get('delete_msg')}}
			</div>
		</div>
		@endif
		@if(Session::has('update_msg'))
		<div class="col-md-12">
			<div class="alert alert-info">
				{{session::get('update_msg')}}
			</div>
		</div>
		@endif
		<table class="table-hover table table-striped table-bordered">
			<tr>
				<th>S No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>City</th>
				<th>Date</th>
				<th>Gender</th>
				<th>Subject</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($fetch_table as $fetch)
			<tr>
				<td>{{$fetch->ID}}</td>
				<td>{{$fetch->Name}}</td>
				<td>{{$fetch->Email}}</td>
				<td>{{$fetch->Mobile}}</td>
				<td>{{$fetch->City}}</td>
				<td>{{$fetch->DOB}}</td>
				<td>{{$fetch->Gender}}</td>
				<td>{{$fetch->Subject}}</td>
				<td><a href="{{url('/update_data')}}/{{$fetch->ID}}"><button class="btn btn-info">Edit</button></a></td>
				<td><a href="{{url('/delete_data')}}/{{$fetch->ID}}"><button class="btn btn-danger">Delete</button></a></td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>