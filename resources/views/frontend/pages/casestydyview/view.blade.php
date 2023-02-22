@extends('frontend.app')
@section('container')
    <div class="casestudy">
        <div class="slider  text-center position-relative"
            style="background-image:url({{ asset('/public/frontend/Icon_Images/case\ study.jpg') }});background-position: 50% 84%; height: 325px;">
            <div class="bgclor ">
                <div class="slider_text container">
                    <img src="{{ asset('/public/frontend/Icon_Images/xs.png') }}" alt="" srcset=""
                        class="img_responsive" width="170px">
                </div>
            </div>
        </div>
    </div>


    <div class="container casestudy text-white">

        <div class="img_content  my-5">
            <div class="img text-center w-100">
                <div class="div_wreappper mission_wrreaper d-flex justify-content-center align-items-center">
                    <img src="{{ asset('/public/frontend/Icon_Images/Case Study/cs1.png') }}" alt="CaseStudy" srcset=""
                        class="w-50 csimg">
                    <div class="hover_text text-black w-25 text-start">
                        <ul class="p-0 f1rem csaction">
                            <li> Name: Ecommerce</li>
                            <li>Client: Aloso Dicosa</li>
                            <li>Completed: 2020</li>
                            <li>Location: USA</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center text-black d-inline-block">
                    <h5 class="fbold">Technology Used For This Project</h5>

                    <div class="iconimg d-flex justify-content-around py-3">
                        <div class="icon_name">
                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/flutter.svg') }}"
                                alt="flutter" srcset="" class="">
                            <h6 class="mt-2">flutter</h6>
                        </div>
                        <div class="icon_name">
                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/laravel.svg') }}"
                                alt="laravel" srcset="" class="">
                            <h6 class="mt-2">laravel</h6>
                        </div>
                        <div class="icon_name">
                            <img src="{{ asset('/public/frontend/Icon_Images/Technology icons/mysql.svg') }}" alt="mysql"
                                srcset="" class="">
                            <h6 class="mt-2">mysql</h6>
                        </div>
                    </div>


                </div>
                <p class="text-black m-auto text-center">We focussed on very specific features; mostly Fever Magazine
                    social
                    media platform
                    is based on
                    sharing user stories and making connections <br> and building community among the users. So our best
                    team of experts analyzed all possibilities and fatalities and picked the most robust, efficient
                    solutions</p>

            </div>

        </div>
    </div>

    <div class="card_bg py-md-5">

        <div class="container casestudy">

            <div class="row text-black mx-sm-5 pb-sm-3 ">
                <div class="col-lg-4 my-3 d-flex justify-content-center align-items-center">
                    <h5 class="f15rem fbold">Key Challenges We Faced</h5>
                </div>
                <div class="col-lg-8 ">

                    <div class=" ">
                        <div class="">
                            <div class="card text-black bg-white b-r-15 shadow-black">
                                <div class="card-body p-5 ">
                                    <div class="row  ">
                                        <div class="col-1  text-end">
                                            <span class="float-start text-center"><i
                                                    class="fas fa-arrow-circle-right f1rem me-2"></i></span>
                                        </div>
                                        <div class="col-11 p-0">
                                            <p class="">We used Flutter to Develop our Cross-Platform Mobile
                                                Applications for (Android, iOS). Since Flutter is a new technology stack
                                                in the developer community.</p>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-1  text-end">
                                            <span class="float-start text-center"><i
                                                    class="fas fa-arrow-circle-right f1rem me-2"></i></span>
                                        </div>
                                        <div class="col-11 p-0">
                                            <p class="">We used Flutter to Develop our Cross-Platform Mobile
                                                Applications for (Android, iOS). Since Flutter is a new technology stack
                                                in the developer community.</p>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-1  text-end">
                                            <span class="float-start text-center"><i
                                                    class="fas fa-arrow-circle-right f1rem me-2"></i></span>
                                        </div>
                                        <div class="col-11 p-0">
                                            <p class="">We used Flutter to Develop our Cross-Platform Mobile
                                                Applications for (Android, iOS). Since Flutter is a new technology stack
                                                in the developer community.</p>
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

    <!--    planning -->
    <div class="panning text-black text-center my-5 container casestudy">
        <h2 class="fbold">Planning</h2>
        <div class="slider_planning">
            <div class="shadow-black p-4 b-r-15 my-5">
                <h4>Phase One
                </h4>
                <div class="line ">
                </div>
                <p class="pt-4">In This Phase, We Are Continuously
                    Monitoring The Applications And
                    The System To Maximize User
                    Experience. And Also Planning
                    For Some New Features.
                </p>
            </div>

            <div class="shadow-black p-4 b-r-15 my-5">
                <h4>Phase Two </h4>
                <div class="line ">
                </div>
                <p class="pt-4">In This Phase, We Are Continuously
                    Monitoring The Applications And
                    The System To Maximize User
                    Experience. And Also Planning
                    For Some New Features.
                </p>
            </div>

            <div class="shadow-black p-4 b-r-15 my-5">
                <h4>Phase Three </h4>
                <div class="line ">
                </div>
                <p class="pt-4">In This Phase, We Are Continuously
                    Monitoring The Applications And
                    The System To Maximize User
                    Experience. And Also Planning
                    For Some New Features.
                </p>
            </div>



        </div>
    </div>
    <!--    planning -->
    <!-- features -->
    <div class="card_bg py-5 text-black features ">
        <div class="container casestudy">
            <div class="row ">
                <div class="  col-md-4 d-flex justify-content-center align-items-center">
                    <h2 class="fbold">Features</h2>
                </div>
                <div class="  col-md-4 justify-content-center d-flex">
                    <ul class="f1rem f400  ">
                        <li>User Authentication</li>
                        <li>Watch User Stories</li>
                        <li>Following to Other Users</li>
                        <li>Realtime one-to-one Chatting</li>
                        <li>Realtime Notification on User Activity</li>
                        <li>Story Like Comment</li>
                    </ul>
                </div>
                <div class="  col-md-4 d-flex justify-content-center">
                    <ul class="f1rem f400 ">
                        <li>Online News Portal</li>
                        <li>Picture Story</li>
                        <li>User Profile Management</li>
                        <li>Reporting Malicious Contests</li>
                        <li>Story Sharing</li>
                        <li>Story Searching</li>

                        <!-- <li>User Authentication</li>
                                                                <li>Watch User Stories</li>
                                                                <li>Following to Other Users</li>
                                                                <li>Realtime one-to-one Chatting</li>
                                                                <li>Realtime Notification on User Activity</li>
                                                                <li>Story Like Comment</li> -->
                    </ul>
                </div>

            </div>
        </div>


    </div>
    {{--  <!-- features -->
    <!-- Project Summary -->  --}}
    <div class="project_sum  text-black p-5 container casestudy">
        <h2 class="fbold text-center mb-4">Project Summary</h2>
        <h5 class="text-justify ">We never compromise the quality of our Systems and Applications and we also keep
            into
            consideration the
            effectiveness of cost. Our teams successfully managed to deliver both Android and iOS Applications and
            released them to Google Play Store and iOS App Store according to the first and second phases of
            development. Now we are continuously monitoring the Applications and receiving users' feedback and
            resolving real-time requirements based on user feedback and also planning for the third phase of
            development to extend features.</h5>
    </div>
    {{--  <!-- Project Summary -->  --}}
@endsection
