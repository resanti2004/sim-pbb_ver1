<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Fontawesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="css/spop.css">
	<link rel="stylesheet" href="css/lspop.css">
	<link rel="stylesheet" href="css/login.css">
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
			<img src="image/bg.svg" alt="bg">
		</div>
	
		<!-- MAIN -->
		<main>
			@yield('content')
		</main>
		<!-- MAIN -->

		<!-- FOOTER -->
		<footer>
			@include('include.footer')
		</footer>
		<!-- FOOTER -->
	</section>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="js/script.js"></script>
	<script src="js/pagination.js"></script>
</body>
</html>