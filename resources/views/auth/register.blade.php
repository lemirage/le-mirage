@extends('front.templatelogin')

@section('main')
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
	<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
		<ul class="cd-switcher">
				<li>{!! link_to('auth/login', trans('front/login.connection') ) !!}</li>
				<li class="selected">	<a href="#">{!!  trans('front/login.register') !!}</a></li>
			</ul>

			<div id="cd-signup"> <!-- sign up form -->
					{!! Form::open(['url' => 'auth/register', 'method' => 'post', 'role' => 'form','class' => 'cd-form','id'=>'form']) !!}


								<h2 class="intro-text text-center">{{ trans('front/register.title') }}</h2>

								@if(session()->has('error'))
									@include('partials/error', ['type' => 'danger', 'message' => session('error')])
								@endif

					<p class="fieldset">
						{!! Form::control('text', 6, 'username', $errors, trans('front/register.pseudo'), null, [trans('front/register.warning'), trans('front/register.warning-name')],'Username','full-width has-padding has-border','signup-username') !!}
					</p>

					<p class="fieldset">
						{!! Form::control('email', 6, 'email', $errors, trans('front/register.email'),'','','E-mail','full-width has-padding has-border','signup-email') !!}
					</p>

					<p class="fieldset">
								{!! Form::control('password', 6, 'password', $errors, trans('front/register.password'), null, [trans('front/register.warning'), trans('front/register.warning-password')],'Password','full-width has-padding has-border','signup-password') !!}


					</p>

					<p class="fieldset">
						{!! Form::control('password', 6, 'password_confirmation', $errors, trans('front/register.confirm-password'),'','','Password Confirm','full-width has-padding has-border','signup-password2') !!}
						

					</p>

					{!! Form::text('address', '', ['class' => 'hpet']) !!}

					<p class="fieldset">
						{!! Form::submit(trans('front/form.send')) !!}
					</p>


				<div class="row">
					<div class="col-lg-12">
						{!! link_to('password/email', trans('front/login.forget')) !!}
					</div>

				</div>

				<p class="fieldset">

				<a href="{!! url('/') !!}">{{ trans('front/missing.button') }}</a>

				</p>
				{!! Form::close() !!}
			</div>
			</div>
		</div>
@stop
@section('script')
{!! HTML::script('js/mainregister.js') !!}
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js" charset="utf-8"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js" charset="utf-8"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" charset="utf-8"></script>
<script type="text/javascript">
$('#form').validate({
				rules: {
						username: {
								minlength: 5,
								maxlength: 30,
								required: true
						},
						email: {
								required: true,
								email: true
						},
						password: {
								minlength: 8,
								required: true
						},
						password_confirmation: {
								equalTo: "#signup-password"
						}
				},
				highlight: function (element) {
						$(element).closest('input').removeClass('success').addClass('error');
				},
				success: function (element) {
						element.addClass('valid')
								.closest('input').removeClass('error').addClass('success');
				}
		});
</script>

@stop
