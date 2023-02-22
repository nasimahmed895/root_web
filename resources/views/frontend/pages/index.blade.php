@extends('frontend.app')
@section('container')
    <div class="nav-top bg-video-wrap p-0 m-0">
        <video src="{{ asset('/public/frontend/video/video.mp4') }}" loop muted autoplay>
        </video>
        <div class="overlay">
        </div>
        <div class="slidcont ">
            <h2 class=" fbold"> We Create software For a Sustainable Future. </h2>
            <h5 class="f500">We execute our ideas from the start to finish</h5>
        </div>
        </h1>
    </div>

    <div class=" index">
        <div class="">
            <div class="pt-4 pb-5 card_conatiner  services text-center">

                <div class="container">
                    <h2 class="my-4">Our Featured Services</h2>
                    <div class="slider demo  overflow-hidden">
                        @foreach ($featured as $featureds)
                            <div>
                                <div class="card text-center">
                                    <img class="card-img-top rounded-circle m-auto my-3"
                                        src="{{ asset('public/' . $featureds->image) }}" alt="">
                                    <div class="card-body p5">
                                        <p class="card-title">{{ $featureds->heading }}</p>
                                        <p class="card-text px-3">{{ Str::limit($featureds->text, 140) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- slider -->
    <div class="rotate bg">
        <div class="container pt-5">
            <div class="row ">
                <div class="col-sm-8">
                    <div class="content ">
                        <h4>Mobile App Development</h4>
                        <p class="">We provide the best mobile app for the google play store & iOS applications as
                            client
                            requirement by using the latest technology.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" pb-5  rotate_width ">
                <div class=" slider_content ">
                    <div class="slider">
                        <div class="main  ">
                            <div class="round position-relative">
                                <div class="border_wreaper"></div>
                                <div id="center" class="wrapper">
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20200325-7690-1w93kuo.png') }}"
                                            alt="" srcset="">
                                        <p>iOS App Development</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/38653ca6395cdd6c637e657784e29099.jpg') }}"
                                            alt="" srcset="">
                                        <p>Android App Development</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/51d0ee14fc61a0166c1367f7137f7cba.png') }}"
                                            alt="" srcset="">
                                        <p>Hybrid App Development</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20191227-21326-16l2knt.png') }}"
                                            alt="" srcset="">
                                        <p>Food Delivery App</p>
                                    </div>

                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20210611-4268-1n9pqf2.png') }}"
                                            alt="" srcset="">
                                        <p>Tracking App</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20210611-4268-1n9pqf2.png') }}"
                                            alt="" srcset="">
                                        <p>E-commerce App Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center slider_content content_img">
                    <div class="slider_img h-100">
                        <img class=" img_responsive " style="border: 0px; height: 100%;"
                            src="{{ asset('/public/frontend/Icon_Images/mobile-app-development.png') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="rotate ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-8 ">
                    <div class="content  mt-5">
                        <h4>Web Development</h4>
                        <p class="">Our web development team has experience with large and complex
                            projects. We are prepared to serve your business needs.</p>
                    </div>
                </div>
            </div>
            <div class=" pb-5 rotate_width ">

                <div class="  d-flex justify-content-center align-items-center slider_content">
                    <div class="slider_img h-100">
                        <img class=" img_responsive " style="border: 0px; height: 100%;"
                            src="{{ asset('/public/frontend/Icon_Images/web-development.png') }}" alt=""
                            srcset="">
                    </div>
                </div>
                <div class=" slider_content2 ">
                    <div class="slider">
                        <div class="main2">
                            <div class="round2 position-relative">
                                <div class="border_wreaper2"></div>
                                <div id="center2" class="wrapper2">
                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20210611-4268-1n9pqf2.png') }}"
                                            alt="" srcset="">
                                        <p>E-commerce Apps</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20200325-7690-1w93kuo.png') }}"
                                            alt="" srcset="">
                                        <p>Web Design</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/38653ca6395cdd6c637e657784e29099.jpg') }}"
                                            alt="" srcset="">
                                        <p>Web Development</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/51d0ee14fc61a0166c1367f7137f7cba.png') }}"
                                            alt="" srcset="">
                                        <p>PHP Development</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20191227-21326-16l2knt.png') }}"
                                            alt="" srcset="">
                                        <p>Laravel Development</p>
                                    </div>

                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/image_processing20210611-4268-1n9pqf2.png') }}"
                                            alt="" srcset="">
                                        <p>Web Portal's</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider -->

    <!-- counter -->
    <div class="counterbgimg d-block bg mxt-5 "
        style=" background-image:url('{{ asset('/public/frontend/Icon_Images/counter.png') }}') ;">
        <div id="counters_1 " class="d-flex  text-center  text-white " style="background-color: rgb(0 0 64 / 60%) ;">
            <div class="container">
                <div class="row justify-content-around w-100 " id="counters_2">
                    <div class="col-6 col-sm-3">
                        <div class="coun_cus">
                            <div class="counter count_number" data-TargetNum="144" data-Speed="5000">0</div>
                            <img src="{{ asset('/public/frontend/Icon_Images/Line 1.png') }}"
                                style=" width: 50%;  background-repeat: no-repeat;
                        background-size: 100% auto;"
                                alt="" srcset="">
                            <p class="count_text">Complete
                                <br>
                                Project
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-sm-3 ">
                        <div class="coun_cus">
                            <div class="hover">
                                <div class="counter count_number" data-TargetNum="37" data-Speed="5000">0</div>
                                <img src="{{ asset('/public/frontend/Icon_Images/Line 1.png') }}"
                                    style=" width: 50%;  background-repeat: no-repeat;
                        background-size: 100% auto;"
                                    alt="" srcset="">
                                <p class="count_text">Happy
                                    <br>
                                    Customer
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 ">
                        <div class="coun_cus">
                            <div class="counter count_number" data-TargetNum="17" data-Speed="2000">0</div>
                            <img src="{{ asset('/public/frontend/Icon_Images/Line 1.png') }}"
                                style=" width: 50%;  background-repeat: no-repeat;
                        background-size: 100% auto;"
                                alt="" srcset="">
                            <p class="count_text">Experienced
                                <br>
                                Staff
                            </p>
                        </div>

                    </div>
                    <div class="col-6 col-sm-3 ">
                        <div class="coun_cus">
                            <div class="counter count_number" data-TargetNum="14" data-Speed="2000">0</div>
                            <img src="{{ asset('/public/frontend/Icon_Images/Line 1.png') }}"
                                style=" width: 50%;  background-repeat: no-repeat;
                    background-size: 100% auto;"
                                alt="" srcset="">
                            <p class="count_text">Ongoing
                                <br>
                                Project
                            </p>
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>
    <!-- counter -->

    <!-- clients -->
    <div class="bg pt-5 pb-5 overflow-hidden" style="background-color: #F7FAFD;">
        <h4 class="text-center f700e">What Our Clients Think</h4>
        <div class="container">
            {{--  <section class="client_think ">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 ">
                        <div class="client_video ">
                            <video width="" controls muted>
                                <source
                                    src="{{ asset('/public/frontend/video/Client Review. Client Name_ Mr. Mainul Ahsan, Director of Babylon Group_Trim.mp4') }}"
                                    type="video/mp4">
                            </video>
                            <div class="client_image">
                                <img class="shadow-black" src="{{ asset('/public/frontend/Icon_Images/bosssss.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>

                    <div class="  col-lg-6 ">
                        <div class="client_info ">
                            <p>"It has been a real pleasure to work with RootDevs. I have been extremely happy with
                                his
                                professionalism, quality of work and creative ideas. He is very focused on getting
                                the job
                                done in a timely manner, and is a great communicator."</p>
                            <span id="client_name">Ross Toylor</span><br>
                            <span id="post">CEO, Alpha IT</span>
                        </div>
                    </div>

                </div>

            </section>  --}}

            <section class="client_think2 mt-3  client" style="width: 90% !important; margin: auto;">

                @foreach ($client as $clients)
                    <div class="single_client ">
                        <div class="client_info2 bg-white">
                            <p>{{ Str::limit($clients->text, 180) }}</p>

                        </div>
                        <div style="margin-top: -75px;">
                            <div class="client_image2  m-auto ">
                                <img src="{{ asset('/public/' . $clients->image) }}" alt="">
                                <div class="mt-2"></div>
                            </div>
                            <div class="w-100 d-grid text-center">
                                <h6 id="client_name" class="m-0" style="height: 25px">{{ $clients->name }}</h6>
                                <p>{{ $clients->designation }}</p>

                            </div>

                        </div>
                    </div>
                @endforeach


            </section>
        </div>

    </div>
    <!-- clients -->
    <!-- work with -->
    <div class="word_with text-center py-5">
        <h4 class="f700 ">Technologies We Work With</h4>


        <div class="container">
            <div class="word_grid mt-5 ">

                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/flutter.svg') }}" alt="flutter"
                        srcset="">
                    <h1>FLUTTER</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/ios.svg') }}" alt="flutter"
                        srcset="">
                    <h1>IOS</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/android.svg') }}" alt="flutter"
                        srcset="">
                    <h1>ANDROID</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/laravel.svg') }}" alt="flutter"
                        srcset="">
                    <h1>LARAVEL</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/php.svg') }}" alt="flutter"
                        srcset="">
                    <h1>PHP</h1>

                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/mysql.svg') }}" alt="flutter"
                        srcset="">
                    <h1>mysql</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/swift.svg') }}" alt="flutter"
                        srcset="">
                    <h1>swift</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/java.svg') }}" alt="flutter"
                        srcset="">
                    <h1>java</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/react.svg') }}" alt="flutter"
                        srcset="">
                    <h1>react</h1>
                </div>
                <div class="work_div mb-4">
                    <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/nextjs.svg') }}" alt="flutter"
                        srcset="">
                    <h1>nextjs</h1>


                </div>

            </div>
        </div>

        <!-- work with -->

    </div>
    <!-- our  team -->
    <section class="text-center border-top ">
        <div class="container py-5">
            <h4 class="tbold py-1 mb-5">
                Meet With Our Expert's</h4>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class=" our_team ">
                        <img class=" img_responsive"
                            style=" max-width: 100%;
                        height: auto;
                        object-fit: cover;
                        border-radius: 0;
                       "
                            src="{{ asset('/public/frontend/Icon_Images/ourteam.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-6  d-flex align-items-center justify-content-center">
                    <div class="client_info " style="margin-left: 5rem">
                        <p class="text-justify">Root Devs always look for providing the best service with
                            excellence. We deliver android apps, iOS apps & web solutions.
                            Working hard and building innovative ideas is in our DNA,
                            and we are here to provide you with exceptional well solutions
                            as per your business needs, We are here to give a new face to
                            your business through the power of IT solutions that include a
                            wide range of web designing and development, mobile
                            application development, and custom software development
                            service. Our highly qualified software engineers & IT experts
                            team assists you with effective and updated technology needs
                            throughout the planning, designing, developing, and deployment
                            stage.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- our  team -->
@endsection
