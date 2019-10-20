@extends('layouts.app1')

@section('header')
	<header>
		<nav class="top-nav green darken-3">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo">Fooda</a>
					<ul class="right">
						<li><a href="{{url('\login')}}" style="width: 150px; text-align: center;">Login</a></li>
						<li class="green darken-4"><a href="{{url('\register')}}" style="width: 150px; text-align: center;">Register</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
@endsection

@section('content')
	<main>
		<div class="container">
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
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="./images/caliber.png">
						</div>
						<div class="card-content">
							<span class="card-title activator green-text text-darken-4">{{$post->brand}}<i class="material-icons right">more_vert</i></span>
							<p class="bold">{{$post->title}}</p>
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