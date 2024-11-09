<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kettimelam Matrimony</title>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--<script src="/js/disableInspect.js"></script>-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/after-login.css">
    <link rel="stylesheet" href="css/popupscreen.css">
    
    <!--Font Awesome-->
    
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>


/*Social Icons*/

.social-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: center;
    /*background-color: #f2f2f2;*/
    /*box-shadow: 0px 0px 15px #00000027;*/
    padding: 15px 10px;
    flex-direction: column;
    width: max-content;
    position: fixed;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

.social-button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    box-shadow: 0px 0px 4px #00000027;
    transition: 0.3s;
}

.social-button:hover {
  background-color: #f2f2f2;
  box-shadow: 0px 0px 6px 3px #00000027;
}

.social-buttons svg {
  transition: 0.3s;
  width: 20px;
  height: 20px;
}

.facebook {
  background-color: #3b5998;
}

.facebook svg {
  fill: #f2f2f2;
}

.facebook:hover svg {
  fill: #3b5998;
}

.github {
  background-color: #333;
}

.github svg {
  fill: #f2f2f2;
}

.github:hover svg {
  fill: #333;
}

.linkedin {
  background-color: #0077b5;
}

.linkedin svg {
  fill: #f2f2f2;
}

.linkedin:hover svg {
  fill: #0077b5;
}

.instagram {
  background-color: #c13584;
}

.instagram svg {
  fill: #f2f2f2;
}

.instagram:hover svg {
  fill: #c13584;
}


.print-para p {
    font-size:20px;
}


div#st-2 {
    display: none !important;
}

.text-end h1 {
    color: #ca373c;
    margin:0;
}

.text-end p {
    font-size: 20px;
    color: #ca373c;
    font-weight: 500;
    margin: 0;
}

.text-end p strong {
    font-weight:500;
}

@media only screen and (max-width: 992px) {
    
    .text-end {
        margin-top:20px;
    }
    
    #right-pic {
        display:none;
    }
    
}

@media only screen and (max-width: 480px) {
    
    .text-end h1 {
        font-size:15px;
    }
    
    .text-end p {
        font-size: 12px;
    }
    
    .print-para p {
        font-size:15px;
    }
    
}

