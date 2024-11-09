<html>
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!------ Style for This Page ------>
    
    <link rel="stylesheet" href="css/success-story.css">
    
</head>


<body>
    

    <!--start header-->
    
    @include('include.header2')
    
    <!--end header-->
    
<section class="success-story-section">
    
    <div class="container">
        <ul class="d-flex justify-content-evenly nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Success Story</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Post Your Success Story</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row" style="background: #fff7eb;">
                    <div class="col-lg-12">
                        <div class="dek-banner">
                            <p>Millions of Happy Marriages</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="story-banner-card">
                            <img src="images/story-group.png">
                            <p>Millions have found their life partner through our services including our Founder & CEO, Mr.Murugavel</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="story-banner-card">
                            <img src="images/story-favorite.png">
                            <p>We are the only matrimony company to get featured in Limca book of world records for the largest no. of documented marriage online.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="story-banner-card">
                            <img src="images/story-rings.png">
                            <p>We organise more marriages than anyone else in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="story-recent-title">Recent Success Stories</p>
                    </div>
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-one" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 1 -->
                    <div class="modal fade" id="story-one" tabindex="-1" aria-labelledby="story-oneLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-two" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 2 -->
                    <div class="modal fade" id="story-two" tabindex="-1" aria-labelledby="story-twoLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-three" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 3 -->
                    <div class="modal fade" id="story-three" tabindex="-1" aria-labelledby="story-threeLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-four" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 4 -->
                    <div class="modal fade" id="story-four" tabindex="-1" aria-labelledby="story-fourLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-five" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 5 -->
                    <div class="modal fade" id="story-five" tabindex="-1" aria-labelledby="story-fiveLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-six" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 6 -->
                    <div class="modal fade" id="story-six" tabindex="-1" aria-labelledby="story-sixLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-seven" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 7 -->
                    <div class="modal fade" id="story-seven" tabindex="-1" aria-labelledby="story-sevenLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-eight" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 8 -->
                    <div class="modal fade" id="story-eight" tabindex="-1" aria-labelledby="story-eightLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4" data-bs-toggle="modal" data-bs-target="#story-nine" style="cursor:pointer;">
                        <div class="single-story-item">
                            <img src="images/story-couple-img.webp">
                            <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                            <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                            <p style="color:#5D5C5C;padding: 0 1rem; font-weight: 500; font-size: 1rem;">Thank you Matrimony! We connected on Matrimony <a style="color:#00A859;text-decoration: underline;">MORE...</a></p>
                        </div>
                    </div>
                    <!-- Modal 9 -->
                    <div class="modal fade" id="story-nine" tabindex="-1" aria-labelledby="story-nineLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <span style="font-size: 1.5rem;">Millions of Happy Stories</span>
                                    <button class="colse-btn" data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                                </div>
                                <div class="col-lg-4">
                                    <div class="modal-single-item">
                                        <img src="images/story-couple-img.webp">
                                        <p style="padding: 1rem 1rem 0 1rem; font-size: 1.2rem; font-weight: 600;">Akash & Priya</p>
                                        <p style="color:#727272;padding: 0 1rem; font-size: .8rem;">Marriage Date : <span>06 Sep 2024</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="modal-single-content">
                                        <p>Thank you Matrimony! We connected on Matrimony and took things forward. We informed family and friends of our mutual liking for each other. Happy to have found the perfect partner with the help of Matrimony</p>
                                    </div>
                                </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-12 mt-4 text-center">
                        <a href="#" class="btn-web-green-big" style="cursor: pointer;">View More</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="upload-success-story">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 my-5">
                                <label class="fs-3">Upload your seccefully story or interesting feedback</label>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Bride Name (Female)*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Groom Name (Male)*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Your Matrimony ID*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Your Partner's ID</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Email ID*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Engagement Date</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Marriage Date*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Upload Photo*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Address*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Country Living In*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Country Code*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Telephone*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label class="fs-5">Success Story*</label>
                            </div>
                            <div class="col-lg-8 mb-4">
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class=" col-lg-12 default-content text-center mt-4">
                                <a href="#" class="btn-web-green-big" contenteditable="false" style="cursor: pointer;">Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</section>  

    <!--start footer-->
    
    @include('include.footer')
    
    <!--end footer-->
    

    
    
</body>    
</html>