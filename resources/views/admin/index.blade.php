<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	@include('layout.head')
</head>
<body>

	<section class="pull-right">

		<a style="margin-right: 1em">{{Auth::user()->name}}</a>
		<a href="{{url('logout')}}" class="btn btn-default" style="margin-top: 1em;margin-right: 1em">Logout</a>	
	</section>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="row">
		<div class="col-md-7 col-md-offset-2">
			<table class="table">
			
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>verify</th>
				<th>take action</th>
			</tr>
			@foreach($user as $use)
			<tr>

				<td>{{$use->id}}</td>
				<td>{{$use->name}}</td>
				<td>{{$use->verify}}</td>
				<td><a href="{{route('showverify',['id'=>$use->id])}}" class="btn btn-success" href="">Verify</a></td>
			</tr>

			@endforeach

		</table>

		</div>
	</div>	
		
	
		
	
</body>
</html>