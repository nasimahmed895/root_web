<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid main_nav">
        <a class="navbar-brand" href="{{ asset('/') }}">
            <img width="180px" src="{{ asset('public/uploads/images/' . get_option('logo')) }}" alt="company-logo">
        </a>
        <button class="navbar-toggler" id="navbar-down-icon" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"
                style="background-image: url({{ asset('public/frontend/Icon_Images/Menu/Menu.png') }})"></span>
        </button>
        <button class="navbar-toggler d-none" id="navbar-up-icon" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "
                style="background-image: url({{ asset('public/frontend/Icon_Images/Menu/Cut.png') }})"></span>
        </button>
        <div class="collapse navbar-collapse activtichack" id="navbarSupportedContent">
            <ul class="navbar-nav text-center mb-lg-0 d-flex">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('index') }}">HOME</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">ABOUT</a>
                </li>
                {{--  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('case_study') || request()->routeIs('case_study_view') ? 'active' : '' }}"
                        href="{{ route('case_study') }}">CASE STUDY</a>
                </li>  --}}
                {{--  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}"
                        href="{{ route('career') }}">CAREER</a>
                </li>  --}}
                <hr>
                <li class="nav-item dropdown p-0">
                    <a class="nav-link {{ request()->routeIs('how_we_work') || request()->routeIs('dedicated_team') || request()->routeIs('project_base') ? 'active' : '' }}"
                        href="{{ route('how_we_work') }}" role="button">
                        HOW WE WORK <i class="fas fa-chevron-down word_arrow"></i>
                    </a>
                    <hr>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->routeIs('dedicated_team') ? 'active' : '' }}"><a
                                class="dropdown-item " href="{{ route('dedicated_team') }}">HIRE DEDICATE TEAM</a></li>
                        <hr>
                        <li class="{{ request()->routeIs('project_base') ? 'active' : '' }}"><a class="dropdown-item "
                                href="{{ route('project_base') }}">PROJECT BASED</a></li>
                        <hr class="hidden-hr">
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}"
                        href="{{ route('career') }}">CAREER</a>
                </li>
                <hr>

                <li class="nav-item d-flex justify-content-center align-items-center ms-3">
                    <a class="nav-link contact {{ request()->routeIs('contact_us') ? 'active' : '' }}"
                        href="{{ route('contact_us') }}">CONTACT <div class="icon">
                        </div></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
