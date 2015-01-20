@extends('layout.main')

@section('content')
	<div class="container">
		<div class="jumbotron">
			<form action="{{ URL::route('account-create-post') }}" method="POST">
				<div class="field">
					Email: <input class="form-control" type="text" name="email" placeholder="Email..." {{ (Input::old('email')) ? ' value="' . Input::old('email') . '"' : '' }}>
					@if ($errors->has('email'))
						<br /><span class="alert alert-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<br />
				<div class="field">
					Username: <input class='form-control' type="text" name="username" placeholder="Username..." {{ (Input::old('username')) ? ' value="' . Input::old('username') . '"' : '' }}>
					@if ($errors->has('username'))
						<br /><span class="alert alert-danger">{{ $errors->first('username') }}</span>
					@endif
				</div>
				<br />
				<div class="field">
					Password: <input class="form-control" type="password" name="password" placeholder="Password..." {{ (Input::old('password')) ? ' value="' . Input::old('password') . '"' : '' }}>
					@if ($errors->has('password'))
						<br /><span class="alert alert-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<br />
				<div class="field">
					Password Again: <input class="form-control" type="password" name="password_again" placeholder="Password Again..." {{ (Input::old('password_again')) ? ' value="' . Input::old('password_again') . '"' : '' }}>
					@if ($errors->has('password_again'))
						<br /><span class="alert alert-danger">{{ $errors->first('password_again') }}</span>
					@endif
				</div>
				<hr />
				<input class="btn btn-success" type="submit" value="Create Account">
				{{ Form::token() }}
			</form>
		</div>
	</div>
@stop