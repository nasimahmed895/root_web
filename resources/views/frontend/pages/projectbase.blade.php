@extends('frontend.app')

@section('title', '| PROJECT BASED')

@section('container')
    <div class="cover position-relative mt-5"
        style="background-image: url({{ asset('/public/frontend/Icon_Images/Album/20image.webp') }});">
        <div class="bgclor hire_team ">
            <h2 class="text-white text-center mb-1">Project-Based solutions Implementation

            </h2>
            <h5 class="text-white text-center">Get enhanced customer satisfaction, with our Project-Based Engagement</h5>
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
                    <li>Delivering the project for a fixed cost.</li>
                    <li>Anywhere in the world, you can hire professionals to work for you.</li>
                    <li>You won't be required to handle any project responsibilities from beginning to end.
                    </li>
                    <li>We will handle everything on your behalf.</li>
                    <li>The cost will be made completely clear to you upfront, and the deadline will be set
                        in advance.</li>
                    <li>Efficient and affordable solution.</li>
                    <li>To complete the project, no physical infrastructure is needed.</li>
                    <li>Unless there are significant changes, the budget will remain unchanged.</li>
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
                        <li>Software firms, new businesses, startups, and agencies.</li>
                        <li>Companies looking for specialized solutions for their business.</li>
                        <li>Organizations looking to carry out a dedicated project.</li>
                        <li>Organizations that don't have the necessary resources to complete a specified project.</li>

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
                            <div class="mission_wrreaper overflow-hidden">
                                <div class="image b-r-20 bgclor overflow-hidden">
                                    <img src="{{ asset('public/frontend/Icon_Images/Album/18image.webp') }}" alt=""
                                        srcset="" class="img-fluid b-r-20 ">
                                </div>

                            </div>

                        </div>

                        <div class="  col-lg-6">
                            <div class="client_info">
                                <h4 class="mt-3 mb-4">Get customer satisfaction
                                </h4>
                                <p class="">We will offer effective solutions in accordance with your
                                    requirements if you supply us with your ideas and deliverables.
                                    Create software solutions based on the demands of your
                                    business. The extent of potential future modifications. Receive
                                    a timely, successful delivery. </p>
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
                    <p class="f1rem f400 text-center text-md-start">Recruitment of dedicated teams is more flexible with
                        <span class="root">Root</span><span class="devs">Devs</span>. Due to our years of
                        experience, we have created a procedure that will make every step of your development
                        journey from hiring to completing the task much simpler, quicker, transparent, and
                        more effective.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
