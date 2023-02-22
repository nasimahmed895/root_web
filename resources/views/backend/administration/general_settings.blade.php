@extends('backend.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/b5vtabs.min.css') }}" />
    <style>
        .card {
            background-color: #F9FBFD
        }

        .body_content {
            background-color: #fff;
            border-top: 1px solid #dee2e6;
            border-left: 0px solid transparent;
            border-bottom: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
            margin-bottom: -2px;
            margin-left: -1px;
        }

        .nav-item {
            cursor: pointer;
        }
    </style>
@endsection
@section('container')
    <!-- Navbar -->
    <div class=" py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">General
                    Settings</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Settings
            </h6>
        </nav>
    </div>
    <!-- End Navbar -->
    <div class="row">
        <div class="col-12">

            <div class=" mb-4">

                <div class=" px-0 pt-0 pb-2">
                    <div class="">

                        <div class="card text-left">
                            <div class="card-body">

                                <div class="row">
                                    <!-- Tabs -->
                                    <div class="col-md-3 p-0">
                                        <ul class="nav nav-tabs left-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <div id="lorem-left-tab" class="nav-link tab-clickable active"
                                                    role="tab" data-bs-toggle="tab" data-bs-target="#lorem-left"
                                                    aria-controls="lorem-left" aria-selected="true">
                                                    General Settings
                                                </div>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <div id="sapien-left-tab" class="nav-link tab-clickable" role="tab"
                                                    data-bs-toggle="tab" data-bs-target="#sapien-left"
                                                    aria-controls="sapien-left" aria-selected="false">
                                                    App & Social Links
                                                </div>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <div id="llanfairpwllgwyngyll-left-tab" class="nav-link tab-clickable"
                                                    role="tab" title="" data-bs-toggle="tab"
                                                    data-bs-target="#leadership" aria-controls="leadership"
                                                    aria-selected="false">
                                                    Leadership
                                                </div>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <div id="llanfairpwllgwyngyll-left-tab" class="nav-link tab-clickable"
                                                    role="tab" title="" data-bs-toggle="tab"
                                                    data-bs-target="#llanfairpwllgwyngyll-left"
                                                    aria-controls="llanfairpwllgwyngyll-left" aria-selected="false">
                                                    Logo & Icon
                                                </div>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <div id="llanfairpwllgwyngyll-left-tab" class="nav-link tab-clickable"
                                                    role="tab" title="" data-bs-toggle="tab"
                                                    data-bs-target="#address" aria-controls="address" aria-selected="false">
                                                    Address
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-9 p-0 body_content">
                                        <div class="container">
                                            <div id="accordion-left-tabs" class="tab-content accordion">
                                                <div id="lorem-left" class="tab-pane fade show active accordion-item"
                                                    role="tabpanel">
                                                    <h5 class="mb-3 header-title card-title">{{ _lang('General Settings') }}
                                                    </h5>
                                                    <form method="post" class="ajax-submit2 params-card" autocomplete="off"
                                                        action="{{ route('general_settings') }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Company Name') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_name"
                                                                        value="{{ get_option('company_name') }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Site Title') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="site_title"
                                                                        value="{{ get_option('site_title') }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Timezone') }}</label>
                                                                    <select class="form-control select2" name="timezone"
                                                                        required>
                                                                        <option value="">{{ _lang('Select One') }}
                                                                        </option>
                                                                        {{ create_timezone_option(get_option('timezone')) }}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Language') }}</label>
                                                                    <select class="form-control select2" name="language"
                                                                        required>
                                                                        {{ load_language(get_option('language')) }}
                                                                    </select>
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
                                                <div id="sapien-left" class="tab-pane fade accordion-item"
                                                    role="tabpanel">
                                                    <h5 class="mb-3 header-title card-title">
                                                        {{ _lang('App & Social Links') }}</h5>
                                                    <form method="post" class="ajax-submit2 params-card"
                                                        autocomplete="off" action="{{ route('general_settings') }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Facebook') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="facebook"
                                                                        value="{{ get_option('facebook') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('linkedin') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="linkedin"
                                                                        value="{{ get_option('linkedin') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('whatsapp') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="whatsapp"
                                                                        value="{{ get_option('whatsapp') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Instagram') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="instagram"
                                                                        value="{{ get_option('instagram') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Youtube') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="youtube"
                                                                        value="{{ get_option('youtube') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('twitter') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="twitter"
                                                                        value="{{ get_option('twitter') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('skype') }}</label>
                                                                    <input type="text" class="form-control"
                                                                        name="skype" value="{{ get_option('skype') }}">
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
                                                <div id="leadership" class="tab-pane fade accordion-item"
                                                    role="tabpanel">
                                                    <div class="accordion-header" role="tab">
                                                        <h5 class="mb-3 header-title card-title">
                                                            {{ _lang('Founder & CEO') }}</h5>
                                                        <form method="post" class="ajax-submit2 params-card"
                                                            autocomplete="off" action="{{ route('general_settings') }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' Name') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="ceo_Name"
                                                                            value="{{ get_option('ceo_Name') }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' Designation') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="ceo_designation"
                                                                            value="{{ get_option('ceo_designation') }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' whatsapp') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="ceo_whatsapp"
                                                                            value="{{ get_option('ceo_whatsapp') }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' skype') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="ceo_skype"
                                                                            value="{{ get_option('ceo_skype') }}"
                                                                            required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' viber') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="ceo_viber"
                                                                            value="{{ get_option('ceo_viber') }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' telegram') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="ceo_telegram"
                                                                            value="{{ get_option('ceo_telegram') }}"
                                                                            required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group text-right">
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-sm">
                                                                            {{ _lang('Update') }}
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="accordion-header" role="tab">
                                                        <h5 class="mb-3 header-title card-title">
                                                            {{ _lang('Co-Founder') }}
                                                        </h5>
                                                        <form method="post" class="ajax-submit2 params-card"
                                                            autocomplete="off" action="{{ route('general_settings') }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' Name') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="co_Name"
                                                                            value="{{ get_option('co_Name') }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' Designation') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="co_designation"
                                                                            value="{{ get_option('co_designation') }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' whatsapp') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="co_whatsapp"
                                                                            value="{{ get_option('co_whatsapp') }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Skype') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="co_skype"
                                                                            value="{{ get_option('co_skype') }}" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' viber') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="co_viber"
                                                                            value="{{ get_option('co_viber') }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang(' telegram') }}</label>
                                                                        <input type="text" class="form-control"
                                                                            name="co_telegram"
                                                                            value="{{ get_option('co_telegram') }}"
                                                                            required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group text-right">
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-sm">
                                                                            {{ _lang('Update') }}
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="llanfairpwllgwyngyll-left" class="tab-pane fade accordion-item"
                                                    role="tabpanel">
                                                    <h5 class="mb-3 header-title card-title">{{ _lang('Logo & Icon') }}
                                                    </h5>
                                                    <form method="post" class="ajax-submit2 params-card"
                                                        autocomplete="off" action="{{ route('general_settings') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Logo') }}</label>
                                                                    <input type="file" class="form-control dropify"
                                                                        name="logo"
                                                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                                                        data-default-file="{{ get_logo() }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Site Icon') }}</label>
                                                                    <input type="file" class="form-control dropify"
                                                                        name="icon"
                                                                        data-allowed-file-extensions="png PNG"
                                                                        data-default-file="{{ get_icon() }}">
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
                                                <div id="address" class="tab-pane fade accordion-item" role="tabpanel">
                                                    <h5 class="mb-3 header-title card-title">{{ _lang('Address') }}</h5>
                                                    <form method="post" class="ajax-submit2 params-card"
                                                        autocomplete="off" action="{{ route('general_settings') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang(' Address') }}</label>
                                                                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="4" required>{{ get_option('address') }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Open') }}</label>
                                                                    <textarea class="form-control" name="open" id="exampleFormControlTextarea1" rows="4" required>{{ get_option('open') }}</textarea>
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
                                                    <h5 class="mb-3 header-title card-title">
                                                        {{ _lang('Add New Phone Number') }}</h5>
                                                    <form method="post" class="" autocomplete="off"
                                                        action="{{ route('general_settings_phone') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @foreach (json_decode($Setting) as $phone)
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row field_group my-2">

                                                                        <div class="col-md-12">
                                                                            <div class="form-group text-right mb-0">
                                                                                <button
                                                                                    class="btn btn-danger remove-row btn-sm text-white mt-1 mb-0">-</button>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Phone</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="phone[]"
                                                                                    value="{{ $phone->phone }}"
                                                                                    required="" required>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">image</label>
                                                                                @if ($phone->image != null)
                                                                                    <input type="file"
                                                                                        class="form-control dropify"
                                                                                        name="image[]"
                                                                                        value="{{ $phone->image }}"
                                                                                        data-default-file="{{ asset('/public/' . $phone->image) }}"
                                                                                        required="" required>
                                                                                @else
                                                                                    <input type="file"
                                                                                        class="form-control dropify"
                                                                                        name="image[]" value=""
                                                                                        data-default-file=""
                                                                                        required="" required>
                                                                                @endif

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                        @endforeach
                                                        <div class="col-md-12 ml-1">
                                                            <div class="form-group text-right">
                                                                <button type="button"
                                                                    class="btn btn-primary add-more btn-sm"
                                                                    data-team="LR56SVES0">
                                                                    Add New
                                                                </button>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-none">
                        <div class="field_group repeat col-md-12">
                            <div class="row my-2">
                                <div class="col-md-12">
                                    <div class="form-group text-right mb-0">
                                        <button class="btn btn-danger remove-row btn-sm text-white mt-1 mb-0">-</button>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control" name="phone[]" value=""
                                            required="" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">image</label>
                                        <input type="file" class="form-control dropify" name="image[]" value=""
                                            required="" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $('.dropify').dropify();
        $(document).on('click', '.add-more', function() {
            var form = $('.repeat').clone().removeClass('repeat');

            $(this).closest('.col-md-12').before(form);
        });
        $(document).on('click', '.remove-row', function() {
            $(this).closest('.col-md-12').remove();
        });
    </script>
@endsection
