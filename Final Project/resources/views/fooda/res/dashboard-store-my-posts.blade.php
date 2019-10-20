@extends('layouts.app1')

@section('header')
	<header>
		<nav class="top-nav green darken-3">
			<div class="container" style="padding-left: 250px;">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Dashboard</a>
					<ul class="right">
						<li>
							<a href="{{ url('/logout') }}"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
					
				</div>
			</div>
		</nav>

		<ul id="nav-mobile" class="side-nav fixed">
			<li>
				<div class="userView">
					<img class="background" src="{{ URL::asset('/img/image.jpg') }}" style="width: 100%;">
					<span class="white-text name" style="margin-top: 64px;">{{Auth::user()->name}}</span>
					<span class="white-text email">{{Auth::user()->email}}</span>
				</div>
			</li>
			<li><a class="grey lighten-1"><i class="material-icons">web</i>Posts Remaining: {{$post_limit}}</a></li>
			<li><a href="{{url('/user')}}" class="waves-effect waves-green"><i class="material-icons">perm_identity</i>Home</a></li>
			<li><a href="{{url('/store/create')}}" class="waves-effect waves-green"><i class="material-icons">playlist_add</i>Add Post</a></li>
			<li class="active"><a><i class="material-icons">assignment_ind</i>My Posts</a></li>
			<li><a href="{{url('/store/view')}}" class="waves-effect waves-green"><i class="material-icons">view_quilt</i>Posts</a></li>
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li>
						<a class="collapsible-header"><i class="material-icons">turned_in_not</i>Favorites<i class="material-icons right" style="margin-right: 0px;">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								@forelse($favorites as $favorite)
									<li><a href="#" class="waves-effect waves-green">{{$favorite->brand}}</a></li>
								@empty
									<li><a>No Favorites</a></li>
								@endforelse
							</ul>
						</div>
					</li>
				</ul>
			</li>
		</ul>
	</header>
@endsection

@section('content')
	<main>
		<div class="container" style="padding-left: 250px;">
			<div class="row top-row">
				<div class="input-field col s12 l12">
					<i class="material-icons prefix white-text">search</i>
					<input id="search" type="text" class="validate white-text">
					<label for="search">Search</label>
				</div>
				@forelse($posts as $post)
				<div class="col s12 m12 l6">
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