.wrap {
    width: 1159px;
    margin: 0 auto;
}
.btn {
    background-color: #a00800;
    color: #fff;
    padding: 10px 40px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    font-size: 20px;
    width:auto !important;
}
.doc {
    color: #0099CC;
    font-weight: bold;
    font-size: 14px;
}
.table td {
    border: solid 1px #000 !important;
    height: 80px !important;
    text-align: center;
    vertical-align: middle !important;
}
.header-bg {
    background: #fdf278;
    -webkit-print-color-adjust: exact;
}
		/* PDF File Style Start */
		@page {
			/* margin: 5mm; */

			/* background-color: #fdf278 !important; */
			/* margin: 5mm red; */
			/* background-image: url("/images/printTem.jpg");
			background-image-resize: 6; */
			/* background-size: cover; */

		}

		/* PDF File Style Start */

		.addTitle i {
			width: 12px;
		}

		@media print {

			/* styles here */
			#st-2 img {
				display: none;
			}

			.logo {

				padding-left: 13px;
				width: 234px;
				font-size: 13px !important;
				border: none;
				margin-top: 4px;
				padding-bottom: 2px;
			}
          


			/* .addTitle {
				padding-right: 13px;
			} */


			/*
			#wrapper {
				border: 5px solid #00a859;
			} */


			/* td{
				padding-left: 2px;
			} */

		}

		/* @media print {	   	page-break-before: avoid-page;	 } */

		.print-pg td {
			padding: 1px 0px 1px 4px;
			width: unset !important;
			/*border: 1px solid #f1f1f1;*/
			border: 2px solid #FFFFFF;
			font-size: 13px;
		}
        
		.amsam td,
		.rasi td {
			text-align: center;
		}

		hr {
			margin-top: 0px;
			margin-bottom: 10px;
			border: 0;
	    }

		input,
		button,
		select,
		textarea {

			width: 10% !important;

		}

		input[type="radio"],
		input[type="checkbox"] {
			margin: 5px 0px 0px -10px;
		}

		/*.col-left {*/
		/*	width: 78%;*/
		/*	float: left;*/
		/*}*/

		/*.col-right {*/

		/*	width: 20%;*/

		/*	float: right;*/

		/*}*/

		.clearfix {

			clear: both;

		}

		/*.rasi{

				float: left;

				width: 50%;

			}

				.amsam{

				float: right;

			width: 50%;

				}*/

		.add-print {
			margin: -8% 0% 0% 50%;
			color: #fff;
		}

		@media only screen and (max-width: 480px) {

			/*.col-right,*/
			/*.col-left {*/
			/*{*/
			/*	width: 100%;*/
			/*	float: none;*/
			/*	margin-bottom: 16px;*/
			/*}*/

			.rasi,
			.amsam {
				float: none;
				width: 100%;
			}

			.rasi table,
			.amsam table {
				/* height: 266px !important; */
				width: 100% !important;
				margin-bottom: 10px;
			}

			.table1 td,
			.table2 td {
				width: 25% !important;
				padding: 1px 0px 1px 4px !important;
				overflow-wrap: break-word;
			}

			.table1,
			.table2 {
				table-layout: fixed;
			}

			.print-pg td {
				font-size: 12px !important;
			}

			.wrap {
				width: 100%;
			}

			.add-print {
				margin: 1% 0% 1% 2%;
				color: #fff;
			}
		}

		/*new*/
		@media print {

			body {
				/* border: 5px solid #00a859; */
				/* background-color: #fdf278 !important; */
				/* background-color: #fff !important; */
				-webkit-print-color-adjust: exact;
			}

			.print-pg {
				/* background-color: #fdf278 !important; */
				-webkit-print-color-adjust: exact;

			}

			.header-bg {
				/* background-color: #fdf278 !important; */
				-webkit-print-color-adjust: exact;
			}

			.print-pg td {
				font-size: 13px !important;
				border: 1px solid #fdf278;
				color: #ca373c !important;
				-webkit-print-color-adjust: exact;
				padding: 1px;
			}

			td {
				color: #ca373c !important;
				-webkit-print-color-adjust: exact;
			}

			.print-pg .fa:before {
				color: #FFF !important;
				-webkit-print-color-adjust: exact;
			}

			.print-pg h2 {
				color: #FFF !important;
				margin-bottom: 2px;
				background-color: #ca373c !important;
				width: fit-content;
				padding: 5px 10px !important;
				font-weight: bold;
				/* font-size: 10px !important; */
				-webkit-print-color-adjust: exact;
			}
		}

		#wrapper {
		border-left: 10px solid #00a859;
        border-right: 10px solid #00a859;

		}

		h3 {
			margin-top: 0px;
			margin-bottom: 0px;
			font-size: 14px;
		}

		.print-pg,
		.header-bg {
			background: #fdf278;
			-webkit-print-color-adjust: exact;
		}

		.print-pg {
			padding-top: 5px;
		}

		.print-pg h2 {
			color: #FFF;
			margin-bottom: 5px;
			background-color: #ca373c;
			width: fit-content;
			padding: 3px 10px !important;
			font-weight: bold;
			font-size: 20spx !important;
			-webkit-print-color-adjust: exact;
		}

		.header-bg {
			padding-top: 30px;
			border-bottom: 4px solid #00a859;
			padding-bottom: 10px;
		}

		.add-print {
			color: #ca373c;
			font-weight: bold;
		}

		/* working */
		.print-pg td {
			border: 1px solid #00a859;
			color: #ca373c;
			font-size: 18px;
			padding: 7px;
		}

		/* working */

		.rasi td,

		.amsam td {
			height: 80px;
		}

		@media print {
			#print {
				display: none;
			}


		}

		@media print {

			.share {

				display: none;

			}
		}

		@media print {
			#pdf {

				display: none;

			}
		}

		@media print {

			table {

				border: 0 !important;

			}

			div {

				border: 0 !important;

			}

			span {

				border: 0 !important;

			}

			strong {

				border: 0 !important;

			}

			i {

				border: 0 !important;

			}

			hr {

				border: 0 !important;

			}

		}
}

	</style>	
