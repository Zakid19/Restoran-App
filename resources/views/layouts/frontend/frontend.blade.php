<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from davur.dexignzone.com/frontend/front-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 05:29:17 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html" />
	<meta name="format-detection" content="telephone=no">
    <title>Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="/frontend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/frontend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/frontend/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="/frontend/vendor/swiper/css/swiper-bundle.css">
    <link href="/frontend/css/style.css" rel="stylesheet">
	<link href="/frontend/cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>
<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="overflow-unset">
        @include('layouts.frontend.navbar')
        @if (Auth::user())
            @include('layouts.frontend.sidebar')
        @endif
		<div class="menu-close"></div>
        <div class="content-wrapper">
            {{ $slot }}
        </div>
    </div>
    <script src="/frontend/vendor/global/global.min.js"></script>
	<script src="/frontend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

	<!-- Counter Up -->
    <script src="/frontend/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/frontend/vendor/jquery.counterup/jquery.counterup.min.js"></script>

	<script src="/frontend/vendor/owl-carousel/owl.carousel.js"></script>
	<script src="/frontend/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <script src="/frontend/js/custom.js"></script>
	<script src="/frontend/js/deznav-init.js"></script>
	<script>

	function ItemsCarousel()
	{

		/*  testimonial one function by = owl.carousel.js */
		jQuery('.item-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			center:true,
			autoWidth:true,
			autoplay:true,
			dots: false,
			items:4,
			navText: ['', ''],
			breackpoint:[


			]

		})
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			ItemsCarousel();
		}, 1000);
	});

	function handleTabs(){
		$('#add-order-content,#place-order').css("display","none");
		$('#add-order').on('click',function(){
			$('#add-order-content').css("display","block");
			$('#home-counter').css("display","none");
		})
		$('#place-order-tab').on('click',function(){
			$('#place-order').css("display","block");
			$('#add-order-content').css("display","none");
		})
		$('#place-order-cancel').on('click',function(){
			$('#place-order').css("display","none");
			$('#add-order-content').css("display","block");
		})
		$('#home-counter-tab').on('click',function(){
			$('#home-counter').css("display","block");
			$('#add-order-content').css("display","none");
		})
	}
	handleTabs();

	</script>

</body>

<!-- Mirrored from davur.dexignzone.com/frontend/front-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 05:29:40 GMT -->
</html>
