@extends('layout')
@section('content')
	<div class="container py-5">
		<div class="row pt-5 justify-content-center">
			<div class="col-8">
				<div class="card">
					<div class="card-header">
						Message by: <strong>{{ $message->name }}</strong> <small>({{ $message->email }})</small>
					</div>
					<div class="card-body">
						<i>{{ $message->message }}</i>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-8 text-center pt-5">
				<a href="{{ url()->previous() }}" class="btn btn-primary">Get back</a>
			</div>
		</div>
	</div>
@endsection