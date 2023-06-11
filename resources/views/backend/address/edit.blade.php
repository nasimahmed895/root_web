@extends('backend.app')
@section('container')
    <div class="container ">
        <form method="post" class="" autocomplete="off" action="{{ route('address.update', $address->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row card">
                <div class="col-md-12">
                    <div class="row card">
                        <div class="col-md-12">
                            <div class="row field_group my-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="4" required>{{ $address->title }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang(' Address') }}</label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" required>{{ $address->address }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Office Start Time') }}</label>
                                        <input type="time" class="form-control" value="{{ $address->start_time }}"
                                            name="start_time" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang(' Office End Time') }}</label>
                                        <input type="time" class="form-control " value="{{ $address->end_time }}"
                                            name="end_time" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Country Code</label>
                                        <input type="text" class="form-control" name="country_code"
                                            value="{{ $address->country_code }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $address->phone }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">image</label>
                                    <input type="file" data-default-file="{{ asset('/public/' . $address->image) }}"
                                        class="form-control dropify" name="image">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" data-selected="{{ $address->status }}"
                                            name="status" required>
                                            <option value="1">{{ _lang('Active') }}</option>
                                            <option value="0">{{ _lang('In-Active') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary btn-sm">
                            {{ _lang('Update') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('javascript')
@endsection
