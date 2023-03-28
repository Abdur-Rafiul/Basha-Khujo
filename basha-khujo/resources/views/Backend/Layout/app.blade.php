<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />



    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- ✅ Load CSS file for jQuery ui  -->
    <link
        href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"
        rel="stylesheet"
    />

    <!-- ✅ load jQuery ✅ -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>

    <!-- ✅ load jquery UI ✅ -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <title>Basha Khujo</title>
</head>

<body style="background-image:url({{url('photo/body-bg.jpg')}})">
<div   class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div style="background-image:url({{url('photo/in_registration.png')}})"  class="" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-user-secret me-2"></i>Codersbite</div>
        <div class="list-group list-group-flush my-3">
            <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-transparent second-text "><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('basha_list')}}" class="basha_list list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa-solid fa-building me-2"></i>Basha List</a>
            <a href="{{route('booking.list')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-chart-line me-2"></i>Booking List</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-paperclip me-2"></i>Reports</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-shopping-cart me-2"></i>Store Mng</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-gift me-2"></i>Products</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-comment-dots me-2"></i>Chat</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2"></i>Outlet</a>

        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

@yield('content')
</div>
<!-- /#page-content-wrapper -->
</div>




{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<!-- MDB -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>






<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>

<script src="{{asset('/js/custom.js')}}"></script>
<script src="{{asset('/js/jquery.toast.js')}}"></script>
@yield('script')
</body>


</html>
