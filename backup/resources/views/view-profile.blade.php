<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    @include('include.header2')

<section class="profile-main-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="dropdown dropdown-2">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/My Profile/eye-icon.webp" alt="eye-icon"> Profile View
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#" style="color: #000;">Tamil</a></li>
                      <li><a class="dropdown-item" href="#" style="color: #000;">English</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row user-details-main my-3">
            <div class="col-lg-3 text-center mb-3">
                <img src="images/My Profile/main-user-img.webp" alt="user-img" width="80%">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <div class="pv-user-details-main">
                    <p style="font-weight: 600; text-transform: uppercase;"> <span> <i class="fal fa-user"></i> </span> T.Nagarajan</p>
                    <p> <span> <i class="fal fa-calendar-alt"></i> </span> 29 years ago</p>
                    <p style="padding-left: 75px;">BSC, Web / Graphic Designer</p>
                    <p style="padding-left: 75px;">Hindu, Malayalee / Keralites</p>
                    <p style="padding-left: 75px;">K.K.Nagar</p>
                </div>
            </div>
        </div>
        <div class="row basic-information my-5">
            <div class="col-lg-12">
                <p style="font-size: 36px; font-weight: 600;">Basic Profile Information</p>
            </div>
            <div class="col-lg-12">
                <table class="table table-borderless">
                    <tr>
                        <td>Member ID</td>
                        <td>KM5996</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>spanravin</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>Male</td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>12-01-2001</td>
                    </tr>
                    <tr>
                        <td>Marital Status</td>
                        <td>Divorce with Children</td>
                    </tr>
                    <tr>
                        <td>No of Children</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Physical Status</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>Religion / Sub Religion</td>
                        <td>Hindu</td>
                    </tr>
                    <tr>
                        <td>Mother Tongue</td>
                        <td>Tamil</td>
                    </tr>
                    <tr>
                        <td>Caste</td>
                        <td>Malayalee / Keralites</td>
                    </tr>
                    <tr>
                        <td>Sub Caste</td>
                        <td>Malayalee</td>
                    </tr>
                    <tr>
                        <td>Caste No Bar</td>
                        <td>Yes</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row professional-info my-5">
            <div class="col-lg-12">
                <p style="font-size: 36px; font-weight: 600;">Professional Info</p>
            </div>
            <div class="col-lg-12">
                <table class="table table-borderless">
                    <tr>
                        <td>Education</td>
                        <td>BSC</td>
                    </tr>
                    <tr>
                        <td>Education in Details</td>
                        <td>Mathematics</td>
                    </tr>
                    <tr>
                        <td>Employed in</td>
                        <td>Not Uploaded</td>
                    </tr>
                    <tr>
                        <td>Employed / Occupation in Details</td>
                        <td>Web / Graphic Designer</td>
                    </tr>
                    <tr>
                        <td>Monthly Income Rs</td>
                        <td>25,000 to 30,000</td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="row horoscope-information my-5">
            <div class="col-lg-12">
                <p style="font-size: 36px; font-weight: 600;">Basic Horoscope Information</p>
            </div>
            <div class="col-lg-12">
                <table class="table table-borderless">
                    <tr>
                        <td>Date of Birth</td>
                        <td>12-01-2001</td>
                    </tr>
                    <tr>
                        <td>Birth Day</td>
                        <td>Sunday</td>
                    </tr>
                    <tr>
                        <td>Time of Birth</td>
                        <td>5.30 AM</td>
                    </tr>
                    <tr>
                        <td>Place of Birth</td>
                        <td>Vellore</td>
                    </tr>
                    <tr>
                        <td>Gothram</td>
                        <td>Siva Gothram</td>
                    </tr>
                    <tr>
                        <td>Star</td>
                        <td>Kettai</td>
                    </tr>
                    <tr>
                        <td>Rasi</td>
                        <td>Vrischikam</td>
                    </tr>
                    <tr>
                        <td>Laknam</td>
                        <td>Mesam</td>
                    </tr>
                    <tr>
                        <td>Padham</td>
                        <td>Not Uploaded</td>
                    </tr>
                    <tr>
                        <td>Dosham</td>
                        <td>Kala Sarpa</td>
                    </tr>
                    <tr>
                        <td>Dosham Balance</td>
                        <td>11 Y - 9M - 1D <br> Planet - Kedhu</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row horoscope-diagram">
            <div class="col-lg-12">
                <p style="font-size: 36px; font-weight: 600;">Basic Horoscope Information</p>
            </div>
            <div class="col-lg-6">
                <table class="table-2" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                    <tbody>
                        <tr>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2" rowspan="2" align="center" style="vertical-align:middle; background-color: #f2f2f2;"><h3 style="color: #00A859;">RAASI</h3></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <table class="table-2" cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                    <tbody>
                        <tr>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                            <td width="25%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2" rowspan="2" align="center" style="vertical-align:middle; background-color: #f2f2f2;"><h3 style="color: #00A859;">AMSAM</h3></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


@include('include.footer')

</body>
