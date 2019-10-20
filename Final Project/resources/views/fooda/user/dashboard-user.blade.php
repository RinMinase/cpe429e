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
		
		@if(Auth::check())
			<ul id="nav-mobile" class="side-nav fixed">
				<li>
					<div class="userView">
						<img class="background" src="{{ URL::asset('/img/image.jpg') }}" style="width: 100%;">
						<span class="white-text name" style="margin-top: 64px;">{{Auth::user()->name}}</span>
						<span class="white-text email">{{Auth::user()->email}}</span>
					</div>
				</li>
				@if($isAdmin === 'true')
				<li class="bold"><a href="{{url('\view\users')}}" ><i class="material-icons">perm_identity</i>Admin</a></li>
				@endif
				@if($hasStore === 'true')
				<li class="bold"><a href="{{url('\store\myposts')}}"><i class="material-icons">work</i>Store</a></li>
				@endif
				<li class="active"><a><i class="material-icons">view_quilt</i>Posts</a></li>
				@forelse($favorites as $favorite)
					<li><a href="{{url('/viewfavorites/'.$favorite->idpower_account)}}" class="waves-effect waves-green">{{$favorite->brand}}</a></li>
				@empty
					<li><a>No Favorites</a></li>
				@endforelse
				
				
			</ul>
		@endif
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
				@if($loop->first)
				<div class="col s12 m12 l12">
				@else
				<div class="col s12 m12 l6">
				@endif
					<div class="card">
						<div class="fixed-action-btn" style="position: absolute; right: 5px; top: -10px;">
							
							<form method="GET" action="{{url('/favorites/'.$post->idpower_account)}}">
								<a href="#" onclick="$(this).closest('form').submit()" class="btn-floating waves-effect waves-light green tooltipped" data-position="left" data-delay="50" data-tooltip="Add to Favorites" style="width: 37px; height: 37px;"><i class="material-icons">add</i></a>
							</form>
						</div>
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="{{ url(''.$post->poster) }}">
						</div>
						<div class="card-content">
							<span class="card-title activator green-text text-darken-4">{{$post->brand}}<i class="material-icons right">more_vert</i></span>
							<p class="bold">{{$post->title}}</p>
							<p></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{{$post->brand}}<i class="material-icons right">close</i></span>
							<p>{{$post->description}}</p>
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