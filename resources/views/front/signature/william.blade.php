<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ trans('front/site.title') }}</title>
		<meta name="description" content="William langlois, concepteur de sites web & photographe amateur.">
		<meta name="keywords" content="php, amateur, photographe, conception, web, sites-web, laravel, william langlois, mondioring">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="logo.png" sizes="192x192">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63542056-2', 'auto');
		  ga('send', 'pageview');

		</script>
        <script type="text/javascript">
    var adfly_id = 9125984;
    var adfly_advert = 'banner';
    var frequency_cap = 5;
    var frequency_delay = 5;
    var init_delay = 3;
    var popunder = true;
</script>
		@yield('head')

		{!! HTML::style('css/main_front.css') !!}
		{!! HTML::style('css/bootstrap.min.css') !!}
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

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                    	<li><i class="fa fa-cc-visa"></i></li>
                        <li><i class="fa fa-facebook  "></i></li>
                        <li><i class="fa fa-twitch"></i></li>
                        <li><i class="fa fa-twitter"></i></li>
                    </ul>
                </div>
            </div>
        </div>

    	{!! HTML::script('js/jquery-1.10.2.min.js') !!}

    	{!! HTML::script('js/plugins.js') !!}

    	{!! HTML::script('js/main.js') !!}

    	{!! HTML::script('js/bootstrap.min.js') !!}

    	@yield('scripts')

  </body>
</html>
