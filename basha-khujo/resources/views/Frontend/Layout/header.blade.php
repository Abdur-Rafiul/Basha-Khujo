

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{route('home')}}">
                <img class="d-block mb-2" src="{{asset('/photo/logo.png')}}" style="height: 60px" alt=""/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
{{--            <a class="text-reset me-3" href="#">--}}
{{--                <i class="fas fa-shopping-cart"></i>--}}
{{--            </a>--}}

            <!-- Notifications -->
{{--            <div class="dropdown">--}}
{{--                <a--}}
{{--                    class="text-reset me-3 dropdown-toggle hidden-arrow"--}}
{{--                    href="#"--}}
{{--                    id="navbarDropdownMenuLink"--}}
{{--                    role="button"--}}
{{--                    data-mdb-toggle="dropdown"--}}
{{--                    aria-expanded="false"--}}
{{--                >--}}
{{--                    <i class="fas fa-bell"></i>--}}
{{--                    <span class="badge rounded-pill badge-notification bg-danger">1</span>--}}
{{--                </a>--}}
{{--                <ul--}}
{{--                    class="dropdown-menu dropdown-menu-end"--}}
{{--                    aria-labelledby="navbarDropdownMenuLink"--}}
{{--                >--}}
{{--                    <li>--}}
{{--                        <a class="dropdown-item" href="#">Some news</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="dropdown-item" href="#">Another news</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <!-- Avatar -->

            @guest

                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Setting
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                    >
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                    </ul>
                </div>

            @else

                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ Auth::user()->name }}
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                    >

                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>



                    </ul>
                </div>
            @endguest

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
