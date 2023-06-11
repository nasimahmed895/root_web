@extends('backend.app')
@section('container')
    <div class="container ">
        <div id="address" class="tab-pane fade accordion-item" role="tabpanel">
            <h5 class="mb-3 header-title card-title">
                {{ _lang('Add New Address') }}</h5>
            <form method="post" class="" autocomplete="off" action="{{ route('address.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row card">
                    <div class="col-md-12">
                        <div class="row field_group my-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Title') }}</label>
                                    <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="4" required>{{ old('title') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang(' Address') }}</label>
                                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" required>{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Office Start Time') }}</label>
                                    <input type="time" class="form-control" value="{{ old('start_time') }}"
                                        name="start_time" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang(' Office End Time') }}</label>
                                    <input type="time" class="form-control " value="{{ old('end_time') }}"
                                        name="end_time" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Country Code</label>
                                    <input type="number" class="form-control" name="country_code"
                                        value="{{ old('country_code') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">image</label>
                                <input type="file" class="form-control dropify"required name="image">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Status') }}</label>
                                    <select class="form-control select2" name="status" required>
                                        <option value="1">{{ _lang('Active') }}</option>
                                        <option value="0">{{ _lang('In-Active') }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary btn-sm">
                                {{ _lang('Save') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
