@extends('auth.index')

@section('title','Register')

@section('content')

	<div class="section">
		
		<div class="row">

			<div class="col-md-3 col-md-offset-4">
					<br>
					<br>
					<br>
					@if(count($errors))

						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
								<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>

					@endif		
					<form method="post" action="{{url('register')}}">
						{{csrf_field()}}
						<label for="Name">Name:</label>
						<input type="text" name="name" class="form-control">

						<label for="Email">Email:</label>
						<input type="email" name="email" class="form-control">

						<label for="password">password:</label>
						<input type="password" maxlength="6" name="password" class="form-control">
						<br>
						<input type="submit" class="btn btn-default" name="submit" value="creat account"> 

					</form>

			</div>

		</div>

	</div>

@endsection
