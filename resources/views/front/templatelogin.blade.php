<!doctype html>
<html lang="fr" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		{!! HTML::style('css/bootstrap.min.css') !!}
{!! HTML::style('css/resetlogin.css') !!}
{!! HTML::style('css/stylelogin.css') !!}
{!! HTML::style('css/font-awesome.css') !!}


	<title>Log In &amp; Sign Up Form</title>

</head>
<body style="background-color:#363844; height:100%;width:100%;">
	<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    	@yield('main')

	</div> <!-- cd-user-modal -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


  {!! HTML::script('js/modernizr.js') !!}
	{!! HTML::script('js/bootstrap.min.js') !!}
	@yield('script')
</body>

</html>
