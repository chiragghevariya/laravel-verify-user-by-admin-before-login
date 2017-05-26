<!DOCTYPE html>
<html>
<head>
	<title>Use|Dashboard</title>
	@include('layout.head')
</head>
<body>

	<div class="row" style="margin: auto;width:30em">
		<div class="col-md-3">
			<p style="margin-top: 1em;font-weight: bold;">welcome {{Auth::user()->name}}</p>		
		</div>
		<div class="col-md-1">
			<a href="{{url('logout')}}" class="btn btn-default" style="margin-top: 1em;margin-right: 1em">Logout</a>					
		</div>
	</div>
		

</body>
</html>