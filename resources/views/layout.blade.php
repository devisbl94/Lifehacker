<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark-orange">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>

		@yield('content')

		{{-- <section class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							Featured
						</div>
						<div class="card-body">
							<h4 class="card-title">Special title treatment</h4>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
	</main>

	<footer class="bg-dark-orange text-white p-lg-5 p-sm-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 p-5">
					<ul class="list-unstyled">
						<p class="lead">lorem ipsum</p>
						<li>item 1</li>
						<li>item 2</li>
						<li>item 3</li>
						<li>item 4</li>
					</ul>
				</div>
				<div class="col-sm-4 align-self-center text-center">
					<h2>Powered by <a href="https://laravel.com/" target="_blank">Laravel</a></h2>
					<h4>Made with ❤</h4>
					<h6><a href="https://github.com/devisbl94" target="_blank">the mastermind behind all this</a></h6>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>