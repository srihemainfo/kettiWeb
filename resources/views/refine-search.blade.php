<head>
    
 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JS Bundle -->
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>    -->
    
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
    border: 1px solid #00A859 !important;
    margin: 0 0 10px 0;
    border-radius: 10px;
  
}
.accordion-item:first-of-type .accordion-button {
    border-radius: 10px !important;
}
.accordion-item:first-of-type {
    border-radius: 10px !important;
}
   .accordion-button:focus {
    z-index: 3;
    border-color: none !important;
    outline: 0;
    box-shadow: none !important;
}
.accordion-button:not(.collapsed) {
    color: #4a4a4a !important;
    background-color: #ffffff !important
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
    font-weight: 500 !important;
    font-size: 20px !important;
}
.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: .6rem .8rem !important;
    font-size: 20px !important;
    color: #4a4a4a !important;
    text-align: left;
    background-color: #fff;
    border: 0;
    border-radius: 10px !important ;
    overflow-anchor: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
    font-weight: 500 !important;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23) !important;
}
.accordion-button::after {
    flex-shrink: 0;
    width: 32px !important;
    height: 32px !important;
    margin-left: auto;
    content: "";
    /* background: #a5f4a5 !important; */
    background-image: url(public/images/down.png) !important;
    background-repeat: no-repeat !important;
    background-size: 33px !important;
    transition: transform 0.2s ease-in-out;
    border-radius: 50px !important;
}
.refine-tab {
    padding: 2.5rem;
    border: 2px solid #00a859;
}
.refine-head {
    text-align: center;
    font-size: 18px;
    margin: 0 0 18px 0;
    text-decoration: underline;
    color: #575757;
}
.accordion-button:not(.collapsed) {
    color: #0c63e4;
    background-color: #ffffff !important;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}
</style>




 @include('include.header2')
 
 
<section class="my-profile-section py-5">
       
   
       <div class="container">
         <div class="row">
           <div class="col-lg-3">
              <div class="refine-tab">
                  <div class="only-with-photos">
                      <label class="form-label">Only With Photos</label>
                      <input type="checkbox" class="theme-checkbox">
                  </div>
                  <h3 class="refine-head">Refined Search </h3>
                   <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Marital Status
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Religion
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Caste
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                  <h3 class="refine-head">Type Preferred Caste</h3>
                   <div class="accordion mb-5" id="accordionPanelsStayOpenTwo">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                        Age
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse s" aria-labelledby="panelsStayOpen-headingFour">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                       Star
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                
                </div>
                <h3 class="refine-head">Type Preferred Star</h3>
                <div class="accordion mb-5" id="accordionPanelsStayOpenThree">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">
                        Rasi
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse s" aria-labelledby="panelsStayOpen-headingSix">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                       Mother Tongue
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                
                </div>
                <h3 class="refine-head">Type Preferred Mother Tongue</h3>
                <div class="accordion" id="accordionPanelsStayOpenThree">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="true" aria-controls="panelsStayOpen-collapseEight">
                        Education
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse s" aria-labelledby="panelsStayOpen-headingEight">
                      <div class="accordion-body">
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option One</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Two</span>
                        </label>
                        <label class="custom-checkbox">
                            <input name="dummy" type="checkbox">
                            <span class="checkmark"></span> <span>Option Three</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </div>
           <div class="col-lg-9">
               <div class="search-show-bar">
                   <div class="search-bar-heading">
                       <p>you have searched for <span><b>Female</b></span></p>
                   </div>
                   <div class="sarch-filter-bar row justify-content-center">
                        <div class="search-filter-bar-box col-lg-8 col-md-8">
                           
                        </div>
                   </div>
               </div>
               <div class="profile-compare-name" id="compareContainer">
                    <button class="profile-compare-btn">Compare</button>
                </div>
               <div class="profile-theme">

                                <div class="row">

                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.DIVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="S.DIVYA" id="flexCheckDefault1">
                                                            <label class="form-check-label" for="flexCheckDefault1">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>M.MADHU</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="M.MADHU" id="flexCheckDefault2">
                                                            <label class="form-check-label" for="flexCheckDefault2">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.NARMADHA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="S.NARMADHA" id="flexCheckDefault3">
                                                            <label class="form-check-label" for="flexCheckDefault3">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>H.GOWRI</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="H.GOWRI" id="flexCheckDefault4">
                                                            <label class="form-check-label" for="flexCheckDefault4">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>L.ADHI</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="L.ADHI" id="flexCheckDefault5">
                                                            <label class="form-check-label" for="flexCheckDefault5">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>K.NATHIYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="K.NATHIYA" id="flexCheckDefault6">
                                                            <label class="form-check-label" for="flexCheckDefault6">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>K.KAVYA</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="K.KAVYA" id="flexCheckDefault7">
                                                            <label class="form-check-label" for="flexCheckDefault7">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-6 wow fadeInUp animated" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: .4s;">
                                        <div class="profile-box">
                                            <div class="profile-img">
                                                <img src="images/women.webp">
                                            </div>
                                            <div class="profile-details">
                                                <h4>S.SUMATHI</h4>
                                                <ul>
                                                    <li>Chennai</li>
                                                </ul>
                                                <ul>
                                                    <li>Age : 30</li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="S.SUMATHI" id="flexCheckDefault8">
                                                            <label class="form-check-label" for="flexCheckDefault8">Compare</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="groo-ul m-0 ">
                                                    <li class="groom-li"><a href="#" class="view-pp" contenteditable="false" style="cursor: pointer;">ID KM1064</a>
                                                    </li>
                                                    <li class="groom-li"> <a href="#" class="profile-btn" contenteditable="false" style="cursor: pointer;">View
                                                            Profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-4 text-center wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">
                                        <a href="#" class="btn-web-green-big" contenteditable="false" style="cursor: pointer;">View More</a>
                                    </div>

                                </div>
                            </div>
           </div>
         </div>
       </div>   
       
<!-- Error Message Modal -->
<div class="modal fade" id="compareLimitModal" tabindex="-1" aria-labelledby="compareLimitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-danger" id="compareLimitModalLabel">Comparison Limit Reached</h4>
        <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
        <h5>You can only compare up to 3 profiles at a time.</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
       
       
   </section>
   
<style>

.sarch-filter-bar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    font-size: 0.8rem;
    margin-bottom: 1.3rem;
}    

.sarch-filter-bar ul li {
    margin-right: 20px;
    font-size: large;
}  

.search-show-bar {
    border: 1px solid #00a859;
    padding: 1rem 3rem;
    border-radius: 7px;
}

.search-bar-heading p {
    text-transform: capitalize;
    font-size: 1.5rem;
}

li.list-border {
    border: 1px solid green;
    padding: 3px;
    border-radius: 7px;
}

.theme-checkbox {
    border:1px solid;
  --toggle-size: 16px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width: 5em;
  height: 2em;
  background: linear-gradient(to right, #fff 50%, #18ef3b 50%) no-repeat;
  background-size: 205%;
  background-position: 0;
  -webkit-transition: 0.4s;
  -o-transition: 0.4s;
  transition: 0.4s;
  border-radius: 99em;
  position: relative;
  cursor: pointer;
  font-size: var(--toggle-size);
}

.theme-checkbox::before {
  content: "";
  width: 1.5em;
  height: 1.5em;
  position: absolute;
  top: 0.238em;
  left: 0.238em;
  background: -webkit-gradient(linear, left top, right top, color-stop(50%, #fff), color-stop(50%, #18ef3b)) no-repeat;
  background: -o-linear-gradient(left, #fff 50%, #18ef3b 50%) no-repeat;
  background: linear-gradient(to right, #fff 50%, #18ef3b 50%) no-repeat;
  background-size: 205%;
  background-position: 100%;
  border-radius: 50%;
  -webkit-transition: 0.4s;
  -o-transition: 0.4s;
  transition: 0.4s;
}

.theme-checkbox:checked::before {
  left: calc(100% - 2em);
  background-position: 0;
}

.theme-checkbox:checked {
  background-position: 100%;
}

.only-with-photos {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 20px;
    align-items: center;
    padding: 0 0 2rem 0;
}

.only-with-photos .form-label {
    font-size: 1.2rem !important;
}

.custom-checkbox {
  display: inline-flex;
  align-items: center;
  cursor: pointer;
  user-select: none;
  font-size: 16px;
  color: #333;
  transition: color 0.3s;
}

.custom-checkbox input[type="checkbox"] {
  display: none;
}

.custom-checkbox .checkmark {
  width: 24px;
  height: 24px;
  border: 2px solid #333;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 10px;
  transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
  transform-style: preserve-3d;
}

.custom-checkbox .checkmark::before {
  content: "\2713";
  font-size: 16px;
  color: transparent;
  transition: color 0.3s, transform 0.3s;
}

.custom-checkbox input[type="checkbox"]:checked + .checkmark {
  background-color: #00a859;
  border-color: #00a859;
  transform: scale(1.1) rotateZ(360deg) rotateY(360deg);
}

.custom-checkbox input[type="checkbox"]:checked + .checkmark::before {
  color: #fff;
}

.custom-checkbox:hover {
  color: #666;
}

.custom-checkbox:hover .checkmark {
  border-color: #666;
  background-color: #f0f0f0;
  transform: scale(1.05);
}

.custom-checkbox input[type="checkbox"]:focus + .checkmark {
  box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.2);
  outline: none;
}

.custom-checkbox .checkmark,
.custom-checkbox input[type="checkbox"]:checked + .checkmark {
  transition: background-color 1.3s, border-color 1.3s, color 1.3s, transform 0.3s;
}

.custom-checkbox span {
    font-size: 1.3rem;
}

.refine-tab .accordion-body {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.profile-compare-name {
    padding: 2rem 0 0 0;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.profile-compare-name span {
    position: relative;
    padding: 14px 24px;
    border: 1px solid green;
    border-radius: 25px;
}

.profile-compare-name span button {
    background: linear-gradient(180deg, rgba(8, 167, 86, 1) 0%, rgba(77, 154, 58, 1) 100%);
    outline: none;
    border: none;
    border-radius: 50%;
    position: absolute;
    right: 0;
    top: -15px;
}

.profile-compare-name span button img {
    width: 18px;
    height: 25px;
}

.profile-compare-name .profile-compare-btn {
    border: none;
    outline: none;
    padding: 15px 30px;
    border-radius: 10px;
    background: linear-gradient(90deg, rgba(8, 167, 86, 1) 0%, rgba(77, 154, 58, 1) 100%);
    color: #fff;
}

@media screen and (max-width: 992px) {
    .profile-compare-name {
        align-items: stretch;
        flex-direction: column;
        gap: 25px;
    }
}
    
</style>   

<script>

document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.form-check-input');
    const compareButton = document.querySelector('.profile-compare-btn');
    const compareContainer = document.getElementById('compareContainer');
    const compareLimit = 4; // Set your desired limit here
    
    // Hide the compare button initially
    compareButton.style.display = 'none';
    
    // Initialize Bootstrap modal
    const compareLimitModal = new bootstrap.Modal(document.getElementById('compareLimitModal'), {
        keyboard: false
    });
    
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const profileName = this.value;
            const currentCompareCount = compareContainer.querySelectorAll('span').length;
            
            if (this.checked) {
                if (currentCompareCount < compareLimit) {
                    // Create a new span element with the profile name and cancel button
                    const spanElement = document.createElement('span');
                    spanElement.innerHTML = `${profileName} <button class="cancel-btn"><img src="images/iconoir_cancel.webp"></button>`;
                    spanElement.querySelector('button').addEventListener('click', function() {
                        spanElement.remove();
                        checkbox.checked = false;
                        toggleCompareButton();
                    });
                    
                    compareContainer.insertBefore(spanElement, compareButton);
                } else {
                    // If limit is reached, uncheck the checkbox and show modal
                    this.checked = false;
                    compareLimitModal.show();
                }
            } else {
                // Remove the span element if checkbox is unchecked
                const spanElements = compareContainer.querySelectorAll('span');
                spanElements.forEach(span => {
                    if (span.textContent.includes(profileName)) {
                        span.remove();
                    }
                });
            }
            
            toggleCompareButton();
        });
    });
    
    function toggleCompareButton() {
        const spanElements = compareContainer.querySelectorAll('span');
        if (spanElements.length > 0) {
            compareButton.style.display = 'inline-block';
        } else {
            compareButton.style.display = 'none';
        }
    }
});

</script>

<script>
    
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.accordion-body input[type="checkbox"]');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', handleCheckboxChange);
    });

    function handleCheckboxChange(event) {
        const checkbox = event.target;
        const isChecked = checkbox.checked;
        const label = checkbox.closest('label');
        const span = label.querySelector('span:last-child');
        const text = span.innerText;
        const category = label.closest('.accordion-item').querySelector('.accordion-button').innerText.trim();
        
        const ulList = getOrCreateList(category);
        const liElement = createListItem(text);

        if (isChecked) {
            ulList.appendChild(liElement);
        } else {
            removeListItem(ulList, text);
        }

        toggleListBorderClass(ulList);
    }

    function getOrCreateList(category) {
        let ul = document.querySelector(`.search-filter-bar-box ul[data-category="${category}"]`);

        if (!ul) {
            ul = document.createElement('ul');
            ul.dataset.category = category;
            ul.innerHTML = `<li><b>${category}</b></li>`;
            document.querySelector('.search-filter-bar-box').appendChild(ul);
        }

        return ul;
    }

    function createListItem(text) {
        const li = document.createElement('li');
        li.classList.add('list-border');
        li.innerText = text;
        return li;
    }

    function removeListItem(ul, text) {
        const listItems = ul.querySelectorAll('li');
        listItems.forEach(li => {
            if (li.innerText === text) {
                ul.removeChild(li);
            }
        });
    }

    function toggleListBorderClass(ul) {
        const listItems = ul.querySelectorAll('li');
        if (listItems.length <= 1) {
            ul.remove();
        }
    }
});
    
    
</script>

// <script>
   
//      var myTabs = document.querySelectorAll('#myTab button');
   
//      function handleTabClick(event) {
//       var tab = event.target;
//       var tabContentId = tab.getAttribute('data-bs-target');
   
//       // Hide all tab content
//       document.querySelectorAll('.tab-pane').forEach(function (tabContent) {
//          tabContent.classList.remove('show', 'active')
//       });
   
//       // Show the selected tab content
//       document.querySelector(tabContentId).classList.add('show', 'active')
//      };
   
//      // Add click event listeners to each tab
//      myTabs.forEach(function (tab) {
//       tab.addEventListener('click', handleTabClick)
//      });
     
// </script>

 @include('include.footer')
