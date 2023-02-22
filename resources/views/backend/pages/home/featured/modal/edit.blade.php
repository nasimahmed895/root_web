<form action="{{ route('featured.update', $featured->id) }}" method="post" class="ajax-submit" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>heading</label>
        <input type="text" class="form-control" name="heading" value="{{ $featured->heading }}" required>
    </div>
    <div class="form-group">
        <label>text</label>
        <textarea name="text" id="" cols="30" class="form-control" rows="5" required>{{ $featured->text }}</textarea>

    </div>

    <div class="form-group">
        <input type="file" name="image" class="dropify"
            data-default-file="{{ asset('/public/' . $featured->image) }}" />
    </div>


    <button type="submit" id="next-button " class="btn btn-primary float-end">Submit</button>
</form>
<script>
    //dropify
    $('.dropify').dropify();
</script>
