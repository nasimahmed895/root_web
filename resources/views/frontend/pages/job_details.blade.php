@extends('frontend.app')

@section('title', '| JOB DETAILS')

@php
    $links = Share::page($current, $career->title)
        ->facebook()
        ->telegram()
        ->linkedin()
        ->whatsapp()
        ->getRawLinks();
@endphp

@section('container')

    <div class="casestudy nav-top">
        <div class="slider  text-center position-relative"
            style="background-image:url({{ asset('/public/frontend/Icon_Images/JobDetails/01image.png') }});">
            <div class="bgclor  " style="background-color: rgb(21 20 64 / 68%);">
                <div class="slider_text container">
                    <svg viewBox="0 0 1320 300">
                        <text x="50%" y="50%" dy=".35em" text-anchor="middle">Join Our Team </text>

                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="container jobdetails">
        <div class="heading_top">
            <div class="heading pt-5">
                <div class="row m-auto ">
                    <div class="col-9 p-0 d-flex align-items-center">
                        <h3 class=" float-start">{{ $career->title }}</h3>
                        <div id="share_button">
                            <div class="share">
                                <span>
                                    <i class="fas fa-share-alt"></i>
                                </span>
                                <div class="nav">
                                    <nav>
                                        <a href="{{ $links['facebook'] }}" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $links['linkedin'] }}" target="_blank"><i
                                                class="fab fa-linkedin"></i></a>
                                        <a href="{{ $links['telegram'] }}" target="_blank"><i
                                                class="fab fa-telegram-plane"></i></a>
                                        <a href="{{ $links['whatsapp'] }}" target="_blank"><i
                                                class="fab fa-whatsapp"></i></a>
                                        <a href="javascript:void(0)" title="Copy Link" id="copy-link"><i
                                                class="fas fa-link"></i></a>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0">
                        <div class="" id="appy_button">
                            <a href="{{ route('basic-information', $career->slug) }}" class=" float-end">
                                <img class="apply_img"
                                    src="{{ asset('/public/frontend/Icon_Images/Root_icons/apply.png') }}" alt=""
                                    srcset="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="details">
            {{--  <h6><span class="root">Root</span><span class="Devs">Devs.</span>  --}}
        </div>
        <div id="job-attr" class="row heading_bottom mb-5 mt-3 m-auto text-center text-md-start">
            <div class="col-6 col-md-3  border-bottom">
                <p>Experience</p>
                <h5 class="m-0">{{ $career->experience }}</h5>
            </div>
            <div class="col-6 col-md-3  border-bottom border-right-0">
                <p>Work Level</p>
                <h5 class="m-0">{{ $career->work_level }}</h5>
            </div>
            <div class="col-6 col-md-3  border-bottom">
                <p>Employee Type</p>
                <h5 class="m-0">{{ $career->job_time }}</h5>
            </div>
            <div class="col-6 col-md-3  border-bottom">
                <p>Offer Salary</p>
                <h5 class="m-0">{{ $career->salary }}</h6>
            </div>
        </div>
    </div>
    </div>
    <div class="card_bg">
        <div class="container ">
            <div class="job-details">
                <div class="details "><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/overview.png') }}" alt=""
                        srcset=""></div>
                <div class="details">
                    <div class="details_main">
                        <h4 class="mb-4">Overview</h4>
                        <p class="text-justify">{!! $career->overview !!} </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="job-details_right">
                <div class="details text">
                    <div class="details_main">
                        <h4 class="">Job Responsibilities</h4>
                        <p class="text-justify">{!! $career->job_requirement !!}</p>
                    </div>
                </div>
                <div class="details img"><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/skill.png') }}" alt=""
                        srcset=""></div>
            </div>
        </div>
    </div>
    <div class="card_bg">
        <div class="container ">
            <div class="job-details">
                <div class="details "><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/education.png    ') }}" alt=""
                        srcset=""></div>
                <div class="details">
                    <div class="details_main">
                        <h4 class="mb-4">Educational Requirements
                        </h4>
                        <p>{!! $career->requirement !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="job-details_right">
                <div class="details text">
                    <div class="details_main">
                        <h4 class="">Compensation & Other Benefits</h4>
                        <div class="text-justify benefits" style="font-size: 1.1rem;">{!! $career->benefits !!}</div>
                    </div>
                </div>
                <div class="details img"><img class="img_responsive"
                        src="{{ asset('/public/frontend/Icon_Images/JobDetails/benefits.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>
    @if ($career->note != '' || $career->note != null)
        <div class="card_bg">
            <div class="container ">
                <div class="">
                    <div class="details_main py-4 " style="font-size: 17px;margin-left:5%">
                        <p>{!! $career->note !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    </div>
    <div class="container">
        <div class="wreapper text-center py-5">
            <h4>Life at <strong style="color: red; text-shadow: 2px 3px 2px #ddd;">Root</strong> Devs</h4>
            <div class="grid-container gallery">
                <div class="grid-item1 grid-item"><img class="team1 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/12image.webp') }}" alt=""
                        srcset="">
                </div>
                <div class="grid-item2 grid-item"><img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/10image.webp') }}" alt=""
                        srcset=""></div>
                <div class="grid-item3 grid-item"><img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/11image.webp') }}" alt=""
                        srcset=""></div>
                <div class="grid-item4 grid-item"> <img class="team2 teamimg img_responsive"
                        src="{{ asset('public/frontend/Icon_Images/Album/09image.webp') }}" alt=""
                        srcset="">
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js-script')
    <script>
        $('a#copy-link').click(function() {
            navigator.clipboard.writeText(window.location.href);
            toast('success', 'Copy in Clipboard!');
        })
    </script>
@endsection
