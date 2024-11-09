<head>
    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.6/dist/js/splide.min.js"></script>-->
    
</head>

<style>
.view-pp {
    display: inline-block;
    font-size: 13px;
    padding: 5px 10px;
    color: #fff;
    font-weight: 500;
    border: 1px solid #87bf49;
    text-decoration: none;
    border-radius: 5px;
    transition: all .2s ease;
    background: linear-gradient(45deg, #8bc34a, #569836);
}
.aft-login-head1 a
    {float: right;
    background: #ffff;
    color: #0597d8;
    text-decoration: none;
    /* padding: 10px; */
    border-radius: 10px;
    font-size: 18px;
    padding: 6px 6px 5px 7px;}
.aft-login-head1{
    text-align: center;
    margin: 10px 0 28px 0;
    background: #e34257 !important;
    color: #fff;
    padding: 10px;
    border-radius: 10px;
    font-size: 20px;
    text-align: start;
    padding: 20px;
}
   .user-button{
       font-size:13px !important;
   } 
#chart-pie {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom:10px;
}
 .profile-main{
     padding-bottom:0 !important;
 }   
 .avatar-img{
     position:relative;
 }
 .crown-img{
         width: 44px;
    position: absolute;
    /* right: 14px; */
    /* margin-right: -1px; */
    left: 201px;
    z-index:9;
}
 }
</style>

