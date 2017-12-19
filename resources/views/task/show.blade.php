@extends('layout')
@section('content')
	<div class="container py-5">
		@if(session('info'))
			<div class="row justify-content-center">
				<div class="col-6">
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('info')}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		@endif
		<div class="row pt-5 justify-content-center">
			<div class="col-8">
				@php
					switch ($task->category->name) {
					case 'Meh':
					    echo '<div class="card text-white bg-info">';
					    break;

					case 'Unimportant':
					    echo '<div class="card text-white bg-warning">';
					    break;

					case 'Important':
					    echo '<div class="card text-white bg-dark">';
					    break;

					case 'Urgent':
					    echo '<div class="card text-white bg-danger">';
					    break;

					default:
					    echo '<div class="card text-white bg-primary">';
					    break;
					}
				@endphp
					<div class="card-header">
						<strong>{{ $task->title }}</strong> <small>(Deadline: {{ Carbon\Carbon::parse($task->deadline)->format('m-d-Y') }})</small>
					</div>
					<div class="card-body co-black bg-white">
						<i>{{ $task->content }}</i>
						<br><br><br>
						<small class="align-bottom">Created at: {{ Carbon\Carbon::parse($task->created_at)->format('m-d-Y') }}</small>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-3 text-center pt-5">
				<a href="{{ route('task.index') }}" class="btn btn-primary btn-width">Get back</a>
			</div>
			<div class="col-3 text-center pt-5">
				<a href="{{ route('task.edit', $task->id) }}" class="btn btn-info btn-width">Edit</a>
			</div>
			<div class="col-3 text-center pt-5">
				{!! Form::open(['url' => route('task.destroy', $task->id), 'method' => 'DELETE', 'class' => 'no-shadow']) !!}
					<button class="btn btn-danger btn-width">Delete</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection