<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
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
   .lg-img {
    width: 22px;
    height: 32px;
}
.btt-btn{
    background: linear-gradient(180deg, rgb(218 42 49) 0%, rgb(189 82 0) 100%);
    outline: none;
    border: none;
    border-radius: 50%;
    position: absolute;
    right: -8px;
    top: -13px;
}
.modal-header{
    border-bottom:none !important;
}
.modal-footer{
    border-top:none !important;
}
.note-p{
    font-size: 20px;
}
.note-para{
    font-size: 19px;
}
.note-para1{
    font-size:15px;
}
.pac-selec p {
    font-size: 22px;
    background: #0bac60;
    padding: 16px;
    color: #fff;
    border-radius: 10px;
}

</style>
</head>

<body>

    @include('include.header2')

    <!--start header-->

   
  <section class="package-sec">
      <div class="container">
         <div class="row mt-3 mb-3 justify-content-center">
         <div class="col-lg-10">
         <div class="pac-selec text-center">
            <p>Thank you for choosing our free package! To further update your profile, please fill out this form</p>
        </div>
         </div>
               </div>
            <div class="row">
                <div class="col-lg-12 position-relative py-4">
                    <p class="pkg-main-title">Choose Your Best Plan</p>
                    <p class="current-pkg">Gold Package</p>
                </div>
            </div>
              <div class="row justify-content-center">
                  <div class="col-lg-3 col-md-6 mb-5">
                    <div class="package-card-item" id="gold_package_plan">
                        <p class="pkg-title">Gold Package</p>
                        <p class="pkg-month">12 Months</p>
                        <p class="pkg-rs">₹ 3500</p>
                        <p class="pkg-save">Save 35%</p>
                        <p class="pkg-discount">₹ <span>5000</span></p>
                        <a class="pkg-pay-btn" data-bs-toggle="modal" data-bs-target="#package-modal">Pay Now</a>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-5">
                   <div class="package-card-item pkg-active" id="silver_package_plan">
                       <p class="pkg-title">silver Package</p>
                       <p class="pkg-month">9 Months</p>
                       <p class="pkg-rs">₹ 2700</p>
                       <p class="pkg-save">Save 40%</p>
                       <p class="pkg-discount">₹ <span>4000</span></p>
                       <a class="pkg-pay-btn">Pay Now</a>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-5">
                   <div class="package-card-item" id="bronze_package_plan">
                       <p class="pkg-title">bronze Package</p>
                       <p class="pkg-month">6 Months</p>
                       <p class="pkg-rs">₹ 1850</p>
                       <p class="pkg-save">Save 45%</p>
                       <p class="pkg-discount">₹ <span>3000</span></p>
                       <a class="pkg-pay-btn">Pay Now</a>
                   </div>
               </div>
               
                  <div class="col-lg-3 col-md-6 mb-5">
                    <div class="package-card-item" id="free_package_plan">
                        <p class="pkg-title">Free Package</p>
                        <p class="pkg-month">2 Months</p>
                        <p class="pkg-rs">₹ 100</p>
                        <p class="pkg-save">Save 100%</p>
                        <p class="pkg-discount">₹ <span>0</span></p>
                        <a class="pkg-pay-btn">Pay Now</a>
                    </div>
               </div>
              </div>
            <div class="table-responsive" style="display:none;" id="gold_package_details">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"><p class="member-pkg">Membership Packages</p></th>
                        <th scope="col"><p class="pkg-name gold-pkg">Gold Package</p></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Subscription Periods</th>
                        <td>12 Months</td>
                      </tr>
                      <tr>
                        <th scope="row">Package Costs</th>
                        <td>Rs.3500/-</td>
                      </tr>
                      <tr>
                        <th scope="row">No of Contacts</th>
                        <td>20 Nos</td>
                      </tr>
                      <tr>
                        <th scope="row">Bride / Groom Kettimelam and Sangamam Matrimony Organiser Number of one Contact</th>
                        <td>Rs.70/-</td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="5"><p class="member-pkg">Extra Benefits</p></th>
                      </tr>
                      <tr>
                        <th scope="row">Profile Registration and Management</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Display</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Upgradation Fac</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Upload Your Photographs</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Horoscope Entry</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Unlimited Profile Search Options</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Availability to Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Access Verified Mobile Numbers</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Watch List</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Likes to Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Receive Likes From Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Send and Receive Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Reply to Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Shortlisting of Proposals</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Dispatching of Proposal from Both Side</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Data Compilation</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Building Profile on your behalf</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compare Search</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compatibility View</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Block Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">To make it easier the details will be given in Tamil and English (Address and Contact Number,Contact Number Only, Without Address and Contact Number) in colour for you to choose.Itis designed in Six different types / Models in A4 Size.</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Introducing the Candidate and their details throughout Tamilnadu through, "MarriageOrganisers Meetings, Suyamvaram and Varan Paarkalaam Vaanga".</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">The details of Bride / Groom and Related advertisements / Services will be displayedthrough "Kettimelam Matrimony" YouTube Channel.</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Enabling match Making by sending the Candidate's details through more than 100 WhatsApp groups of Marriage Organisers.</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td><p class="pkg-activated">Activated</p></td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive" style="display:none;" id="silver_package_details">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"><p class="member-pkg">Membership Packages</p></th>
                        <th scope="col"><p class="pkg-name silver-pkg">Silver Package</p></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Subscription Periods</th>
                        <td>9 Months</td>
                      </tr>
                      <tr>
                        <th scope="row">Package Costs</th>
                        <td>Rs.2700/-</td>
                      </tr>
                      <tr>
                        <th scope="row">No of Contacts</th>
                        <td>15 Nos</td>
                      </tr>
                      <tr>
                        <th scope="row">Bride / Groom Kettimelam and Sangamam Matrimony Organiser Number of one Contact</th>
                        <td>Rs.75/-</td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="5"><p class="member-pkg">Extra Benefits</p></th>
                      </tr>
                      <tr>
                        <th scope="row">Profile Registration and Management</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Display</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Upgradation Fac</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Upload Your Photographs</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Horoscope Entry</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Unlimited Profile Search Options</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Availability to Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Access Verified Mobile Numbers</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Watch List</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Likes to Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Receive Likes From Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Send and Receive Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Reply to Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Shortlisting of Proposals</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Dispatching of Proposal from Both Side</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Data Compilation</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Building Profile on your behalf</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compare Search</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compatibility View</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Block Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">To make it easier the details will be given in Tamil and English (Address and Contact Number,Contact Number Only, Without Address and Contact Number) in colour for you to choose.Itis designed in Six different types / Models in A4 Size.</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Introducing the Candidate and their details throughout Tamilnadu through, "MarriageOrganisers Meetings, Suyamvaram and Varan Paarkalaam Vaanga".</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">The details of Bride / Groom and Related advertisements / Services will be displayedthrough "Kettimelam Matrimony" YouTube Channel.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Enabling match Making by sending the Candidate's details through more than 100 WhatsApp groups of Marriage Organisers.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td>-</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive" style="display:none;" id="bronze_package_details">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"><p class="member-pkg">Membership Packages</p></th>
                        <th scope="col"><p class="pkg-name bronze-pkg">Bronze Package</p></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Subscription Periods</th>
                        <td>6 Months</td>
                      </tr>
                      <tr>
                        <th scope="row">Package Costs</th>
                        <td>Rs.1850/-</td>
                      </tr>
                      <tr>
                        <th scope="row">No of Contacts</th>
                        <td>10 Nos</td>
                      </tr>
                      <tr>
                        <th scope="row">Bride / Groom Kettimelam and Sangamam Matrimony Organiser Number of one Contact</th>
                        <td>Rs.80/-</td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="5"><p class="member-pkg">Extra Benefits</p></th>
                      </tr>
                      <tr>
                        <th scope="row">Profile Registration and Management</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Display</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Upgradation Fac</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Upload Your Photographs</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Horoscope Entry</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Unlimited Profile Search Options</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Availability to Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Access Verified Mobile Numbers</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Watch List</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Likes to Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Receive Likes From Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Send and Receive Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Reply to Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Shortlisting of Proposals</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Dispatching of Proposal from Both Side</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Data Compilation</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Building Profile on your behalf</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compare Search</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compatibility View</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Block Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">To make it easier the details will be given in Tamil and English (Address and Contact Number,Contact Number Only, Without Address and Contact Number) in colour for you to choose.Itis designed in Six different types / Models in A4 Size.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Introducing the Candidate and their details throughout Tamilnadu through, "MarriageOrganisers Meetings, Suyamvaram and Varan Paarkalaam Vaanga".</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">The details of Bride / Groom and Related advertisements / Services will be displayedthrough "Kettimelam Matrimony" YouTube Channel.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Enabling match Making by sending the Candidate's details through more than 100 WhatsApp groups of Marriage Organisers.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td>-</td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive" style="display:none;" id="free_package_details">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"><p class="member-pkg">Membership Packages</p></th>
                        <th scope="col"><p class="pkg-name free-pkg">Free Package</p></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Subscription Periods</th>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th scope="row">Package Costs</th>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th scope="row">No of Contacts</th>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th scope="row">Bride / Groom Kettimelam and Sangamam Matrimony Organiser Number of one Contact</th>
                        <td>Rs.100/-</td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="5"><p class="member-pkg">Extra Benefits</p></th>
                      </tr>
                      <tr>
                        <th scope="row">Profile Registration and Management</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Display</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Upgradation Fac</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Upload Your Photographs</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Horoscope Entry</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Unlimited Profile Search Options</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Profile Availability to Members</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Access Verified Mobile Numbers</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Watch List</th>
                        <td><img class="tbl-inner-img" src="images/charm_circle-tick.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Likes to Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Receive Likes From Other Profiles</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Send and Receive Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Reply to Personalised Messages</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Shortlisting of Proposals</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Dispatching of Proposal from Both Side</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Data Compilation</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Building Profile on your behalf</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compare Search</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Compatibility View</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Block Members</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">To make it easier the details will be given in Tamil and English (Address and Contact Number,Contact Number Only, Without Address and Contact Number) in colour for you to choose.Itis designed in Six different types / Models in A4 Size.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Introducing the Candidate and their details throughout Tamilnadu through, "MarriageOrganisers Meetings, Suyamvaram and Varan Paarkalaam Vaanga".</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">The details of Bride / Groom and Related advertisements / Services will be displayedthrough "Kettimelam Matrimony" YouTube Channel.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row">Enabling match Making by sending the Candidate's details through more than 100 WhatsApp groups of Marriage Organisers.</th>
                        <td><img class="tbl-inner-img" src="images/close-button 1.webp"></td>
                      </tr>
                      <tr>
                        <th scope="row"></th>
                        <td>-</td>
                      </tr>
                    </tbody>
                </table>
            </div>
      </div>
      
  </section>
  
  
  <div class="modal-sec">
      <div class="modal fade" id="package-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content myModalContent">
      <div class="modal-header">
        <button data-bs-dismiss="modal" class="btt-btn"><img src="images/iconoir_cancel.webp" class="lg-img"></button>
      </div>
      <div class="modal-body">
     <p class="note-p"><strong>Note:</strong></p>
     <p class="note-para">Thank you for choosing our Free Matrimony Package! Start your 
     journey with access to basic features and explore profiles to find your perfect match</p>
     <p class="note-para1">To learn more, simply fill in your basic details and get started on your search for a life partner!</p>
     <div class="next-btn text-center mt-5 mb-4">
                                        <a href="#" >Fill Details</a>
                                    </div>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
  </div>
    <!--Start Footer-->

    @include('include.footer')

    <!--End Footer-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function(){
        
        $('#silver_package_details').show();
        
        $('.package-card-item').click(function() {
            // Remove pkg-active class from all elements
            $('.package-card-item').removeClass('pkg-active');
            
            // Add pkg-active class to clicked element
            $(this).addClass('pkg-active');
            
            // Hide all details divs initially
            $('#gold_package_details, #silver_package_details, #bronze_package_details, #free_package_details').hide();
            
            // Show the respective details div based on the clicked package
            if ($('#gold_package_plan').hasClass('pkg-active')) {
                $('#gold_package_details').show();
            } else if ($('#silver_package_plan').hasClass('pkg-active')) {
                $('#silver_package_details').show();
            } else if ($('#bronze_package_plan').hasClass('pkg-active')) {
                $('#bronze_package_details').show();
            } else if ($('#free_package_plan').hasClass('pkg-active')) {
                $('#free_package_details').show();
            }
        });
        
    });
    
</script>



</body>
