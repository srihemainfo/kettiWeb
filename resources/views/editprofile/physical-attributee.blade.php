<head>
  
    <style>
    .list-sec ul li.active {
   border-right: 5px solid #e34257;
}
        .wrapper {
  width: 520px;
  max-width: 100%;
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
                        <h2 class="aft-login-head">Physical Attributes</h2>
                        <div class="request-box row">
                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Blood Group</label>
                                <select class="form-select" aria-label="Default select example">
                                   <option value="">SELECT</option>
                                <option value="1">A+ve</option>
                                <option value="3">A-ve</option>
                                <option value="5">A1+ve</option>
                                <option value="10">A1-ve</option>
                                <option value="13">A1B+ve</option>
                                <option value="14">A1B-ve</option>
                                <option value="11">A2+ve</option>
                                <option value="12">A2-ve</option>
                                <option value="15">A2B+ve</option>
                                <option value="16">A2B-ve</option>
                                <option value="8">AB+ve</option>
                                <option value="9">AB-ve</option>
                                <option value="2">B+ve</option>
                                <option value="4">B-ve</option>
                                <option value="6">O+ve</option>
                                <option value="7">O-ve</option>
                                                
                                </select>
                                </div><div class="col-md-6 mb-3">
                                   <label class="form-label" style="color: #868686;">Height</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">--- Ft/In - Cms ---</option>
                        <option value="121">Below 4 Ft 5 In - 135 Cms</option>
                        <option value="135">4 Ft 5 In - 135 Cms</option>
                        <option value="137">4 Ft 6 In - 137 Cms</option>
                        <option value="139">4 Ft 7 In - 139 Cms</option>
                        <option value="142">4 Ft 8 In - 142 Cms</option>
                        <option value="145">4 Ft 9 In - 145 Cms</option>
                        <option value="147">4 Ft 10 In - 147 Cms</option>
                        <option value="150">4 Ft 11 In - 150 Cms</option>
                        <option value="152">5 Ft - 152 Cms</option>
                        <option value="155">5 Ft 1 In - 155 Cms</option>
                        <option value="157">5 Ft 2 In - 157 Cms</option>
                        <option value="160">5 Ft 3 In - 160 Cms</option>
                        <option value="163">5 Ft 4 In - 163 Cms</option>
                        <option value="165">5 Ft 5 In - 165 Cms</option>
                        <option value="168">5 Ft 6 In - 168 Cms</option>
                        <option value="170">5 Ft 7 In -170 Cms</option>
                        <option value="173">5 Ft 8 In - 173 Cms</option>
                        <option value="175">5 Ft 9 In - 175 Cms</option>
                        <option value="177">5 Ft 10 In - 177 Cms</option>
                        <option value="180">5 Ft 11 In - 180 Cms</option>
                        <option value="183">6 Ft - 183 Cms</option>
                        <option value="185">6 Ft 1 In - 185 Cms</option>
                        <option value="188">6 Ft 2 In - 188 Cms</option>
                        <option value="190">6 Ft 3 In - 190 Cms</option>
                        <option value="193">6 Ft 4 In - 193 Cms</option>
                        <option value="196">6 Ft 5 In - 196 Cms</option>
                        <option value="198">6 Ft 6 In - 198 Cms</option>
                        <option value="201">6 Ft 7 In - 201 Cms</option>
                        <option value="203">6 Ft 8 In - 203 Cms</option>
                        <option value="206">6 Ft 9 In - 206 Cms</option>
                        <option value="208">6 Ft 10 In - 208 Cms</option>
                        <option value="211">6 Ft 11 In - 211 Cms</option>
                        <option value="213">7 Ft - 213 Cms</option>
                        <option value="215">Above 7 Ft -213 Cms</option>
                                    
                                </select>
                                </div>
                                   
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Weight</label>
                                <select class="form-select" aria-label="Default select example">
                                   <option value="">--Kgs--</option>
                        <option value="40"> 40 Kgs</option>
                        <option value="41"> 41 Kgs</option>
                        <option value="42"> 42 Kgs</option>
                        <option value="43"> 43 Kgs</option>
                        <option value="44"> 44 Kgs</option>
                        <option value="45"> 45 Kgs</option>
                        <option value="46"> 46 Kgs</option>
                        <option value="47"> 47 Kgs</option>
                        <option value="48"> 48 Kgs</option>
                        <option value="49"> 49 Kgs</option>
                        <option value="50"> 50 Kgs</option>
                        <option value="51"> 51 Kgs</option>
                        <option value="52"> 52 Kgs</option>
                        <option value="53"> 53 Kgs</option>
                        <option value="54"> 54 Kgs</option>
                        <option value="55"> 55 Kgs</option>
                        <option value="56"> 56 Kgs</option>
                        <option value="57"> 57 Kgs</option>
                        <option value="58"> 58 Kgs</option>
                        <option value="59"> 59 Kgs</option>
                        <option value="60"> 60 Kgs</option>
                        <option value="61"> 61 Kgs</option>
                        <option value="62"> 62 Kgs</option>
                        <option value="63"> 63 Kgs</option>
                        <option value="64"> 64 Kgs</option>
                        <option value="65"> 65 Kgs</option>
                        <option value="66"> 66 Kgs</option>
                        <option value="67"> 67 Kgs</option>
                        <option value="68"> 68 Kgs</option>
                        <option value="69"> 69 Kgs</option>
                        <option value="70"> 70 Kgs</option>
                        <option value="71"> 71 Kgs</option>
                        <option value="72"> 72 Kgs</option>
                        <option value="73"> 73 Kgs</option>
                        <option value="74"> 74 Kgs</option>
                        <option value="75"> 75 Kgs</option>
                        <option value="76"> 76 Kgs</option>
                        <option value="77"> 77 Kgs</option>
                        <option value="78"> 78 Kgs</option>
                        <option value="79"> 79 Kgs</option>
                        <option value="80"> 80 Kgs</option>
                        <option value="81"> 81 Kgs</option>
                        <option value="82"> 82 Kgs</option>
                        <option value="83"> 83 Kgs</option>
                        <option value="84"> 84 Kgs</option>
                        <option value="85"> 85 Kgs</option>
                        <option value="86"> 86 Kgs</option>
                        <option value="87"> 87 Kgs</option>
                        <option value="88"> 88 Kgs</option>
                        <option value="89"> 89 Kgs</option>
                        <option value="90"> 90 Kgs</option>
                        <option value="91"> 91 Kgs</option>
                        <option value="92"> 92 Kgs</option>
                        <option value="93"> 93 Kgs</option>
                        <option value="94"> 94 Kgs</option>
                        <option value="95"> 95 Kgs</option>
                        <option value="96"> 96 Kgs</option>
                        <option value="97"> 97 Kgs</option>
                        <option value="98"> 98 Kgs</option>
                        <option value="99"> 99 Kgs</option>
                        <option value="100"> 100 Kgs</option>
                        <option value="101"> 101 Kgs</option>
                        <option value="102"> 102 Kgs</option>
                        <option value="103"> 103 Kgs</option>
                        <option value="104"> 104 Kgs</option>
                        <option value="105"> 105 Kgs</option>
                        <option value="106"> 106 Kgs</option>
                        <option value="107"> 107 Kgs</option>
                        <option value="108"> 108 Kgs</option>
                        <option value="109"> 109 Kgs</option>
                        <option value="110"> 110 Kgs</option>
                        <option value="111"> 111 Kgs</option>
                        <option value="112"> 112 Kgs</option>
                        <option value="113"> 113 Kgs</option>
                        <option value="114"> 114 Kgs</option>
                        <option value="115"> 115 Kgs</option>
                        <option value="116"> 116 Kgs</option>
                        <option value="117"> 117 Kgs</option>
                        <option value="118"> 118 Kgs</option>
                        <option value="119"> 119 Kgs</option>
                        <option value="120"> 120 Kgs</option>
                        <option value="121"> 121 Kgs</option>
                        <option value="122"> 122 Kgs</option>
                        <option value="123"> 123 Kgs</option>
                        <option value="124"> 124 Kgs</option>
                        <option value="125"> 125 Kgs</option>
                        <option value="126"> 126 Kgs</option>
                        <option value="127"> 127 Kgs</option>
                        <option value="128"> 128 Kgs</option>
                        <option value="129"> 129 Kgs</option>
                        <option value="130"> 130 Kgs</option>
                        <option value="131"> 131 Kgs</option>
                        <option value="132"> 132 Kgs</option>
                        <option value="133"> 133 Kgs</option>
                        <option value="134"> 134 Kgs</option>
                        <option value="135"> 135 Kgs</option>
                        <option value="136"> 136 Kgs</option>
                        <option value="137"> 137 Kgs</option>
                        <option value="138"> 138 Kgs</option>
                        <option value="139"> 139 Kgs</option>
                        <option value="140"> 140 Kgs</option>
                        <option value="141"> 141 Kgs</option>
                                    
                                </select>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Body Type</label>
                                <select class="form-select" aria-label="Default select example">
                                   <option value="">Select</option>
                             <option value="Average" selected="selected">Average</option>
                             <option value="Athletic">Athletic</option>
                    
                             <option value="Slim">Slim</option>
                    
                             <option value="Heavy">Heavy</option>
                                </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Complexion</label>
                                <select class="form-select" aria-label="Default select example">
                                <option value="">Select</option>
                             <option value="Dark">Dark</option>
                             <option value="Fair" selected="selected">Fair</option>
                    
                             <option value="Very Fair">Very Fair</option>
                             <option value="Wheatish">Wheatish</option>
                             <option value="Wheatish brown">Wheatish brown</option>
                                    
                                </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label" style="color: #868686;">Physical Status</label>
                                <select class="form-select" aria-label="Default select example">
                                   <option value="">Select</option>
                    
                             <option value="Normal" selected="selected">Normal</option>
                    
                             <option value="Physically challenged">Physically Challenged</option>
                                </select>
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




</body>
