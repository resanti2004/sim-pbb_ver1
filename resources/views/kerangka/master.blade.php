<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/spop.css') }}">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<title>@yield('title')</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
	@include('include.sidebar');
	</section>
	<!-- SIDEBAR -->

	<section id="content">
		<!-- NAVBAR -->
		@include('include.navbar')
		<!-- NAVBAR -->

		<div class="bg">
			<img src="{{ asset('image/bg.svg') }}" alt="bg">
		</div>
		
		<!-- MAIN -->
		<main>
		@yield('content')
		</main>
		<!-- MAIN -->
	</section>

	<!-- FOOTER -->
	<footer>
		@include('include.footer')
	</footer>
	<!-- FOOTER -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="js/script.js"></script>
</body>
</html>