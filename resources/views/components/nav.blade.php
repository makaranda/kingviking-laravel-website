  <!-- header-start -->
  @if(Auth::check())
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <!-- Navbar Toggler for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <!-- Navbar Links -->
            <div class="collapse navbar-collapse nav-md-block" id="navbarNav"> 
                <div class="row justify-content-center">

                    <ul class="navbar-nav col-md-6">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>

                    <!-- Right-aligned Dropdown -->
                    <ul class="navbar-nav ms-auto col-md-6 float-right justify-content-right pr-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endif


  <header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ url('public/assets/frontend/img/'. $settings['main_logo']) }}" alt="King Viking Logo" class="img-fluid main-logo"/>
                                    <div alt="King Viking Logo" class="mobile-logo d-lg-none">
                                        King Viking
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="{{ route('home') == request()->url() ? 'active' : '' }}"><a class="active" href="{{ route('home') }}">home</a></li>
                                        <li class="{{ route('frontend.about') == request()->url() ? 'active' : '' }}"><a href="{{ route('frontend.about') }}">About</a></li>
                                        <li class="{{ route('frontend.musictracks') == request()->url() ? 'active' : '' }}"><a href="{{ route('frontend.musictracks') }}">Music tracks</a></li>
                                        <li class="{{ route('frontend.musicvideos') == request()->url() ? 'active' : '' }}"><a href="{{ route('frontend.musicvideos') }}">Video tracks</a></li>
                                        {{-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="{{ route('frontend.contact') == request()->url() ? 'active' : '' }}"><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="social_icon text-right">
                                <ul>
                                    <li><a href="{{ $settings['social_facebook'] }}"> <i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="{{ $settings['social_twitter'] }}"> <i class="fa fa-twitter"></i> </a></li>
                                    <li><a href="{{ $settings['social_instagram'] }}"> <i class="fa fa-instagram"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->




