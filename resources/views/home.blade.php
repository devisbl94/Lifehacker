@extends('layout')
@section('content')

	<section id="welcome" class="jumbotron">
		<div class="container-fluid mt-md-5">
			<div class="row">
				<div id="img-title" class="col-md-4 col-xs-12 align-self-center">
					<img class="img-fluid" src="./img/logo.png">
				</div>
				<div class="col-md-8 col-xs-12 text-center align-self-center">
					<p class="text-white"><span id="text-title" class="text-title">lifehacker</span><br><span class="text-small-title">take control of your life, just a few clicks away</span></p>
				</div>
			</div>
		</div>
	</section>

	<section id="home-2" class="container">
		<div class="row text-center">
			<div class="col-xs-12 col-sm-4">
				<i class="fa fa-clock-o fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted tiny mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<i class="fa fa-calendar-check-o fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted tiny mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<i class="fa fa-desktop fa-5x co-orange mb-3" aria-hidden="true"></i>
				<h5 class="co-orange">Lorem ipsum</h5>
				<p class="text-muted tiny mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo assumenda voluptatibus est quia saepe enim suscipit eaque, incidunt dolores.</p>
			</div>
		</div>
	</section>

	<section id="home-3" class="container-fluid d-none d-sm-block">
		<div class="row">
			<div class="col-6 p-5 text-white align-self-center">
				<h4 class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
			<div class="col-6 p-5">
				<img class="img-fluid align-self-center" src="{{ asset('img/section3img.png') }}">
			</div>
		</div>
	</section>

@endsection