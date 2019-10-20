@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					Dashboard Baby...
					
					@if (count($foods) > 0)
						@foreach ($foods as $food)
							{{$food->name}} <br />
						@endforeach
					@else
						<p>No Foods... </p>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection