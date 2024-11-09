    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kettimelam Matrimony</title>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    
    
    <!--AOS Animation-->
    
    <script type="text/javascript" src="js/aos.js"></script>
    <link rel="stylesheet" href="css/aos.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    
    <!--Font Awesome-->
    
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">       
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<style>

.register-heading {
    display: flex;
    justify-content: center;
    align-items: center;
}    

.register-heading h1 {
    font-size: .9rem;
    width: 70%;
    text-align: center;
    font-weight: 600;
}

.register-heading button {
    background: linear-gradient(180deg, rgba(8, 167, 86, 1) 0%, rgba(77, 154, 58, 1) 100%);
    outline: none;
    border: none;
    border-radius: 50%;
    position: absolute;
    right: 0;
    top: 24px;
}

.register-heading button img {
    width: 22px;
    height: 32px;
}

.register-heading img {
    width: 40%;
}

.register2-heading {
    display: flex;
    align-items: center;
    gap: 130px;
}

.register2-heading button {
    outline: none;
    background: transparent;
    border: none;
    border-radius: 50%;
}

.register2-heading button img {
    width: 22px;
    height: 32px;
}

.myModalContent {
    width: 60% !important;
    border-radius: 25px !important;
    -webkit-box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.75) !important;
    -moz-box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.75) !important;
    box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.75) !important;
    padding-left: 2rem !important;
    padding-right: 2rem !important;
}

@media screen and (max-width: 992px) {
    
    .myModalContent {
        width: 100% !important;
    }
    
    .register2-heading {
        gap: 80px !important;
    }

    
}

    /*--- For Country Code ---*/
    
.iti {
    display: block !important;
}

/* Hide the spin buttons */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: #fff !important;
}


.otp-field input {
    height: 45px;
    width: 42px;
    border-radius: 6px;
    outline: none;
    font-size: 1.125rem;
    text-align: center;
}
    
    
</style>    


