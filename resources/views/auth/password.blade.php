

@extends('front.templatelogin')

@section('main')
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
	<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
		<ul class="cd-switcher">
				<li>{!! link_to('auth/login', trans('front/login.connection') ) !!}</li>
				<li class="selected">	<a href="#">{!!  trans('front/login.register') !!}</a></li>
			</ul>

			<div id="cd-signup"> <!-- sign up form -->
					{!! Form::open(['url' => 'password/email', 'method' => 'post', 'role' => 'form','class' => 'cd-form']) !!}
								<h2 class="intro-text text-center">{{ trans('front/password.title') }}</h2>
								@if(session()->has('status'))
											@include('partials/error', ['type' => 'success', 'message' => session('status')])
								@endif
								@if(session()->has('error'))
									@include('partials/error', ['type' => 'danger', 'message' => session('error')])
								@endif

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">{{trans('front/password.email')}}</label>
						<input name="email" class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>


	{!! Form::text('address', '', ['class' => 'hpet']) !!}

					<p class="fieldset">
						{!! Form::submit(trans('front/form.send')) !!}
					</p>
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
