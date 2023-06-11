<form action="{{ route('client-review.update', $client->id) }}" method="post" class="ajax-submit" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{ $client->name }}" required>
    </div>
    <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" name="designation" value="{{ $client->designation }}" required>
    </div>
    <div class="form-group">
        <label>text</label>
        <textarea name="text" id="" cols="30" class="form-control" rows="3">{{ $client->text }}</textarea>

    </div>

    <div class="form-group">
        <input type="file" name="image" class="dropify"
            data-default-file="{{ asset('/public/' . $client->image) }}" />
    </div>


    <button type="submit" id="next-button " class="btn btn-primary float-end">Submit</button>
</form>
<script>
    //dropify
    $('.dropify').dropify();
</script>
