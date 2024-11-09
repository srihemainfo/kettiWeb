<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.6/dist/js/splide.min.js"></script>
    
    <style>
        .wrapper {
  width: 520px;
  max-width: 100%;
}
.list-sec ul li.active {
    background: aquamarine;
    padding: 12px 0;
    border-radius: 14px;
}
.progress-bar {
  height: 17px;
  width: 100%;
  background-color: #ffffff !important;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 2px 0 10px inset rgba(0,0,0,0.2);
  position: relative;
}

* + .progress-bar {
  margin-top: 2rem;
}

.bar {
  width: 0;
  height: 100%;
  background-color: #B6244F;
  
  /*Lollipop background gradient*/
  background-image: linear-gradient(
    -45deg,
    rgba(255, 255, 255, .2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, .2) 50%,
    rgba(255, 255, 255, .2) 75%,
    transparent 75%,
    transparent
  );
 
  background-size: 30px 30px;
  animation: move 2s linear infinite;
  box-shadow: 2px 0 10px inset rgba(0,0,0,0.2);
  transition: width 2s ease-out;
}

/*Lollipop background gradient animation*/
@keyframes move {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 30px 30px;
  }
}

.perc {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-weight: bold;
}
.img-pg{
    width:40px; 
    float:right;
}
.img-pg1{
    width:40px; 
    float:right;
}
.cm-font{
    font-size:17px;
}
.cm-font1{
    font-size: 17px;
    font-weight: 500;
}

#edit_profile_btn, #edit_closing_btn {
    cursor: pointer;
}

.btn-close {
    position: static !important;
    padding: .5em .85em !important;
}
.navbar-two {
    display: none;
}
.lock{
    float: right;
    color: #e34257;
}
.aft-login-head{
    text-align: center;
    margin: 10px 0 28px 0;
    background: #9b0000;
    color: #fff;
    padding: 10px;
    border-radius: 10px;
}
    </style>
</head>
<body>

    @include('include.header2')

    <section class="main-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="green-bg">
                        <div class="profile-main">
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
                             <div class="wrapper mt-4 mb-3">
                         <div class="progress-bar">
                       <div class="bar" data-size="80">
                      <span class="perc"></span>      
                     </div>
                      </div>
                     </div>
                        </div>
                        <div class="profile-secondary">
                            <div class="list-sec mt-4">
                                <ul>
                                    <li id="edit_profile_btn">
                                        <span class="icon"> <img src="images/after login/icon edit profile 1.webp">
                                        </span>
                                        <span class="description">Edit Profile</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li id="fam-det">
                                        <span class="icon"> <img src="images/after login/icon edit profile 2.webp">
                                        </span>
                                        <span class="description">Edit Preference</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 3.webp">
                                        </span>
                                        <span class="description">Latest Profile</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 4.webp">
                                        </span>
                                        <span class="description"> Preference List</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 5.webp">
                                        </span>
                                        <span class="description">Watch List</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 6.webp">
                                        </span>
                                        <span class="description">Prospect List</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 7.webp">
                                        </span>
                                        <span class="description">Blocked Profile</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 8.webp">
                                        </span>
                                        <span class="description">Settings</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Help</span>
                                        <span><i class="fa fa-lock lock"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="main_profile_screen">
                    
                    <div id="aft-login">
                        <h2 class="aft-login-head">Education & Occupation</h2>
                        <div class="request-box row">
                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" style="color: #868686;">Education</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                   
                                </select>
                                </div><div class="col-md-6 mb-3">
                                     <label class="form-label" style="color: #868686;">Education in Details</label>
                                <input type="text" class="form-control" value="CSE">
                                </div>
                                   
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">If Nothing is Suitable Others</label>
                                <input type="text" class="form-control">
                                    </div>
                                    
                                     <div class="col-md-6 mb-3">
                                               <label class="form-label" style="color: #868686;">Occupation</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                          
                                </select>
                                    </div>
                                    
                                         <div class="col-md-6 mb-3">
                                         <label class="form-label" style="color: #868686;">Employed / Occupation in Details</label>
                                <input type="text" class="form-control" value="Nothing">
                                
                                    </div>
                                    
                                         <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Employed In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                   
                                </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Job Schedule</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                    
                                </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                       <label class="form-label" style="color: #868686;">Monthly Income Rs</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                    </div>
                                         <div class="col-md-6 mb-3">
                                   <label class="form-label" style="color: #868686;">Additional Income Rs</label>
                                <input type="text" class="form-control">
                                    </div>
                                    
                                   <div class="row mt-4">
                                        <div class="next-btn text-center ">
                                        <a href="#">Save</a>
                                    </div>
                                   </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                   @include('myprof-side')
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
<script>
        function loading() {
  document.querySelectorAll(".bar").forEach(function(current) {
    let startWidth = 0;
    const endWidth = current.dataset.size;
    
    /* 
    setInterval() time sholud be set as trasition time / 100. 
    In our case, 2 seconds / 100 = 20 milliseconds. 
    */
    const interval = setInterval(frame, 20);

    function frame() {
      if (startWidth >= endWidth) {
        clearInterval(interval);
      } else {
          startWidth++;
          current.style.width = `${endWidth}%`;
          current.firstElementChild.innerText = `${startWidth}%`;
        }
     }
  });
}

setTimeout(loading, 1000);
</script>

<script>
    $(document).ready(function() {
    $("#fam-det").click(function() {
        $("#fam-det1").show();
        $("#bg-profile1").hide();
    });
    
});
</script>

<script>
  $(document).ready(function() {
      $("#edit-icon").hide();
      $("#eye-icon").show();
      
    $("#eye-icon").click(function() {
        $("#eye-icon").hide();
        $("#edit-icon").show();
    })
      
    $("#edit-icon").click(function() {
        $("#edit-icon").hide();
        $("#eye-icon").show();
    })
      
    
    $("#eye-icon").click(function() {
        $("#com-preview").show();
        $("#com-pre").hide();
    });
    
    $("#edit-icon").click(function() {
        $("#com-pre").show();
        $("#com-preview").hide();
    });
    
    
    $("#edit_profile_btn").click(function(){
        
        $("#main_profile_screen").removeClass('col-lg-9');
        $("#main_profile_screen").addClass('col-lg-6');
        $(".bg-sec").show(500);
        
    })
    
    $("#edit_closing_btn").click(function(){
        
        $("#main_profile_screen").removeClass('col-lg-6');
        $("#main_profile_screen").addClass('col-lg-9');
        $(".bg-sec").hide(500);
        
    })
    
    
});
</script>
</body>
