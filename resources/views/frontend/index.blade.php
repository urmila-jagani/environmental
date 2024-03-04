@extends('frontend.layout.main')

@section('main-container')
    <main>

        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Environment</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy life<br> we need to protect </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Environment</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy life<br> we need to protect </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg3 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s">Environment</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s">Provide us a green and healthy life<br> we need to protect </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="industries.html" class="hero-btn mb-10"  data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--? video_start -->
            {{-- <div class="video-area d-flex align-items-center justify-content-center">
                <div class="video-wrap position-relative">
                    <div class="video-icon" >
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div> --}}
            <!-- video_end -->

        </div>
        <!-- slider Area End-->
        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <span>Our Mission</span>
                <h2>Our main goal is to protect animals</h2>
                <p>The automated process starts as soon as
                    your clothes go into the machine. Duis cursus, mi quis
                    viverra ornare, eros dolor interdum nulla, ut commodo
                    diam libero vitae erat. Aenean faucibus nibh et justo
                    cursus id rutrum lorem imperdiet. Nunc ut sem vitae
                risus tristique posuere.</p>
                <p class="pera-bottom">Interdum nulla, ut commodo diam libero vitae erat.
                    Aenean faucibus nibh et justo cursus id rutrum lorem
                imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                <div class="footer-tittles">
                    <p>CEO, Consulto</p>
                    <h2>Capcilena Hanry</h2>
                </div>
            </div>
        </div>
        <!-- Visit Our Tailor End -->
        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="{{url("frontend/img/gallery/services1.png")}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Clean Water</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat active text-center mb-30">
                            <div class="cat-icon">
                                <img src="{{url("frontend/img/gallery/services2.png")}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Renewable energy</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="{{url("frontend/img/gallery/services3.png")}}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Protect animals</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? About Area Start -->
        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-30">
                        <span>Why You Should join us</span>
                        <h2>A lot of animals need protection</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Interdum nulla, ut commodo diam libero vitae erat.
                            Aenean faucibus nibh et justo cursus id rutrum lorem
                        imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        <a href="#" class="border-btn">Join Us Now</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="{{url("frontend//img/gallery/safe_in.png")}}" alt="">
                    </div>
                    <div class="support-img-cap text-center d-flex">
                        <div class="single-one">
                            <span>950</span>
                            <p>Poaching cases</p>
                        </div>
                        <div class="single-two">
                            <span>230</span>
                            <p>Volunteers worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Every day 6,000 beavers perished</h2>
                            <p class="pl-20 pr-20">Interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo
                            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="{{url("frontend//img/gallery/case1.png")}}" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Wildlife in Danger</a></h3>
                                <p>Interdum nulla, ut commodo diam libero vitae
                                    erat. Aenean faucibus nibh et justo cursus
                                rutrum.</p>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="70"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / progress -->
                                <div class="prices">
                                    <p><span>47,589 of 74,574</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="{{url("frontend/img/gallery/case2.png")}}" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Our Green Projects</a></h3>
                                <p>Interdum nulla, ut commodo diam libero vitae
                                    erat. Aenean faucibus nibh et justo cursus
                                rutrum.</p>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="25"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices">
                                    <p><span>47,589 of 74,574</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases">
                            <div class="cases-img">
                                <img src="{{url("frontend/img/gallery/case3.png")}}" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Wildlife in Danger</a></h3>
                                <p>Interdum nulla, ut commodo diam libero vitae
                                    erat. Aenean faucibus nibh et justo cursus
                                rutrum.</p>
                                <!-- Progress Bar -->
                                <div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="50"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices">
                                    <p><span>47,589 of 74,574</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Cases End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area pb-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-11">
                        <div class="section-tittle text-center mb-90">
                            <h2>Latest news</h2>
                            <p>Interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo  cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{url("frontend/img/gallery/home-blog1.png")}}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">Leverage agile frameworks to provide a robust synopsis</a></h3>
                                    <p>The automated process starts as soon as  your clothes go into the machine. Duis cursus, mi quis viverra ornare.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{url("frontend/img/gallery/home-blog2.png")}}" alt="">
                                </div>
                                <div class="blog-cap">
                                    <h3><a href="blog_details.html">Leverage agile frameworks to provide a robust synopsis</a></h3>
                                    <p>The automated process starts as soon as  your clothes go into the machine. Duis cursus, mi quis viverra ornare.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

    </main>
  @endsection
