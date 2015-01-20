@extends('layout.main')

@section('content')
	@if(Auth::check())
		<div class="container">
			<div class="jumbotron">
				<h1>Hello, {{ Auth::user()->username }}
				<hr />
				<p>Welcome, {{ Auth::user()->username }} to my laravel login and register system</p>
			</div>
		</div>
	@else
		<div class="container">
			<div class="jumbotron">
				<h1>Hello, World</h1>
				<hr />
				<p>Welcome to my Laravel login and register system.</p>	
			</div>
		</div>
	@endif
@stop