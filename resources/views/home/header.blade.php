<div id="sticky-header" class="main-header-area">
    <div class="container-fluid">
        <div class="header_bottom_border">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="active" href="index.html">home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a class="" href="travel_destination.html">Destination</a></l/li>
                                <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                            <li><a href="destination_details.html">Destinations details</a></li>
                                            <li><a href="elements.html">elements</a></li>
                                    </ul>
                                </li>
<<<<<<< HEAD
                                <li><a href="#">Travel Journey<i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Travel Journey</a></li>
                                        {{-- ini untuk create travel Journey --}}
                                        <li><a href="{{url('create_traveljouney')}}">Create Travel Journey</a></li>
=======
                                <li><a href="#">Travel journey <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Travel Journey</a></li>
                                        <li><a href="{{url('create_traveljourney')}}">Create Travel Journey</a></li>
>>>>>>> 938c2da411919d0d133a770f072b255a271235bd
                                    </ul>
                                </li>
                                @if (Route::has('login'))

                                @auth
                                <x-app-layout>

                                </x-app-layout>
                                <form action="#" method="POST">
                    @csrf <!-- Laravel CSRF token -->
                    <select name="language" id="language">
                        <option value="id">Bahasa Indonesia</option>
                        <option value="en">English</option>
                    </select>
                    <button type="submit">Submit</button>
                </form>

                                

                                @else
                                <li><a href="{{route('login')}}">Login</a></li>
                                

                                <li><a href="{{route('register')}}">Register</a></li>

                                @endauth

                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    <div class="social_wrap d-flex align-items-center justify-content-end">
                        {{-- <div class="number">
                            <p> <i class="fa fa-phone"></i> 10(256)-928 256</p>
                        </div> --}}
                        <div class="social_links d-none d-xl-block">
                            {{-- <ul>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="seach_icon">
                <a href="/places">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>

    </div>
</div>