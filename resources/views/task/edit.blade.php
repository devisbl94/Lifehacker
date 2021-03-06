@extends('layout')
@section('content')

	<div class="container py-5">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="co-orange">Update a task</h3>
			</div>
		</div>
		<div class="row pt-5 justify-content-center">
			<div class="col-9">
				{!! Form::open(['url' => route('task.update', $task->id), 'method' => 'PUT', 'class' => 'p-lg-5 p-sm-4']) !!}
					<div class="row justify-content-center">
						<div class="col-xs-12 col-sm-9 mb-3">
							<label for="title">Title</label>
							<input type="text" name="title" class="form-control" placeholder="Your task name" value="{{ old('title') ? old('title') : $task->title }}" required>
							{!! $errors->first('title', 
								'<div class="alert alert-warning alert-dismissible fade show" role="alert">
									:message
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>'
							) !!}
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6 mb-3">
							<label for="deadline">Deadline date</label>
							<input type="date" name="deadline" class="form-control" min="2018-01-01" value="{{ old('deadline') ? old('deadline') : $task->deadline }}" required>
							{!! $errors->first('deadline', 
								'<div class="alert alert-warning alert-dismissible fade show" role="alert">
									:message
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>'
							) !!}
						</div>
						<div class="col-md-6 mb-3">
							<label for="category_id">Category</label>
							{{ Form::select('category_id', $categories, $task->category->id, ['class' => 'form-control']) }}
							{!! $errors->first('category', 
								'<div class="alert alert-warning alert-dismissible fade show" role="alert">
									:message
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>'
							) !!}
						</div>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" name="content" rows="5">{{ old('content') ? old('content') : $task->content }}</textarea>
						{!! $errors->first('content', 
							'<div class="alert alert-warning alert-dismissible fade show" role="alert">
								:message
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>'
						) !!}
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-secondary btn-width" name="" value="Update">
					</div>
				{!! Form::close() !!}
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-3 text-center pt-5">
				<a href="{{ url()->previous() }}" class="btn btn-primary btn-width">Get back</a>
			</div>
		</div>
	</div>

@endsection