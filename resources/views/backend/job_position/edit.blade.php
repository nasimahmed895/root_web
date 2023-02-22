@extends('backend.app')
@section('container')
    <form class="" method="post" autocomplete="off" action="{{ route('job-post.update', $career->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ml-2">
                                <h2 class="b">Information</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Title') }}</label>
                                    <input type="text" class="form-control" name="title" value="{{ $career->title }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Company Name') }}</label>
                                    <input type="text" class="form-control" name="company_name"
                                        value="{{ old('company_name') }} RootDevs" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Location') }}</label>
                                    <input type="text" class="form-control" name="location"
                                        value="{{ $career->location }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Vacancy') }}</label>
                                    <input type="text" class="form-control" name="vacancy" value="{{ $career->vacancy }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Date') }}</label>
                                    <input type="date" class="form-control" name="date" required
                                        value="<?php echo date('Y-m-d', $career->date); ?>" id="datepicker">


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Address') }}</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ $career->address }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Experience') }}</label>
                                    <input type="text" class="form-control" name="experience"
                                        value="{{ $career->experience }}" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Work Level') }}</label>
                                    <select class="form-control select2" name="work_level"
                                        data-selected="{{ $career->work_level }}" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        <option value="Fresher">{{ _lang('Fresher') }}</option>
                                        <option value="Junior">{{ _lang('Junior') }}</option>
                                        <option value="Intermediate">{{ _lang('Intermediate') }}
                                        </option>
                                        <option value="Senior">{{ _lang('Senior') }}</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Employee') }}</label>
                                    <select class="form-control select2" name="job_time"
                                        data-selected="{{ $career->job_time }}" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        <option selected value="Full Time Job">{{ _lang('Full Time Job') }}</option>
                                        <option value="part time job">{{ _lang('part time job') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Offer Salary') }}</label>
                                    <input type="text" class="form-control" name="salary"
                                        value="{{ $career->salary }}  " required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Status') }}</label>
                                    <select class="form-control select2" data-selected="{{ $career->status }}"
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12 ml-2">
                                <h2 class="b">Description</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Overview</label>
                                    <textarea name="overview" id="" class="w-100" rows="5">{{ $career->overview }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Educational Requirements</label>
                                    <textarea name="requirements" id="" class="w-100" rows="5">{{ $career->requirements }}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row field_group my-2">
                                    @foreach (json_decode($career->overview_list) as $overview_list)
                                        <div class="col-md-12">
                                            <div class="form-group text-right">
                                                <button class="btn btn-danger remove-row btn-sm text-white mt-1">-</button>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Job Requirements:</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $overview_list->list }}" name="overview_list[]"
                                                    value="" required="">
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-md-12 ml-1">
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary add-more btn-sm" data-team="LR56SVES0">
                                        Add New
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="reset" class="btn btn-danger btn-sm">{{ _lang('Reset') }}</button>
                                    <button type="submit" class="btn btn-primary btn-sm">{{ _lang('Save') }}</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="d-none">
        <div class="field_group repeat col-md-12">
            <div class="row my-2">
                <div class="col-md-12">
                    <div class="form-group text-right">
                        <button class="btn btn-danger remove-row btn-sm text-white mt-1">-</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('overview_list[]') }}"
                            name="overview_list[]" required="">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        $(document).on('click', '.add-more', function() {
            var form = $('.repeat').clone().removeClass('repeat');
            form.find('.image').dropify();
            $(this).closest('.col-md-12').before(form);
        });

        $(document).on('click', '.remove-row', function() {
            $(this).closest('.field_group').remove();
        });
    </script>
@endsection
