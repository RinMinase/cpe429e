@extends('layouts.app1')

@section('header')
	<header>
		<nav class="green darken-3">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Login</a>
				</div>
			</div>
		</nav>
	</header>
@endsection
	
@section('content')

	<main>
		<div class="container">
			<div class="row top-row">
				
                <form class="col s12 l5" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
					
					<div class="row">
						<div class="input-field col s12">
                            <input id="email" type="email" class="validate white-text" name="email" value="{{ old('email') }}" required autofocus>
							<label for="email">Email</label>
							
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12">
                            <input id="password" type="password" class="validate white-text" name="password" required>
							<label for="password">Password</label>
							
							 @if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>
					
					<div class="row">
						<div class="input-field col s12 right-align">
							<a href="#" onclick="$(this).closest('form').submit()" class="waves-effect waves-light green darken-2 btn">Login</a>
						</div>
					</div>
				</form>
			</div>
			
			<div class="row">
				<div class="col s12 l5 center-align">
					<hr>
					<p class="caption white-text">Not a user?</p>

					<a href="{{url('/register')}}" class="waves-effect waves-light green darken-2 btn">Register</a>
				</div>
			</div>
		</div>
	</main>
@endsection