<body>

    @include('include.header2')

    <section class="main-profile">
        <div class="container">
            <div class="row">
                 <div class="col-lg-3 mb-4 bg-sec" id="sidebar">
                    <div class="green-bg" >
                        <div class="profile-main text-end">
                            <!--<span class="btn-close" id="edit_closing_btn">X</span>-->
                        </div>
                         <div class="user-details">
                                <div class="user-profile-pic">
                                    <img src="images/after login/profile-main.webp" alt="profile-main"  data-bs-toggle="modal" data-bs-target="#profilePopup" style="cursor:pointer;">
                                </div>
                                <div class="user-profile-details">
                                    <h1 class="user-name">T.Natarajan</h1>
                                    <p class="user-id">km1044</p>
                                    <p class="user-member">Free Package</p>
                                    <button class="user-button">Upgrade Package</button>
                                </div>
                            </div>
                        <div class="profile-secondary">
                            <div class="list-sec mt-4">
                                <ul>
                                     <li id="bg-profile" class="{{ request()->routeIs('bride-groom') ? 'active' : '' }}" onclick="window.location.href='{{ route('bride-groom') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 1.webp"></span>
                                    <span class="description">Edit Profile</span>
                                </li>
                                
                                <li id="fam-det" class="{{ request()->routeIs('family-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('family-details') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 2.webp"></span>
                                    <span class="description">Edit Preference</span>
                                </li>
                                
                                <li id="add-det" class="{{ request()->routeIs('address-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('address-details') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 3.webp"></span>
                                    <span class="description">Latest Profile</span>
                                </li>

                               <!--<li id="add-det" class="{{ request()->routeIs('address-details') ? 'active' : '' }}" -->
                               <!--     onclick="window.location.href='{{ route('address-details') }}'" style="cursor: pointer;">-->
                               <!--     <span class="icon">-->
                               <!--         <img src="{{ asset('images/after login/icon edit profile 3.webp') }}" alt="Icon">-->
                               <!--     </span>-->
                               <!--     <span class="description">Address Details</span>-->
                               <!-- </li>-->
                                    <li id="par-prefer" class="{{ request()->routeIs('partner-preference') ? 'active' : '' }}" onclick="window.location.href='{{ route('partner-preference') }}'" style="cursor: pointer;">
                                        <span class="icon"> <img src="images/after login/icon edit profile 4.webp">
                                        </span>
                                        <span class="description">Partner Preference</span>
                                    </li>
                                    <li>
                                    </li>
                                         <li id="par-prefer" class="{{ request()->routeIs('horoscope-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('horoscope-details') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 5.webp">
                                        </span>
                                        <span class="description">Preference List</span>
                                    </li>
                                   <li id="par-prefer" class="{{ request()->routeIs('hobbies-interest') ? 'active' : '' }}" onclick="window.location.href='{{ route('hobbies-interest') }}'" style="cursor: pointer;">
                                        <span class="icon"> <img src="images/after login/icon edit profile 6.webp">
                                        </span>
                                        <span class="description">Watch List</span>
                                    </li>
                                        <li id="edu-detail" class="{{ request()->routeIs('education-occupation') ? 'active' : '' }}" onclick="window.location.href='{{ route('education-occupation') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 7.webp">
                                        </span>
                                        <span class="description">Prospect List</span>
                                    </li>
                                    <li>
                                    </li>
                                        <li id="edu-detail" class="{{ request()->routeIs('habits') ? 'active' : '' }}" onclick="window.location.href='{{ route('habits') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 8.webp">
                                        </span>
                                        <span class="description">Blocked Profile</span>
                                    </li>
                                <li id="loc-detail" class="{{ request()->routeIs('location-detail') ? 'active' : '' }}" onclick="window.location.href='{{ route('location-detail') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
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
                <!--<div class="col-lg-3">-->
                <!--    <div class="green-bg">-->
                <!--        <div class="profile-main">-->
                <!--            <div class="user-details">-->
                <!--                <div class="user-profile-pic">-->
                <!--                     <img src="images/after login/crown-3.png" alt="profile-main"  data-bs-toggle="modal" data-bs-target="#profilePopup"class="crown-img" >-->
                <!--                    <img src="images/after login/new-img.avif" alt="profile-main"  data-bs-toggle="modal" data-bs-target="#profilePopup" class="avatar-img"style="cursor:pointer;border-radius: 50%;">-->
                <!--                </div>-->
                <!--                <div class="user-profile-details">-->
                <!--                    <h1 class="user-name">Guest</h1>-->
                <!--                    <div class="free-badge">-->
                                   
                <!--                    <p class="mt-0 user-id">km1044</p>-->
                <!--                    </div>-->
                <!--                 <button class="user-button">View Profile</button>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="w-100 d-flex  align-items-center "style="justify-content: end;margin-top: -30px;">-->
                <!--            <span class="text-white" style="font-size:20px;">Complete  <br>Your Profile</span>-->
                <!--            <div id="chart-pie">-->
                <!--        </div>-->
                <!--        </div>-->
                <!--        <div class="profile-secondary">-->
                <!--            <div class="upgrade-sec text-center py-4">-->
                <!--                <p>Become A Paid Member Now</p>-->
                <!--                <a class="upgrade-btn" href="#">-->
                <!--                    Upgrade-->
                <!--                </a>-->
                <!--            </div>-->
                <!--            <div class="list-sec">-->
                <!--                <ul>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 1.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Edit Profile</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 2.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Edit Preference</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <hr>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 3.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Latest Profile</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 4.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Preference List</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <hr>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 5.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Watch List</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 6.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Prospect List</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 7.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Blocked Profile</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <hr>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 8.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Settings</span>-->
                <!--                    </li>-->
                <!--                    <li>-->
                <!--                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">-->
                <!--                        </span>-->
                <!--                        <span class="description">Help</span>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-lg-9">
                    <div class="welcome-message my-3">
                        <p>Welcome Mr T.Natarajan <img src="images/after login/waving-hand 1.webp" alt="waving-hand"></p>
                        <h2 class="aft-login-head1">Your profile is pending verification! Verify now to get better responses<a href="" >Verify Profile</a></h2>
                    </div>
                    <div>
                        <div class="request-box row mt-4">
                            <!--<div class="requests col-lg-4">-->
                            <!--    <a href="#">-->
                            <!--        <img src="images/after login/mini-heart.webp" alt="mini-heart"> <span>Interest-->
                            <!--            Received</span> <span>(4)</span>-->
                            <!--    </a>-->
                            <!--    <a href="#">-->
                            <!--        <img src="images/after login/mini-photo.webp" alt="mini-photo"> <span>Photo-->
                            <!--            Request</span> <span>(2)</span>-->
                            <!--    </a>-->
                            <!--    <a href="#">-->
                            <!--        <img src="images/after login/mini-doc.webp" alt="mini-doc"> <span>Doc Request</span>-->
                            <!--        <span>(0)</span>-->
                            <!--    </a>-->
                            <!--    <a href="#">-->
                            <!--        <img src="images/after login/mini-call.webp" alt="mini-call"> <span>Contact-->
                            <!--            Request</span> <span>(1)</span>-->
                            <!--    </a>-->
                            <!--    <a href="#">-->
                            <!--        <img src="images/after login/mini-send.webp" alt="mini-send"> <span>Sent</span>-->
                            <!--        <span>(5)</span>-->
                            <!--    </a>-->
                            <!--</div>-->
                            <!--<div class="request-upgrade col-lg-4">-->
                            <!--    <p>kindly upgrade your membership for this feature</p>-->
                            <!--    <a class="upgrade-btn" href="#">-->
                            <!--        Upgrade-->
                            <!--    </a>-->
                            <!--</div>-->
                            <div>
                        <div class="request-box row mt-4">
                            
                    <div class="row" id="bf_login_male"><div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                    <div class="profile-box">
                                        <div class="profile-img">
                                            
                                            <img src="images/1568808112_WhatsApp Image 2019-09-16 at 11.14.12 PM.jpeg">
                                        </div>
                                        <div class="profile-details">
                                            <h4>EZHUMALAI</h4>
                                            <ul>
                                                <li>undefined</li>
                                                <li>Age : 30</li>
                                            </ul>
                                            <ul>
                                                <li>Mudaliyar</li>
                                                <li>BE/B.Tech</li>
                                            </ul>
                                            <ul class="groo-ul m-0 ">
                                                <li class="groom-li"><a href="#" class="view-pp" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">ID  <span>KM4372</span></a></li>
                                                <li class="groom-li"><a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">View Profile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              
                         
                                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                    <div class="profile-box">
                                        <div class="profile-img">
                                            
                                            <img src="images/1568808112_WhatsApp Image 2019-09-16 at 11.14.12 PM.jpeg">
                                        </div>
                                        <div class="profile-details">
                                            <h4>S.GANESAN</h4>
                                            <ul>
                                                <li>undefined</li>
                                                <li>Age : 25</li>
                                            </ul>
                                            <ul>
                                                <li>Chettiar</li>
                                                <li>B.Com</li>
                                            </ul>
                                            <ul class="groo-ul m-0 ">
                                                <li class="groom-li"><a href="#" class="view-pp" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">ID  <span>KM10348</span></a></li>
                                                <li class="groom-li"><a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">View Profile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                    <div class="profile-box">
                                        <div class="profile-img">
                                            
                                            <img src="images/1568808112_WhatsApp Image 2019-09-16 at 11.14.12 PM.jpeg">
                                        </div>
                                        <div class="profile-details">
                                            <h4>M. VELAVAN</h4>
                                            <ul>
                                                <li>undefined</li>
                                                <li>Age : 29</li>
                                            </ul>
                                            <ul>
                                                <li>Vanniya Kula Kshatriyar</li>
                                                <li>I.T.I</li>
                                            </ul>
                                            <ul class="groo-ul m-0 ">
                                                <li class="groom-li"><a href="#" class="view-pp" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">ID  <span>KM6899</span></a></li>
                                                <li class="groom-li"><a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">View Profile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><div class="col-lg-3 col-6 wow fadeInUp" data-wow-duration="2s">
                                    <div class="profile-box">
                                        <div class="profile-img">
                                            
                                            <img src="images/1568808112_WhatsApp Image 2019-09-16 at 11.14.12 PM.jpeg">
                                        </div>
                                        <div class="profile-details">
                                            <h4>B.AJAI VENKATESH</h4>
                                            <ul>
                                                <li>undefined</li>
                                                <li>Age : 30</li>
                                            </ul>
                                            <ul>
                                                <li>Vanniya Kula Kshatriyar</li>
                                                <li>BE/B.Tech</li>
                                            </ul>
                                            <ul class="groo-ul m-0 ">
                                                <li class="groom-li"><a href="#" class="view-pp" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">ID  <span>KM12857</span></a></li>
                                                <li class="groom-li"><a href="#" class="profile-btn" data-bs-toggle="modal" data-bs-target="#login1" contenteditable="false" style="cursor: pointer;">View Profile</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div></div>        
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="brides-list-section">-->
    <!--    <div class="container">-->
    <!--        <h1>Latest Profile</h1>-->
    <!--        <p>BRIDES LIST</p>-->
            
    <!--        <div id="splide" class="splide">-->
    <!--            <div class="splide__track">-->
    <!--              <ul class="splide__list">-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--        </div>-->
            
    <!--    </div>-->
    <!--</section>-->
    
    <!--<section class="brides-list-section">-->
    <!--    <div class="container">-->
    <!--        <h1>New Matches</h1>-->
            
    <!--        <div id="splide2" class="splide">-->
    <!--            <div class="splide__track">-->
    <!--              <ul class="splide__list">-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="splide__slide">-->
    <!--                    <div class="profile-box">-->
    <!--                        <div class="profile-img">-->
    <!--                            <img src="images/women.webp">-->
    <!--                        </div>-->
    <!--                        <div class="profile-details">-->
    <!--                            <h4>S.DIVYA</h4>-->
    <!--                            <ul style="display: block;">-->
    <!--                                <li>Chennai</li>-->
    <!--                                <li>Age : 30</li>-->
    <!--                            </ul>-->
    <!--                            <ul class="groo-ul m-0 ">-->
    <!--                                <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>-->
    <!--                                <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--        </div>-->
            
    <!--    </div>-->
    <!--</section>-->

    <!--<section class="upgrade-section">-->
    <!--    <div class="container" style="text-align: end;">-->
    <!--        <a style="color: #11AB57; background: #fff;" class="upgrade-btn" href="#">-->
    <!--            Upgrade-->
    <!--        </a>-->
    <!--    </div>-->
    <!--</section>-->

    {{-- Footer --}}
    @include('include.footer')
    {{-- Footer --}}
     <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    