<body>

	<div id="wrapper">
	    
	    <div class="social-buttons">
            <a href="#" class="social-button github">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
            </a>
            <a href="#" class="social-button linkedin">
                <svg viewBox="0 -2 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Icons" stroke="none" stroke-width="1">
                        <g transform="translate(-702.000000, -265.000000)">
                            <path d="M746,305 L736.2754,305 L736.2754,290.9384 C736.2754,287.257796 734.754233,284.74515 731.409219,284.74515 C728.850659,284.74515 727.427799,286.440738 726.765522,288.074854 C726.517168,288.661395 726.555974,289.478453 726.555974,290.295511 L726.555974,305 L716.921919,305 C716.921919,305 717.046096,280.091247 716.921919,277.827047 L726.555974,277.827047 L726.555974,282.091631 C727.125118,280.226996 730.203669,277.565794 735.116416,277.565794 C741.21143,277.565794 746,281.474355 746,289.890824 L746,305 L746,305 Z M707.17921,274.428187 L707.117121,274.428187 C704.0127,274.428187 702,272.350964 702,269.717936 C702,267.033681 704.072201,265 707.238711,265 C710.402634,265 712.348071,267.028559 712.41016,269.710252 C712.41016,272.34328 710.402634,274.428187 707.17921,274.428187 L707.17921,274.428187 L707.17921,274.428187 Z M703.109831,277.827047 L711.685795,277.827047 L711.685795,305 L703.109831,305 L703.109831,277.827047 L703.109831,277.827047 Z" id="LinkedIn">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>
            <a href="#" class="social-button facebook">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 310 310" xml:space="preserve">
                <g id="XMLID_834_">
                  <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
                    c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
                    V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
                    C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
                    c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"></path>
                </g>
                </svg>
            </a>
            <a href="#" class="social-button instagram">
                <svg width="800px" height="800px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1">
                        <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
	    
		<div class="headerIMAGE">
			<img src="images/keet.png" style="width: -webkit-fill-available;">
		</div>
		<div id="header-bg">
			<!-- <div>
				<img src="../media/keet.png" style="width: -webkit-fill-available;">
			</div> -->
			<div class="header-bg">
			    
			    <div class="container">

    				<div class="row">
    
    					<div class="col-lg-6">
    						<img src="images/logo-km-tamil.png" alt="Logo" style="width: 100%;" />
    					</div>
    
    					<div class="col-lg-6 text-end">
    						<h1><strong>KETTIMELAM MATRIMONY</strong></h1>
    						<p>No.68 / 20, South West Boag Road, T.Nagar, Chennai - 600 017.</p>
    						<p> <strong> <i class="fas fa-mobile-alt" style="color:#00a960"></i> +91 735 876 8433 &nbsp;<i class="fab fa-whatsapp" style="color:#00a960"></i> +91 733 887 4957 &nbsp;<i class="fas fa-phone-alt" style="color:#00a960"></i> 044 - 4856 0155</strong></p>
    						<p><i class="fas fa-envelope" style="color:#00a960"></i> <span style="font-weight:600">kettimelamcustomercare@gmail.com</span></p>
    						<p><i class="fas fa-globe" style="color:#00a960"></i> <span style="font-weight:600">www.kettimelammatrimony.com</span></p>
    					</div>
    
    				</div>
				
				</div>

			</div>

			<div class="print-pg">
				<div class="container" style="margin:auto;">
					<div class="pdfs justify-content-between align-items-center d-lg-flex" style="margin-top: 10px;">
						<h2 style=" color:#ffffff; margin-bottom:5px;    margin-top: 15px !important;">
						    மணமகன் / மணமகள் தகவல்
						</h2>
						<p style="color: #ca373c;font-size: 19px;">
						    <strong>அடையாள எண் : KM1234</strong>
						</p>
					</div>

					<!--<div class="col-left">-->
					<!--</div>-->
					
					<div class="row">
					    
					    <div class="col-lg-2 d-lg-none">
    						<img id="myImg" src="images/female.png" style="height:auto; border: 4px solid #00a859;margin-top:10px;padding:10px;background:#fff;" />
    					</div>

                        <div style="margin-top: 10px;" class="col-lg-10">
                            
                            <div class="table-responsive">
    
    						    <table width="100%" border="0" cellpadding="6" cellspacing="0">
    							<tr>
    								<td class="t1" style="width:25% !important;">
    									<strong>பெயர்</strong>
    								</td>
    								<td class="t1" style="width:25% !important;"> </td>
    
    								<td class="t1" style="width:25% !important;">
    									<strong>பாலினம்</strong>
    								</td>
    								<td class="t1" style="width:25% !important;"> </td>
    							</tr>
    
    							<tr>
    								<td align="left">
    									<strong>மதம்</strong>
    								</td>
    								<td align="left">
    																	</td>
    								<td align="left">
    									<strong>துணை மதம்</strong>
    								</td>
    								<td align="left">
    																	</td>
    							</tr>
    
    							<tr>
    								<td class="t1">
    									<strong>ஜாதி</strong>
    								</td>
    								<td class="t1">
    																	</td>
    
    								<td width="129" class="t1">
    									<strong>உட்பிரிவு</strong>
    								</td>
    								<td class="t1">
    									
    								</td>
    							</tr>
    
    							<tr>
    								<td class="t1">
    									<strong>சாதி தடையில்லை</strong>
    								</td>
    								<td class="t1">
    									</td>
    
    								<td class="t1">
    									<strong>வசிக்கும் நாடு</strong>
    								</td>
    
    								<td class="t1">
    																	</td>
    							</tr>
    
    							<tr>
    
    								<td class="t1">
    
    									<strong>திருமண நிலை</strong>
    
    								</td>
    
    								<td class="t1">
    
    									
    
    
    								</td>
    
    								<td align="left">
    									<strong>தாய் மொழி</strong>
    								</td>
    
    								<td align="left">
    
    									
    
    
    								</td>
    
    							</tr>
    
    							<tr>
    
    								<td class="t1" style="border-top: 0px;">
    
    									<strong>பிறந்த தேதி / வயது</strong>
    
    								</td>
    
    								<td class="t1" style="border-top: 0px;">
    
    									
    
    								</td>
    
    								<td class="t1" style="border-top: 0px;">
    
    									<strong>கல்வித்தகுதி</strong>
    
    								</td>
    
    								<td class="t1">
    
    									
    
    
    								</td>
    
    							</tr>
    
    							<!--<tr>-->
    
    							<!--	<td class="t1">-->
    
    							<!--		<strong>தொழில்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td class="t1">-->
    
    									
    
    
    							<!--	</td>-->
    
    							<!--	<td class="t1" style="border-top: 0px;">-->
    
    							<!--		<strong>தொழில் / வேலை விவரம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td class="t1" style="border-top: 0px;">-->
    
    									
    
    
    							<!--	</td>-->
    
    							<!--</tr>-->
    
    							<!--<tr>-->
    
    							<!--	<td align="left">-->
    
    							<!--		<strong>வேலை விவரம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    									
    
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    							<!--		<strong>மாத வருமானம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    
    							<!--	</td>-->
    
    							<!--</tr>-->
    
    							<!--<tr>-->
    
    							<!--	<td align="left">-->
    
    							<!--		<strong>சொத்து விபரம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left" colspan="3">-->
    
    							<!--	</td>-->
    
    							<!--</tr>-->
    
    							<!--<tr>-->
    
    							<!--	<td class="t1">-->
    							<!--		<strong>உயரம்</strong>-->
    							<!--	</td>-->
    
    							<!--	<td class="t1">-->
    
    									
    									
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    							<!--		<strong>நிறம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td class="t1">-->
    									
    									
    							<!--	</td>-->
    
    
    
    							<!--</tr>-->
    
    							<!--<tr>-->
    
    							<!--	<td align="left">-->
    
    							<!--		<strong>உணவு பழக்கம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    									
    
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    							<!--		<strong>உடலமைப்பு</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    									
    
    
    
    							<!--	</td>-->
    
    							<!--</tr>-->
    
    							<!--<tr>-->
    
    							<!--	<td align="left">-->
    
    							<!--		<strong>சொந்த ஊர்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    									
    
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    							<!--		<strong>குல தெய்வம்</strong>-->
    
    							<!--	</td>-->
    
    							<!--	<td align="left">-->
    
    									
    
    
    							<!--	</td>-->
    
    							<!--</tr>-->
    
    						</table>
    						
    						</div>
    
    					</div>
    					
    					<div class="col-lg-2" id="right-pic" style="align-self: center;">
    						<img id="myImg" src="images/female.png" style="height:auto; border: 4px solid #00a859;margin-top:10px;padding:10px;background:#fff;" />
    					</div>
					
					</div>
					
					<div class="row">
     <div class="table-responsive" style="margin-top:30px">
        <table width="100%" border="0" cellpadding="5" cellspacing="0" style="font-size:13px" bgcolor="#fdf278">
							<tbody>
							    <tr>
								<td class="t1" style="width:25% !important;">
									<strong>தொழில்</strong>
								</td>
								<td class="t1" style="width:25% !important;">
									
								</td>
								<td align="left" style="width:25% !important;">
									<strong>தொழில் / வேலை விவரம்</strong>
								</td>
								<td align="left" style="width:25% !important;">
									
								</td>
							</tr>
							<tr>
								<td class="t1">
									<strong>வேலை விவரம்</strong>
								</td>
								<td class="t1">
									
								</td>
								<td align="left">
									<strong>மாத வருமானம்</strong>
								</td>
								<td align="left">
									
								</td>
							</tr>
														
															<!-- new With Address Start -->
															

									<tr>
										<td align="left">
											<strong>உயரம்</strong>
										</td>
										<td align="left">
											
										</td>
										<td class="t1">
											<strong>நிறம்</strong>
										</td>
										<td class="t1">
											
										</td>
									</tr>
									<tr>
										<td align="left">
											<strong>உணவு பழக்கம்</strong>
										</td>
										<td align="left">
											
										</td>
										<td align="left">
											<strong>உடலமைப்பு</strong>
										</td>
										<td align="left">
											
										</td>
									</tr>
										<tr>
										<td align="left">
											<strong>சொந்த ஊர்</strong>
										</td>
										<td align="left">
											
										</td>
										<td align="left">
											<strong>குல தெய்வம்</strong>
										</td>
										<td align="left">
											
										</td>
									</tr>
											<tr>
										<td class="t1">
											<strong>சொத்து விபரம்</strong>
										</td>
										<td class="t1" colspan="3">

										</td>
									</tr>
						</tbody></table>
    </div>
