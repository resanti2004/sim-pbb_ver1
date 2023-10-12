<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
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
		
		<!-- MAIN -->
		<main>
		@yield('content')
		</main>
		<!-- MAIN -->
	</section>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="js/script.js"></script>
</body>
</html>