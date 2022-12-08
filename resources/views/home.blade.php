<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>How to make crud operation in laravel</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{url('view')}}">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{url('insert')}}">Contact us</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="container">
		<div class="row mb-3">
			<div><br></div>
			@if(Session::has('insert_msg'))
			<div class="col-md-12">
				<div class="alert alert-success">
					{{session::get('insert_msg')}}
				</div>
			</div>
			@endif
			<div class="col-md-6 col-lg-6">
				<form action="{{url('/insert_data')}}" method="post">
					@csrf
					<div class="row mb-3">
						<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
					</div>
					<div class="row mb-3">
						<input type="email" name="email" placeholder="Enter Your Email" class="form-control">
					</div>
					<div class="row mb-3">
						<input type="number" name="mobile" placeholder="Enter Your Mobile" class="form-control">
					</div>
					<div class="row mb-3">
						<input type="date" name="date" class="form-control">
					</div>
					<div class="row mb-3">
						<select class="form-control" name="city">
							<option value="New Delhi">New Delhi</option>
							<option value="Gurgoan">Gurgoan</option>
							<option value="Noida">Noida</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Pune">Pune</option>
							<option value="Hyderabad">Hyderabad</option>
							<option value="Bangalore">Bangalore</option>
							<option value="Chennai">Chennai</option>
						</select>
					</div>
					<div class="row mb-3 form-check">
						<input type="radio" name="gender" value="Male"> Male
						<input type="radio" name="gender" value="Female"> Female
						<input type="radio" name="gender" value="Others"> Others
					</div>
					<div class="row mb-3 form-check">
						<input type="checkbox" name="subject[]" value="English"> English
						<input type="checkbox" name="subject[]" value="Hindi"> Hindi
						<input type="checkbox" name="subject[]" value="Math"> Math
					</div>
					<div class="row d-grid">
						<button class="btn btn-primary" name="submit" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>