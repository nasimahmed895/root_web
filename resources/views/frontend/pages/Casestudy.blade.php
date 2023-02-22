@extends('frontend.app')
@section('container')
    <div class="casestudy nav-top">
        <div class="slider  text-center position-relative"
            style="background-image:url({{ asset('/public/frontend/Icon_Images/case\ study.jpg') }});background-position: 50% 84%; height: 325px;">
            <div class="bgclor ">
                <div class="slider_text container">
                    <h3 class="mb-3">HERE IS OUR FAVOURITE WORKS</h3>
                    <p class="m-0 f100  text-center">
                        We have worked with amazing clients over the years. Take a look at our process and how we've
                        been
                        able to help businesses transform their ideas to scalable products.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="casestudy text-white p-0">
        <div class="cs_card p-5 right   border-5">
            <div class="container">
                <div class="content">
                    <div class="grid-casestudy">
                        <div class=" d-flex justify-content-center align-items-center ">
                            <div class="cs_content ">
                                <div class="shadow-black text-black b-r-10 p-4">
                                    <h6 class="f700 mb-3">Furniture Ecommerce</h6>
                                    <p>There are tons of social networking platforms out there. When one of our clients
                                        proposed to make a brand new social media platform, We accepted that as a new
                                        challenge and decided to create something cleaner and time-efficient.</p>
                                    <div class="text-center text-md-start">
                                        <div class="iconimg">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/flutter.svg') }}"
                                                alt="flutter" srcset="" class="m-2 mt-0">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/laravel.svg') }}"
                                                alt="laravel" srcset="" class="m-2 mt-0">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/mysql.svg') }}"
                                                alt="mysql" srcset="" class="m-2 mt-0">
                                        </div>
                                        <a href="{{ asset('case-study-view') }}" class="btn  text-white  f400 b-r-20 mt-4">
                                            Continue Case
                                            Study</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="left_image">
                            <div class="img_wreaper mission_wrreaper">
                                <img src="{{ asset('/public/frontend/Icon_Images/Case Study/cs1.png') }}" alt=""
                                    srcset="" class="img_responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="casestudy text-white p-0">
        <div class="cs_card p-5 right card_bg  border-5">
            <div class="container">
                <div class="content">
                    <div class="grid-casestudy">
                        <div class=" d-flex justify-content-center align-items-center ">
                            <div class="cs_content ">
                                <div class="shadow-black text-black b-r-10 p-4">
                                    <h6 class="f700 mb-3">Furniture Ecommerce</h6>
                                    <p>There are tons of social networking platforms out there. When one of our clients
                                        proposed to make a brand new social media platform, We accepted that as a new
                                        challenge and decided to create something cleaner and time-efficient.</p>
                                    <div class="text-center text-md-start">
                                        <div class="iconimg">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/flutter.svg') }}"
                                                alt="flutter" srcset="" class="m-2 mt-0">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/laravel.svg') }}"
                                                alt="laravel" srcset="" class="m-2 mt-0">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/mysql.svg') }}"
                                                alt="mysql" srcset="" class="m-2 mt-0">
                                        </div>
                                        <a href="{{ asset('case-study-view') }}" class="btn  text-white  f400 b-r-20 mt-4">
                                            Continue Case
                                            Study</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="right_image">
                            <div class="img_wreaper mission_wrreaper">
                                <img src="{{ asset('/public/frontend/Icon_Images/Case Study/cs2.png') }}" alt=""
                                    srcset="" class="img_responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="casestudy text-white p-0">
        <div class="cs_card p-5 right   border-5">
            <div class="container">
                <div class="content">
                    <div class="grid-casestudy">
                        <div class=" d-flex justify-content-center align-items-center ">
                            <div class="cs_content ">
                                <div class="shadow-black text-black b-r-10 p-4">
                                    <h6 class="f700 mb-3">Furniture Ecommerce</h6>
                                    <p>There are tons of social networking platforms out there. When one of our clients
                                        proposed to make a brand new social media platform, We accepted that as a new
                                        challenge and decided to create something cleaner and time-efficient.</p>
                                    <div class="text-center text-md-start">
                                        <div class="iconimg">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/flutter.svg') }}"
                                                alt="flutter" srcset="" class="m-2 mt-0">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/laravel.svg') }}"
                                                alt="laravel" srcset="" class="m-2 mt-0">
                                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/mysql.svg') }}"
                                                alt="mysql" srcset="" class="m-2 mt-0">
                                        </div>
                                        <a href="{{ asset('case-study-view') }}" class="btn text-white  f400 b-r-20 mt-4">
                                            Continue Case
                                            Study</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="left_image">
                            <div class="img_wreaper mission_wrreaper">
                                <img src="{{ asset('/public/frontend/Icon_Images/Case Study/cs4.png') }}" alt=""
                                    srcset="" class="img_responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
