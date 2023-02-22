@extends('layouts.install')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-signin my-5">
				<div class="card-header text-center">
					Database Settings
				</div>
				<div class="card-body">
					@if (Session::has('error'))
					<div class="alert alert-danger">
						{{ Session::get('error') }}
					</div>
					@endif
					<form action="{{ url('install/process_install') }}" method="post" autocomplete="off">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Hostname:</label>
							<input type="text" class="form-control" value="localhost" name="hostname" id="hostname">
						</div>

						<div class="form-group">
							<label>Database:</label>
							<input type="text" class="form-control" name="database" id="database">
						</div>

						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" name="username" id="username">
						</div>

						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button type="submit" id="next-button" class="btn btn-primary">Next</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('js-script')
<script type="text/javascript">
	$(document).ready(function() {
		$('#next-button').attr('disabled', true);

		$('#hostname, #username, #database').keyup(function() {
			inputCheck();
		});
	});

	function inputCheck() {
		hostname = $('#hostname').val();
		username = $('#username').val();
		database = $('#database').val();

		if (hostname != '' && username != '' && database != '') {
			$('#next-button').attr('disabled', false);
		} else {
			$('#next-button').attr('disabled', true);
		}
	}
</script>
@stop
