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
				<h3 class="co-orange">All Messages</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-8 offset-2">
				<table class="table table-responsive-sm table-hover table-striped bg-white round-border">
					<thead>
						<tr>
							<th>Name</th>
							<th class="text-center" colspan="2">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($messages as $message)
							<tr>
								<td>{{ $message->name }}</td>
								<td width="10"><a href="{{ route('message.show', $message->id) }}" class="btn btn-primary">Show</a></td>
								<td width="10">
									{!! Form::open(['url' => route('message.destroy', $message->id), 'method' => 'DELETE', 'class' => 'no-shadow']) !!}
										<button class="btn btn-danger">Delete</button>
									{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				@if (count($messages))
					{!! $messages->links() !!}
				@endif
			</div>
		</div>
	</div>

@endsection