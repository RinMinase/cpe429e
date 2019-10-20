@extends('layouts.app1')

@section('header')
	<header>
		<nav class="green darken-3">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Register</a>
				</div>
			</div>
		</nav>
	</header>
@endsection

@section('content')

	<main>
		<div class="container">
			<div class="row top-row">
                <form class="col s12 l5" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
					<div class="row">
						<div class="input-field col s12">
							 <input id="name" type="text" class="validate white-text" name="name" value="{{ old('name') }}" required autofocus>
							<label for="name">Name</label>
							
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						
                             <input id="email" type="email" class="validate white-text" name="email" value="{{ old('email') }}" required>
							<label for="email">Email Address</label>
							
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
                            <input id="password" type="password" class="validate white-text" name="password" required>
							<label for="password">Password</label>
							
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
						<div class="input-field col s12 l6">
                             <input id="password-confirm" type="password" class="validate white-text" name="password_confirmation" required>
							<label for="password-confirm">Confirm Password</label>
							
							
							@if ($errors->has('password_confirmation'))
								<span class="help-block">
									<strong>{{ $errors->first('password_confirmation') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 right-align">
							<a href="#" onclick="$(this).closest('form').submit()" class="waves-effect waves-light green darken-2 btn">Register</a>
						</div>
					</div>
				</form>
			</div>
			
			<div class="row">
				<div class="col s12 l5 center-align">
					<hr>
					<p class="caption white-text">Already registered?</p>

					<a href="{{url('/login')}}" class="waves-effect waves-light green darken-2 btn">Login</a>
				</div>
			</div>
		</div>
	</main>
@endsection