@extends('front.templatelogin')

@section('main')
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
	<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
		<ul class="cd-switcher">
				<li>{!! link_to('auth/login', trans('front/login.connection') ) !!}</li>
				<li class="selected">	<a href="#">{!!  trans('front/login.register') !!}</a></li>
			</ul>

			<div id="cd-signup"> <!-- sign up form -->
					{!! Form::open(['url' => 'auth/register', 'method' => 'post', 'role' => 'form','class' => 'cd-form']) !!}
								<h2 class="intro-text text-center">{{ trans('front/register.title') }}</h2>
								@if(session()->has('error'))
									@include('partials/error', ['type' => 'danger', 'message' => session('error')])
								@endif
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">{{ trans('front/register.pseudo')}}</label>
						<input name="username" class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">{{trans('front/register.email')}}</label>
						<input name="email" class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">{{trans('front/register.password')}}</label>
						<input name="password" class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">{{trans('front/register.confirm-password')}}</label>
						<input name="password_confirmation" class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password Confirm">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
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
@stop
