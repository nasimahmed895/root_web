@extends('backend.app')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-2">
                    <h6 class="float-left" style="float: left">Featured Update</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2 bg-white">
                    <div class="card-body">
                        <form action="{{ route('featured.update', $featured->id) }}" method="post" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>heading</label>
                                <input type="text" class="form-control" name="heading" value="{{ $featured->heading }}"
                                    required>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
@endsection
