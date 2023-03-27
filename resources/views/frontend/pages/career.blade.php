@extends('frontend.app')

@section('title', '| CAREER')

@section('container')
    <div class="bg-image-wrap career">
        <div class="bg-image"></div>
        <div class="overlay"></div>
        <div class="slidcont">
            <h2>Build your future with <span style="color: #ff305e;">Root</span>Devs</h2>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card job-list-card"
                    style="background-color: #F7FAFD; border: none;  box-shadow: 0px 0px 6px 1px #CFCECE; padding: 30px 30px;">
                    <div class="job-heading">
                        <i class='fas'>&#xf290;</i>
                        <h2>Grab Job Position</h2>
                    </div>
                    <div class="row">
                        @forelse ($career as $careers)
                            <div class="col-md-12 mb-3">
                                <div class="job-list-item">
                                    <div class="left">
                                        <p>{{ $careers->title }}</p>
                                        <span> <i class='fas'>&#xf290;</i> {{ $careers->company_name }}</span>
                                        <span> <i class='fas'>&#xf3c5;</i> {{ $careers->location }}</span>
                                    </div>
                                    <div class="middle">
                                        <p><strong class="devs">Till:</strong> {{ $careers->date_time }}</p>
                                        <span>Vacancy: {{ $careers->vacancy }}</span>
                                    </div>
                                    <div class="right text-center " style="margin-right:8px ">
                                        <a href=" {{ url('job-details', [$careers->slug]) }} "> <button
                                                class="btn">Details</button></a>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <img src="{{ asset('public/frontend/Icon_Images/JobDetails/found.gif') }}" alt=""
                                srcset="" style="width: 30%; margin: 0 auto; ">
                            <h5 class="text-center opacity-50"> No Jobs right Now</h5>
                        @endforelse

                        {{--  <div class="col-md-12 mb-3">
                            <div class="job-list-item">
                                <div class="left">
                                    <p>Junior Laravel Developer</p>
                                    <span> <i class='fas'>&#xf290;</i> RootDevs</span>
                                    <span> <i class='fas'>&#xf3c5;</i> Dhaka, Bangladesh</span>
                                </div>
                                <div class="middle">
                                    <p>6 November, 2022</p>
                                    <span>Vacancy: 02</span>
                                </div>
                                <div class="right text-center ">
                                    <a href="{{ asset('job-details') }}"> <button class="btn">Details</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="job-list-item">
                                <div class="left">
                                    <p>Junior Laravel Developer</p>
                                    <span> <i class='fas'>&#xf290;</i> RootDevs</span>
                                    <span> <i class='fas'>&#xf3c5;</i> Dhaka, Bangladesh</span>
                                </div>
                                <div class="middle">
                                    <p>6 November, 2022</p>
                                    <span>Vacancy: 02</span>
                                </div>
                                <div class="right text-center">
                                    <a href="{{ asset('job-details') }}"> <button class="btn">Details</button></a>
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="wreapper text-center py-5">
            <h4>Life at <strong style="color: red; text-shadow: 2px 3px 2px #ddd;">Root</strong> Devs</h4>
            <div class="grid-container gallery">
                <div class="grid-item1 grid-item"><img class="team1 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/08image.png" alt="" srcset=""></div>
                <div class="grid-item2 grid-item"><img class="team2 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/06image.png" alt="" srcset=""></div>
                <div class="grid-item3 grid-item"><img class="team2 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/07image.jpg" alt="" srcset=""></div>
                <div class="grid-item4 grid-item"> <img class="team2 teamimg img_responsive"
                        src="public/frontend/Icon_Images/Album/05image.png" alt="" srcset=""></div>

            </div>
        </div>

    </div>
@endsection