<body>
    

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img1.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2>
                                    <h2 class="welsub-head">Physical Attributes</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Blood Group<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>O</option>
                                                            <option>B+</option>
                                                            <option>B-</option>
                                                            <option>A+</option>
                                                            <option>A-</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Height<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>169</option>
                                                            <option>170</option>
                                                            <option>171</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Body Type<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Complexion<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Eating Habits<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Family Details</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Family Status<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Please select Anyone</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Family God<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Father's Work / Occupation<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Father's Work / Occupation<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Native Place<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img3.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Family Details</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Family Details<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Elder Brothers<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Elder Sisters<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Younger Brothers<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-5">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Younger Sisters<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Married<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-22">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal4">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal 4 -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Communication Address And Details</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Country Living In<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">                                                 
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">State Living In<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">District Living<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Taluk Living In<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">City / Village<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Area / Location<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal5">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal 5 -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Door No & Street<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Pin Code<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="welsub-head mb-3">Others</h2>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Photo Upload<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Proof Of Identify Upload<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Horoscope Upload<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal6">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    <!-- Modal 6 -->
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <h2 class="welsub-head">Horoscope Basic Info</h2>
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Do You Have Horoscope?<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Date Of Birth<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" placeholder="Pick a Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Birth Day<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Time of Birth<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <input type="time" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Place of Birth<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Gothram<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal7">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    <!-- Modal 7 -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <!-- <h2 class="welsub-head">Horoscope Basic Info</h2> -->
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Star<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Rasi<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Laknam<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Dosham<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-5">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Padham<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal8">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Modal 8 -->
    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-im-sec">
                                    <img src="images/frm-img2.webp">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-content-sec mt-3">
                                    <!-- <h2 class="welcom-head mb-3">Welcome ! Help Us to Find the best Comopanion </h2> -->
                                    <!-- <h2 class="welsub-head">Horoscope Basic Info</h2> -->
                                    <form class="contnent-frm1 mt-4">
                                        <div class="container">
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Property Details<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Do You Have Own Flat / House?<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="house1" value="option1">
                                                            <label class="form-check-label" for="house1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="house2" value="option2">
                                                            <label class="form-check-label" for="house2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Caste No Bar<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="caste1" value="option1">
                                                            <label class="form-check-label" for="caste1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="caste2" value="option2">
                                                            <label class="form-check-label" for="caste2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Proof Of Identify<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select class="form-select">
                                                            <option>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center mb-2-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="Blood Group" class="frm-lable">Expectations<span class="quform-required">*</span></label>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="next-btn text-center">
                                    <a href="#">Next <i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Login -->
    <div class="modal fade" id="login1" tabindex="-1" aria-labelledby="login1Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register-heading">
                                <img src="images/kettimelam logo vector.webp">
                                <button data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                            </div>
                            <div class="login-link text-center mb-4">
                                <span style="font-size: 1.2rem;color: #696767;font-weight: 500;">Welcome Back! Please Login</span>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-4">
                                        <label class="form-label">Mobile No / Email ID</label>
                                        <input type="text" class="form-control" placeholder="Enter Mobile No / Email ID">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <div class="login-link text-end mb-4">
                                        <a href="#" style="color: #509938;" data-bs-toggle="modal" data-bs-target="#forgot1" data-bs-dismiss="modal">Forgot Password</a>
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" onclick="LoginTheUser()">Login</a>
                                    </div>
                                    <div class="login-link text-center">
                                        <span>New to Kettimelam?</span> <a href="#" style="color: #509938;" data-bs-toggle="modal" data-bs-target="#register1" data-bs-dismiss="modal">SIGN UP FREE</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Register 1 -->
    <div class="modal fade" id="register1" tabindex="-1" aria-labelledby="register1Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register-heading">
                                <h1>Let's Set Up Account, While We Find Matches For You!</h1>
                                <button data-bs-dismiss="modal"><img src="images/iconoir_cancel.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Profile For</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date Of Birth</label>
                                        <input type="date" class="form-control" placeholder="DD/MM/YYYY">
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Marital Status</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                        </select>
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#register2" data-bs-dismiss="modal">Next</a>
                                    </div>
                                    <div class="login-link text-center">
                                        <span>Already a Member?</span> <a style="color: #509938;" data-bs-toggle="modal" data-bs-target="#login1" data-bs-dismiss="modal">LOGIN</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Register 2 -->
    <div class="modal fade" id="register2" tabindex="-1" aria-labelledby="register2Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register1"><img src="images/back-symbol.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Religion</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Caste</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Sub Caste</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Physical Status</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Mother Tongue</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#register3" data-bs-dismiss="modal">Next</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Register 3 -->
    <div class="modal fade" id="register3" tabindex="-1" aria-labelledby="register3Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register2"><img src="images/back-symbol.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Education</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Education Details</label>
                                        <input type="text" class="form-control" placeholder="Education Details">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Employed In</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Occupation</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Employed / Occupation Details</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#register4" data-bs-dismiss="modal">Next</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Register 4 -->
    <div class="modal fade" id="register4" tabindex="-1" aria-labelledby="register4Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register3"><img src="images/back-symbol.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Father's Name / Guardian Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <!--<div class="mb-3">-->
                                    <!--    <label class="form-label">Mobile Number</label>-->
                                    <!--    <input type="text" class="form-control" placeholder="Enter Mobile Number">-->
                                    <!--</div>-->
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input class="form-control" name="phone" type="number"> 
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Whatsapp Number</label>
                                        <input class="form-control" name="phone" type="number">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Monthly Income</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Bride / Groom Country Living In</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">My Self</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#register5" data-bs-dismiss="modal">Next</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Register 5 -->
    <div class="modal fade" id="register5" tabindex="-1" aria-labelledby="register5Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#register4"><img src="images/back-symbol.webp"></button>
                                <span><img src="images/user icon green.webp" style="width:30%;"></span>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control">
                                         </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password">
                                            <span class="input-group-text" id="togglePassword" style="cursor:pointer;"><i class="fas fa-eye-slash" id="eyeIcon"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password2">
                                            <span class="input-group-text" id="togglePassword2" style="cursor:pointer;"><i class="fas fa-eye-slash" id="eyeIcon2"></i></span>
                                        </div>
                                        <div class="form-text" style="color:#000;"><b>NOTE:</b></div>
                                        <div class="form-text">*User Name must be atleast 6 characters and contain no spaces</div>
                                        <div class="form-text">password must:</div>
                                        <div class="form-text">*Be atleast 8 characters</div>
                                        <div class="form-text">*Include atleast two of the following:</div>
                                        <div class="form-text">• one uppercase letter [ A ]</div>
                                        <div class="form-text">• one lowercase letter [ a ]</div>
                                        <div class="form-text">• one special character [ @ ]</div>
                                        <div class="form-text">• one number [ 1 ]</div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">By clicking this button, you accept our Terms and Conditions and Privacy Policy</label>
                                        </div>
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" onclick="saveFormData()">Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Forgot 1 -->
    <div class="modal fade" id="forgot1" tabindex="-1" aria-labelledby="forgot1Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#login1"><img src="images/back-symbol.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-5">
                                        <label class="form-label">Forgot Password</label>
                                        <div class="form-text" style="font-size: 1rem;">Enter your email and mobile no for verfication process...</div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Mobile No / Email ID</label>
                                        <input type="text" class="form-control" placeholder="Enter Mobile No / Email ID">
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgot2">Continue</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Forgot 2 -->
    <div class="modal fade" id="forgot2" tabindex="-1" aria-labelledby="forgot2Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgot1"><img src="images/back-symbol.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-5">
                                        <label class="form-label">Enter 6 Degits Code</label>
                                        <div class="form-text" style="font-size: 1rem;">Enter the 6 degits code that you received your email or mobile</div>
                                    </div>
                                    <div class="mb-5 otp-field d-flex justify-content-evenly">
                                        <input type="number" class="form-control">
                                        <input type="number" class="form-control">
                                        <input type="number" class="form-control">
                                        <input type="number" class="form-control">
                                        <input type="number" class="form-control">
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgot3">Continue</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Forgot 3 -->
    <div class="modal fade" id="forgot3" tabindex="-1" aria-labelledby="forgot3Label" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content myModalContent">
                <div class="modal-body">
                    <div class="container">
                        <div class="register-popup-main">
                            <div class="register2-heading text-start mb-3">
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#forgot2"><img src="images/back-symbol.webp"></button>
                            </div>
                            <div class="resgiter-form-div">
                                <form action="#">
                                    <div class="mb-5">
                                        <label class="form-label">Reset Passoword</label>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Enter New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password3">
                                            <span class="input-group-text" id="togglePassword3" style="cursor:pointer;"><i class="fas fa-eye-slash" id="eyeIcon3"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label class="form-label">Re-Enter New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password4">
                                            <span class="input-group-text" id="togglePassword4" style="cursor:pointer;"><i class="fas fa-eye-slash" id="eyeIcon4"></i></span>
                                        </div>
                                    </div>
                                    <div class="next-btn text-center mb-4">
                                        <a data-bs-dismiss="modal">Continue</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<header class="header-wrapper" id="header" data-aos="fade-down" data-aos-duration="2000">

        <!--start menu-->
        <div class="menu-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand" href="home">
                        <img src="images/logo.webp" alt="Logo">
                    </a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Navbar Items -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#login1">Login <i class="fal fa-user-check" style="margin-left: 10px;"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal"
                                    data-bs-target="#register1">Register <i class="fal fa-user-plus" style="margin-left: 10px;"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>


