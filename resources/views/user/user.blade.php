<!DOCTYPE html>
<html>
<head>
	<title>Use|Dashboard</title>
	@include('layout.head')
</head>
<body>

welcome {{Auth::user()->name}}
<a href="{{url('logout')}}" class="btn btn-default" style="margin-top: 1em;margin-right: 1em">Logout</a>
</body>
</html>