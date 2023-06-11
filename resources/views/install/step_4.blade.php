@extends('layouts.install')

@section('css-stylesheet')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
@endsection

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-signin my-5">
				<div class="card-header text-center">
					System Settings
				</div>
				<div class="card-body">
					<form action="{{ url('install/finish') }}" method="post" autocomplete="off">
						{{ csrf_field() }}

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Company Name</label>						
								<input type="text" class="form-control" name="company_name" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Site Title</label>						
								<input type="text" class="form-control" name="site_title" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Timezone</label>						
								<select class="form-control select2" name="timezone" required>
									<option value="">Select One</option>
									{{ create_timezone_option() }}
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Language</label>						
								<select class="form-control select2" name="language" required>
									{!! load_language('English') !!}
								</select>
							</div>
						</div>

						<input type="hidden" name="android_version_code" value="1" required>
						<input type="hidden" name="ios_version_code" value="1" required>
						<input type="hidden" name="android_live_control" value="off" required>
						<input type="hidden" name="ios_live_control" value="off" required>
						<input type="hidden" name="privacy_policy" value="https://superfootball.com/" required>
						<input type="hidden" name="facebook" value="https://www.facebook.com/" required>
						<input type="hidden" name="youtube" value="http://youtube.com/" required>
						<input type="hidden" name="instagram" value="https://instagram.com/" required>

						<div class="col-md-12">
							<button type="submit" id="next-button" class="btn btn-primary">Finish</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js-script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script type="text/javascript">
	$('.select2').select2();
</script>
@endsection