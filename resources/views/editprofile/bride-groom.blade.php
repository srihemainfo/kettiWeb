<head>

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
                        <h2 class="aft-login-head">Bride / Groom Profile</h2>
                        <div class="request-box row">
                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                <label class="form-label" style="color: #868686;">Name *</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name" value="">
                                </div><div class="col-md-6 mb-3">
                                  <label class="form-label" style="color: #868686;">Gender*</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Date of Birth*</label><input type="date" class="form-control" placeholder="DD/MM/YYYY" value="28-02-1999">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Marital Status*</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">Select Marital Status</option>
                                            @if (count($maritalStatuses) > 0)
                                                @foreach ($maritalStatuses as $eachStatus)
                                                    <option value="{{ $eachStatus['id'] }}">{{ $eachStatus['name'] }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                         <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Religion*</label>
                                        <select class="form-select" aria-label="Default select example"
                                            onchange="getSubReligions(this)">
                                            <option value="">Select Religion</option>
                                            @if (count($religions) > 0)
                                                @foreach ($religions as $eachReligion)
                                                    <option value="{{ $eachReligion['id'] }}">
                                                        {{ $eachReligion['religion'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Sub Religion*</label>
                                        <select class="form-select" aria-label="Default select example"
                                            id="subreligion">
                                            <option selected="">Select Sub Religion</option>

                                </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Mother Tongue*</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">Select Mother Tongue</option>
                                            @if (count($motherTongues) > 0)
                                                @foreach ($motherTongues as $eachMotherTongue)
                                                    <option value="{{ $eachMotherTongue['id'] }}">
                                                        {{ $eachMotherTongue['language'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Caste*</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">Select Caste</option>
                                            @if (count($castes) > 0)
                                                @foreach ($castes as $eachCaste)
                                                    <option value="{{ $eachCaste['id'] }}">{{ $eachCaste['caste'] }}
                                                    </option>
                                                @endforeach
                                            @endif
                                            {{-- <option value="">Select Caste</option>
                                            <option value="">Caste</option>
                                            <option value="3">&nbsp;Agarwal</option>
                                            <option value="5">&nbsp;Arunthathiyar</option>
                                            <option value="10">&nbsp;Boyar</option>
                                            <option value="16">&nbsp;Brahmin-Gurukkal</option>
                                            <option value="18">&nbsp;Brahmin-Iyengar</option>
                                            <option value="19">&nbsp;Brahmin-Iyer</option>
                                            <option value="23">&nbsp;Chettiar</option>
                                            <option value="26">&nbsp;Gounder</option>
                                            <option value="28">&nbsp;Inter - Caste</option>
                                            <option value="30">&nbsp;Kallar</option>
                                            <option value="35">&nbsp;Kulalar</option>
                                            <option value="36">&nbsp;Kuravan</option>
                                            <option value="44">&nbsp;Maruthuvar</option>
                                            <option value="45">&nbsp;Moopanar</option>
                                            <option value="46" selected="selected">&nbsp;Mudaliyar</option>
                                            <option value="51">&nbsp;Nadar</option>
                                            <option value="52">&nbsp;Naidu</option>
                                            <option value="61">&nbsp;Pandaram</option>
                                            <option value="65">&nbsp;Pattariyar</option>
                                            <option value="66">&nbsp;Pillai</option>
                                            <option value="74">&nbsp;Scheduled Tribes / ST</option>
                                            <option value="75">&nbsp;Senai Thalaivar&nbsp;</option>
                                            <option value="79">&nbsp;Sourashtra</option>
                                            <option value="80">&nbsp;Udayar/Parkavakulam</option>
                                            <option value="84">&nbsp;Valluvan/Valluvar</option>
                                            <option value="88">&nbsp;Vannar/Vannan</option>
                                            <option value="89">&nbsp;Vanniya Kula Kshatriyar</option>
                                            <option value="90">&nbsp;Viswakarma</option>
                                            <option value="92">&nbsp;Yadava</option>
                                            <option value="96">&nbsp;Karuneegar</option>
                                            <option value="98">&nbsp;Adi Dravidar / SC</option>
                                            <option value="99">&nbsp;Jain</option>
                                            <option value="100">&nbsp;Kongu Vellala Gounder</option>
                                            <option value="104">&nbsp;Devendra Kula Vellalar</option>
                                            <option value="108">&nbsp;Naicker</option>
                                            <option value="112">&nbsp;Vellalar</option>
                                            <option value="124">&nbsp;gounder others</option>
                                            <option value="127">&nbsp;Aaru Nattu Vellalar</option>
                                            <option value="128">&nbsp;Achirapakkam Chettiar</option>
                                            <option value="132">&nbsp;Agamudayar</option>
                                            <option value="133">&nbsp;Agamudayar / Arcot /Thuluva Vellalar</option>
                                            <option value="135">&nbsp;Agaram Vellan Chettiar</option>
                                            <option value="150">&nbsp;Ayira Vysya</option>
                                            <option value="153">&nbsp;Beri Chettiar</option>
                                            <option value="159">&nbsp;Cherakula Vellalar</option>
                                            <option value="164">&nbsp;Desikar</option>
                                            <option value="166">&nbsp;Devanga Chettiar</option>
                                            <option value="170">&nbsp;Elur Chettiar</option>
                                            <option value="173">&nbsp;Gandla/Ganiga</option>
                                            <option value="177">&nbsp;Gramani</option>
                                            <option value="182">&nbsp;Illaththu Pillai</option>
                                            <option value="183">&nbsp;Isai Vellalar</option>
                                            <option value="205">&nbsp;Kasukara</option>
                                            <option value="206">&nbsp;Kodikal Pillai</option>
                                            <option value="218">&nbsp;Kuruhini Chettiar</option>
                                            <option value="228">&nbsp;Manjapudur Chettiar</option>
                                            <option value="230">&nbsp;Maravar</option>
                                            <option value="249">&nbsp;Nankudi Vellalar</option>
                                            <option value="250">&nbsp;Nanjil Mudali</option>
                                            <option value="251">&nbsp;Nanjil Nattu Vellalar</option>
                                            <option value="254">&nbsp;Nattu Gounder&nbsp;</option>
                                            <option value="260">&nbsp;Parvatha Rajakulam/Meenavar</option>
                                            <option value="261">&nbsp;Othuvaar</option>
                                            <option value="264">&nbsp;Padayachi</option>
                                            <option value="265">&nbsp;Padmasaliyar</option>
                                            <option value="274">&nbsp;Pandiya Vellalar</option>
                                            <option value="276">&nbsp;Pannirandam Chettiar&nbsp;</option>
                                            <option value="284">&nbsp;Pattusaliyar</option>
                                            <option value="297">&nbsp;Reddy</option>
                                            <option value="298">&nbsp;Sadhu Chettiar</option>
                                            <option value="315">&nbsp;Sengunthar / Kaikolar</option>
                                            <option value="325">&nbsp;Sozhiya Vellalar</option>
                                            <option value="326">&nbsp;Sozhiya Chettiar</option>
                                            <option value="336">&nbsp;Telugupatti</option>
                                            <option value="339">&nbsp;Thanjavur Desikar</option>
                                            <option value="347">&nbsp;Thondai Mandala Vellalar</option>
                                            <option value="350">&nbsp;Tirunelveli Saiva Pillai</option>
                                            <option value="357">&nbsp;Vadambar</option>
                                            <option value="365">&nbsp;Vaniya Chettiar</option>
                                            <option value="372">&nbsp;Veerakodi Vellalar</option>
                                            <option value="373">&nbsp;Veera Saivam</option>
                                            <option value="378">&nbsp;Vellan Chettiar</option>
                                            <option value="381">&nbsp;Vettuva Gounder</option>
                                            <option value="389">&nbsp;Adhaviyar</option>
                                            <option value="391">&nbsp;Karalites / Malayalee</option>
                                            <option value="392">&nbsp;Kerala Mudali</option>
                                            <option value="394">&nbsp;Agamudayar / Kallar / Maravar</option>
                                            <option value="395">&nbsp;Agamudayar -Rajakula Agamudayar</option>
                                            <option value="396">&nbsp;Agamudayar- Agamudayar / Kallar / Maravar
                                            </option>
                                            <option value="397">&nbsp;Agamudayar- Others</option>
                                            <option value="403">&nbsp;Kongu Chettiar</option>
                                            <option value="404">&nbsp;Nattukottai Chettiar</option>
                                            <option value="405">&nbsp;Pattinavar</option>
                                            <option value="406">&nbsp;Saiva Vellan Chettiar</option>
                                            <option value="412">&nbsp;Urali Gounder</option>
                                            <option value="414">&nbsp;Iyengar-Brahmin</option>
                                            <option value="415">&nbsp;Iyer-Brahmin</option>
                                            <option value="416">&nbsp;Kamma Naidu</option>
                                            <option value="417">&nbsp;Karkathar</option>
                                            <option value="425">&nbsp;ST/Scheduled Tribes</option>
                                            <option value="434">&nbsp;Kongu Nadar</option>
                                            <option value="436">&nbsp;Parkavakulam/Udayar</option>
                                            <option value="">&nbsp;</option>
                                            <option value="439">&nbsp;Mutharaiyar/Muthuraju</option>
                                            <option value="444">&nbsp;Yadava Naidu</option>
                                            <option value="445">&nbsp;Nanjil Vellalar</option>
                                            <option value="446">&nbsp;Nanjil Pillai</option>
                                            <option value="457">&nbsp;Gounder-Kongu Vellala Gounder</option>
                                            <option value="458">&nbsp;Gounder-Nattu Gounder</option>
                                            <option value="459">&nbsp;Gounder-Urali Gounder</option>
                                            <option value="460">&nbsp;Gounder-Vanniya Kula Kshatriyar</option>
                                            <option value="461">&nbsp;Gounder-Vettuva Gounder</option>
                                            <option value="462">&nbsp;Gounder-Others</option>
                                            <option value="463">&nbsp;Gurukkal -Brahmin</option>
                                            <option value="464">&nbsp;Kallar-Easanattu Kallar</option>
                                            <option value="465">&nbsp;Kallar-Gandharva Kottai Kallar</option>
                                            <option value="466">&nbsp;Kallar-Kootappal Kallar</option>
                                            <option value="467">&nbsp;Kallar-Piramalai Kallar</option>
                                            <option value="468">&nbsp;Kallar-Thanjavur Kallar</option>
                                            <option value="469">&nbsp;Kallar-Periyasooriyur Kallar</option>
                                            <option value="470">&nbsp;Kallar-Agamudayar/Kallar/Maravar</option>
                                            <option value="471">&nbsp;Kallar- Others</option>
                                            <option value="472">&nbsp;Maravar - Karu Maravar</option>
                                            <option value="473">&nbsp;Maravar - Appanad Kondayam Kottai Maravar
                                            </option>
                                            <option value="474">&nbsp;Maravar - Sambanad Maravar</option>
                                            <option value="475">&nbsp;Maravar - Agamudayar/Kallar/Maravar</option>
                                            <option value="476">&nbsp;Maravar - Others</option>
                                            <option value="477">&nbsp;Naicker-Others</option>
                                            <option value="478">&nbsp;Oddar</option>
                                            <option value="479">&nbsp;Padayachi- Others</option>
                                            <option value="481">&nbsp;SC/Adi Dravidar&nbsp;</option>
                                            <option value="">&nbsp;</option>
                                            <option value="483">&nbsp;Senguntha Mudaliyar</option>
                                            <option value="486">&nbsp;Gounder-Annuppa Gounder</option>
                                            <option value="487">&nbsp;Gounder-Kurumba Gounder</option>
                                            <option value="488">&nbsp;Gounder-Vokkaliga Gounder</option>
                                            <option value="489">&nbsp;Naicker-Vanniya Kula Kshatriyar</option>
                                            <option value="490">&nbsp;Padayachi-Vanniya Kula Kshatriyar</option>
                                            <option value="493">&nbsp;Malayalee/Keralites</option> --}}

                                </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Sub Caste</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">Select SubCaste</option>
                                            <option value="132">Agamudayar</option>
                                            <option value="133">Agamudayar / Arcot /Thuluva Vellalar</option>
                                            <option value="143">Any Sub Caste</option>
                                            <option value="424">Arcot</option>
                                            <option value="183">Isai Vellalar</option>
                                            <option value="392">Kerala Mudali</option>
                                            <option value="100">Kongu Vellala Gounder</option>
                                            <option value="261">Othuvaar</option>
                                            <option value="301">Saiva Vellalar</option>
                                            <option value="315">Sengunthar / Kaikolar</option>
                                            <option value="325">Sozhiya Vellalar</option>
                                            <option value="347">Thondai Mandala Vellalar</option>
                                            <option value="349">Thuluva Vellalar</option>
                                            <option value="350">Tirunelveli Saiva Pillai</option>
                                            <option value="372">Veerakodi Vellalar</option>
                                            <option value="112">Vellalar</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" style="color: #868686;">Proile Created By</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">Select</option>
                                            <option value="Self">Self</option>
                                            <option value="Parents">Parents</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Sister" selected="selected">Sister</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Advisor">Advisor</option>
                                        </select>
                                    </div>
                                <div class="col-md-6 mb-3 mt-4">
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
            <!--<div class="col-lg-3 mb-4 bg-sec">-->
            <!--        <div class="green-bg" >-->
            <!--            <div class="profile-main text-end">-->
            <!--                <span class="btn-close" id="edit_closing_btn">X</span>-->
            <!--            </div>-->
            <!--            <div class="profile-secondary">-->
            <!--                <div class="list-sec mt-4">-->

            <!--                    <ul>-->
            <!--                  <li id="bg-profile" class="{{route('bride-groom') ? 'active' : ''}}">-->
            <!--                        <span class="icon"><img src="images/after login/icon edit profile 1.webp"></span>-->
            <!--                        <span class="description">Bride / Groom Profile</span>-->
            <!--                    </li>-->
            <!--                        <li id="fam-det">-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 2.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Family Details</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 3.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Address Details</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 4.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Partner Preference</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 5.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Horoscope Details</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 6.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Hobbies & Interest</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 7.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Education & Occupation</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 8.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Habits</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 9.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Location Details</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 9.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Physical Attributes</span>-->
            <!--                        </li>-->

            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 9.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">For Intercaste Parents</span>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <span class="icon"> <img src="images/after login/icon edit profile 9.webp">-->
            <!--                            </span>-->
            <!--                            <span class="description">Others</span>-->
            <!--                        </li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
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

    <script>
        function getCookieValue(name) {
            const regex = new RegExp(`(^| )${name}=([^;]+)`)
            const match = document.cookie.match(regex)
            if (match) {
                return match[2];
            }
        }

        function getSubReligions(element) {
            if ($(element).val() != '') {
                $("#subreligion").html('<option value="">Loading..</option>');
                $.ajax({
                    type: 'post',
                    url: "https://webapi.kettimelammatrimony.com/api/sub-religions",
                    headers: {
                        'Authorization': getCookieValue('user-token')
                    },
                    data: {
                        'religionId': $(element).val()
                    },
                    success: function(response) {
                        let options = '';
                        if (response.status) {
                            options += `<option value="">Select Sub Religion</option>`;
                            let theData = response.data;
                            $.each(response.data, function(index, value) {
                                options +=
                                    `<option value="${value['id']}">${value['name']}</option>`;
                            });
                        } else {
                            // Handle 401 response with an error popup
                            $.confirm({
                                title: 'Error!',
                                content: response.data,
                                type: 'red',
                                typeAnimated: true,
                                icon: 'fa fa-warning',
                                closeIcon: true,
                            });
                            options = `<option value="">No Data Found</option>`;
                        }
                        $("#subreligion").html(options);
                    },
                    error: function(xhr, status, error) {
                        var theContent = '';
                        if (xhr.status == 524) {
                            theContent = 'Request Timeout';
                        } else if (xhr.responseJSON) {
                            theContent = jqXHR.responseJSON.message;
                        } else if (xhr.status == 500) {
                            theContent = 'Server Error';
                        } else if (xhr.statusText) {
                            theContent = xhr.statusText;
                        } else {
                            theContent = errorThrown;
                        }
                        $.confirm({
                            title: 'Error!',
                            content: theContent,
                            type: 'red',
                            typeAnimated: true,
                            icon: 'fa fa-warning',
                            closeIcon: true,
                        });
                        $("#subreligion").html('');
                    }
                });
            } else {
                $.confirm({
                    title: 'Error!',
                    content: 'Religion Is Required',
                    type: 'red',
                    typeAnimated: true,
                    icon: 'fa fa-warning',
                    closeIcon: true,
                });
                $("#subreligion").html('');
            }
        }
    </script>
</body>
