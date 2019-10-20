@extends('layouts.app1')

@section('header')
	<header>
		<nav class="top-nav green darken-3">
			<div class="container" style="padding-left: 250px;">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Admin Dashboard</a>
				</div>
			</div>
		</nav>

		<ul id="nav-mobile" class="side-nav fixed">
			@if(Auth::check())
			<li>
				<div class="userView">
					<img class="background" src="{{ URL::asset('/img/image.jpg') }}" style="width: 100%;">
					<span class="white-text name" style="margin-top: 64px;">{{Auth::user()->name}}</span>
					<span class="white-text email">{{Auth::user()->email}}</span>
				</div>
			</li>
			@endif
			<li><a href="{{url('/user')}}" class="waves-effect waves-green"><i class="material-icons">view_quilt</i>Home</a></li>
			<li class="bold">
				<a href="{{url('/view/posts')}}" class="waves-effect waves-green"><i class="material-icons">view_quilt</i>Posts</a>
			</li>
			<li class="active">
				<a><i class="material-icons">playlist_add</i>Add Account</a>
			</li>
			<li class="bold">
				<a href="{{url('/view/users')}}" class="waves-effect waves-green"><i class="material-icons">recent_actors</i>View Accounts</a>
			</li>
			<li class="bold">
				<a href="{{url('/view/stores')}}" class="waves-effect waves-green"><i class="material-icons">recent_actors</i>View Stores</a>
			</li>
		</ul>
	</header>
@endsection

@section('content')
	<main>
		<div class="container" style="padding-left: 250px;">
			<div class="row top-row">
                <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
					<h4 class="green-text darken-2 center-align">Add an Account</h4>

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
							
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6">
                            <input id="password" type="password" class="validate white-text" name="password" required>
							<label for="password">Password</label>
							
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
						<div class="input-field col s12 l6">
                            <input id="password-confirm" type="password" class="validate white-text" name="password_confirmation" required>
							<label for="rep-password">Repeat Password</label>
							
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 right-align">
							<a href="#" onclick="$(this).closest('form').submit()" class="waves-effect waves-light green darken-2 btn">Register User</a>
						</div>
					</div>
				</form>

			</div>
		</div>
	</main>
@endsection