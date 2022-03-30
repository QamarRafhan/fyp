<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    @stack('head')
</head>

<body class="{{ $class ?? '' }}">

    <div class="header"
        style="background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url({{ asset('images/backgurnd.jpg') }});">
        <div class="header-top">
            <div class="logo">
                <img src="{{ asset('images/logo.jpeg') }}" alt="logo" class="logo-pic">
            </div>
            
                <ul class="meanu-bar">
                    <a href="#" class="data">
                        <li>Home </li>
                    </a>
                    <a href="#" class="data">
                        <li> BloodDonate </li>
                    </a>
                    <a href="#" class="data">
                        <li> Hostpitallocatio</li>
                    </a>
                    <a href="/login" class="data">
                        <li> Log in</li>
                    </a>
                    <a href="/register" class="data">
                        <li> Sing Up</li>
                    </a>

                </ul>
        
            <div class="clr"></div>
        </div>
        <div class="hading">
            <h1 class="boold">UMT BLOOD COMMUNITY PAKISTAN</h1>
        </div>
    </div>
    @yield('content')
    @include('partials.footer')
</body>
<script src="{{ asset('material') }}/js/settings.js"></script>

@stack('js')

</html>
