<body>

    @include('include.header2')


    <section class="main-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="green-bg">
                        <div class="profile-main">
                            <div class="user-details">
                                <div class="user-profile-pic">
                                    <img src="images/after login/profile-main.webp" alt="profile-main">
                                </div>
                                <div class="user-profile-details">
                                    <h1 class="user-name">T.Natarajan</h1>
                                    <p class="user-id">km1044</p>
                                    <p class="user-member">Membership : Free</p>
                                    <button class="user-button">View Profile</button>
                                </div>
                            </div>
                        </div>
                        <div class="profile-secondary">
                            <div class="upgrade-sec text-center py-4">
                                <p>Become A Paid Member Now</p>
                                <a class="upgrade-btn" href="#">
                                    Upgrade
                                </a>
                            </div>
                            <div class="list-sec">
                                <ul>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 1.webp">
                                        </span>
                                        <span class="description">Edit Profile</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 2.webp">
                                        </span>
                                        <span class="description">Edit Preference</span>
                                    </li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 3.webp">
                                        </span>
                                        <span class="description">Latest Profile</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 4.webp">
                                        </span>
                                        <span class="description">Preference List</span>
                                    </li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 5.webp">
                                        </span>
                                        <span class="description">Watch List</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 6.webp">
                                        </span>
                                        <span class="description">Prospect List</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 7.webp">
                                        </span>
                                        <span class="description">Blocked Profile</span>
                                    </li>
                                    <li>
                                        <hr>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 8.webp">
                                        </span>
                                        <span class="description">Settings</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Help</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="welcome-message my-3">
                        <p>Good Morning <img src="images/after login/waving-hand 1.webp" alt="waving-hand"></p>
                    </div>
                    <div class="search-section my-5 row">
                        <div class="search-column col-lg-6">
                            <p>Search By ID</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control custom-form" placeholder="Profile ID">
                                <span class="input-group-text custom-group-text">Submit</span>
                            </div>
                        </div>
                        <div class="search-column col-lg-6">
                            <p>Remarriage Search</p>
                            <div class="input-group mb-3">
                                <select class="form-control custom-form">
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <span class="input-group-text custom-group-text">Submit</span>
                            </div>
                        </div>
                    </div>
                    <div class="complete-your-profile row my-4">
                        <div class="col-lg-12 complete-your-profile-content">
                            <p>Complete Your Profile</p>
                            <span>Profile completeness score 30%</span>
                            <div class="progress" role="progressbar" aria-label="Basic example"aria-valuenow="30"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 30%;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 image-sample-1 my-3">
                            <p>Your Photo is the first thing that your matches look at</p>
                            <a href="#">
                                Add Photo
                            </a>
                        </div>
                        <div class="col-lg-6 image-sample-2 my-3">
                            <p>View horoscope compatible matches by adding your time and place of birth</p>
                            <a href="#">
                                Generate Horoscope
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="request-box row">
                            <div class="requests col-lg-6">
                                <a href="#">
                                    <img src="images/after login/mini-heart.webp" alt="mini-heart"> <span>Interest
                                        Received</span> <span>(4)</span>
                                </a>
                                <a href="#">
                                    <img src="images/after login/mini-photo.webp" alt="mini-photo"> <span>Photo
                                        Request</span> <span>(2)</span>
                                </a>
                                <a href="#">
                                    <img src="images/after login/mini-doc.webp" alt="mini-doc"> <span>Doc Request</span>
                                    <span>(0)</span>
                                </a>
                                <a href="#">
                                    <img src="images/after login/mini-call.webp" alt="mini-call"> <span>Contact
                                        Request</span> <span>(1)</span>
                                </a>
                                <a href="#">
                                    <img src="images/after login/mini-send.webp" alt="mini-send"> <span>Sent</span>
                                    <span>(5)</span>
                                </a>
                            </div>
                            <div class="request-upgrade col-lg-6">
                                <p>kindly upgrade your membership for this feature</p>
                                <a class="upgrade-btn" href="#">
                                    Upgrade
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brides-list-section">
        <div class="container">
            <h1>Latest Profile</h1>
            <p>BRIDES LIST</p>
            <div class="row">

                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
                    <div class="profile-box">
                        <div class="profile-img">
                            <img src="images/women.webp">
                        </div>
                        <div class="profile-details">
                            <h4>S.DIVYA</h4>
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
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
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
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
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
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
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
                                        Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-4 text-center wow fadeInUp" data-wow-duration="2s">
                    <a href="#" class="btn-web-green-big">View All</a>
                </div>

            </div>
        </div>
    </section>

    <section class="brides-list-section">
        <div class="container">
            <h1>New Matches (25) </h1>
            <div class="row">

                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s">
                    <div class="profile-box">
                        <div class="profile-img">
                            <img src="images/women.webp">
                        </div>
                        <div class="profile-details">
                            <h4>S.DIVYA</h4>
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
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
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
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
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
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
                            <ul style="display: block;">
                                <li>Chennai</li>
                                <li>Age : 30</li>
                            </ul>
                            <ul class="groo-ul m-0 ">
                                <li class="groom-li"><a href="#" class="view-pp">ID - KM1064</a>
                                </li>
                                <li class="groom-li"> <a href="#" class="profile-btn">View
                                        Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-4 text-center wow fadeInUp" data-wow-duration="2s">
                    <a href="#" class="btn-web-green-big">View All</a>
                </div>

            </div>
        </div>
    </section>

    <section class="upgrade-section">
        <div class="container" style="text-align: end;">
            <a style="color: #11AB57; background: #fff;" class="upgrade-btn" href="#">
                Upgrade
            </a>
        </div>
    </section>

    {{-- Footer --}}
    @include('include.footer')
    {{-- Footer --}}

</body>
