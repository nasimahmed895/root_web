@extends('frontend.app')

@section('title', '| HOME')

@section('container')
    <div class="nav-top bg-video-wrap p-0 m-0">
        @if ($mobile || $tablet)
            <video id="myVideo" autoplay="autoplay" muted="loop" loop="loop" playsinline="" data-wf-ignore="true"
                data-object-fit="cover">
                <source src="{{ asset('public/video/root-intro.mp4') }}" data-wf-ignore="true" loading="lazy" />
            </video>
        @else
            <video autoplay="autoplay" loop="loop" muted defaultMuted playsinlin id='hls-example'
                class="video-js vjs-default-skin" style="width:100% ;object-fit: cover; height:100vh" controls>
                <source type="application/x-mpegURL" id="my-video"
                    src="https://video.twimg.com/ext_tw_video/1630914417939599360/pu/pl/1280x720/_K551i4GvKrLdv_f.m3u8?variant_version=1&tag=12&container=fmp4">
            </video>
        @endif


        <div class="overlay">
        </div>
        <div class="objective customheight">
            <h2 class="fbold">{{ get_option('objective_part_one') }} <span
                    class="multiText"></span>{{ get_option('objective_part_two') }}</h2>
            <h5 class="f500">We execute our ideas from the start to finish</h5>
        </div>
        </h1>
    </div>

    <div class="index">
        <div class="">
            <div class="pt-4 pb-5 card_conatiner services text-center">
                <div class="container">
                    <h2 class="my-4">Our Featured Services</h2>
                    <div class="slider demo overflow-hidden">
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
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/04image.webp') }}"
                                            alt="" srcset="" height="430px">
                                        <p>iOS App Development</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/02image.png') }}"
                                            alt="" srcset="">
                                        <p>Android App Development</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/01image.png') }}"
                                            alt="" srcset="">
                                        <p>Hybrid App Development</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/03image.png') }}"
                                            alt="" srcset="">
                                        <p>Food Delivery App</p>
                                    </div>

                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/06image.webp') }}"
                                            alt="" srcset="">
                                        <p>Tracking App</p>
                                    </div>
                                    <div class="item"><img
                                            src="{{ asset('/public/frontend/Icon_Images/Mobile App Development/05image.png') }}"
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
                        <img class=" img_responsive slider_image_content"
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
                        <img class=" img_responsive slider_image_content"
                            src="{{ asset('public/frontend/Icon_Images/web-development.png') }}" alt=""
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
                                            src="{{ asset('public/frontend/Icon_Images/web App Development/01image.png') }}"
                                            alt="" srcset="">
                                        <p>E-commerce Apps</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('public/frontend/Icon_Images/web App Development/02image.jpg') }}"
                                            alt="" srcset="">
                                        <p>Web Design</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('public/frontend/Icon_Images/web App Development/04image.jpg') }}"
                                            alt="" srcset="">
                                        <p>Web Development</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('public/frontend/Icon_Images/web App Development/05image.jpg') }}"
                                            alt="" srcset="">
                                        <p>PHP Development</p>
                                    </div>
                                    <div class="item2"><img
                                            src="{{ asset('public/frontend/Icon_Images/web App Development/03image.jpg') }}"
                                            alt="" srcset="">
                                        <p>Laravel Development</p>
                                    </div>

                                    <div class="item2"><img
                                            src="{{ asset('/public/frontend/Icon_Images/web App Development/06image.png') }}"
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
                            <div class="counter count_number" data-TargetNum="158" data-Speed="5000">0</div>
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
                                <div class="counter count_number" data-TargetNum="58" data-Speed="5000">0</div>
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
                            <div class="counter count_number" data-TargetNum="12" data-Speed="2000">0</div>
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
                            <div class="counter count_number" data-TargetNum="5" data-Speed="2000">0</div>
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
        <h2 class="text-center f700e">What Our Clients Think</h2>
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

            <section class="client_think2 mt-3 client" style="width: 90% !important; margin: auto;">



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
        <h2 class="f700 ">Technologies We Work With</h2>

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
                    <h1>MYSQL</h1>
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
            <h2 class="tbold py-1 mb-5">Meet With Our Expert's</h2>
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

@section('js-script')
    <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>
    <script>
        var player = videojs('hls-example', {
            autoplay: true,
            muted: true,
            loop: true,
            fullscreen: true
        });
        player.play();
    </script>

    <script>
        const objectives = @json(get_option('objectives')).split(',');
        var typed = new Typed(".multiText", {
            strings: ['', ...objectives],
            loop: true,
            typeSpeed: 100,
            backSpeed: 80,
            startDelay: 1000,
            backDelay: 1500,
            cursorChar: '|',
        })
    </script>
@endsection
