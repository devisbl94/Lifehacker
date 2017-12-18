@extends('layout')
@section('content')

	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-6 alert alert-success" role="alert">
				<h4 class="alert-heading">Your message has been sended!</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<hr>
				<p class="mb-0"><a class="btn btn-secondary" href="{{ route('home') }}">Get back</a></p>
			</div>
		</div>
	</div>

@endsection