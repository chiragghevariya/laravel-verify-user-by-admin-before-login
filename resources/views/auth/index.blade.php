<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('layout.head')

</head>
<body>
	
	
		
		<div class="row">
		
		<div class="col-md-12 col-md-offset-5">

			<a href="{{url('login')}}" class="btn btn-success">Login</a>
			<a href="{{url('register')}}" class="btn btn-success">Register</a>

		</div>
		
		</div>

	
	
		@yield('content')


</body>
</html>