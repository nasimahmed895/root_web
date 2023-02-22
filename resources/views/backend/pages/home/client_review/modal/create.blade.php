<form action="{{ route('client-review.store') }}" method="post" class="ajax-submit" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" name="designation" value="{{ old('designation') }}" required>
    </div>
    <div class="form-group">
        <label>text</label>
        <textarea name="text" id="" cols="30" class="form-control" rows="3">{{ old('text') }}</textarea>

    </div>

    <div class="form-group">
        <input type="file" name="image" id="" class="dropify" required>
    </div>
    <button type="submit" id="next-button " class="btn btn-primary float-end">Submit</button>
</form>
<script>
    //dropify
    $('.dropify').dropify();
</script>
