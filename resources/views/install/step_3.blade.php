@extends('layouts.install')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-signin my-5">
				<div class="card-header text-center">
					Login Details
				</div>
				<div class="card-body">
					@if ($errors->any())
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						@foreach ($errors->all() as $error)
						<span>{{ $error }}</span>
						@endforeach
					</div>
					@endif
					<form action="{{ url('install/store_user') }}" method="post" autocomplete="off">
						{{ csrf_field() }}
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>				
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>				
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>	
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" required>
						</div>
						<button type="submit" id="next-button" class="btn btn-primary">Next</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

