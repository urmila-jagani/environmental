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
                                <h2>About us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">About</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <span>Our Mission</span>
                <h2>Our main goal is to protect animals(you)</h2>
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
        <section class="support-company-area fix pb-padding">
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
                        <img src="{{url("frontend/img/gallery/safe_in.png")}}" alt="">
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
    </main>
@endsection
