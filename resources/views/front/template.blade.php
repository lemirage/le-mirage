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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63542056-2', 'auto');
		  ga('send', 'pageview');

		</script>
		@yield('head')

		{!! HTML::style('css/main_front.css') !!}
		{!! HTML::style('css/bootstrap.min.css') !!}
		{!! HTML::style('css/layout/wide.css') !!}
		{!! HTML::style('css/fractionslider.css') !!}
		{!! HTML::style('css/style-fraction.css') !!}
		{!! HTML::style('css/switcher.css') !!}
		{!! HTML::style('css/font-awesome.css') !!}
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
									<div class="col-sm-7 hidden-xs top-info top-info">
											<span><a href="https://www.youtube.com/channel/UCQx7grpUMNQrvs361L4gQ7w" class="my-youtube"><i class="fa fa-youtube fa-lg"></i>William LANGLOIS</a></span>
											<span><a href="https://www.youtube.com/channel/UCqzYJ6QHR-oVdUOsw_kTUrg" class="my-youtube"><i class="fa fa-youtube fa-lg"></i>le mirage</a></span>
									</div>
                    <div class="col-sm-5 top-info">
											<ul>
													<li><a href="https://twitter.com/leMirageFr" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
													<li><a href="https://www.facebook.com/clemirage" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#" onclick='Skype.ui({
															"name": "call",
															"element": "SkypeButton_Call_william_1",
															"participants": ["william"],
															"imageSize": 32
														});' class="my-skype"><i class="fa fa-skype"></i></a></li>
													<li><a href="https://plus.google.com/u/0/+WilliamLanglois-lemirage/posts" class="my-google"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="http://www.twitch.tv/lemiragenoir" class="my-twitch">  <i class="fa fa-twitch"></i></a></li>

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
														<li {!! Request::segment(1) == ('forum') || Request::segment(1) == ('forum') ? 'class="active"' : '' !!}>
															{!! link_to('forum', trans('front/site.forum')) !!}
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
															<a href="{!! url('language') !!}"><img width="15" height="15" alt="en" src="{!! asset('img/' . (session('locale') == 'fr' ? 'english' : 'french') . '-flag.png') !!}"></a>
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
	<main role="main" class="container">
		@if(session()->has('ok'))
			@include('partials/error', ['type' => 'success', 'message' => session('ok')])
		@endif
		@if(isset($info))
			@include('partials/error', ['type' => 'info', 'message' => $info])
		@endif
		@yield('main')
	</main>


	<section class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ">
						<p class="copyright">&copy; Copyright 2015 William Langlois | le mirage | Powered by  <a href="http://www.laravel.com/">laravel</a></p>
				</div>

				<div class="col-lg-6 ">
					<div class="footer_social">
						<ul class="footbot_social">
							<li><a class="rss" href="https://www.youtube.com/channel/UCQx7grpUMNQrvs361L4gQ7w" data-placement="top" data-toggle="tooltip" title="Youtube william"><i class="fa fa-youtube"></i></a></li>
							<li><a class="fb" href="https://www.facebook.com/clemirage" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="rss" href="https://plus.google.com/u/0/+WilliamLanglois-lemirage/posts" data-placement="top" data-toggle="tooltip" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="twtr" href="https://twitter.com/leMirageFr" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a class="dribbble" href="https://dribbble.com/lemirage" data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="rss" href="https://www.youtube.com/channel/UCqzYJ6QHR-oVdUOsw_kTUrg" data-placement="top" data-toggle="tooltip" title="Youtube le mirage"><i class="fa fa-youtube"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	 @yield('footer')
	{!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') !!}
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		{!! HTML::script('js/jquery-1.10.2.min.js') !!}
	{!! HTML::script('js/plugins.js') !!}
	{!! HTML::script('js/main.js') !!}


	{!! HTML::script('js/bootstrap.min.js') !!}

	{!! HTML::script('js/jquery.easing.1.3.js') !!}

	{!! HTML::script('js/retina-1.1.0.min.js') !!}

	{!! HTML::script('js/jquery.cookie.js') !!}

	{!! HTML::script('js/styleswitch.js') !!}

	{!! HTML::script('js/jquery.smartmenus.min.js') !!}

	{!! HTML::script('js/jquery.smartmenus.bootstrap.min.js') !!}

	{!! HTML::script('js/jquery.jcarousel.js') !!}

	{!! HTML::script('js/jflickrfeed.js') !!}
	{!! HTML::script('js/jquery.magnific-popup.min.js') !!}

	{!! HTML::script('js/jquery.isotope.min.js') !!}

	{!! HTML::script('js/swipe.js') !!}

	{!! HTML::script('js/jquery-scrolltofixed-min.js') !!}
	@yield('scripts')

  </body>
</html>
