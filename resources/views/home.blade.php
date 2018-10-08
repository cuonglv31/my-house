<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="/frontend/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>My House</title>

		<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">  -->
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/simplelightbox.min.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">

		</head>
		<body>
        @include('./frontend/header')
        @include('./frontend/content')
        @include('./frontend/footer')
		</body>
        <!-- End footer Area -->		
			<script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
			<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
			<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>			
			<script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
			<script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
			<script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
			<script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>
			<script type="text/javascript" src="{{ asset('frontend/js/simple-lightbox.min.js') }}"></script>
			<script src="{{ asset('frontend/js/main.js') }}"></script>	
	</html>