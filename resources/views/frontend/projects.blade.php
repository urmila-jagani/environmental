@extends('frontend.layout.main')

@section('main-container')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Projects</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Projects</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
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
                                <img src="assets/img/gallery/case1.png" alt="">
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
                                <img src="assets/img/gallery/case2.png" alt="">
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
                                <img src="assets/img/gallery/case3.png" alt="">
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
        <!--? About Area Start -->
        <section class="support-company-area fix ">
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
                        <img src="assets/img/gallery/safe_in.png" alt="">
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
        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Clean Water</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat active text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Renewable energy</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services3.png" alt="">
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
    </main>
 @endsection   