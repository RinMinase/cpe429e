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
			<li class="bold">
				<a href="{{url('/create/user_account')}}" class="waves-effect waves-green"><i class="material-icons">playlist_add</i>Add Account</a>
			</li>
			<li class="active">
				<a><i class="material-icons">recent_actors</i>View Accounts</a>
			</li>
			<li class="bold">
				<a href="{{url('/view/stores')}}" class="waves-effect waves-green"><i class="material-icons">recent_actors</i>View Stores</a>
			</li>
		</ul>
	</header>
@endsection

@section('content')
	<main>
		<div class="container" style="padding-left: 250px; margin-right: 30px; width: 85%;">
			<div class="row top-row">
				<div class="col s12">
					<table class="grey lighten-2">
						<thead>
							<tr>
								<th>ID</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Store Name</th>
								<th class="center-align">Post Limit</th>
								<th>Power Account</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								@if($user->idpower_account == null)
									
								<tr>
									<td>{{$user->id}} </td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td> </td>
									<td></td>
									<td>
										<a class="waves-effect waves-light grey darken-2 btn modal-trigger" href="#modal" style="width: 95%">Normal User</a>
										<!--form class="col s12" method="GET" action="{{url('/create/power_account/'.$user->id)}}">
											{{csrf_field()}}
											<div class="input-field col s4">
												<input id="store-name" type="text" class="validate" name="password" required>
												<label for="store-name">Store Name</label>
											</div>
											<div class="input-field col s4">
												<input id="post-limit" type="text" value="200" name="post-limit" class="validate">
												<label for="post-limit">Post Limit</label>
											</div>
											<div class="input-field col s4">
												<a href="#" onclick="$(this).closest('form').submit()" class="waves-effect waves-light btn" style="width: 95%">Submit</a>
											</div>
										</form-->
									</td>
								</tr>
								
								@else
									<tr>
										<td> {{$user->id}} </td>
										<td> {{$user->name}}</td>
										<td> {{$user->email}}</td>
										<td> {{$user->brand}}</td>
										<td class="center-align"> {{$user->post_limit}}</td>
										<td>
											<a class="waves-effect waves-light green darken-2 btn" style="width: 95%">Power User</a>
										</td>
									</tr>
								@endif
							@endforeach
							
								
						</tbody>
					</table>
				</div>
			</div>
			
		</div>
	</main>
	
	<div id="modal" class="modal" style="width: 400px;">
		<form method="GET" action="{{url('/create/power_account/'.$user->id)}}">
			<div class="modal-content">
				<h4>Power User</h4>
				<div class="row" style="margin-bottom: 0px;">
					<div class="input-field col s8">
						<input id="store-name" name="store-name" type="text" class="validate">
						<label for="store-name">Store Name</label>
					</div>
					<div class="input-field col s4">
						<input id="post-limit" name="post-limit" type="text" value="200" class="validate">
						<label for="post-limit">Post Limit</label>
					</div>
					
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" onclick="$(this).closest('form').submit()" class="waves-effect waves-light btn green darken-2" style="width: 300px; margin: 0px 44px;">Convert to Power User</a>
			</div>
		</form>
	</div>

	
@endsection

