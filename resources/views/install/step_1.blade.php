@extends('layouts.install')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-signin my-5">
				<div class="card-header text-center">
					Check Requirements
				</div>
				<div class="card-body">
					@if(empty($requirements))
					<div class="text-center mb-4">  
						<h4>Your Server is ready for installation.</h4>
					</div>

					<div class="col-md-4 m-auto">
						<a href="{{ url('install/database') }}" class="btn btn-primary btn-block">Next</a>
					</div>
					@else
					@foreach($requirements as $r)
					<p class="text-danger"><i class="glyphicon glyphicon-info-sign"></i> {{ $r }}</p>
					@endforeach	
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
