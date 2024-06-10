<!DOCTYPE html>
<html>

<!-- Mirrored from quanticalabs.com/Pressroom/Template/?page=home by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 11:03:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>@yield('title')</title>
	<!--meta-->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="keywords" content="Medic, Medical Center" />
	<meta name="description" content="Responsive Medical Health Template" />
	<!--style-->
	@include('layout.partials.head')
</head>
<!--<body class="image_1">
	<body class="image_1 overlay">
	<body class="image_2">
	<body class="image_2 overlay">
	<body class="image_3">
	<body class="image_3 overlay">
	<body class="image_4">
	<body class="image_4 overlay">
	<body class="image_5">
	<body class="image_5 overlay">
	<body class="pattern_1">
	<body class="pattern_2">
	<body class="pattern_3">
	<body class="pattern_4">
	<body class="pattern_5">
	<body class="pattern_6">
	<body class="pattern_7">
	<body class="pattern_8">
	<body class="pattern_9">
	<body class="pattern_10">-->

<body class="">
	<div class="site_container">
		<!--<div class="header_top_bar_container style_2 clearfix">
			<div class="header_top_bar_container style_2 border clearfix">
			<div class="header_top_bar_container style_3 clearfix">
			<div class="header_top_bar_container style_3 border clearfix">
			<div class="header_top_bar_container style_4 clearfix">
			<div class="header_top_bar_container style_4 border clearfix">
			<div class="header_top_bar_container style_5 clearfix">
			<div class="header_top_bar_container style_5 border clearfix"> -->
		@include('layout.partials.header')
		<!--<div class="header_container small">
			<div class="header_container style_2">
			<div class="header_container style_2 small">
			<div class="header_container style_3">
			<div class="header_container style_3 small">-->

		<!-- <div class="menu_container style_2 clearfix">
			<div class="menu_container style_3 clearfix">
			<div class="menu_container style_... clearfix">
			<div class="menu_container style_10 clearfix">
			<div class="menu_container sticky clearfix">-->
		@include('layout.partials.nav')

		@yield('content')

		
		
		</div>
	@include('layout.partials.footer')
	<div class="background_overlay"></div>
	<!--js-->
	@include('layout.partials.scrip')
</body>

<!-- Mirrored from quanticalabs.com/Pressroom/Template/?page=home by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 11:03:33 GMT -->

</html>