<footer>
    <div class="">
        <section class="book_meeting_banner "
            style="background-image: url({{ asset('/public/frontend/Icon_Images/Album/21image.webp') }});">
            <div class="bg-color ">
                <div class="book_meeting">
                    <span>Book a Meeting With Us, and Let's Discuss</span>
                    <a href="{{ route('contact_us') }}">
                        <img src="{{ asset('/public/frontend/Icon_Images/Contact.png') }}" alt="">
                    </a>
                    <div id="countdown"></div>
                </div>
            </div>
        </section>
    </div>
    <div class="contant ">

        <div class="container">
            <div class="row py-5 pb-2">

                <div class="col-md-4 wrapper">
                    <div class="mb-5">
                        <span class="tbold">Get In Touch</span>
                    </div>
                    <a href="" class=""><img width="128px"
                            src="{{ asset('public/frontend/Icon_Images/Root Devs.png') }}" alt=""
                            srcset=""></a>
                    <div class="row justify-content-center g-2">
                        @foreach (\App\Models\OfficeAddress::all() as $item)
                            <div class="col-12 text-center text-sm-start" style="margin-bottom: -15px">
                                <p class="mt-3 text-center address_title text-sm-start">{{ $item->title }}</p>
                                <p class="address_address">{{ $item->address }}</p>
                                <div class="office_time ">
                                    <ul class="p-0">
                                        <li><a class="text-white" href="tel: {{ $item->country_code . $item->phone }}">
                                                <img style="width: 25px ; margin-right: 5px; margin-left: 0"
                                                    src="{{ asset('public/' . $item->image) ?? '' }}" alt=""
                                                    sizes="" srcset="">
                                                {{ $item->country_code . $item->phone }}
                                            </a></li>

                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
                <div class="col-md-3 wrapper">
                    <div class="mb-5"><span class="tbold">Quick Links</span></div>
                    <ul class="p-0">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('how_we_work') }}">How We Work</a></li>
                        {{--  <li><a href="{{ route('dedicated_team') }}">Our Team</a></li>  --}}
                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        <li><a href="{{ asset('career') }}">Career</a></li>
                    </ul>
                </div>
                <div class="col-md-3 wrapper Services">
                    <div class="mb-5"><span class="tbold">Our Services</span></div>
                    <p>Mobile App Development </p>
                    <p>Web Development</p>
                    <p> Custom Software</p>
                </div>
                <div class="col-md-2 wrapper">
                    <div class="mb-5"><span class="tbold">Follow Us</sp>
                    </div>

                    <div class="row text-center social-media">

                        <div class=" icon col col-md-3">
                            <a href="{{ get_option('facebook') }}" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('linkedin') }}" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="https://wa.me/{{ get_option('whatsapp') }}" target="_blank"><i
                                    class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('twitter') }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('youtube') }}" target="_blank"><i
                                    class="fab fa-youtube-square"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="skype:{{ get_option('skype') }}" target="_blank"><i class="fab fa-skype"></i></a>
                        </div>
                        <div class="icon  col col-md-3">
                            <a href="{{ get_option('instagram') }}" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="contant" style="padding-top: 50px;">
        <div class="copyright">
            <p class="f1rem text-center py-3"><i class="far fa-copyright"></i> Copyright 2022 RootDevs All
                Rights
                Reserved.</p>
        </div>
    </div>

</footer>
