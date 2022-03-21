<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Dashboard') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet" />

    <!--   Core JS Files   -->
    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
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
    <div class="our_team_sec">
        <div class="container">
            <div class="row blog">
                <h1 class="center mx-auto text-center py-4 text-white font-weight-bold">Our Team Members</h1>

                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="invisible carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Dana Robins</h3>
                                                <span class="post">Marketing Consultant</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">John Doe</h3>
                                                <span class="post">Marketing Consultant</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Markus Baas</h3>
                                                <span class="post">Financial Expert</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Sophia Lee</h3>
                                                <span class="post">Customer Support</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Ted Robbins</h3>
                                                <span class="post">Law Expert</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Noel Flantier</h3>
                                                <span class="post">Marketing Consultant</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Ernesto Appia</h3>
                                                <span class="post">Team Leader</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="https://i.ibb.co/L8Pj1mg/o6EuTCT6.jpg">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="title">Rosita Jimenez</h3>
                                                <span class="post">Marketing Consultant</span>
                                            </div>
                                            <ul class="social">
                                                <li>
                                                    <a href="#" class="fa fa-envelope"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="contatct-form fon-zero txt-center">
                <h1 class="txt-center fon-40">CONTACT <span class="colr-red">US</span></h1>

                <div class="form wd-44 mrgn-auto">
                    <div class="card card-login mb-3">


                        <div class="card-body">
                            <div class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person</i>
                                        </span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name"
                                        value="" required="">
                                </div>
                            </div>
                            <div class="bmd-form-group mt-3 is-filled">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter Your Email" value="" required="">
                                </div>
                            </div>
                            <div class="bmd-form-group mt-3 is-filled">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons"><span class="material-icons-outlined">
                                                subject
                                                </span></i>
                                        </span>
                                    </div>
                                    <textarea type="text" name="subject" id="subject" class="form-control"
                                        placeholder="Enter Your Subject" value="" required=""></textarea>
                                </div>
                            </div>
                            <div class="bmd-form-group mt-3 is-filled">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">message</i>
                                        </span>
                                    </div>
                                    <textarea type="text" name="message" id="message" class="form-control"
                                        placeholder="Enter Your Message" value="" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-success btn-link btn-lg btn_bg_color">Send</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer>
            <section class="bck-black">
                <div class="container  fon-zero mrg-tp">
                    <div class="width-29 colr-wht d-inline-blck">Copyright © 2022 Blood Community</div>
                    <div class="width-29 colr-wht d-inline-blck txt-center">
                        <ul class="list">
                            <li><a href=""></a><img src="images/facebook.png" alt="img" class="bordr-rd2"></li>
                            <li><a href=""></a><img src="images/insta.png" alt="img" class="bordr-rd2"></li>
                            <li><a href=""></a><img src="images/pinsta.png" alt="img" class="bordr-rd2"></li>
                            <li><a href=""></a><img src="images/twitter.png" alt="img" class="bordr-rd2"></li>
                        </ul>
                    </div>
                    <div class="width-29 colr-wht d-inline-blck txt-end">Powered by Codematics Inc.</div>
                </div>
            </section>
        </footer>
    </section>
</body>
<script src="{{ asset('material') }}/js/settings.js"></script>

@stack('js')

</html>
