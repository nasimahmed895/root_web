@extends('frontend.app')
@section('container')
    <div class="about nav-top">
        <div class="slider   text-center"
            style="background-image:url({{ asset('/public/frontend/Icon_Images/About\ Us.jpg') }}">
            <div class="bgclor px20">
                <div class="container">
                    <h2 class="mb-3 f500">Who We Are ?</h2>
                    <p class=" ff-Roboto f100"><span class="root">Root</span><span class="devs">Devs</span> is here to give
                        a new face to your business through IT solutions. <br>
                        Here all the creative minds work together. We are ready to deliver maximum excellence to our
                        clients. <br>
                        We provide unique approach best service to ensure that our clients are getting best solution for
                        their business needs. <br>
                        Our professionals ensure that you will get an innovative solution that can grow your business. <br>
                        So, when it comes to mobile app development, web development, and custom application solutions, <br>
                        we can ensure that your project is being handled by experienced professionals from start to finish.
                        <br>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container about ">

        <div class="meet_ledeership text-center pt-5 pb-5">
            {{-- <div class="h4 text-center mb-5">Meet With Leadership</div> --}}
            <h2 class="text-center mb-5">Meet With Leadership</h2>
            <div class="mcard">
                <div class="row ">
                    <div class="col-md-6 mb-sm-5 position_set d-flex  ">
                        <div class="leadership_card text-center  position-relative">
                            <div class="leadership_image b-r-10 overflow-hidden">
                                <img class="float-start "
                                    src="{{ asset('/public/frontend/Icon_Images/leadership/ek.png') }}" alt="">
                            </div>

                            <div class=" text-center">
                                <div class="card-body shadow-black   pt-3 pb-4   px-lg-3 ">
                                    <div class="center">
                                        <h6 class="card-title">{{ get_option('ceo_Name') }}</h6>
                                        <p class="card-text pb-3 pt-2">{{ get_option('ceo_designation') }}</p>
                                        <div class="social_info height">
                                            <a href="tel:{{ get_option('ceo_whatsapp') }}"><i
                                                    class="fab fa-whatsapp"></i></a>
                                            <a href="{{ get_option('ceo_instagram') }}" target="_blank"><i
                                                    class="fab fa-telegram-plane"></i></a>
                                            <a href="{{ get_option('ceo_viber') }}" target="_blank"><i
                                                    class="fab fa-viber"></i></a>
                                            <a href="{{ get_option('ceo_skype') }}" target="_blank"><i
                                                    class="fab fa-skype"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-sm-5 position_set  position_end d-flex  ">
                        <div class="leadership_card text-center  position-relative">
                            <div class="leadership_image b-r-10 overflow-hidden">
                                <img class="float-start  "
                                    src="{{ asset('/public/frontend/Icon_Images/leadership/mam.png') }}" alt="">
                            </div>

                            <div class=" text-center right">
                                <div class="card-body shadow-black   pt-3 pb-4   px-lg-3 ">
                                    <div class="center">
                                        <h6 style="" class="card-title">{{ get_option('co_Name') }}</h6>
                                        <p class="card-text pb-3 pt-2">{{ get_option('co_designation') }}</p>
                                        <div class="social_info height">
                                            <a href="tel:{{ get_option('co_whatsapp') }} "><i
                                                    class="fab fa-whatsapp"></i></a>
                                            <a href="{{ get_option('co_instagram') }}" target="_blank"><i
                                                    class="fab fa-telegram-plane"></i></a>
                                            <a href="{{ get_option('co_viber') }}" target="_blank"><i
                                                    class="fab fa-viber"></i></a>
                                            <a href="{{ get_option('co_skype') }}" target="_blank"><i
                                                    class="fab fa-skype"></i></a>

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

    <!-- meet our experts -->

    <section class="text-center border-top ">
        <div class="container py-5">
            <h2 class="tbold py-1 mb-5">Meet With Our Expert's</h2>
            <div class="row">
                <div class="col-lg-6">
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
                    <div class="client_info pl-5" style="margin-left: 5rem">
                        <p class="text-justify">Root Devs always look for providing the best service with excellence. We
                            deliver android apps, iOS apps & web solutions. Working hard and building innovative ideas is in
                            our DNA, and we are here to provide you with exceptional well solutions as per your business
                            needs, We are here to give a new face to your business through the power of IT solutions that
                            include a wide range of web designing and development, mobile application development, and
                            custom software development service. Our highly qualified software engineers & IT experts team
                            assists you with effective and updated technology needs throughout the planning, designing,
                            developing, and deployment stage.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- meet our experts -->
    <!-- our mission start-->
    <div class="card_bg">
        <div class="container about ">
            <div class="mission py-5 ">
                <div class="">
                    <h2 class="text-center mb-5 fbold">Our Mission</h2>

                    <section class="client_think ">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 ">
                                <div class="client_video image transition b-r-20">
                                    <img src="{{ asset('/public/frontend/Icon_Images/Our Mission.jpg') }}" alt=""
                                        srcset="" class="img-fluid ">
                                </div>

                            </div>

                            <div class="  col-lg-6">
                                <div class="client_info">
                                    <p>Our mission is simple</p>
                                    <h5 class="mb-3" style="font-size: 1.2rem;">Make the life of our clients easier and
                                        our team of creatives is
                                        devoted to making
                                        that
                                        a
                                        reality.</h5>
                                    <p>We grow on the trust of our clients.
                                        You bring us a problem, and we will give you a
                                        personalized solution. Because our first concern is
                                        understanding our client before we give a proposal.
                                        That is how we conduct ourselves because we
                                        believe that a relationship is built on promises with
                                        customers.</p>
                                </div>
                            </div>

                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- our mission end-->

    <div class="container">
        <div class="wreapper text-center py-5">
            <h2 class="mb-3">Life at <strong style="color: red; text-shadow: 2px 3px 2px #ddd;">Root</strong> Devs</h2>
            <div class="grid-container gallery">
                <div class="grid-item1 grid-item"><img class="team1 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/IMG20220301182928.png" alt="" srcset="">
                </div>
                <div class="grid-item2 grid-item"><img class="team2 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/IMG20220301183839.png" alt="" srcset="">
                </div>
                <div class="grid-item3 grid-item"><img class="team2 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/IMG20220301193011.png" alt="" srcset="">
                </div>
                <div class="grid-item4 grid-item"> <img class="team2 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/IMG20220301200524.png" alt="" srcset="">
                </div>

            </div>
        </div>
    </div>
@endsection
