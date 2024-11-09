<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.6/dist/js/splide.min.js"></script>
    
</head>

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
                                    <img src="images/after login/profile-main.webp" alt="profile-main"  data-bs-toggle="modal" data-bs-target="#profilePopup" style="cursor:pointer;">
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
                                <button type="submit" class="input-group-text custom-group-text">Submit</button>
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
                                <button type="submit" class="input-group-text custom-group-text">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="complete-your-profile row my-4">
                        <div class="col-lg-12 complete-your-profile-content d-flex justify-content-between align-items-center">
                            <div class="complete-your-profile-content-single">
                                <p>Complete Your Profile</p>
                                <span>Profile completeness score 30%</span>
                            </div>
                            <div class="pie-prograss">
                                <h1><span id="per">30</span>%</h1>
                                <svg class="progress-circle indefinite" width="135" height="135">
                                  <g transform="rotate(-90,68,100)">
                                    <circle class="bg" r="60" cx="100" cy="100" fill="none"></circle>
                                    <circle class="progress" r="60" cx="100" cy="100" fill="none"></circle>
                                  </g>
                                </svg>
                                <svg width="0" height="0">
                                  <defs>
                                    <linearGradient id="cl1" gradientUnits="objectBoundingBox" x1="0" y1="0" x2="1" y2="1">
                                      <stop stop-color="#00a859"/>
                                      <stop offset="100%" stop-color="#569836"/>
                                    </linearGradient>
                                  </defs>
                                </svg>
                             </div>
                        </div>
                        <div class="match-sec mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="mtc mb-3" style="background: #c8ffc8;padding: 24px;border-radius: 20px;">
                <div class="row">
                    <div class="col-4">
                        <img src="public/images/kett-sec-img.png">
                    </div>
                    <div class="col-8">
                        <p>Your Photo is the first thing that your matches look at</p>
                        <a href="#" contenteditable="false" style="cursor: pointer;padding: .3rem 2rem;background: orangered;color: #fff;text-decoration: none;border-radius: 25px;">
            Add Photo
        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="mtc" style="background: #6ec5c2;padding: 24px;border-radius: 20px;">
                <div class="row">
                    <div class="col-4">
                        <img src="public/images/horoscope.png">
                    </div>
                    <div class="col-8">
                        <p>Your Photo is the first thing that your matches look at</p>
                        <a href="#" contenteditable="false" style="cursor: pointer;padding: .3rem 2rem;background: orangered;color: #fff;text-decoration: none;border-radius: 25px;">
            Generate Horoscope
        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                    <div>
                        <div class="request-box row mt-4">
                            <div class="requests col-lg-8">
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
                            <div class="request-upgrade col-lg-4">
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
            
            <div id="splide" class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                  </ul>
                </div>
            </div>
            
        </div>
    </section>
    
    <section class="brides-list-section">
        <div class="container">
            <h1>New Matches</h1>
            
            <div id="splide2" class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
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
                                    <li class="groom-li"> <a href="#" class="view-pp">ID - KM1064</a> </li>
                                    <li class="groom-li"> <a href="#" class="profile-btn">View Profile</a> </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                  </ul>
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
    
<script>
    
    (function() {
  
  var perc = parseFloat($("#per").text()*0.01*377); // Adjusted for half size
  var perc_quarter = parseFloat(perc*0.25);
  
  var cssAnimation = document.createElement('style');
  cssAnimation.type = 'text/css';
  var rules = document.createTextNode('@keyframes progress-bar {'+
  '0% { stroke-dashoffset: 377; }'+
  '25% { stroke-dashoffset: '+parseFloat(377-perc_quarter)+'; }'+
  '50% { stroke-dashoffset: '+parseFloat(377-perc_quarter*2)+'; }'+
  '75% { stroke-dashoffset: '+parseFloat(377-perc_quarter*3.5)+'; }'+
  '100% { stroke-dashoffset: '+parseFloat(377-perc_quarter*4)+'; }'+
  '}');
  cssAnimation.appendChild(rules);
  document.getElementsByTagName("head")[0].appendChild(cssAnimation);
  setTimeout(function(){   
    $(".progress").css({
      'animation':'progress-bar 1.6s linear', 
      'stroke-dashoffset': parseFloat(377-perc_quarter*4)});
    $("svg").css('display','block') ;  
  }, 500);
})();



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

</body>
