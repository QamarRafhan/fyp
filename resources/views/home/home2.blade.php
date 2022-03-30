@extends('home.index', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<section class="counter">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="pb-3">BLOOD COMMUNITY MEMBERS</h1>

            </div>
            <div class="col count-item">
                <span id="count1" class="display-4"></span>
                <p>BLOOD REQUESTS</p>
            </div>
            <div class="col count-item">
                <span id="count2" class="display-4"></span>
                <p>REQUESTS COMPLETED</p>
            </div>
            <div class="col count-item">
                <span id="count3" class="display-4"></span>
                <p>OUR BLOOD DONORS</p>
            </div>
        </div>
    </div>
</section>


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
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="" required="">
                            </div>
                        </div>
                        <div class="bmd-form-group mt-3 is-filled">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">email</i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="" required="">
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
                                <textarea type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Subject" value="" required=""></textarea>
                            </div>
                        </div>
                        <div class="bmd-form-group mt-3 is-filled">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">message</i>
                                    </span>
                                </div>
                                <textarea type="text" name="message" id="message" class="form-control" placeholder="Enter Your Message" value="" required=""></textarea>
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

</section>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js

    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, step);
        }
        counter("count1", 0, 400, 3000);
        counter("count2", 100, 50, 2500);
        counter("count3", 0, 40, 3000);
    });
</script>


@endpush