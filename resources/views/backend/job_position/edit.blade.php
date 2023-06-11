@extends('backend.app')
@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
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
                                    <label class="control-label">{{ _lang('Expiry Date') }}</label>
                                    <input type="date" class="form-control" name="date" required
                                        value="<?php echo date('Y-m-d', $career->date); ?>" id="datepicker">


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
                                    <textarea name="overview" id="" class="w-100 summernote" rows="5">{!! $career->overview !!}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Job Responsibilities</label>
                                    <textarea name="job_requirement" id="" class="w-100 summernote" rows="5">{!! $career->job_requirement !!}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Educational Requirement</label>
                                    <textarea name="requirement" id="" class="w-100 summernote" rows="5">{!! $career->requirement !!}</textarea>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Compensation & Other Benefits</label>
                                    <textarea name="benefits" id="" class="w-50 summernote " rows="5">{!! $career->benefits !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Note</label>
                                    <textarea name="note" id="" class="w-50 summernote " rows="5">{!! $career->note !!}</textarea>
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
@endsection
@section('javascript')
    <script type="text/javascript">
        $('.summernote').summernote({
            height: 200
        });
    </script>
@endsection
