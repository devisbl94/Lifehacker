@extends('layout')
@section('contenido')
@if(session('info'))
	<div class="row">
		<div class="col-12">
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
	<div class="row">
		<div class="col-12">
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
	<div class="col-md-12">
		<h1>All Messages</h1>
	</div>
</div>
<div class="row">
	<div class="col-8 offset-2">
		<table class="table table-responsive-sm table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th colspan="3">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td width="10"><a href="{{ route('message.show', $message->id) }}" class="btn btn-primary">Show</a></td>
						<td width="10"><a href="{{ route('message.edit', $message->id) }}" class="btn btn-info">Edit</a></td>
						<td width="10">
							{!! Form::open(['url' => route('message.destroy', $message->id), 'method' => 'DELETE']) !!}
								{{-- {{ csrf_field() }} --}}
								{{-- {!! method_field('DELETE') !!} --}}
								<button class="btn btn-danger">Delete</button>
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection