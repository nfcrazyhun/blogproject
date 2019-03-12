<!DOCTYPE html>
<html lang="en">
<head>
    <title>IIG2 Project - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('styles')
</head>
<body>
<!-- Nav Menu -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <!-- Brand -->
    <a class="navbar-brand" href="/">HOME</a>

    <ul class="navbar-nav">>
        @if($user = Auth::user())
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin Panel</a>
            </li>
        @endif
    </ul>


    <ul class="navbar-nav flex-row ml-auto">>
        @if(Auth::guest())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        @endif

        @if($user = Auth::user())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"
                >
                    {{'Logout: '.Auth::user()->name }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endif
    </ul>


</nav>
<!-- Nav Menu end -->

<div class="container">
    <div class="row">
    @yield('content')
    </div>
</div>


<!-- Footer -->
<footer class="page-footer bg-dark text-light">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© {{date('Y')}} Copyright:
        <a href="/">Földesi, Péter</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
@yield('scripts')



</body>
</html>