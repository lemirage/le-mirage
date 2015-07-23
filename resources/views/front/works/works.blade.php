<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8" />

	<title>Le Mirage - work</title>

	<!-- CSS -->		{!! HTML::style('css/main_front.css') !!}

  		{!! HTML::style('work/css/reset.css') !!}
        		{!! HTML::style('work/css/stylesheet.css') !!}
              		{!! HTML::style('work/css/style.css') !!}


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<!-- IE fix for HTML5 tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- jQuery and Modernizr-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


    {!! HTML::script('work/js/script.js') !!}
    {!! HTML::script('work/js/jquery.countdown.js') !!}
    {!! HTML::script('work/js/modernizr.custom.js') !!}



</head>

<body>

	<header>
		<h1>I'm working our butts off to finish my tinny website</h1>
		<p>I'm doing the best to finish my website before the counter, but you can’t help me.</p>
    <br>
    <a href="{!! url('/') !!}">{{ trans('front/missing.button') }}</a>

	</header>

	<div id="main">

		<div id="counter"></div>

	</div>

</body>

</html>