</div>

					<div style="margin-top:30px" class="table-responsive">

						<table width="100%" border="0" cellpadding="6" cellspacing="0">

							<tr>
								<td class="t1" style="width:15% !important;">
									<strong>பிறப்பின் வரிசை</strong>
								</td>
								<td class="t1" style="width:7% !important;"> </td>

								<td class="t1" style="width:7% !important;">
									<strong>அக்கா</strong>
								</td>
								<td class="t1" style="width:7% !important;">
									<strong>அண்ணன்</strong>
								</td>
								<td class="t1" style="width:7% !important;">
									<strong>தங்கை</strong>
								</td>
								<td class="t1" style="width:7% !important;">
									<strong>தம்பி</strong>
								</td>
								<td class="t1" rowspan="3" style="vertical-align:baseline;">
									<strong>எதிர்பார்ப்பு:</strong>
								</td>
							</tr>

							<tr>
								<td class="t1">
									<strong>மணமானவர்</strong>
								</td>
								<td class="t1"> </td>
								<td class="t1"> </td>
								<td class="t1"> </td>
								<td class="t1"> </td>
								<td class="t1"> </td>
							</tr>

							<tr>
								<td class="t1">
									<strong>மணமாகாதவர்</strong>
								</td>
								<td class="t1"> </td>
								<td class="t1"> </td>
								<td class="t1"> </td>
								<td class="t1"> </td>
								<td class="t1"> </td>
							</tr>

						</table>

					</div>

					
					<div class="contact">

						<div class="pdfs" style="margin-top:-5px;">
							<h2 class="pdfs" style="color: #ffffff; margin-bottom: 10px;    margin-top: 24px !important;">
								தொடர்பு கொள்ள
							</h2>
						</div>

						<table width="100%" border="0" cellpadding="5" cellspacing="0" style="font-size:13px" bgcolor="#fdf278">
							<tr>
								<td class="t1" style="width:25% !important;">
									<strong>தந்தை பெயர்</strong>
								</td>
								<td class="t1" style="width:25% !important;">
									
								</td>
								<td align="left" style="width:25% !important;">
									<strong>தந்தையின் தொழில் / வேலை</strong>
								</td>
								<td align="left" style="width:25% !important;">
									
								</td>
							</tr>
							<tr>
								<td class="t1">
									<strong>தாயின் பெயர்</strong>
								</td>
								<td class="t1">
									
								</td>
								<td align="left">
									<strong>தாயின் தொழில் / வேலை</strong>
								</td>
								<td align="left">
									
								</td>
							</tr>
							

									<tr>
										<td align="left">
											<strong>செல்</strong>
										</td>
										<td align="left">
											
										</td>
										<td class="t1">
											<strong>வாட்ஸ் ஆப்</strong>
										</td>
										<td class="t1">
											
										</td>
									</tr>
									<tr>
										<td align="left">
											<strong>தொலைபேசி</strong>
										</td>
										<td align="left">
											
										</td>
										<td align="left">
											<strong>மின்னஞ்சல்</strong>
										</td>
										<td align="left">
											
										</td>
									</tr>
									<tr>
										<td class="t1">
											<strong>முகவரி</strong>
										</td>
										<td class="t1" colspan="3">

										</td>
									</tr>
						</table>

					</div>

					<div class="horo">

						<div class="pdfs" style="margin-top:-10px;">
							<h2 style=" color:#ffffff; margin-bottom:5px;    margin-top: 24px !important;">
								ஜாதக விவரம்
							</h2>

						</div>
						
						<div class="table-responsive">

						    <table width="100%" border="0" cellpadding="5" cellspacing="0" style="font-size:13px" bgcolor="#fdf278">

							<tr>

								<td class="t1" style="width:20% !important;">

									<strong>பிறந்த தேதி</strong>

								</td>

								<td class="t1" style="width:20% !important;">

									


								</td>

								<td align="left" style="width:20% !important;">

									<strong>பிறந்த கிழமை</strong>

								</td>

								<td align="left" colspan="2" style="width:40% !important;">

									


								</td>

							</tr>

							<tr>

								<td class="t1">

									<strong>பிறந்த நேரம் ( AM / PM )</strong>

								</td>

								<td class="t1">

									


								</td>

								<td class="t1">

									<strong>பிறந்த இடம்</strong>

								</td>

								<td class="t1" colspan="2">

									


								</td>

							</tr>

							<tr>

								<td class="t1">

									<strong>நட்சத்திரம்</strong>

								</td>

								<td class="t1">

									


								</td>

								<td class="t1">

									<strong>பாதம்</strong>

								</td>

								<td class="t1" colspan="2">

									


								</td>

							</tr>

							<tr>

								<td class="t1">

									<strong>ராசி</strong>

								</td>

								<td class="t1">

									


								</td>

								<td class="t1">

									<strong>லக்னம்</strong>

								</td>

								<td class="t1" colspan="2">

									


								</td>

							</tr>

							<tr>

								<td class="t1">

									<strong>கோத்திரம்</strong>

								</td>

								<td class="t1">

									


								</td>

								<td class="t1">

									<strong>தோஷம் விவரம்</strong>

								</td>

								<td class="t1" colspan="2">

									


								</td>

							</tr>

							<tr>

								<td class="t1">

									<strong>திசை இருப்பு</strong>

								</td>

								<td class="t1">

									கிரகம்


								</td>

								<td class="t1">

									<strong>வருடம்</strong>

								</td>

								<td class="t1">

									மாதம்


								</td>

								<td class="t1">

									நாள்


								</td>

							</tr>

						</table>

                        </div>
                        
					</div>

					<br />

					<br>
					<div class="row">

						<div class="col-lg-6">

							<table cellspacing="0" border="1" style=" width:100%; height:300px;margin-bottom:20px;text-align:center">

								<tbody>

									<tr>

										<td width="25%">

											சூரி
										</td>

										<td width="25%">

											சந்
										</td>

										<td width="25%">

											செ
										</td>

										<td width="25%">

											கேது
										</td>

									</tr>

									<tr>

										<td>

											மா
										</td>

										<td colspan="2" rowspan="2" align="center" style="vertical-align:middle;">

											<h3 class="nomargin">ராசி</h3>

										</td>

										<td>

											சுக்
										</td>

									</tr>

									<tr>

										<td>

											பு
										</td>

										<td>

											செ
										</td>

									</tr>

									<tr>

										<td>

											லக்
										</td>

										<td>

											ராகு
										</td>

										<td>

											சூரி
										</td>

										<td>

											சுக்
										</td>

									</tr>

								</tbody>

							</table>

						</div>

						
						<div class="col-lg-6">

							<table cellspacing="0" align="right" border="1" style="width:100%; height:300px;margin-bottom:20px;text-align:center">

								<tbody>

									<tr>

										<td>

											லக்
										</td>

										<td>

											சந்
										</td>

										<td>

											செ
										</td>

										<td>

											பு
										</td>

									</tr>

									<tr>

										<td>

											
										</td>

										<td colspan="2" rowspan="2" align="center" style="vertical-align:middle;">

											<h3 class="nomargin">அம்சம்</h3>

										</td>

										<td>

											-
										</td>

									</tr>

									<tr>

										<td>

											சனி
										</td>

										<td>

											குரு
										</td>

									</tr>

									<tr>

										<td>

											மா

										<td>

											சந்
										</td>

										<td>

											சூரி
										</td>

										<td>

											சந்
										</td>

									</tr>

								</tbody>

							</table>

						</div>

					</div>

					<div class="print-para">
                        <p>1.English with Address and Contact Number</p>
                    </div>
					</form>

					
					<div id="add3" style="width:700px!important;display:none;">

						<div style="float:right; top:0;" class="popup-close"><a href="javascript:void(0);" onclick="closes()">
								<!-- <i class="fa fa-times-circle" aria-hidden="true"></i> --><img src="https://www.kettimelammatrimony.com/images/close.png" width="24" height="24" border="0" />
							</a></div>

						
							<script>
								function forward_change(str)

								{

									if (str == 'Email')

									{

										$("#forward_display").html('');

										$("#forward_display").html('Email ID');

									} else

									{

										$("#forward_display").html('');

										$("#forward_display").html('WhatsApp No');

									}

								}
							</script>

							<div id="register_box">

								<h2 style="text-align: left; margin: 10px; letter-spacing: 2px; color: #ffffff; font-style: italic;">Forward </h2>

								<form id="pdf" name="form1" method="post" action="makepdf.php">

									<table class="popup" width="80%" border="0" align="center" cellpadding="3" cellspacing="2">

										
										<input type="radio" name="forward_type" id="forward_type2" class="regular-radio" value="Email" onChange="forward_change(this.value);" />


										<label for="forward_type2" style="display:none;"></label><span class="normal_black" style="display:none;">Email</span>

										<tr>
											<td style="border: none !important; text-align: left; border: none !important; text-align: left; padding-left: 25%; font-size: 14px; font-weight: 600; color: #fcf052;" class="white"><strong><span id="forward_display">
														<!--Mobile No--> Email ID :
													</span></strong></td>
										</tr>
										<tr>

											<td style="border: none !important;"><label for="textfield"></label>

												
												<input type="hidden" name="url" value="" id="url">
												<input type="hidden" name="user" value="Z293dGhhbTAx" id="">

												<input name="textfield" type="hidden" id="textfield" size="30" value="https://www.kettimelammatrimony.com/print_english_admin.php?user=Z293dGhhbTAx&printCon=WAddress&f_id=" />

												<input name="email" type="text" id="email" size="30" required class="form-control" style="width: 50% !important;margin-left: 24%;" value="gowthamcomputer28@gmail.com" />

											</td>

										</tr>

										<tr>

											<td style="border: none !important;">
												<input type="submit" name="forward" id="forward" style="border-radius: 7px !important;" value="Send" onClick="emailforward(1)" class="btn" />
											</td>

										</tr>

										<tr>

											<td style="border: none !important;color: #fff;text-align: left; " colspan="2" class="white">

												<div id="forward_box">You can Forward the URL to refered some one</div>

											</td>

										</tr>

									</table>

								</form>

							</div>

						
					</div>


					<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5fedc1e94c4dcc0018f14282&product=sticky-share-buttons" async="async"></script>
					<div id="add11" style="display:none;">
						<div style="float:right; top:0;" class="popup-close"><a href="javascript:void(0);" onclick="closes()"><img src="https://www.kettimelammatrimony.com/images/close.png" width="20" height="20" border="0" class="topclose" /></a> </div>
						<div id="register_box">
							<h3 class="black_h3" style="text-align:left; margin:10px;">Forward</h3>
							<p class="normal_black">
								Kindly Upgrade Your Membership For this Feature<br /></p>
							<p class="" style="padding-top:47px">
								<center><a href="https://www.kettimelammatrimony.com/package.php" class="top-download" style="float: none;">Upgrade/Buy Membership
									</a></center> <br />
						</div>
					</div>

					<!-- print button -->
					<div id="print" style="text-align:center; padding: 33px 0 0 0;">

						<!-- <td><button onclick="window.print()">Print</button></td> -->

						<td><button id="download" class="btn">Print</button></td>
						<!-- <form id="pdf" name="form1" method="post" action="makepdf.php">
							<input type="hidden" name="type" value="down" id="">
							<input type="submit" name="download" id="download" value="Download" class="btn" />
						</form> -->
					</div>


					<a style="padding-bottom:20px;" id="pdf" href="javascript:void(0);" class="doc" onClick="comment3()">Send PDF to Mail</a>

										<script>
						$("#download").click(function() {
							// alert('');
							$.ajax({
								url: "makepdf.php",
								type: 'POST',
								data: {
									url: 'https://www.kettimelammatrimony.com/print_english_admin.php?user=Z293dGhhbTAx&printCon=WAddress&f_id=&pdf=yes',
									type: 'down',
									user: 'Z293dGhhbTAx',

								},
								// success: function(response) {
								success: function(response) {
									// alert(response);
									var url = 'https://kettimelammatrimony.com/' + response.trim();

									//  alert(response);
									window.open(url, '_blank');

								}
							});

						});
					</script>

					<!--<a class="share" href=""header-bg

      	 				 data-action="share/whatsapp/share"

       						 target="_blank" onclick="openWhatsApp()">

        					Share to whatsapp

   				 </a> -->

					<!--

					<form id="pdf" method="post" action="makepdf.php">

				<input type="hidden" name="url" value="" id="url">

				<input  type="submit" value="Send pdf to mail" style="width:136px!important;">

						</form> -->

					<script>
						var url1 = location.href;

						var url2 = url1 + "&pdf=yes";

						$("#url").val(url2);
					</script>

				</div>

			</div>

		</div>
		<div class="footerIMAGE">
			<img src="images/ketti-footer.png" style="width: -webkit-fill-available;">
		</div>
	</div>

	</div>



	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"> </script>

	<script type="text/javascript">
		// Function to share on whatsapp

		function share() {

			// Getting user input

			var message = $("input[name=message]").val();

			// Opening URL

			window.open(

				"whatsapp://send?text=" + message,

				// This is what makes it

				// open in a new window.

				'_blank'

			);

		}
	</script>

	<script type="text/javascript">
		function PrintDiv() {
			window.print();
		}
	</script>



</body>

    <!-------------- Breadcrumb -------------    -->






    <!--------------- Footer --------------->

    <!--@include('include.footer')-->

  <!--------------- Footer ---------------->
