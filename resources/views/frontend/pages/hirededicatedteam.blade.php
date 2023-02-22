@extends('frontend.app')
@section('container')
    <div class="cover position-relative"
        style="background-image: url({{ asset('/public/frontend/Icon_Images/businesspeople-celebrating-success.png') }});">
        <!-- <div class="extra" style="padding-top: 65px;"></div> -->
        <div class="bgclor  hire_team">
            <h2 class="text-white text-center ">Make Your project Done With
                <br>
                Our Dedicated Team
            </h2>
            <h5 class="text-white text-center mt-3">Our dedicated team will be your lifetime supporting role!</h5>
        </div>
    </div>

    <div class="container hire_dedicate_team mt-3">
        <div class="row py-5 ">
            <div class="  col-md-5 d-flex align-items-center justify-content-center">
                <div class="text-center ">
                    <h3 class="fbold">Advantage</h3>
                </div>
            </div>
            <div class="  col-md-7 ">
                <ul class="f1rem md-f1rem f500 m-b ul-b-10px ">
                    <li>Connect with service providers from all over the world..</li>
                    <li>You won't need any formal offices or infrastructure.</li>
                    <li>Reduced recruitment costs and a trouble-free hiring procedure.</li>
                    <li>Anywhere in the world, you can hire specialists to work for you.</li>
                    <li>Total control and authority over your staff in terms of monitoring.</li>
                    <li>Experienced dedicated team for a reasonable price.</li>
                </ul>
            </div>

        </div>
    </div>
    <div class="card_bg">
        <div class="container hire_dedicate_team mt-3">
            <div class="row py-5 ">
                <div class="  col-md-5 d-flex align-items-center justify-content-center">
                    <div class="text-center ">
                        <h3 class="fbold">Who Will Help?</h3>
                    </div>
                </div>
                <div class="  col-md-7 ">
                    <ul class="f1rem f500 m-b ul-b-10px">
                        <li>Organizations that looking to hire professional team members at a reasonable price.</li>
                        <li>Projects with a long-term target.</li>
                        <li>Who has no idea about hiring dedicated team members.</li>
                        <li>Organizations looking to hire dedicated team members temporarily.</li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container about">

        <div class="mission py-5 ">
            <div class="">
                <section class="client_think ">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 ">
                            <div class="client_video image transition b-r-20">
                                <img src="{{ asset('/public/frontend/Icon_Images/workers-it-company-working-computer.png') }}"
                                    alt="" srcset="" class="img-fluid ">
                            </div>

                        </div>

                        <div class="  col-lg-6">
                            <div class="client_info">
                                <h4 class="mt-3 mb-4">Get Complete Authority</h4>
                                <p class="">The dedicated team is entirely under your control. The team will
                                    handle the work schedule in accordance with your needs. Hire
                                    your dedicated team for as long as you require, and keep track of
                                    each resource's daily job progress. Change anything whenever
                                    you need to with your dedicated team.</p>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>

    <div class="card_bg">
        <div class="container hire_dedicate_team py-5 ">
            <div class="row">
                <div class="  col-md-5 d-flex align-items-center justify-content-center">
                    <div class="text-center ">
                        <h4 class="fbold">How it works?</h4>
                    </div>
                </div>
                <div class="how_it_word col-md-7">

                    <p class="f1rem f400 text-center text-md-start">
                        Recruitment of dedicated teams is more flexible with <span class="root">Root</span><span
                            class="devs">Devs</span>. Due to our years of
                        experience, we have created a procedure that will make every step of your development
                        journey from hiring to completing the task much simpler, quicker, transparent, and
                        more effective.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
