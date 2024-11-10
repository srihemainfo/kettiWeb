<head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.6/dist/js/splide.min.js"></script>
    
    <style>
        .wrapper {
  width: 520px;
  max-width: 100%;
}
.list-sec ul li.active {
     border-right: 5px solid #e34257;
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
.fm-subhead{
    font-size:20px;
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
                        <h2 class="aft-login-head">Partner Preference</h2>
                        <div class="request-box row">
                            
                            <form class="mt-3">
                                <div class="row">
                                    <div class="mb-3">
                                <p class="fm-subhead">Basic Profile Information</p>
                            </div>
                                    <div class="col-md-6 mb-3">
                                <label class="form-label" style="color: #868686;">Marital Status</label>
                                <select class="form-select" name="marital" id="marital">
                                <option value="">Select Marital Status</option>
                                <option value="Never Married">Unmarried</option>
                                <option value="Widow with children">Widow / Widower with Children / Child</option>
                                <option value="Widow without children">Widow / Widower without Children / Child</option>
                                <option value="Divorce with children">Divorce with Children / Child</option>
                                <option value="Divorce without children">Divorce without Children / Child</option>
                                <option value="Awaiting Divorce with children">Awaiting Divorce with Children / Child</option>
                                <option value="Awaiting Divorce without children">Awaiting Divorce without Children / Child</option>
                             </select>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                      <label class="form-label" style="color: #868686;">Age</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                </select>
                                </div>
                                   
                                    <div class="col-md-6 mb-3">
                                             <label class="form-label" style="color: #868686;">Height</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                  
                                </select>
                                    </div>
                                    
                                     <div class="col-md-6 mb-3">
                                           <label class="form-label" style="color: #868686;">Physical Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">Select</option>
                                    <option value="Doesn't Matter">Doesn't Matter</option>
		                         	<option value="Normal">Normal</option>
			                       <option value="Physically challenged">Physically Challenged</option>

                                </select>
                                    </div>
                                    
                                         <div class="col-md-6 mb-3">
                                         <label class="form-label" style="color: #868686;">Others</label>
                                <input type="text" class="form-control" value="Test">
                                    </div>
                                    <div class="mb-3">
                                <p class="fm-subhead">Religion Preference</p>
                            </div>
                                         <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Mother Tongue</label>
                                <select class="form-select">
                                    <option value="any">Select Mother Tongue</option>

							<option value="69">Angika</option>

							<option value="5">Arunachali</option>

							<option value="4">Assamese</option>

							<option value="6">Awadhi</option>

							<option value="70">Badaga</option>

							<option value="7">Bengali</option>

							<option value="8">Bhojpuri</option>

							<option value="9">Bihari</option>

							<option value="10">Brij</option>

							<option value="11">Chatisgarhi</option>

							<option value="12">Dogri</option>

							<option value="13">English</option>

							<option value="14">French</option>

							<option value="15">Garhwali</option>

							<option value="16">Garo</option>

							<option value="17">Gujarati</option>

							<option value="18">Haryanvi</option>

							<option value="19">Himachali/Pahari</option>

							<option value="20">Hindi</option>

							<option value="21">Kanauji</option>

							<option value="22">Kannada</option>

							<option value="23">Kashmiri</option>

							<option value="24">Khandesi</option>

							<option value="25">Khasi</option>

							<option value="26">Konkani</option>

							<option value="27">Koshali</option>

							<option value="28">Kumaoni</option>

							<option value="29">Kutchi</option>

							<option value="30">Ladacki</option>

							<option value="31">Lepcha</option>

							<option value="32">Magahi</option>

							<option value="33">Maithili</option>

							<option value="34">Malayalam</option>

							<option value="35">Manipuri</option>

							<option value="36">Marathi</option>

							<option value="37">Marwari</option>

							<option value="38">Miji</option>

							<option value="39">Mizo</option>

							<option value="40">Monpa</option>

							<option value="41">Nepali</option>

							<option value="62">Nicobarese</option>

							<option value="63">Oriya</option>

							<option value="56">Others</option>

							<option value="44">Punjabi</option>

							<option value="49">Rajasthani</option>

							<option value="67">Sanskrit</option>

							<option value="68">Santhali</option>

							<option value="48">Sindhi</option>

							<option value="50">Sourashtra</option>

							<option value="51">Tamil</option>

							<option value="52">Telugu</option>

							<option value="53">Tripuri</option>

							<option value="54">Tulu</option>

							<option value="55">Urdu</option>
                                </select>
                                </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" style="color: #868686;">Caste</label>
                                <input type="text" class="form-control" value="Brahmin-Iyenger">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Sub Caste</label>
                                <input type="text" class="form-control" value="Parvatha Rajakulam, Vanniya Kula">
            
                                    </div>
                                    <div class="col-md-6 mb-3">
                                         <label class="form-label" style="color: #868686;">Star</label>
                                <input type="text" class="form-control" value="Anusham">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                 <label class="form-label" style="color: #868686;">Rasi</label>
                                <input type="text" class="form-control" value="Dhanusu">
                                    </div>
                                <div class="col-md-6 mb-3">
                                         <label class="form-label" style="color: #868686;">Laknam</label>
                                <input type="text" class="form-control" value="Meenam">
                                </div>
                                 <div class="col-md-6 mb-3">
                                      <label class="form-label" style="color: #868686;">Dosham</label>
                                <input type="text" class="form-control" value="Chevvai Dosham, Kala Sarpa Dosham">
                                </div>
                                <div class="mb-3">
                                <p class="fm-subhead">Professional Life</p>
                                </div>
                                  <div class="col-md-6 mb-3 ">
                                    <label class="form-label" style="color: #868686;">Education</label>
                                <input type="text" class="form-control" value="Bachalors - Engineering Computer / Others">
                                </div>
                                 <div class="col-md-6 mb-3 ">
                                          <label class="form-label" style="color: #868686;">Sub Education</label>
                                <input type="text" class="form-control" value="Bachalors - Engineering Computer / Others">
                                </div>
                                 <div class="col-md-6 mb-3 ">
                                       <label class="form-label" style="color: #868686;">Employed In</label>
                                <input type="text" class="form-control" value="Defence, Private">
                                </div>
                                 <div class="col-md-6 mb-3 ">
                                       <label class="form-label" style="color: #868686;">Occupation</label>
                                <input type="text" class="form-control" value="Banking and Finance">
                                </div>
                                  <div class="col-md-6 mb-3 ">
                                  
                                <label class="form-label" style="color: #868686;">Monthly Income Rs</label>
                                <input type="text" class="form-control" value="50,000 to 60,000">
                                </div>
                                <div class="mb-3">
                                <p>Location Preference</p>
                            </div>
                                <div class="col-md-6 mb-3 ">
                                   <label class="form-label" style="color: #868686;">Country Living In</label>
                                <input type="text" class="form-control" value="India">
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <label class="form-label" style="color: #868686;">State Living In</label>
                                <input type="text" class="form-control" value="Tamil Nadu">
                                </div>
                                       <div class="col-md-6 mb-3 ">
                                     <label class="form-label" style="color: #868686;">District Living In</label>
                                <input type="text" class="form-control" value="Chennai">
                                </div>
                                <div class="mb-3">
                                  <p class="fm-subhead">Habits Preference</p>
                                </div>
                                   <div class="col-md-6 mb-3">
                                  <label class="form-label" style="color: #868686;">Eating Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Vegetarian</option>
                                </select>
                                </div>
                                   <div class="col-md-6 mb-3 ">
                                <label class="form-label" style="color: #868686;">Smoking Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Non Smoker</option>
                                  
                                </select>
                                </div>
                                 <div class="col-md-6 mb-3">
                                  <label class="form-label" style="color: #868686;">Drinking Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Non Drinker</option>
                                    
                                </select>
                                </div>
                                 <div class="col-md-6 mb-3">
                               <label class="form-label" style="color: #868686;">About My Family</label>
                                <input type="text" class="form-control">
                                </div>
                                   <div class="row mt-4 mb-4">
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
