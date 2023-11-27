<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Fontawesome CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
	<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/spop.css') }}">
	<link rel="stylesheet" href="{{ asset('css/lspop.css') }}">
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

		<!-- FOOTER -->
		<footer>
			@include('include.footer')
		</footer>
		<!-- FOOTER -->
	</section>
	
	<script src="path/to/node_modules/vanillajs-datepicker/js/Datepicker.js"></script>
	<script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                format: 'dd/mm/yyyy',
                        });
        });
    </script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{ asset('./js/script.js') }}"></script>
	<script src="js/pagination.js"></script>

</body>
</html>