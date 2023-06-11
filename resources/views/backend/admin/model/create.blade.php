<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif
    <form method="post" class="ajax-submit slimscroll" autocomplete="off" action="{{ route('admin.store') }}"
        enctype="multipart/form-data">
        @csrf
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
        <button type="submit" id="next-button" class="btn btn-primary float-enk">submit</button>
    </form>
</div>
