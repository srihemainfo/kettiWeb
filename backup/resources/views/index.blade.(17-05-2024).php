<!doctype html>
<html lang="en">

<body>

    <!--start header-->
    
     @include('include.header')
    
    <!--end header-->

    <!--slider-->
    <section class="slider-wrapper"
        style="background: url(images/slider.webp) no-repeat center center; background-size: cover;">


        <div class="slider">

            <h1 data-aos="zoom-out" data-aos-duration="1000"> Find here your Perfect Better Half</h1>

            <div class="form-container" data-aos="fade-up" data-aos-duration="1000">
                
                <div class="form-box">
                    <label class="form-label" for="looking">I'm looking for a</label>
                    <select class="form-select" id="looking">
                        <option value="" selected>Select</option>
                        <option value="groom">Groom</option>
                        <option value="bride">Bride</option>
                    </select>
                </div>



                <div class="form-box">
                    <label class="form-label" for="aged">Aged</label>
                    <select class="form-select" id="aged">
                        <option value="" selected>From</option>
                        <option value="18">18 - 25</option>
                        <option value="26">26 - 30</option>
                    </select>
                </div>

                <div class="form-box">
                    <label class="form-label" for="religion">Religion</label>
                    <select class="form-select" id="religion">
                        <option value="" selected>Select Religion</option>
                        <option value="hindu">Hindu</option>
                        <option value="christ">Christian</option>
                        <option value="muslim">Muslim</option>
                    </select>
                </div>

                <div class="form-box">
                    <label class="form-label" for="mother-tongue">Mother Tongue</label>
                    <select class="form-select" id="mother-tongue">
                        <option value="" selected>Select Language</option>
                        <option value="tamil">Tamil</option>
                        <option value="telugu">Telugu</option>
                        <option value="kannada">Kannada</option>
                    </select>
                </div>

                <div class="form-box">
                    <button class="btn-web-green" data-bs-toggle="modal" data-bs-target="#login1">Search</button>
                </div>

            </div>

        </div>




    </section>
    <!--slider-->
    <!--content area-->
    <section class="wrapper padding-1 bg-light-yellow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="web-title">
                        <h3>KettimelamMatrimony.com</h3>
                        <p>For Better Choice</p>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">

                    <div class="default-content-flex">
                        <div class="icon-flex">
                            <div class="digit">
                                <h6>1</h6>
                            </div>
                            <img src="images/register.webp" alt="">
                        </div>
                        <div class="default-flex-content">
                            <h4>Register</h4>
                            <p>Register for free & put up your Profile </p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">

                    <div class="default-content-flex">
                        <div class="icon-flex">
                            <div class="digit">
                                <h6>2</h6>
                            </div>
                            <img src="images/heart1.webp" alt="">
                        </div>
                        <div class="default-flex-content">
                            <h4>Connect</h4>
                            <p>Select & Connect with Matches you like</p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">

                    <div class="default-content-flex">
                        <div class="icon-flex">
                            <div class="digit">
                                <h6>3</h6>
                            </div>
                            <img src="images/symbol_1.webp" alt="">
                        </div>w
                        <div class="default-flex-content">
                            <h4>Interact</h4>
                            <p>Become a Premium Member & Start a Conversation </p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!--content area-->

    <!--content area-->
    <section class="wrapper padding-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="web-title" data-aos="fade-down" data-aos-duration="1000">
                        <h3>Latest Profile</h3>
                        <p>Find your Special Someone</p>
                    </div>
                    <div class="st-seperator">
                        <div class="st-seperator-left" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                        <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                        <div class="st-seperator-right" data-aos="fade-right" data-aos-duration="1000">
                        </div>
                    </div>
                </div>

                <div class="col-lg-11">
                    <div class="doggle-div mb-3">
                        <ul class="nav nav-tabs select-gender-tab" id="myTab" role="tablist">
                            <li class="nav-item" data-aos="fade-left" data-aos-duration="1000" role="presentation">
                                <button class="nav-link active" id="groom-tab" data-bs-toggle="tab"
                                    data-bs-target="#groom" type="button" role="tab" aria-controls="groom"
                                    aria-selected="true">Grooms List
                                </button>
                            </li>
                            <li class="nav-item" data-aos="fade-right" data-aos-duration="1000" role="presentation">
                                <button class="nav-link" id="bride-tab" data-bs-toggle="tab" data-bs-target="#bride"
                                    type="button" role="tab" aria-controls="bride" aria-selected="false">Brides List
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content bg-white" id="myTabContent">

                        <!--start groom-->
                        <div class="tab-pane fade show active" id="groom" role="tabpanel" aria-labelledby="groom-tab">
                            <div class="profile-theme">

                                <div class="row">

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/man.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>T.NAGARAJAN</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1044</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-4 text-center wow fadeInUp" data-wow-duration="2s">
                                        <a href="#" class="btn-web-green-big" data-bs-toggle="modal" data-bs-target="#login1">View All</a>
                                    </div>
                                </div>



                            </div>

                        </div>
                        <!--end groom-->

                        <!--start bride-->
                        <div class="tab-pane fade" id="bride" role="tabpanel" aria-labelledby="bridetab">
                            <div class="profile-theme">

                                <div class="row">

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.2s">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                    <li>Age : 30</li>
                                                </ul>
                                                <ul>
                                                    <li>MBC</li>
                                                    <li>B,Sc.Phy</li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-4 text-center wow fadeInUp" data-wow-duration="2s">
                                        <a href="#" class="btn-web-green-big" data-bs-toggle="modal" data-bs-target="#login1">View All</a>
                                    </div>

                                </div>
                            </div>
                            <!--end bride-->


                        </div>
                    </div>


                </div>
            </div>
    </section>
    <!--content area-->

    <!--content area-->
    <section class="wrapper padding-1 bg-pattern-1">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <div class="web-title wow fadeInUp" data-wow-duration="2s">

                        <h3 class="mb-3">Kettimelam Matrimony site with Over 5 Lakh Happy Stories
                        </h3>


                    </div>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" id="testimonials">
                        <div class="item wow fadeInLeft" data-wow-duration="2s">
                            <div class="default-content text-center">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>

                        <div class="item wow fadeInUp" data-wow-duration="2s">
                            <div class="default-content text-center">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>

                        <div class="item wow fadeInRight" data-wow-duration="2s">
                            <div class="default-content text-center">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>

                        <div class="item">
                            <div class="default-content">
                                <div class="icon-img-2">
                                    <img src="images/couple.webp" alt="">
                                </div>
                                <h4>Anitha & Kadhir</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam itaque dignissimos
                                    impedit obcaecati adipisci vero autem veritatis eaque.</p>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp">
                    <div class="default-content text-center mt-4">
                        <a href="#" class="btn-web-green-big" data-bs-toggle="modal" data-bs-target="#login1">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--content area-->


    <!--content area-->
    <section class="menu-wrapper overflow mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-md-6 p-0 wow fadeInLeft" data-wow-duration="2s">
                    <div class="doll-sec">
                        <div class="default-content text-center bg-box ">
                            <div class="con-img">
                                <img src="images/doll-2.webp" alt="" style="width:100px;height: 100px;">
                            </div>
                            <h3>Customer care</h3>
                            <p>For any assistance call</p>
                            <ul class="font-big">
                                <li><i class="far fa-clock"></i> 10 AM to 7.30 PM</li>
                                <li><i class="fas fa-phone-alt"></i> 735 876 8433, 044 - 4856 0155</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 p-0 wow fadeInRight" data-wow-duration="2s">
                    <div class="note-sec">
                        <div class="default-content text-center bg-box ">
                            <div class="con-img">
                                <img src="images/notes.webp" alt="" style="width:100px;height: 100px;">
                            </div>
                            <h3>Easy Registration</h3>
                            <p>Please send photos,Horoscope. Bio - Data Through</p>
                            <ul class="font-big">
                                <li><i class="far fa-clock"></i> 10 AM to 7.30 PM</li>
                                <li><i class="fas fa-phone-alt"></i> 733 887 4957</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--content area-->


    <!-- Carousel for Video -->


    <!-- Carousel for Video -->


    <!--content area-->
    <section class="wrapper padding-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="web-title">
                        <h3 class="wow fadeInUp" data-wow-duration="2s">Through our website all your<br>"Dreams Come True". </h3>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">Aims or Goals can be missed; But Trying should not be stopped.</p>
                    </div>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 p-4 wow fadeInLeft" data-wow-duration="2s">
                    <div class="default-content mb-4" style="position: relative;">
                        <img src="images/mrg1.webp" class="img-click">
                        <img src="images/youtube-player.webp" alt="youtube-player" class="youtube-player" data-bs-toggle="modal" data-bs-target="#video-1">
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="video-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                        <div class="modal-content bg-transparant">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="fas fa-times"></i></button>

                                <div class="default-content">
                                    <iframe class="lazy" src="https://www.youtube.com/embed/9j89dmRTGx8" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="col-lg-4 p-4 wow fadeInUp" data-wow-duration="2s">
                    <div class="default-content mb-4" style="position: relative;">
                        <img src="images/mrg2.webp" class="img-click">
                        <img src="images/youtube-player.webp" alt="youtube-player" class="youtube-player" data-bs-toggle="modal" data-bs-target="#video-2">
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="video-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                        <div class="modal-content bg-transparant">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="fas fa-times"></i></button>

                                <div class="default-content">
                                    <iframe class="lazy" src="https://www.youtube.com/embed/MM6EygDy-dI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="col-lg-4 p-4 wow fadeInRight" data-wow-duration="2s">
                    <div class="default-content mb-4" style="position: relative;">
                        <img src="images/mrg3.webp" class="img-click">
                        <img src="images/youtube-player.webp" alt="youtube-player" class="youtube-player" data-bs-toggle="modal" data-bs-target="#video-3">
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="video-3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  modal-lg">
                        <div class="modal-content bg-transparant">

                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                        class="fas fa-times"></i></button>

                                <div class="default-content">
                                    <iframe class="lazy" src="https://www.youtube.com/embed/MM6EygDy-dI" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Modal -->

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s">

                    <div class="default-content text-center m-3">

                        <a href="#" class="btn-web-green-big" data-bs-toggle="modal" data-bs-target="#register1">Register Now</a>

                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--content area-->

    <!-- green bar -->

    <section class="wrapper green-bar">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-duration="2s">
                    <div class="green-content">
                        <p>Love Is Waiting For You</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <div class="green-btn">
                        <a class="grn-btn" data-bs-toggle="modal" data-bs-target="#register1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- green bar -->

    <!--content area-->
    <section class="wrapper padding-1 bg-light-green">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="web-title">
                        <h3>Search by Popular Matchmaking Sites
                        </h3>
                        <div class="st-seperator">
                            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            </div>
                            <div class="st-seperator-center"><img src="images/4.webp" alt="icon"></div>
                            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay="0.2s"></div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 wow fadeInLeft" data-wow-duration="2s">
                    <div class="search-links note-sec1 mb-4">
                        <h5>by Mother Tongue</h5>
                        <ul>
                                    <li><a href=""> Tamil</a></li>
                               
                                    <li><a href="">Bengali</a></li>
                               
                                    <li><a href=""> Gujarati</a></li>
                               
                                    <li><a href=""> Hindi</a></li>
                           
                                    <li> <a href="">Kannada</a></li>
                               
                                    <li> <a href="">Malayalam</a></li>
                               
                                    <li> <a href="">Marathi</a></li>
                               
                                    <li> <a href="">Odia</a></li>
                          
                               
                                    <li> <a href="">Punjabi</a></li>
                               
                                    <li> <a href="">Sindhi</a></li>
                               
                                    <li> <a href="">Telugu</a></li>
                               
                                    <li> <a href="">Odia</a></li>
                           
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="2s">
                    <div class="search-links note-sec1 mb-4">
                        <h5>by Religion</h5>
                        <ul>
                           
                                    <li><a href="">Hindu</a></li>
                                     <li> <a href="">Buddhist</a></li>
                                      <li> <a href="">Christian</a></li>
                                       <li> <a href="">Jain</a></li>
                                        <li> <a href="">Muslim</a></li>
                                
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-duration="2s">
                    <div class="search-links note-sec1 mb-4">
                        <h5>by Community</h5>
                        <ul>
                            <li><a href="">Adi Dravida</a></li>
                            <li> <a href="">Arya Vysya</a></li>
                            <li> <a href="">Brahmin</a></li>
                            <li> <a href="">Ezhava</a></li>
                            <li> <a href="">Iyer</a></li>
                            <li> <a href="">Kamma</a></li>
                            <li> <a href="">Maratha</a></li>
                            <li> <a href="">Nadar</a></li>
                            <li> <a href="">Nair</a></li>
                            <li> <a href="">Reddy</a></li>
                            <li> <a href="">Vokkaliga</a></li>
                            <li> <a href="">Yadav</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--content area-->

    @include('include.footer')

    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>



    <script>
        $('#testimonials').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function () {
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
    </script>
    
    <script>
       document.addEventListener("DOMContentLoaded", function() {
    var iframes = document.querySelectorAll("iframe.lazy");

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var iframe = entry.target;
                    iframe.src = iframe.dataset.src;
                    observer.unobserve(iframe);
                }
            });
        });

        iframes.forEach(function(iframe) {
            observer.observe(iframe);
        });
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        iframes.forEach(function(iframe) {
            iframe.src = iframe.dataset.src;
        });
    }
});

    </script>

    <script src="js/wow.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

</body>

</html>