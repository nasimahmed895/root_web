@extends('frontend.app')

@section('title', '| CONTACT')

@section('container')
    <div class="slider contact_us nav-top text-center"
        style="background-image:url({{ asset('/public/frontend/Icon_Images/ezgif.com-gif-maker.jpg') }})">
        <div class=" bgclor  " style="padding-top: 100px; padding-bottom: 100px;">
            <h2 class=" mb-3 pt-lg-5">Talk to our project manager today!</h2>
            <p class="pb-lg-5 text-center">We're always ready for your new project. <br>
                So, feel free to book a meeting withG. Let's discuss about your next software development</p>
        </div>
    </div>

    <div class="container contact_us py-5">
        <div class="contact">

            <div class="row justify-content-center">

                <div class="col-md-10 ">
                    <ul class="toggle_button mb-4 d-flex justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item border_re" role="presentation">
                            <button class="nav-link left active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Get in Touch</button>
                        </li>
                        <li class="nav-item border_re" role="presentation">
                            <button class="nav-link right " id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#Message" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Send Message</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <div class="row shadow-black b-r-10">
                                <div class="  col-xl-5 p-0" style="border-right: 1px solid #ddd;">
                                    <div class="card border-0  p-4 touch">
                                        <img src="{{ asset('/public/frontend/Icon_Images/team/eleas.jpg') }}"
                                            class="card-img-top image border-1" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title text-secondary my-3 ff-Helvetica">Elias Khan</h5>
                                            <h5 class="fbold ff-Helvetica">Strategic Planning with Manager, Live!</h5>
                                            <ul class="card__list f700 p-0 ">
                                                <li class="card__item time ">30 min</li>
                                                <li class="card__item confrannce ">Web
                                                    conferencing
                                                    details
                                                    provided
                                                    <!-- <br> -->
                                                    upon confirmation.
                                                </li>
                                            </ul>

                                            <p class="card-text">Simply, set a time when you are
                                                willing to talk. The manager will arrive
                                                right on schedule and meet you there.
                                            </p>
                                            <p class="card-text">Let's freely discuss the project's requirements,
                                                budget, functionality, and anything else you
                                                feel is important and right when you're
                                                both there.
                                            </p>
                                            <p class="card-text">After you've defined the project's final result,
                                                let's get the team to deliver it meeting all
                                                requirements in every way.

                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class=" col-xl-7 hidecontent p-4 fl">
                                    <span id="selected-value"></span>
                                    <div class="dateandtime ">
                                        <h5 class="text-center">Select a Date & Time</h5>
                                        <div id="datetimepicker3"></div>
                                        <button id="confram_button"
                                            class="btn bg-primary btn-sm text-white float-end m-3 disabled">Confirm</button>
                                        <button id="reset"
                                            class="btn bg-danger text-white btn-sm float-end mx-2 m-3 d-none ">Reset</button>

                                    </div>
                                    <div class="wreaper d-none">
                                        <div class="card border-0 contact_heading ">
                                            <div class="d-flex align-items-center mb-4">
                                                <img src="{{ asset('/public/frontend/Icon_Images/contact_left.png') }}"
                                                    alt="" class="back" srcset="">
                                                <h5 class=" m-auto">Write to us</h5>
                                            </div>

                                            <form action="{{ route('file.store') }}" method="POST" id="file-upload"
                                                enctype="multipart/form-data" class=" needs-validation" novalidate>
                                                @csrf
                                                <input type="hidden" id="meeting" name="meeting">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text" style="padding: 0.9rem;"
                                                                    id="addon-wrapping"><img style="width: 21px;"
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/user (2).png') }}"
                                                                        alt="" sizes="" srcset=""></span>
                                                                <input type="text" name="name" id="metting_naem"
                                                                    required value="{{ old('name') }}"
                                                                    class="form-control mname" placeholder="Your Name*" />
                                                                <div class="invalid-tooltip screenmetting_naemNameError">
                                                                    Enter Your Valid Name
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text"
                                                                    style="    padding: 0.8rem;" id="addon-wrapping"><img
                                                                        style="width: 23px;"
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/mail.png') }}"
                                                                        alt="" srcset=""></span>
                                                                <input type="email" name="email"
                                                                    value="{{ old('email') }}" required
                                                                    class="form-control memail"
                                                                    placeholder="Your Mail*" />
                                                                <div class="invalid-tooltip">
                                                                    Enter Your Valid Email
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text" id="addon-wrapping"><img
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/attach-file.png') }}"
                                                                        alt="" srcset=""></span>
                                                                <input type="url" name="link"
                                                                    value="{{ old('link') }}" class="form-control"
                                                                    placeholder="Website / App Link" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text" id="addon-wrapping"><img
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/send.png') }}"
                                                                        alt="" srcset=""></span>
                                                                <textarea class="form-control mmessage" name="message" rows="4" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                                                <div class="invalid-tooltip ">
                                                                    Enter Your Valid Message
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="col-md-12">
                                                            <div
                                                                class="mb-4 d-flex justify-content-between align-items-center">
                                                                <button
                                                                    style="background-color: #000040; padding: 8px 35px; font-size: 18px; font-weight: 400;"
                                                                    class="btn text-white" type="submit"
                                                                    id="submit submit_now">SEND</button>
                                                                <div class="upload_file">
                                                                    <div id="submit_wreaper_prog">
                                                                        <div id="myProgress1">
                                                                            <div id="myBar1">
                                                                                <div id="progss1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p id="file_name1"></p>
                                                                    </div>
                                                                    <div class="upload-btn-wrapper ">

                                                                        <span id="file_name1"></span>
                                                                        <label for='input-file' class="btn">
                                                                            <i class="fas fa-cloud-upload-alt"></i>Upload
                                                                        </label>
                                                                        <input type="file" name="image"
                                                                            onchange="progress1(this)" class="file-input "
                                                                            accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="Message" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row mt-5 w-100">
                                <div class="col-md-10 m-auto w-100">
                                    <div class="card"
                                        style="background-color: #fff; border: none;  box-shadow: 0px 0px 6px 1px #CFCECE; padding: 30px 30px;">
                                        <h5 class="mb-4">Write to us</h5>
                                        <div class="">
                                            <form action="{{ route('file.store') }}" method="POST"
                                                enctype="multipart/form-data" class=" needs-validation" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text" style="padding: 0.9rem;"
                                                                    id="addon-wrapping"><img style="width: 21px;"
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/user (2).png') }}"
                                                                        alt="" sizes=""
                                                                        srcset=""></span>
                                                                <input type="text" name="name" id="send_name"
                                                                    required value="{{ old('name') }}"
                                                                    class="form-control" placeholder="Your Name*" />
                                                                <div class="invalid-tooltip screensend_nameNameError">
                                                                    Enter Your Valid Name
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text"
                                                                    style="    padding: 0.8rem;" id="addon-wrapping"><img
                                                                        style="width: 23px;"
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/mail.png') }}"
                                                                        alt="" srcset=""></span>
                                                                <input type="email" id="email_valid" name="email"
                                                                    value="{{ old('email') }}" required
                                                                    class="form-control" placeholder="Your Mail*" />
                                                                <div class="invalid-tooltip" id="email_contuct">
                                                                    Enter Your Valid Email
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text" id="addon-wrapping"><img
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/attach-file.png') }}"
                                                                        alt="" srcset=""></span>
                                                                <input type="url" name="link"
                                                                    value="{{ old('link') }}" class="form-control"
                                                                    placeholder="Website / App Link" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-5">
                                                            <div class="input-group flex-nowrap ">
                                                                <span class="input-group-text" id="addon-wrapping"><img
                                                                        src="{{ asset('/public/frontend/Icon_Images/Root_icons/send.png') }}"
                                                                        alt="" srcset=""></span>
                                                                <textarea class="form-control" name="message" rows="4" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                                                <div class="invalid-tooltip ">
                                                                    Enter Your Valid Message
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <div
                                                                class="mb-4 d-flex justify-content-between align-items-center">
                                                                <button
                                                                    style="background-color: #000040; padding: 8px 35px; font-size: 18px; font-weight: 400;"
                                                                    class="btn text-white" type="submit"
                                                                    id="submit submit_now">SEND</button>

                                                                <div class="upload_file">
                                                                    <div id="submit_wreaper_prog">
                                                                        <div id="myProgress">
                                                                            <div id="myBar  ">
                                                                                <div id="progss">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p id="file_name"></p>
                                                                    </div>
                                                                    <div class="upload-btn-wrapper ml-3">
                                                                        <label for='input-file' class="btn">
                                                                            <i class="fas fa-cloud-upload-alt"></i>Upload
                                                                        </label>
                                                                        <input type="file" onchange="progress(this)"
                                                                            name="image" class="file-input "
                                                                            accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
                                                                    </div>
                                                                    <div class="file_upload_error" id="file_error">
                                                                        Enter Your Valid File Format
                                                                    </div>
                                                                </div>



                                                            </div>
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
                </div>

            </div>

            <div class="google_map my-5 ">
                <div class="mapouter ">
                    <div class="gmap_canvas shadow-black b-r-10"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6009996465687!2d90.34131181429716!3d23.761603794266705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf51565f8ed9%3A0x2a2b8655e3800a10!2sRoot%20Devs!5e0!3m2!1sen!2sbd!4v1667415499909!5m2!1sen!2sbd"
                            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe><a href="https://rootdevs.com/"></a><br>
                        <a href="https://www.embedgooglemap.net">google maps in website</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js-script')
    <script>
        var meeting = null;
        var date_click = false;
        var time_click = false;
        $('#file-upload').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var mname = $(".mname").val();
            var memail = $(".memail").val();
            var mmessage = $(".mmessage").val();

            if (mname != '' && memail != '' && mmessage != '') {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('file.store') }}",
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
                                }, 3000);
                            }
                        } else {
                            console.log(response)
                        }
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            }


        });


        $('#datetimepicker3').datetimepicker({
            inline: true,
            step: 30,
            defaultSelect: false,
            showTimezone: true,
            scrollMonth: false,
            defaultTime: false,
            nextButton: true,

            minDate: 0,
            format: 'Y/m/d H:i:A',
            onChangeDateTime: function(dp, $input) {
                meeting = $input.val();
                document.getElementById("meeting").value = meeting;

            },
            onSelectDate: function(dp, $i) {
                date_click = true;
                if (date_click && time_click) {
                    console.log('Date Done');
                    $("#confram_button").removeClass('disabled');
                    $("#reset").removeClass('d-none');
                }
            },
            onSelectTime: function(dp, $i) {
                time_click = true;
                date_click = true;
                if (date_click && time_click) {
                    $("#confram_button").removeClass('disabled');
                    $("#reset").removeClass('d-none');
                }
            }
        });
        $("#confram_button").click(function() {
            $time_chack = $(".xdsoft_time").hasClass("xdsoft_current");
            $date_chack = $(".xdsoft_date ").hasClass("xdsoft_current");
            if ($time_chack == true & $date_chack == true) {
                $(this).removeClass('disabled');
                $(".back").removeClass('d-none');
                $(".wreaper").removeClass('d-none');
                $(".dateandtime").hide();
            } else {
                $(this).text('select');
            }
        });

        $('#reset').click(function(e) {
            e.preventDefault();
            $(".xdsoft_time").removeClass("xdsoft_current");
            $(".xdsoft_date ").removeClass("xdsoft_current");
            $(this).addClass("d-none");
            $("#confram_button").addClass('disabled');

        });

        $('.back').click(function(e) {
            e.preventDefault();
            $(".back").addClass('d-none');
            $(".wreaper").addClass('d-none');
            $(".dateandtime").show();
            $(".xdsoft_time").removeClass("xdsoft_current");
            $(".xdsoft_date ").removeClass("xdsoft_current");
            $('#reset').addClass("d-none");
            $("#confram_button").addClass('disabled');


        });

        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
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
        $(document).ready(function() {
            $("#send_name").keyup(function() {

                var regEx = /^[A-Za-z  .]+$/;
                if (this.value.match(regEx)) {
                    $('#submit_now').removeAttr('disabled', 'disabled');
                    $('.screensend_nameNameError').css("display", "none");

                } else {
                    $('#submit_now').attr('disabled', 'disabled');
                    $('.screensend_nameNameError').removeClass('d-none');
                    $('.screensend_nameNameError').html('Enter Your Valid Name');
                    $('.screensend_nameNameError').css("display", "block");
                    console.log('not');
                }
            });
            $("#metting_naem").keyup(function() {

                var regEx = /^[A-Za-z  .]+$/;
                if (this.value.match(regEx)) {
                    $('#submit_now').removeAttr('disabled', 'disabled');
                    $('.screenmetting_naemNameError').css("display", "none");

                } else {
                    $('#submit_now').attr('disabled', 'disabled');
                    $('.screenmetting_naemNameError').removeClass('d-none');
                    $('.screenmetting_naemNameError').html('Enter Your Valid Name');
                    $('.screenmetting_naemNameError').css("display", "block");
                    console.log('not');
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

        });

        function progress1(input) {
            var i = 0;
            var name1 = input.files[0].name;
            var file_size = input.files[0].size;
            if (i == 0) {
                i = 1;
                var file_name = document.getElementById("file_name1");
                var width = 1;
                var id = setInterval(frame, 0);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 1;
                    } else {
                        width++;
                        var str1 = name1;
                        if (str1.length > 20) str1 = str1.substring(0, 10);
                        file_name.innerHTML = str1 + "...";

                    }
                }
            }
        }

        function progress(input) {
            var i = 0;
            var name = input.files[0].name;
            var file_size = input.files[0].size;
            if (i == 0) {
                i = 1;
                var file_name = document.getElementById("file_name");
                var width = 1;
                var id = setInterval(frame, 0);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 1;
                    } else {
                        width++;
                        var str = name;
                        if (str.length > 10) str = str.substring(0, 10);
                        file_name.innerHTML = str + "...";


                    }
                }
            }
        }
    </script>
@endsection
