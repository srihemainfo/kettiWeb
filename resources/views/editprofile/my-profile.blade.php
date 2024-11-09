<head>
 
    <style>
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
                <div class="col-lg-9" id="main_profile_screen">
                    <div style="display:none;">
                        <div class="request-box row">
                              <div class="bride--tab accordion-body" id="bg-profile1" style="display:none;">
                            <div class="mb-3 text-center">
                                <h1 class="bg-head">Bride / Groom Profile</h1>
                            </div>
                            <form>
                            <div class="row">
                                    <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Name*</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" value="Gowtham">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Gender*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                             <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Date of Birth*</label>
                                <input type="date" class="form-control" placeholder="DD/MM/YYYY" value="28-02-1999">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Marital Status*</label>
                                <select class="form-select" aria-label="Default select example">
                                   <option value="">SELECT</option>
          <option value="Never Married" selected="selected">Unmarried</option>
          <option value="Widow with children">Widow / Widower with Children / Child</option>
          <option value="Widow without children">Widow / Widower without Children / Child</option>
          <option value="Divorce with children">Divorce with Children / Child</option>
          <option value="Divorce without children">Divorce without Children / Child</option>
          <option value="Awaiting Divorce with children">Awaiting Divorce with Children / Child</option>
          <option value="Awaiting Divorce without children">Awaiting Divorce without Children / Child</option>
                                </select>
                            </div>
                             <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Religion*</label>
                                <select class="form-select" aria-label="Default select example">
                                   <option value="">SELECT</option>     
                                   <option value="1">Hindu</option> 
                                <option value="2">Christian</option> 
                                <option value="3">Muslim</option> 
                                <option value="4">Jain</option> 
                                <option value="5">Jewish</option> 
                                <option value="6">Buddhist </option> 
                                <option value="7">Parsi</option> 
                                <option value="11">Sikh</option> 
                                <option value="14">Inter-Religion</option> 
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Sub Religion*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Mother Tongue*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Caste*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Sub Caste</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">Caste No Bar</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="caste-no-barOptions" id="caste-no-barOptions1" value="option1">
                                    <label class="form-check-label" for="caste-no-barOptions1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="caste-no-barOptions" id="caste-no-barOptions2" value="option2">
                                    <label class="form-check-label" for="caste-no-barOptions2">No</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Proile Created By</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">--Select--</option>
            <option value="Self">Self</option>
            <option value="Parents">Parents</option>
            <option value="Brother">Brother</option>
            <option value="Sister" selected="selected">Sister</option>
            <option value="Relative">Relative</option>
            <option value="Friend">Friend</option>
            <option value="Advisor">Advisor</option>
                                </select>
                            </div>
                            </div>

                           <div class="row mt-4">
                                <div class="next-btn text-center ">
                                <a href="#">Save</a>
                            </div>
                           </div>
                            </form>
                        </div>
                              <div class="bride--tab accordion-body" id="fam-det1" style="display:none;">
                            <div class="mb-3 text-center">
                                <h1 class="bg-head">Family Details</h1>
                            </div>
                            <form>
                            <div class="row">
                                    <div class="col-md-6 mb-3">
                               <label class="form-label fm-label" >Family Value*</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" value="Gowtham">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label" >Family Type*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                             <div class="col-md-6 mb-3">
                               <label class="form-label fm-label">Family Status*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                  <label class="form-label fm-label">Native Place*</label>
                                <input type="text" class="form-control" value="Chennai">
                            </div>
                             <div class="col-md-6 mb-3">
                               <label class="form-label fm-label">Father Name*</label>
                                <input type="text" class="form-control" value="LOOOL">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">Father Occupation*</label>
                                <input type="text" class="form-control" value="Business">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label fm-label">Father's Status*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                  <label class="form-label fm-label">Mother's Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">Birth Order</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">No. Of Elder Brothers</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                               <label class="form-label fm-label">Elder Brothers Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">No. Of Elder Sisters</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div> 
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-label">Elder Sisters Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-label">No. Of Younger Brothers</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                   <label class="form-label fm-label">Younger Brothers Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-label">No. Of Younger Sisters</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                  <label class="form-label fm-label">Younger Sisters Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-label">Do You Have A Bike?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-label">Do You Have A Car?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">Do You Have A Own Flat / House?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-label">Property Details</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                  <label class="form-label fm-label">Proof of Identity</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">Family Income Monthly</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-label">About My Family</label>
                                <input type="text" class="form-control">
                                <div class="form-text" id="basic-addon4">Use this space to talk about your parents,</div>
                                <div class="form-text" id="basic-addon4">brothers and sisters.(Maximum characters:400)</div>
                                <div class="form-text" id="basic-addon4">You have <span style="color: red;">400</span> characters left</div>
                            </div>
                            </div>

                           <div class="row mt-4">
                                <div class="next-btn text-center ">
                                <a href="#">Save</a>
                            </div>
                           </div>
                            </form>
                        </div>
                        
                         <div class="bride--tab accordion-body" id="add-det1" style="display:block;">
                            <div class="mb-3 text-center">
                                <h1 class="bg-head">Communication Address and Details  <span class="img-pg show_id" id="eye-icon"><img src="images/contact/eye.png" ></span>
                                <span class="img-pg1" id="edit-icon"><img src="images/contact/edit.png"></span>
                                </h1>
                              
                            </div>
                            <form class="mt-3" id="com-pre">
                            <div class="row">
                                    <div class="col-md-6 mb-3">
                              <label class="form-label fm-lable">Mobile No</label>
                                <input type="number" class="form-control" value="6379163256">
                            </div>
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-lable">Whatsapp No</label>
                                <input type="number" class="form-control" value="6379163256">
                            </div>
                            
                             <div class="col-md-6 mb-3">
                                 <label class="form-label fm-lable">Email</label>
                                <input type="email" class="form-control" value="suriya@gmail.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Contact Person Mobile No</label>
                                <input type="number" class="form-control">
                            </div>
                             <div class="col-md-6 mb-3">
                                <label class="form-label fm-lable">Relation Type</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                               <label class="form-label fm-lable">Contact Person Mobile No</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label fm-lable">Contact Person Phone No</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-lable">Country Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                 <label class="form-label fm-lable">State Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label class="form-label fm-lable">District Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-lable">Taluk</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                               <label class="form-label fm-lable">City / Village</label>
                                <input type="text" class="form-control" value="village">
                            </div> 
                            <div class="col-md-6 mb-3">
                                <label class="form-label fm-lable">Area / Location</label>
                                <input type="text" class="form-control" value="Chennai">
                            </div>
                            <div class="col-md-6 mb-3">
                               <label class="form-label fm-lable">Father Name*</label>
                                <input type="text" class="form-control" value="LOOOL">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Door No & Street</label>
                                <input type="text" class="form-control" value="224 Street">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                               <label class="form-label fm-lable">Pincode / Zipcode</label>
                                <input type="text" class="form-control" value="605757">
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                   <label class="form-label fm-lable">Altranative Email ID</label>
                                <input type="email" class="form-control">
                            </div>
                               </div>

                           <div class="row mt-4">
                                <div class="next-btn text-center ">
                                <a href="#">Save</a>
                            </div>
                           </div>
                            </form>
                            
                            <div class="com-preview" id="com-preview" style="display:none;">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Mobile Number:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">+91 7845984275</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Whatsapp No:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">+91 7845984275</p>
                                    </div>
                                     <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Email:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">test@gmail.com</p>
                                    </div>
                                     <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Contact Person Mobile No:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">+91 7845984275</p>

                                    </div>  <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Country Living In:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">India</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font1">State Living In:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">Tamilnadu</p>
                                    </div>
                                     <div class="col-lg-6 col-6">
                                        <p class="cm-font1">District Living In:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">Tiruvallur</p>
                                    </div>
                                    
                                     <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Taluk</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">+91 7845984275</p>
                                    </div>
                                    
                                     <div class="col-lg-6 col-6">
                                        <p class="cm-font1">City / Village:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">Chennai</p>
                                    </div>
                                    
                                    <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Area / Location:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">Avadi</p>
                                    </div>       
                                    <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Father Name:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">G.Govindh</p>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Door No & Street:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">No.24/78</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font1">Altranative Email ID:</p>
                                    </div>
                                      <div class="col-lg-6 col-6">
                                        <p class="cm-font">design@cwd.co.in</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="aft-login" style="displaye:none;">
                        <h2 class="aft-login-head">Your Ideal Partner Awaits – Fill Out the Form</h2>
                        <div class="request-box row">
                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Name</label>
                                   <input type="text" class="form-control" value="">
                                </div>
                                    <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Created By</label>
                                  <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                        <option value="">Select Created By</option>
                                        <option value="Self">Self</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Advisor">Advisor</option>
                                                </select>
                                </div>
                                
                                  <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Phone Number</label>
                                <input type="text" class="form-control" value="">
                                </div>
                                
                                 <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Email</label>
                                <input type="email" class="form-control" value="">
                                </div>
                                
                                 <div class="col-md-6 mb-3">
                                  <label class="form-label fm-lable">Marital Status</label>
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
                                  <label class="form-label fm-lable">Date of birth</label>
                                <input type="date" class="form-control" value="">
                                </div>
                                   
                                    <div class="col-md-6 mb-3">
                                         <label class="form-label fm-lable">Caste</label>
                                       <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                        <option value="">Select Caste</option>
                                                </select>
                                    </div>
                                
                                         <div class="col-md-6 mb-3">
                                      <label class="form-label fm-lable">Religion</label>
                                       <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                       <option value="">Select Religion</option>     
            <option value="Hindu">Hindu</option> 
            <option value="Christian">Christian</option> 
            <option value="Muslim">Muslim</option> 
            <option value="Jain">Jain</option> 
            <option value="Jewish">Jewish</option> 
            <option value="Buddhist">Buddhist </option> 
            <option value="Parsi">Parsi</option> 
            <option value="Sikh">Sikh</option> 
            <option value="Inter-Religion">Inter-Religion</option> 
                                                </select>
                                    </div>
                                         <div class="col-md-6 mb-3">
                                        <label class="form-label fm-lable">Mother Tongue</label>
                                       <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                         <option class="default" value="">Select Mother Tongue</option>
                      <option class="default" value="13">English</option>
                      <option class="default" value="14">French</option>
                      <option class="default" value="20">Hindi</option>
                      <option class="default" value="22">Kannada</option>
                      <option class="default" value="34">Malayalam</option>
                      <option class="default" value="51">Tamil</option>
                      <option class="default" value="52">Telugu</option>
                      <option class="default" value="55">Urdu</option>
                                                </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                          <label class="form-label fm-lable">Physical status</label>
                                        <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                        <option selected="">Select</option>
                                                </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label fm-lable">Education</label>
                                        <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                                    <option selected="">Select</option>
                                                </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label class="form-label fm-lable">Employee In</label>
                                      <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                                    <option value="">Select Employee In</option>
                                                     <option value="Government Job">Government Job</option>
                                                      <option value="Private Job">Private Job</option> 
                                                      <option value="Business">Business</option>
                                                       <option value="Self">Self</option>
                                                </select>
                                    </div>
                                
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label fm-lable">Bride/ Groom Lived in</label>
                                        <input type="text" class="form-control" value="LOOOL">
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
                          <div class="col-lg-3 mb-4 bg-sec" id="sidebar" style="display:none;">
                    <div class="green-bg" >
                        <div class="profile-main text-end">
                            <span class="btn-close" id="edit_closing_btn">X</span>
                        </div>
                        <div class="profile-secondary">
                            <div class="list-sec mt-4">
                                <ul>
                                     <li id="bg-profile" class="{{ request()->routeIs('bride-groom') ? 'active' : '' }}" onclick="window.location.href='{{ route('bride-groom') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 1.webp"></span>
                                    <span class="description">Bride / Groom Profile</span>
                                </li>
                                
                                <li id="fam-det" class="{{ request()->routeIs('family-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('family-details') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 2.webp"></span>
                                    <span class="description">Family Details</span>
                                </li>
                                
                                <li id="add-det" class="{{ request()->routeIs('address-details') ? 'active' : '' }}" onclick="window.location.href='{{ route('address-details') }}'" style="cursor: pointer;">
                                    <span class="icon"> <img src="images/after login/icon edit profile 3.webp"></span>
                                    <span class="description">Address Details</span>
                                </li>

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
                                        <span class="description">Horoscope Details</span>
                                    </li>
                                   <li id="par-prefer" class="{{ request()->routeIs('hobbies-interest') ? 'active' : '' }}" onclick="window.location.href='{{ route('hobbies-interest') }}'" style="cursor: pointer;">
                                        <span class="icon"> <img src="images/after login/icon edit profile 6.webp">
                                        </span>
                                        <span class="description">Hobbies & Interest</span>
                                    </li>
                                        <li id="edu-detail" class="{{ request()->routeIs('education-occupation') ? 'active' : '' }}" onclick="window.location.href='{{ route('education-occupation') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 7.webp">
                                        </span>
                                        <span class="description">Education & Occupation</span>
                                    </li>
                                    <li>
                                    </li>
                                        <li id="edu-detail" class="{{ request()->routeIs('habits') ? 'active' : '' }}" onclick="window.location.href='{{ route('habits') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 8.webp">
                                        </span>
                                        <span class="description">Habits</span>
                                    </li>
                                <li id="loc-detail" class="{{ request()->routeIs('location-detail') ? 'active' : '' }}" onclick="window.location.href='{{ route('location-detail') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Location Details</span>
                                    </li>
                                    <li id="phy-detail" class="{{ request()->routeIs('physical-attributee') ? 'active' : '' }}" onclick="window.location.href='{{ route('physical-attributee') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Physical Attributes</span>
                                    </li>
                                    
                              <li id="phy-detail" class="{{ request()->routeIs('intercaste-parents') ? 'active' : '' }}" onclick="window.location.href='{{ route('intercaste-parents') }}'" style="cursor: pointer;">

                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">For Intercaste Parents</span>
                                    </li>
                                    <li>
                                        <span class="icon"> <img src="images/after login/icon edit profile 9.webp">
                                        </span>
                                        <span class="description">Others</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
// $("#edit_profile_btn").click(function() {
//     $("#aft-login").show().addClass("col-lg-6");
// });
</script>
</body>
