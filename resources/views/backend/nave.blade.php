<body class="g-sidenav-show   bg-gray-100">
    <div class="center_containt_loder">
        <div class="loder" id="loder">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <span class="loging">loading...</span>
        </div>
    </div>
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
                <img src="  {{ asset('public/uploads/images/' . get_option('logo')) }}" alt="" srcset="">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mb-3">
                    <a class="nav-link active" href="{{ route('dashboard') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="nav-link " href=" {{ url('/cache') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10 fas fa-trash"></i>
                        </div>
                        <span class="nav-link-text ms-1">Cache Clean</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Web pages</h6>
                </li>
                <li class="nav-item ">
                    <div class="dropdown ">
                        <a class="  dropdown-toggle nav-link-text ms-1" type="button" id="dropdownMenuButton1"
                            aria-expanded="false" href="{{ route('home') }}">
                            <i class="ni ni-credit-card text-success text-sm opacity-10 far fa-address-card"></i>
                            <span class="nav-link-text ms-3">Home</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('client-review.index') }}">Clients</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item mt-3">
                    <div class="dropdown ">
                        <a class="  dropdown-toggle nav-link-text ms-1" type="button" id="dropdownMenuButton1"
                            aria-expanded="false" href="{{ route('job-post.index') }}">
                            <i class="ni ni-app text-info text-sm opacity-10 fas fa-briefcase"></i>
                            <span class="nav-link-text ms-3">Career</span>
                        </a>

                    </div>
                </li>
                <li class="nav-item mt-3">
                    <div class="dropdown ">
                        <a class="  dropdown-toggle nav-link-text ms-1" type="button" id="dropdownMenuButton1"
                            aria-expanded="false" href="{{ route('contact-us.index') }}">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10 fas fa-id-card-alt"></i>
                            <span class="nav-link-text ms-3">Contact Us</span>
                        </a>
                    </div>
                </li>



                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('apply-form.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10 fas fa-briefcase"></i>
                        </div>
                        <span class="nav-link-text ms-1">Apply From</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('general_settings') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-cogs text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">General Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ asset('logout') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-sign-out-alt ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
                </li>


            </ul>
        </div>

    </aside>
    <main class="main-content position-relative border-radius-lg ">

        <div class="container-fluid py-4">
