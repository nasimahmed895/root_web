<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </div>
    @endif
    <form method="post" class="ajax-submit " autocomplete="off" action="{{ route('admin.update', $user->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group">
            <input type="file" name="image" id="" class="dropify">
        </div>


        <button type="submit" id="next-button " class="btn btn-primary float-end">Submit</button>
    </form>
</div>

<script>
    $('.dropify').dropify();
</script>
