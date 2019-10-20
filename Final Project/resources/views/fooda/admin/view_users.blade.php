@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
						<table class="table">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Created At</th>
								<th>Options</th>
							</tr>
								@foreach($users as $user)
									<tr>
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->created_at}}</td>
										<td> <a href="#{{$user->id}}"><input type="button" value="Edit"></a></td>
									</tr>
								@endforeach
						</table>
				</div>
			</div>
		</div>
	</div>
@endsection;