@extends('layout')
@section('content')

	<div class="container">
		<div class="row p-5">
			<div class="col-12 text-center">
				<h3 class="co-orange">Sign in</h3>
			</div>
		</div>
		<div class="row justify-content-xs-center justify-content-sm-center justify-content-md-center justify-content-lg-center">
			<div class="col-xs-10 col-sm-8 col-md-6">
				{!! Form::open(['method' => 'POST', 'class' => 'p-lg-5 p-sm-4']) !!}
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Your email">
						{!! $errors->first('email', 
							'<div class="alert alert-warning alert-dismissible fade show" role="alert">
								:message
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>'
						) !!}
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Your password">
						{!! $errors->first('password', 
							'<div class="alert alert-warning alert-dismissible fade show" role="alert">
								:message
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>'
						) !!}
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-secondary co-orange" name="" value="Sign in">
					</div>
				{!! Form::close() !!}
			</div>
		</div>
		<div class="row justify-content-xs-center justify-content-sm-center justify-content-md-center justify-content-lg-center p-5">
			<div class="col-xs-10 col-sm-8 col-md-6 text-center">
				Don't have an account? <a href="{{ route('signup') }}">create one</a>
			</div>
		</div>
	</div>

@endsection