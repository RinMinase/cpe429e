@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					This is a testing... 
					<br /> <br />
					@if (Auth::guest())
						Guest
					@else
						{{Auth::user()->name}}
					@endif
					<br /> <br />
					{{$name}}
					<br /> <br />
					@foreach($info as $inf)
						{{$inf->id}} | {{$inf->name}} | {{$inf->created_at}} <br />
					@endforeach
				</div><div class="panel">
					 <form class="form-horizontal" role="form" method="GET" action="{{url('/testing')}}">
						{{ csrf_field() }}
						Text: <input type="text" name="name" /><br />
						<input type="submit" value="Submit" />
					 </form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('testing')



@endsection