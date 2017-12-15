@extends('layout')
@section('content')

	<section id="welcome" class="jumbotron">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div id="img-title" class="col-md-4 col-xs-12 align-self-center">
						<img class="img-fluid" src="./img/logo.png">
					</div>
					<div class="col-md-8 col-xs-12 text-center align-self-center">
						<p id="text-title" class="text-white">lifehacker</p>
						<p class="text-white align-text-top">take control of your life, just a few clicks away</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-2" class="container">
		<div class="row text-center">
			<div class="col-xs-12 col-sm-4">
				<i class="fa fa-clock-o fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<i class="fa fa-calendar-check-o fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<i class="fa fa-desktop fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
		</div>
	</section>

	<section id="home-3" class="container-fluid d-none d-sm-block">
		<div class="row">
			<div class="col-6 p-5 co-orange">
				<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
			<div id="img-container" class="col-6 p-5">
				<img class="img-fluid align-self-center" src="{{ asset('img/section3img.png') }}">
			</div>
		</div>
	</section>

@endsection