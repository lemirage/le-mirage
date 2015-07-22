
@extends('front.templatelogin')

@section('main')

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
	<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
		<ul class="cd-switcher">
			<li><a href="#0">{{ trans('front/login.connection') }}</a></li>
			<li>	{!! link_to('auth/register',trans('front/login.register')) !!}</li>
		</ul>
		<div id="cd-login"> <!-- log in form -->
				{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form' ,'class' => 'cd-form' ]) !!}
				<p>{{ trans('front/login.text') }}</p>
				@if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif
				<p class="fieldset">
					<label class="image-replace cd-email" for="signin-email">{{trans('front/login.log')}}</label>
					<input name="log" class="full-width has-padding has-border" id="signin-email" type="text" placeholder="E-mail">
					<span class="cd-error-message">Error here!</span>
				</p>

				<p class="fieldset">
					<label class="image-replace cd-password" for="signin-password"> {{trans('front/login.password')}}</label>
					<input name="password" class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
					<a href="#0" class="hide-password">Hide</a>
					<span class="cd-error-message">Error here!</span>
				</p>


				<p class="fieldset">
					{!! Form::submit(trans('front/form.send')) !!}

				</p>

								<p class="fieldset">
									<input name='memory' type="checkbox" id="remember-me" checked>
									<label for="remember-me">{{trans('front/login.remind')}}</label>
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
{!! HTML::script('js/mainlogin.js') !!}
@stop
