@extends('frontend.app')
@section('container')
    <div class="slider basicinformation text-center"
        style="background-image:url({{ asset('/public/frontend/Icon_Images/company-representatives-reading-applicant-resume-hiring.png') }})">
        <div class=" pt-5 pb-5 " style="background-color:  #3f3f89c2;;">
            <h4 class="mb-3 pt-lg-5 f500"><img width="86px" src="{{ asset('/public/frontend/Icon_Images/Root Devs.png') }}"
                    alt="logo" srcset="">
            </h4>
            <p class="pb-lg-5 f300 ff-candara">Job Title: Junior Flutter Developer</p>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-10 m-auto text-center">
                <h4 class="mb-5">Basic Information</h4>
                <div class="card basicinformation"
                    style="background-color: #F7FAFD; border: none;  box-shadow: 0px 0px 6px 1px #CFCECE; padding: 30px 30px;">

                    <div class="row  ">
                        <div class="col-1"></div>
                        <div class="col-sm-10">
                            <form action="{{ route('apply_now') }}" id="apply_form" method="POST"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden" name="slug" value="{{ $id }}">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <div class="input-group flex-nowrap ">
                                                <span class="input-group-text" style="padding: 0.9rem;"
                                                    id="addon-wrapping"><img style="width: 21px;"
                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/user (2).png') }}"
                                                        alt="" sizes="" srcset=""></span>
                                                <input type="text" id="fname" class="form-control"
                                                    placeholder="Full Name" value="{{ old('name') }}" required
                                                    name="name" />
                                                <div class="invalid-tooltip screenNameError">
                                                    Enter Your Valid Name.
                                                </div>
                                            </div>
                                            {{--  <div class="screenNameError text-danger "
                                                style="font-size: .8rem ; text-align: left"></div>  --}}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-5">
                                            <div class="input-group flex-nowrap ">
                                                <span class="input-group-text" style="padding: 0.8rem;"
                                                    id="addon-wrapping"><img style="width: 23px;"
                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/mail.png') }}"
                                                        alt="" srcset=""></span>
                                                <input type="email" class="form-control" value="{{ old('email') }}"
                                                    name="email"required placeholder="Email Address" />
                                                <div class="invalid-tooltip" id="email">
                                                    Enter Your Valid Email
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-5">
                                            <div class="input-group flex-nowrap ">
                                                <span class="input-group-text" style="padding: 0.9rem;"
                                                    id="addon-wrapping"><img style="width: 21px;"
                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/phone.png') }}"
                                                        alt="" sizes="" srcset=""></span>
                                                <input type="number" id="mobile-number" class="form-control"
                                                    value="{{ old('number') }}" name="number" required
                                                    placeholder="Phone Number" />

                                                <div class="invalid-tooltip">
                                                    Enter Your Valid Phone Number
                                                </div>
                                            </div>
                                            <div class="screennumberError text-danger "
                                                style="font-size: .8rem ; text-align: left"></div>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <div class="input-group flex-nowrap ">
                                                <input type="file" class="dropify " name="file"
                                                    data-allowed-file-extensions="pdf"
                                                    data-default-file="{{ old('file') }}" required />

                                            </div>
                                            <div class="file_upload_error" id="file_error">
                                                Enter Your Valid File Format
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <div class="input-group flex-nowrap ">
                                                <span class="input-group-text" id="addon-wrapping"><img
                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/send.png') }}"
                                                        alt="" srcset=""></span>
                                                <textarea class="form-control" rows="4" name="application" placeholder="Want tell something? (optional)">{{ old('application') }}</textarea>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class=" text-center">
                                            {{--  <button class="btn text-white send" type="submit">SEND <i
                                                    class="fas fa-paper-plane icon ml-3"></i></button>  --}}
                                            <button id="submit_now">
                                                <img style="width: 7rem;"
                                                    src="{{ asset('/public/frontend/Icon_Images/Root_icons/button.png') }}"
                                                    alt="" srcset="">
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

        <div class="wreapper text-center py-5">
            <h4>Life at <strong style="color: red; text-shadow: 2px 3px 2px #ddd;">Root</strong> Devs</h4>
            <div class="grid-container gallery">
                <div class="grid-item1 grid-item"><img class="team1 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301182928.png') }}" alt=""
                        srcset=""></div>
                <div class="grid-item2 grid-item"><img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301183839.png') }}" alt=""
                        srcset=""></div>
                <div class="grid-item3 grid-item"><img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301193011.png') }}" alt=""
                        srcset=""></div>
                <div class="grid-item4 grid-item"> <img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/IMG20220301200524.png') }}" alt=""
                        srcset=""></div>

            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Drop Your CV Here (only PDF)',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $(document).ready(function() {
            var name = "";
            var numbre_valid = "";
            var numbre_length = "";
            var email = "";
            var file = "";
            $("[name=name]").keyup(function() {
                var regEx = /^[A-Za-z .-]+$/;
                if (this.value.match(regEx)) {
                    // $('#submit_now').removeAttr('disabled', 'disabled');
                    $('.screenNameError').css("display", "none");
                    // $('.screenNameError').addClass('d-none');
                    return name = true;
                } else {
                    // $('#submit_now').attr('disabled', 'disabled');
                    $('.screenNameError').removeClass('d-none');
                    $('.screenNameError').html(' Enter Your Valid  Name');
                    $('.screenNameError').css("display", "block");
                    return name = false;
                }

                console.log(name);



            });
            $("[name=number]").keyup(function() {
                var mobileNum = $(this).val();
                number = mobileNum.substring(0, 3);

                if (mobileNum.length == 11) {
                    numbre_length = true

                } else {
                    numbre_length = false

                }

                var phone_number = ["017", "018", "019", "016", "015", "013", "014"];

                if (phone_number.indexOf(number) !== -1) {
                    numbre_valid = true
                } else {
                    numbre_valid = false
                }
                // const number_array = "017 018 019 016 015 013 014";
                // console.log(number_array.includes("017"));
                //var numbre_valid = number_array.includes(number)
                if (numbre_valid && numbre_length) {
                    // $('#submit_now').removeAttr('disabled', 'disabled');
                    $('.screennumberError').addClass('d-none');
                    //let name = true;
                    // console.log(true);
                } else {

                    // $('#submit_now').attr('disabled', 'disabled');
                    $('.screennumberError').removeClass('d-none');
                    $('.screennumberError').html(' Enter Your Valid Phone Number');
                    //let name = false;
                    //console.log(false);
                }

            });
            $("[name=email]").keyup(function() {
                var email_valid = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (this.value.match(email_valid)) {
                    email = true
                    $('#email').css("display", "none");
                } else {
                    email = false
                    $('#email').removeClass('d-none');
                    $('#email').html(' Enter Your Valid  Name');
                    $('#email').css("display", "block");

                }
            });

            $("[name=file]").change(function() {
                var fele_get = this.files[0]
                // var file_name = fele_get.name;
                var file_extension = fele_get.type;
                console.log(file_extension)
                if (file_extension == 'application/pdf' && this != '') {
                    console.log('file_ok');
                    $('#file_error').css("display", "none");
                    file = true
                } else {
                    console.log('file_not');
                    $('#file_error').css("display", "block");

                    file = false
                }
            });
            $('#apply_form').submit(function(e) {
                e.preventDefault();

                if (file != '') {
                    console.log('file_ok');
                    $('#file_error').css("display", "none");
                    file = true
                } else {
                    $('#file_error').css("display", "block");
                    file = false
                }
                //$('#file_error').css("display", "block");
                if (numbre_valid && numbre_length && name && email && file) {
                    console.log('ok');
                    var formData = new FormData(this);
                    console.log(formData);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('apply_now') }}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        cache: false,
                        success: (response) => {
                            if (response.result == 'success') {
                                $(".invalid-tooltip ").addClass('d-none');
                                this.reset();
                                toast('success', response.message);
                                if (response.redirect != undefined && response.redirect != '') {
                                    window.setTimeout(function() {
                                        window.location.replace(response.redirect)
                                    }, 1000);
                                }
                                // return true;
                            } else {
                                console.log(response)
                            }
                        },
                        error: function(response) {
                            console.log(response);
                            //$('#file-input-error').text(response.responseJSON.message);
                        }
                    });
                } else {
                    console.log('not');
                }


            });



        });

        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
