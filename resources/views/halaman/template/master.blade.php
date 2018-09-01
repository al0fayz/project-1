<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- title -->
        <title>SukaLuyu E-goverment</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="{{URL::asset('img/logo.png')}}">
        <!--  four box stylesheet -->
        <link rel="stylesheet" href="{{URL::asset('style.css')}}">
		 <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="{{URL::asset('js/vendor/html5shiv.js')}}"><\/script>')</script>
        <![endif]-->
		<script language="javascript" type="text/javascript" src="{{URL::asset('admin/editor/ckeditor.js')}}"></script>
	<meta name="base_url" content="{{ URL::to('/') }}">
    </head>
    <body  class="body-box">
	<section class="wrapper">
		@include('halaman.include.header')
		
		@yield('content')
		
		@include('halaman.include.footer')
	</section>
		<!-- jquery libery -->
		<script src="{{ URL::asset('js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>

        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::asset('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
        <!-- modernizr -->
        <script src="{{ URL::asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <!-- Bootstap -->
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('js/Chart.min.js') }}"></script>
        <!-- mixitup -->
        <script src="{{ URL::asset('js/jquery.mixitup.min.js') }}"></script>
        <!-- plugin -->
        <script src="{{ URL::asset('js/plugins.js') }}"></script>
        <!-- main script -->
        <script src="{{ URL::asset('js/main.js') }}"></script>
        <!-- flexisel slider -->
        <script src="{{ URL::asset('js/jquery.flexisel.js') }}"></script>
        <!-- stickup menu -->
        <script src="{{ URL::asset('js/stickUp.min.js') }}"></script>
        <!-- boxed slider -->
        <script src="{{ URL::asset('js/boxesFx.js') }}"></script>
        <script src="{{ URL::asset('js/classie.js') }}"></script>
        <!-- Switcher JavaScript  -->
        <script src="{{ URL::asset('js/switcher.js') }}" type="text/javascript"></script>
        <!-- map script 
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/map.js"></script>-->
        <!-- perttyphoto -->
        <script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>
        <!-- wow script -->
        <script src="{{ URL::asset('js/wow.min.js') }}"></script>
        <!-- parallax -->
        <script src="{{ URL::asset('js/jquery.parallax-1.1.3.js') }}"></script>
         <!-- contact script -->
        <script src="{{ URL::asset('js/jquery.jigowatt.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
		@yield('script')
       </body>
</html>
