<!DOCTYPE html>
<html>
<head>
	<title>Verify|show</title>
	@include('layout.head')
</head>
<body>

	<div class="row">
		
		<div class="col-md-4 col-md-offset-5">
			{{$verify->name}}

			<form method="post" action="{{route('verifyupdate',['id'=>$verify->id])}}">

				{{ csrf_field() }}
				{{method_field('put')}}



				<select class="form-control" name="foractive">
					<option>Select for verify</option>
					<option value="Active">active</option>
					<option value="NotActive">inactive</option>

				</select>

				<input type="submit" value="ok to verify" name="submit" class="btn btn-success">

			</form>

		</div>

	</div>
	<br>
</body>
</html>