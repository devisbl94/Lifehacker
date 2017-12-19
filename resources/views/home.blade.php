@extends('layout')
@section('content')

	<section id="welcome" class="jumbotron">
		<div class="container-fluid mt-md-5">
			<div class="row">
				<div id="img-title" class="col-md-4 col-xs-12 align-self-center">
					<img class="img-fluid" src="{{ asset('img/logo.png') }}">
				</div>
				<div class="col-md-8 col-xs-12 text-center align-self-center">
					<p class="text-white"><span id="text-title" class="text-title">lifehacker</span><br><span class="text-small-title">take control of your life, just a few clicks away</span></p>
					<a id="btn-title" class="btn btn-primary" href="{{ route('login') }}">Try it &raquo;</a>
				</div>
			</div>
		</div>
	</section>

	<section id="home-2" class="container py-5 box-shadow-tb box-shadow-hide">
		<div class="row text-center px-md-5">
			<div class="col-xs-12 col-sm-4 py-sm-5 px-xs-5 py-xs-3">
				<i class="fa fa-clock-o fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
			<div class="col-xs-12 col-sm-4 py-sm-5 px-xs-5 py-xs-3">
				<i class="fa fa-calendar-check-o fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
			<div class="col-xs-12 col-sm-4 py-sm-5 px-xs-5 py-xs-3">
				<i class="fa fa-desktop fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
		</div>
	</section>

	<section id="home-3" class="container-fluid py-2 d-none d-sm-block">
		<div class="row">
			<div class="col-md-6 p-5 pb-sm-1 text-white align-self-center">
				<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
			<div class="col-sm-12 col-md-6 p-5 pt-md-5 pt-sm-0 container-img-center">
				<img class="img-fluid align-self-center" src="{{ asset('img/section3img.png') }}">
			</div>
		</div>
	</section>

	<section id="home-4" class="container-fluid py-5 box-shadow-tb box-shadow-hide">
		<div class="row mb-3">
			<div class="col-12">
				<h1 class="text-center display-4">Some clever testimonies!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-10 offset-1 p-5">
				<div id="carousel-home" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="col-sm-2 d-none d-sm-block p-3">
									<img class="img-fluid rounded" src="{{ asset('img/thumb1.jpg') }}" alt="img">
								</div>
								<div class="col-xs-12 col-sm-10">
									<blockquote class="blockquote">
										<p class="mb-0">WHOOOOOOOO!!?????</p>
										<footer class="blockquote-footer">a kittie</footer>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="container">
								<div class="col-sm-2 d-none d-sm-block p-3">
									<img class="img-fluid rounded" src="{{ asset('img/thumb2.jpg') }}" alt="img">
								</div>
								<div class="col-xs-12 col-sm-10">
									<blockquote class="blockquote">
										<p class="mb-0">Why are we still here? Just to suffer?</p>
										<footer class="blockquote-footer">a dog</footer>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="container">
								<div class="col-sm-2 d-none d-sm-block p-3">
									<img class="img-fluid rounded" src="{{ asset('img/thumb3.jpg') }}" alt="img">
								</div>
								<div class="col-xs-12 col-sm-10">
									<blockquote class="blockquote">
										<p class="mb-0">what?</p>
										<footer class="blockquote-footer">what?</footer>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="home-5" class="container-fluid py-5">
		<div class="row">
			<div class="col-8 offset-2 text-white px-sm-3 pt-2">
				<h1 class="text-center display-5">Lorem ipsum dolor sit amet</h1>
				<p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 pb-2 mx-auto text-center">
				<button id="fake-btn" class="btn btn-secondary co-orange">This button does nothing</button>
			</div>
		</div>
	</section>
	<section id="home-6" class="container-fluid py-5 box-shadow-tb box-shadow-hide">
		<div class="row mb-3">
			<div class="col-12">
				<h1 class="text-center display-4">Contact us!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 p-5 container-img-center align-self-center d-none d-sm-block">
				<img class="img-fluid align-self-center mx-auto" src="{{ asset('img/section4img.png') }}">
			</div>
			<div class="col-sm-5 p-5 p-sm-2 align-self-center">
				{!! Form::open(['url' => route('message.store'), 'method' => 'POST', 'class' => 'p-lg-5 p-sm-4']) !!}
					<div class="form-group">
						<input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
						{!! $errors->first('name', 
							'<div class="alert alert-warning alert-dismissible fade show" role="alert">
								:message
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>'
						) !!}
					</div>
					<div class="form-group">
						<input type="email" id="email" name="email" class="form-control" placeholder="Your email" required>
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
						<textarea id="message" name="message" class="form-control" placeholder="Write something..." rows="5" required></textarea>
						{!! $errors->first('message', 
							'<div class="alert alert-warning alert-dismissible fade show" role="alert">
								:message
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>'
						) !!}
					</div>
					<div class="form-group pt-5">
						<input type="submit" id="submit-contact" class="btn btn-secondary btn-block" name="" value="Send!" disabled>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</section>

@endsection