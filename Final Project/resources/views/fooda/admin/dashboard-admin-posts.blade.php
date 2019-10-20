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
			<li class="active">
				<a><i class="material-icons">view_quilt</i>Posts</a>
			</li>
			<li class="bold">
				<a href="{{url('/create/user_account')}}" class="waves-effect waves-green"><i class="material-icons">playlist_add</i>Add Account</a>
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
				@forelse($posts as $post)
				@if($loop->first)
				<div class="col s12 m12 l12">
				@else
				<div class="col s12 m12 l6">
				@endif
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="{{ url(''.$post->poster) }}">
						</div>
						<div class="card-content">
							<span class="card-title activator green-text text-darken-4">{{$post->brand}}<i class="material-icons right">more_vert</i></span>
							<p class="bold">{{$post->title}}</p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{$post->brand}}<i class="material-icons right">close</i></span>
							<p>{{$post->info}}</p>
						</div>
					</div>
				</div>	
				@empty
				<p class="white-text"> No posts... </p>
				@endforelse
			</div>
		</div>
	</main>
@endsection