</header>



<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        var passwordField = document.getElementById('password');
        var icon = document.getElementById('eyeIcon');
        // var icon = this.querySelector('i');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
    
    document.getElementById('togglePassword2').addEventListener('click', function () {
        var passwordField2 = document.getElementById('password2');
        var icon2 = document.getElementById('eyeIcon2');
        // var icon = this.querySelector('i');
        
        if (passwordField2.type === 'password') {
            passwordField2.type = 'text';
            icon2.classList.remove('fa-eye-slash');
            icon2.classList.add('fa-eye');
        } else {
            passwordField2.type = 'password';
            icon2.classList.remove('fa-eye');
            icon2.classList.add('fa-eye-slash');
        }
    });
    
    document.getElementById('togglePassword3').addEventListener('click', function () {
        var passwordField2 = document.getElementById('password3');
        var icon2 = document.getElementById('eyeIcon3');
        // var icon = this.querySelector('i');
        
        if (passwordField2.type === 'password') {
            passwordField2.type = 'text';
            icon2.classList.remove('fa-eye-slash');
            icon2.classList.add('fa-eye');
        } else {
            passwordField2.type = 'password';
            icon2.classList.remove('fa-eye');
            icon2.classList.add('fa-eye-slash');
        }
    });
    
    document.getElementById('togglePassword4').addEventListener('click', function () {
        var passwordField2 = document.getElementById('password4');
        var icon2 = document.getElementById('eyeIcon4');
        // var icon = this.querySelector('i');
        
        if (passwordField2.type === 'password') {
            passwordField2.type = 'text';
            icon2.classList.remove('fa-eye-slash');
            icon2.classList.add('fa-eye');
        } else {
            passwordField2.type = 'password';
            icon2.classList.remove('fa-eye');
            icon2.classList.add('fa-eye-slash');
        }
    });
    
    // --- AOS ---
    
      AOS.init({
        easing: 'ease-in-sine'
      });
      
    </script>
    
    
   
    <script>
       function LoginTheUser() {
        var formdata = new FormData($('#login_form')[0]);
        $.ajax({
            type: 'post',
            url: "https://api.kettimelammatrimony.com/api/login",
            data: formdata,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response['code'] == 200) {
                    sessionStorage.setItem('token', response.token);
                    $.confirm({
                        title: 'Success!',
                        content: response['status'],
                        type: 'green',
                        typeAnimated: true,
                        icon: 'fa fa-success',
                        closeIcon: true,
                        buttons: {
                            tryAgain: {
                                text: 'OK',
                                btnClass: 'btn-green',
                                action: function() {
                                    window.location.href = '/after-login';
                                }
                            }
                        }
                    });
                    setTimeout(function() {
                        window.location.href = '/after-login';
                    }, 3000);
                } else if (response['code'] == 401) {
                    // Handle 401 response with an error popup
                    $.confirm({
                        title: 'Error!',
                        content: response['status'],
                        type: 'red',
                        typeAnimated: true,
                        icon: 'fa fa-warning',
                        closeIcon: true,
                        buttons: {
                            tryAgain: {
                                text: 'OK',
                                btnClass: 'btn-red',
                                action: function() {
                                    window.location.href = '/';
                                }
                            }
                        }
                    });
                }
            },
            error: function(xhr, status, error) {
                // Handle errors here
                if(xhr.responseJSON && xhr.responseJSON.code === 401) {
                    $.confirm({
                        title: 'Error!',
                        content: xhr.responseJSON.status,
                        type: 'red',
                        typeAnimated: true,
                        icon: 'fa fa-warning',
                        closeIcon: true,
                        buttons: {
                            tryAgain: {
                                text: 'OK',
                                btnClass: 'btn-red',
                                action: function() {
                                    window.location.href = '/';
                                }
                            }
                        }
                    });
                } else {
                    console.log('Error:', error);
                }
            }
        });
    }
    
    </script>
    
</body>
    