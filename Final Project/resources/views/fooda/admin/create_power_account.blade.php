@extends('layout.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<form method="GET" action="{{url(/create/power_account)}}">
						<label for="account_name">Name: </label>
							<input type="text" name="account_name" />
						<label for="post_limit">Name: </label>
							<input type="text" name="post_limit" value="200" />
						<input type="submit" value="Submit" name="create_power_account">
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection;