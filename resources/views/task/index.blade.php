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

		@if(session('error'))
			<div class="row justify-content-center">
				<div class="col-6">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						{{ session('error')}}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		@endif
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="co-orange">Your tasks</h3>
			</div>
			<div class="col-md-12 text-center">
				<a href="{{ route('task.create') }}" class="btn btn-primary">New task <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
			</div>
		</div>
		@if (count($tasks))
			<div class="row mt-3">
				<div class="col-12 text-center">
					<p class="lead co-orange">Order by:</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 text-center">
					<a href="{{ route('task.index', 'sort=newer') }}" class="btn btn-warning btn-block my-1">Newer</a>
				</div>
				<div class="col-sm-3 text-center">
					<a href="{{ route('task.index', 'sort=older') }}" class="btn btn-warning btn-block my-1">Older</a>
				</div>
				<div class="col-sm-3 text-center">
					<a href="{{ route('task.index', 'sort=dateold') }}" class="btn btn-warning btn-block my-1">Date Desc</a>
				</div>
				<div class="col-sm-3 text-center">
					<a href="{{ route('task.index', 'sort=datenew') }}" class="btn btn-warning btn-block my-1">Date Asc</a>
				</div>
			</div>
		@else
			<div class="row mt-5">
				<div class="col-12 text-center">
					<p class="lead display-4">But nobody came.</p>
				</div>
			</div>
		@endif
		<div class="row pt-5 justify-content-center">
			@foreach ($tasks as $task)
				<div class="col-xs-12 col-md-4 pb-5 px-1">
					<a class="task-notes" href="{{ route('task.show', $task->id) }}">
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
								<strong>Deadline: {{ Carbon\Carbon::parse($task->deadline)->format('m-d-Y') }}</strong>
							</div>
							<div class="card-body">
								<h4 class="card-title">{{ $task->title }}</h4>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
		<div class="row justify-content-center">
			@if (count($tasks))
				{!! $tasks->appends(['sort' => $sort])->links() !!}
			@endif
		</div>
	</div>
@endsection