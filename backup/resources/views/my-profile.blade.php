<head>
    
 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>    
    
</head>

<style>
    
    .tab--item .tab--btn.active, .tab--btn[aria-expanded="true"] {
       background-color: #00a859 !important;
       color: #fff !important;
   }

   .tab--section {
        display: flex;
        flex-direction: column;
        padding: 3rem;
        border: 2px solid #00a859;
   }

   .tab--btn {
        width: 100%;
        padding: 10px;
        background: transparent;
        border-radius: 10px;
        border: 1px solid #00a859;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.75);
        transition: .5s;
        margin: .8rem 0;
    }

    .accordion-item {
        border: none !important;
    }

    @media (max-width: 991px) {
        .tab-content>.tab-pane {
            display: block !important;
            opacity: 1 !important;
        }
        
        .tab--btn {
            box-shadow: 0px .5px 1px 0px rgba(0, 0, 0, 0.75) !important;
            font-size: .7rem !important;
        }
        .accordion {
            padding: 0 1rem !important;
        }
        .accordion-body h1 {
            font-size: 1rem;
        }
    }
   
</style>




 @include('include.header2')
 
 
<section class="my-profile-section py-5">
       
   
       <div class="container">
         <div class="row">
           <div class="col-lg-5">
             <div class="tab--section d-none d-lg-flex" id="myTab" role="tablist">
               <div class="tab--item" role="presentation">
                 <button class="tab--btn active" id="bride-tab" data-bs-toggle="tab" data-bs-target="#bride" type="button" role="tab" aria-controls="bride" aria-selected="true">Bride / Groom Profile</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="family-tab" data-bs-toggle="tab" data-bs-target="#family" type="button" role="tab" aria-controls="family" aria-selected="false">Family Details</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">Address Details</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="partner-tab" data-bs-toggle="tab" data-bs-target="#partner" type="button" role="tab" aria-controls="partner" aria-selected="false">Partner Preference</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="horoscope-tab" data-bs-toggle="tab" data-bs-target="#horoscope" type="button" role="tab" aria-controls="horoscope" aria-selected="false">Horoscope Details</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="interest-tab" data-bs-toggle="tab" data-bs-target="#interest" type="button" role="tab" aria-controls="interest" aria-selected="false">Hobbies & Interest</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">Education & Occupation</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="habits-tab" data-bs-toggle="tab" data-bs-target="#habits" type="button" role="tab" aria-controls="habits" aria-selected="false">Habits</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="location-tab" data-bs-toggle="tab" data-bs-target="#location" type="button" role="tab" aria-controls="location" aria-selected="false">Location Details</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="physical-tab" data-bs-toggle="tab" data-bs-target="#physical" type="button" role="tab" aria-controls="physical" aria-selected="false">Physical Attributes</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="intercaste-tab" data-bs-toggle="tab" data-bs-target="#intercaste" type="button" role="tab" aria-controls="intercaste" aria-selected="false">For Intercaste Parents</button>
               </div>
               <div class="tab--item" role="presentation">
                 <button class="tab--btn" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Others</button>
               </div>
             </div>
           </div>
           <div class="col-lg-7">
             <div class="tab-content accordion" id="myTabContent">
               <div class="tab-pane fade show active accordion-item" id="bride" role="tabpanel" aria-labelledby="bride-tab">
                    <h2 class="accordion-header d-lg-none" id="headingOne">
                        <button class="tab--btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bride / Groom Profile</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                        <div class="bride--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Bride / Groom Profile</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Name*</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" value="Gowtham">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Gender*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Date of Birth*</label>
                                <input type="date" class="form-control" placeholder="DD/MM/YYYY" value="28-02-1999">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Marital Status*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Religion*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Sub Religion*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Mother Tongue*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Caste*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Sub Caste</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Caste No Bar</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="caste-no-barOptions" id="caste-no-barOptions1" value="option1">
                                    <label class="form-check-label" for="caste-no-barOptions1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="caste-no-barOptions" id="caste-no-barOptions2" value="option2">
                                    <label class="form-check-label" for="caste-no-barOptions2">No</label>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Proile Created By</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="family" role="tabpanel" aria-labelledby="family-tab">
                    <h2 class="accordion-header d-lg-none" id="headingTwo">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Family Details
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                        <div class="family--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Family Details</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Family Value*</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" value="Gowtham">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Family Type*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Family Status*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Family God*</label>
                                <input type="text" class="form-control" value="Test">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Native Place*</label>
                                <input type="text" class="form-control" value="Chennai">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father Name*</label>
                                <input type="text" class="form-control" value="LOOOL">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father Occupation*</label>
                                <input type="text" class="form-control" value="Business">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father's Status*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Mother's Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Birth Order</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">No. Of Elder Brothers</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Elder Brothers Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">No. Of Elder Sisters</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Elder Sisters Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">No. Of Younger Brothers</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Younger Brothers Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">No. Of Younger Sisters</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Younger Sisters Married</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Do You Have A Bike?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Do You Have A Car?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Do You Have A Own Flat / House?</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Property Details</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Proof of Identity</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Family Income Monthly</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">About My Family</label>
                                <input type="text" class="form-control">
                                <div class="form-text" id="basic-addon4">Use this space to talk about your parents,</div>
                                <div class="form-text" id="basic-addon4">brothers and sisters.(Maximum characters:400)</div>
                                <div class="form-text" id="basic-addon4">You have <span style="color: red;">400</span> characters left</div>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="address" role="tabpanel" aria-labelledby="address-tab">
                    <h2 class="accordion-header d-lg-none" id="headingThree">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Address Details
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                        <div class="address--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Communication Address and Details</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Mobile No</label>
                                <input type="number" class="form-control" value="6379163256">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Whatsapp No</label>
                                <input type="number" class="form-control" value="6379163256">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Email</label>
                                <input type="email" class="form-control" value="suriya@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Contact Person Mobile No</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Relation Type</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Contact Person Mobile No</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Contact Person Phone No</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Country Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">State Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">District Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Taluk</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">City / Village</label>
                                <input type="text" class="form-control" value="village">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Area / Location</label>
                                <input type="text" class="form-control" value="Chennai">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father Name*</label>
                                <input type="text" class="form-control" value="LOOOL">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Door No & Street</label>
                                <input type="text" class="form-control" value="224 Street">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Pincode / Zipcode</label>
                                <input type="text" class="form-control" value="605757">
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Altranative Email ID</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="partner" role="tabpanel" aria-labelledby="partner-tab">
                    <h2 class="accordion-header d-lg-none" id="headingFour">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Partner Preference
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                        <div class="partner--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Partner Preference</h1>
                            </div>
                            <div class="mb-3">
                                <p>Basic Profile Information</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Marital Status</label>
                                <input type="text" class="form-control" value="unmarried">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Age</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Height</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Physical Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Others</label>
                                <input type="text" class="form-control" value="Test">
                            </div>
                            <div class="mb-3">
                                <p>Religion Preference</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Mother Tongue</label>
                                <input type="text" class="form-control" value="Arunachali">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Religion</label>
                                <input type="text" class="form-control" value="Hindu, Buddhist">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Caste</label>
                                <input type="text" class="form-control" value="Brahmin-Iyenger">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Sub Caste</label>
                                <input type="text" class="form-control" value="Parvatha Rajakulam, Vanniya Kula">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Star</label>
                                <input type="text" class="form-control" value="Anusham">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Rasi</label>
                                <input type="text" class="form-control" value="Dhanusu">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Laknam</label>
                                <input type="text" class="form-control" value="Meenam">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Dosham</label>
                                <input type="text" class="form-control" value="Chevvai Dosham, Kala Sarpa Dosham">
                            </div>
                            <div class="mb-3">
                                <p>Professional Life</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Education</label>
                                <input type="text" class="form-control" value="Bachalors - Engineering Computer / Others">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Sub Education</label>
                                <input type="text" class="form-control" value="Bachalors - Engineering Computer / Others">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Employed In</label>
                                <input type="text" class="form-control" value="Defence, Private">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Occupation</label>
                                <input type="text" class="form-control" value="Banking and Finance">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Sub Occupation</label>
                                <input type="text" class="form-control" value="Investment Professional">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Monthly Income Rs</label>
                                <input type="text" class="form-control" value="50,000 to 60,000">
                            </div>
                            <div class="mb-3">
                                <p>Location Preference</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Country Living In</label>
                                <input type="text" class="form-control" value="India">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">State Living In</label>
                                <input type="text" class="form-control" value="Tamil Nadu">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">District Living In</label>
                                <input type="text" class="form-control" value="Chennai">
                            </div>
                            <div class="mb-3">
                                <p>Habits Preference</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Eating Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Vegetarian</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Smoking Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Non Smoker</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Drinking Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Non Drinker</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">About My Family</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="horoscope" role="tabpanel" aria-labelledby="horoscope-tab">
                    <h2 class="accordion-header d-lg-none" id="headingFive">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Horoscope Details
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFive" data-bs-parent="#myTabContent">
                        <div class="horoscope--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Horoscope Details</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Date Of Birth</label>
                                <input type="date" class="form-control" value="28-02-1999">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Birth Day</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Monday</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Time Of Birth</label>
                                <input type="time" class="form-control" value="12">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Country Of Birth</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">State Of Birth</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Place Of Birth</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Gothram</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Star</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Laknam</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Dosham</label>
                                <select class="form-select" aria-label="Default select example" disabled>
                                    <option selected>Nothing Selected</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Other Dosham</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Padham</label>
                                <input type="text" class="form-control" value="Not Selected">
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Dosa Balance</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="interest" role="tabpanel" aria-labelledby="interest-tab">
                    <h2 class="accordion-header d-lg-none" id="headingSix">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Hobbies & Interest
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingSix" data-bs-parent="#myTabContent">
                        <div class="interest--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Habbies & Interest</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Hobbies</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Interest</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Music</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Sports</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Food</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <h2 class="accordion-header d-lg-none" id="headingSeven">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Education & Occupation
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingSeven" data-bs-parent="#myTabContent">
                        <div class="education--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Education & Occupation</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Education</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Education in Details</label>
                                <input type="text" class="form-control" value="CSE">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">If Nothing is Suitable Others</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Occupation</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Employed / Occupation in Details</label>
                                <input type="text" class="form-control" value="Nothing">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Employed In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Job Schedule</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Monthly Income Rs</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Additional Income Rs</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="habits" role="tabpanel" aria-labelledby="habits-tab">
                    <h2 class="accordion-header d-lg-none" id="headingEight">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Habits
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingEight" data-bs-parent="#myTabContent">
                        <div class="habits--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Habits</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Eating Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Smoking Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Drinking Habits</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="location" role="tabpanel" aria-labelledby="location-tab">
                    <h2 class="accordion-header d-lg-none" id="headingNine">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Location Details
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingNine" data-bs-parent="#myTabContent">
                        <div class="location--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Location Details</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Country Living In</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Residing State</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Residing District</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Citizenship</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Passport Information</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="physical" role="tabpanel" aria-labelledby="physical-tab">
                    <h2 class="accordion-header d-lg-none" id="headingTen">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Physical Attributes
                        </button>
                    </h2>
                    <div id="collapseTen" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTen" data-bs-parent="#myTabContent">
                        <div class="physical--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Physical Attributes</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Blood Group</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Height</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Weight</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Body Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Complexion</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Physical Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="intercaste" role="tabpanel" aria-labelledby="intercaste-tab">
                    <h2 class="accordion-header d-lg-none" id="headingEleven">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        For Intercas Parents
                        </button>
                    </h2>
                    <div id="collapseEleven" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingEleven" data-bs-parent="#myTabContent">
                        <div class="intercaste--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">For Intercaste Parents</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father Religion</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father Caste</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Father Subcaste</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Mother Religion</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Mother Caste</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">Mother Subcaste</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="tab-pane fade accordion-item" id="others" role="tabpanel" aria-labelledby="others-tab">
                    <h2 class="accordion-header d-lg-none" id="headingTwelve">
                        <button class="tab--btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        Others
                        </button>
                    </h2>
                    <div id="collapseTwelve" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwelve" data-bs-parent="#myTabContent">
                        <div class="others--tab accordion-body">
                            <div class="mb-3 text-center">
                                <h1 style="color: #737373;">Others</h1>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Personal Values</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Social</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Interested in Setting Overseas</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="color: #868686;">Languages Known</label>
                                <input type="text" class="form-control" value="Punjabi, Sindhi, Tamil">
                            </div>
                            <div class="mb-5">
                                <label class="form-label" style="color: #868686;">About My Family</label>
                                <input type="text" class="form-control">
                                <div class="form-text" id="basic-addon4">Use this space to talk about your parents,</div>
                                <div class="form-text" id="basic-addon4">brothers and sisters.(Maximum characters:400)</div>
                                <div class="form-text" id="basic-addon4">You have <span style="color: red;">400</span> characters left</div>
                            </div>
                            <div class="next-btn text-center mb-4">
                                <a href="#">Save</a>
                            </div>
                        </div>
                    </div>
               </div>
             </div>
           </div>
         </div>
       </div>   
       
       
   </section>

<script>
   
     var myTabs = document.querySelectorAll('#myTab button');
   
     function handleTabClick(event) {
       var tab = event.target;
       var tabContentId = tab.getAttribute('data-bs-target');
   
       // Hide all tab content
       document.querySelectorAll('.tab-pane').forEach(function (tabContent) {
         tabContent.classList.remove('show', 'active')
       });
   
       // Show the selected tab content
       document.querySelector(tabContentId).classList.add('show', 'active')
     };
   
     // Add click event listeners to each tab
     myTabs.forEach(function (tab) {
       tab.addEventListener('click', handleTabClick)
     });
     
</script>

 @include('include.footer')
