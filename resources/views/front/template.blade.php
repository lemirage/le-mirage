<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ trans('front/site.title') }}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@yield('head')

		{!! HTML::style('css/main_front.css') !!}
		{!! HTML::style('css/bootstrap.min.css') !!}
		{!! HTML::style('css/layout/wide.css') !!}
		{!! HTML::style('css/fractionslider.css') !!}
		{!! HTML::style('css/style-fraction.css') !!}
		{!! HTML::style('css/switcher.css') !!}
		<!--[if (lt IE 9) & (!IEMobile)]>
			{!! HTML::script('js/vendor/respond.min.js') !!}
		<![endif]-->
		<!--[if lt IE 9]>
			{!! HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
			{!! HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
		<![endif]-->

		{!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
		{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}

	</head>

  <body>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--Start Header-->
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                        <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                    </div>
                    <div class="col-sm-5 top-info">
                        <ul>
                            <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                            <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO bar -->
        <div id="logo-bar" class="clearfix">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Logo / Mobile Menu -->
                    <div class="col-xs-12">
                        <div id="logo">
                            <h1><a href="">{{ trans('front/site.title') }}</a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container / End -->
        </div>
        <!--LOGO bar / End-->

        <!-- Navigation
================================================== -->
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
													<ul class="nav navbar-nav">
														<li {!! Request::is('/') ? 'class="active"' : '' !!}>
															{!! link_to('/', trans('front/site.home')) !!}
														</li>
														@if(session('statut') == 'visitor' || session('statut') == 'user')
															<li {!! Request::is('contact/create') ? 'class="active"' : '' !!}>
																{!! link_to('contact/create', trans('front/site.contact')) !!}
															</li>
														@endif
														<li {!! Request::segment(1) == ('articles') || Request::segment(1) == ('blog') ? 'class="active"' : '' !!}>
															{!! link_to('articles', trans('front/site.blog')) !!}
														</li>
														@if(Request::is('auth/register'))
															<li class="active">
																{!! link_to('auth/register', trans('front/site.register')) !!}
															</li>
														@elseif(Request::is('password/email'))
															<li class="active">
																{!! link_to('password/email', trans('front/site.forget-password')) !!}
															</li>
														@else
															@if(session('statut') == 'visitor')
																<li {!! Request::is('auth/login') ? 'class="active"' : '' !!}>
																	{!! link_to('auth/login', trans('front/site.connection')) !!}
																</li>
															@else
																@if(session('statut') == 'admin')
																	<li>
																		{!! link_to_route('admin', trans('front/site.administration')) !!}
																	</li>
																@elseif(session('statut') == 'redac')
																	<li>
																		{!! link_to('blog', trans('front/site.redaction')) !!}
																	</li>
																@endif
																<li>
																	{!! link_to('auth/logout', trans('front/site.logout')) !!}
																</li>
															@endif
														@endif
														<li class="imgflag">
															<a href="{!! url('language') !!}"><img width="32" height="32" alt="en" src="{!! asset('img/' . (session('locale') == 'fr' ? 'english' : 'french') . '-flag.png') !!}"></a>
														</li>
													</ul>
                    </div>
                </div><!--/.row -->
            </div><!--/.container -->
        </div>
				@yield('header')
    </header>
	<!--End Header-->
	<!--start wrapper-->
	  <section class="wrapper">
	    <section class="page_head">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 col-md-12 col-sm-12">
	                    <h2>Portfolio 2 Columns</h2>
	                    <nav id="breadcrumbs">
	                        <ul>
	                            <li>You are here:</li>
	                            <li><a href="index.html">Home</a></li>
	                            <li><a href="index.html">Portfolio</a></li>
	                            <li>Portfolio 2 Columns</li>
	                        </ul>
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </section>
	<main role="main" class="container">
		@if(session()->has('ok'))
			@include('partials/error', ['type' => 'success', 'message' => session('ok')])
		@endif
		@if(isset($info))
			@include('partials/error', ['type' => 'info', 'message' => $info])
		@endif
		@yield('main')
	</main>

	<footer role="contentinfo">
		 @yield('footer')
		<p class="text-center"><small>Copyright &copy; Momo</small></p>
	</footer>

	{!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') !!}
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
	{!! HTML::script('js/plugins.js') !!}
	{!! HTML::script('js/main.js') !!}

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
	<script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
	<script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
	<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
	<script type="text/javascript" src="js/jflickrfeed.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
	@yield('scripts')

  </body>
</html>