//     (function() {
  
//   var perc = parseFloat($("#per").text()*0.01*377); // Adjusted for half size
//   var perc_quarter = parseFloat(perc*0.25);
  
//   var cssAnimation = document.createElement('style');
//   cssAnimation.type = 'text/css';
//   var rules = document.createTextNode('@keyframes progress-bar {'+
//   '0% { stroke-dashoffset: 377; }'+
//   '25% { stroke-dashoffset: '+parseFloat(377-perc_quarter)+'; }'+
//   '50% { stroke-dashoffset: '+parseFloat(377-perc_quarter*2)+'; }'+
//   '75% { stroke-dashoffset: '+parseFloat(377-perc_quarter*3.5)+'; }'+
//   '100% { stroke-dashoffset: '+parseFloat(377-perc_quarter*4)+'; }'+
//   '}');
//   cssAnimation.appendChild(rules);
//   document.getElementsByTagName("head")[0].appendChild(cssAnimation);
//   setTimeout(function(){   
//     $(".progress").css({
//       'animation':'progress-bar 1.6s linear', 
//       'stroke-dashoffset': parseFloat(377-perc_quarter*4)});
//     $("svg").css('display','block') ;  
//   }, 500);
// })();



document.addEventListener( 'DOMContentLoaded', function () {
    new Splide('#splide', {
        type: 'loop',
        perPage: 3,
        focus: 'center',
        autoplay: true,
        interval: 8000,
        flickMaxPages: 3,
        updateOnMove: true,
        pagination: false,
        padding: '10%',
        throttle: 300,
        breakpoints: {
            576: {
                perPage: 1,
                padding: '20%',
                focus: 'center'
            }
        }
    }).mount();
});

document.addEventListener( 'DOMContentLoaded', function () {
    new Splide('#splide2', {
        type: 'loop',
        perPage: 3,
        focus: 'center',
        autoplay: true,
        interval: 8000,
        flickMaxPages: 3,
        updateOnMove: true,
        pagination: false,
        padding: '10%',
        throttle: 300,
        breakpoints: {
            576: {
                perPage: 1,
                padding: '20%',
                focus: 'center'
            }
        }
    }).mount();
});


  </script>
  <script>
var options = {
    series: [44, 56],
    chart: {
        type: 'donut',
    },
    colors: ['#4CAF50', '#E0E0E0'],
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: false,
                        formatter: function(w) {
                            return w.globals.series[0] + '%';
                        }
                    }
                }
            }
        }
    },
    dataLabels: {
        enabled: false,
    },
    tooltip: {
        enabled: false
    }
};

var chart = new ApexCharts(document.querySelector("#chart-pie"), options);
chart.render();
</script>

</body>
