@extends('auth.index')

@section('title','login')

@section('content')

	<div class="section">
		
		<div class="row">

			<div class="col-md-3 col-md-offset-4">
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
					<form method="post" action="{{url('login')}}">
						{{csrf_field()}}
						<label for="Name">Email:</label>
						<input type="email" name="email" value="{{old('email')}}" class="form-control">

						<label for="password">password:</label>
						<input type="password" maxlength="6" value="{{old('password')}}" name="password" class="form-control">
						<br>
						<input type="submit" class="btn btn-default" name="submit" value="Login"> 

					</form>

			</div>

		</div>

	</div>

@endsection
