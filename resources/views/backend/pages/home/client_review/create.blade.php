@extends('backend.app')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-2">
                    <h6 class="float-left" style="float: left">Featured Create</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2 bg-white">
                    <div class="card-body">

                        <form action="{{ route('featured.store') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" class="form-control" name="designation"
                                    value="{{ old('designation') }}" required>
                            </div>
                            <div class="form-group">
                                <label>text</label>
                                <textarea name="text" id="" cols="30" class="form-control" rows="5">{{ old('text') }}</textarea>

                            </div>

                            <div class="form-group">
                                <input type="file" name="image" id="" class="dropify" required>
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
