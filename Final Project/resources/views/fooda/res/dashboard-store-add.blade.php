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
			<li class="active"><a><i class="material-icons">playlist_add</i>Add Post</a></li>
			<li><a href="{{url('/store/myposts')}}" class="waves-effect waves-green"><i class="material-icons">assignment_ind</i>My Posts</a></li>
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
				<form class="col s12" method="post" action="{{url('/store/createpost')}}" files=true enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="account_id" value="{{$account_id}}"/> 
					<h4 class="green-text darken-2 center-align">Add a Post</h4>

					<div class="row">
						<div class="input-field col s12">
							<input id="title" name="title" type="text" class="validate white-text" required autofocus>
							<label for="brand">Title</label>
						</div>
					</div>

					<div class="row">
						<div class="file-field input-field s12">
							<div class="btn green darken-2">
								<span>Upload File</span>
								<input type="file" name="image">
							</div>
							<div class="file-path-wrapper">
								<input placeholder="Banner file" class="file-path validate" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="description" name="description" class="materialize-textarea" ></textarea>
							<label for="description">Description</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="address" name="Address" type="text" class="validate white-text" >
							<label for="address">Address</label>
						</div>
					</div>


					<div class="row">
						<div class="input-field col s12 right-align">
							<a href="#" onclick="$(this).closest('form').submit()" class="waves-effect waves-light green darken-2 btn">Add Post</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
@endsection