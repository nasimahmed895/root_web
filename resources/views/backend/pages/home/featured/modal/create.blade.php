<form action="{{ route('featured.store') }}" method="post" class="ajax-submit" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>heading</label>
        <input type="text" class="form-control" name="heading" value="{{ old('heading') }}" required>
    </div>
    <div class="form-group">
        <label>text</label>
        <textarea name="text" id="" cols="30" class="form-control" value="{{ old('text') }}" rows="5"
            required></textarea>

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
