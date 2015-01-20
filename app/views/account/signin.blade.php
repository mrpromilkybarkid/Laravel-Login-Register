@extends('layout.main')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<form action="{{ URL::route('account-sign-in-post') }}" method="POST">
				<div class="field">
					Email: <input class="form-control" type="text" name="email" placeholder="Email..." {{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }}>
					@if ($errors->has('email'))
						<br /><span class="alert alert-danger">{{ $errors->first('email') }}</span><br />
					@endif
					<br />
				</div>
				<div class="field">
					Password: <input class="form-control" type="password" name="password" placeholder="Password..." {{ (Input::old('password')) ? ' value="' . Input::old('password') . '"' : '' }}>
					@if ($errors->has('password'))
						<br /><span class="alert alert-danger">{{ $errors->first('password') }}</span><br />
					@endif
					<hr />
				</div>

				<input class="btn btn-success" type="submit" value="Sign In">
				{{ Form::token() }}
			</form>
		</div>
	</div>
@stop
