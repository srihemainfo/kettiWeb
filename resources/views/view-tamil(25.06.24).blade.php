

<style>

.wrap {
    width: 1159px;
    margin: 0 auto;
}
.btn {
    background-color: #a00800;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    font-size: 20px;
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

		.col-left {
			width: 78%;
			float: left;
		}

		.col-right {

			width: 20%;

			float: right;

		}

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

			.col-right,
			.col-left {
				width: 100%;
				float: none;
				margin-bottom: 16px;
			}

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
			border: 5px solid #00a859;
			/* border: 5px solid #ca373c; */

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
			font-size: 17px;
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

        @media (min-width: 1200px) {
    .container {
        width: 1170px;
    }
}
	</style>	
<body>

	<div id="wrapper">
		<div class="headerIMAGE">
			<img src="images/keet.png" style="width: -webkit-fill-available;">
		</div>
		<div id="header-bg">
			<!-- <div>
				<img src="../media/keet.png" style="width: -webkit-fill-available;">
			</div> -->
			<div class="header-bg">

				<div class="wrap">

					<div class="logo">
						<img src="images/logo.png" alt="Logo" style="width: 237px; padding-bottom: 2px;" />
						<br>
						<span style="font-size: 17px; color: #ca373c;font-weight: 600; padding-bottom: 2px;">
							<strong><i class="fa">&#xf041;</i> : </strong>
							68 / 20, South West Boag Road,<br>
							T.Nagar, Chennai - 600 017. <br>
						</span>
					</div>

					<!-- <div class="addTitle" style="margin: 2% 0% 0% 62%; margin-top:-106px;color: #000;float: right;"> -->
					<div class="addTitle" style="margin: 2% 0% 0% 62%; margin-top:-106px;color: #000;float: right;">

						<span style="font-size: 17px;color: #ca373c;font-weight: 600;" class="phonediv"><strong class="phonediv"><i class="fa">&#xf10b;</i><span style='padding-left:3px;'>
									: </span></strong>+91 735 876 8433</span><br />
						<span style="font-size: 17px;color: #ca373c;font-weight: 600;"><strong><i class="fa">&#xf232;</i> <span style='padding-left:3px;'> : </span></strong>+91 733 887 4957</span><br />
						<span style="font-size: 17px;color: #ca373c;font-weight: 600;"><strong><i class="fa">&#xf095;</i> <span style='padding-left:3px;'> : </span></strong>044 - 4856 0155</span>
						<!--4856 0155 / --><br />
						<span style="font-size: 17px;color: #ca373c;font-weight: 600;"><strong><i class="fa">&#xf0e0;</i> <span style='padding-left:3px;'> : </span> </strong>kettimelamcustomercare@gmail.com</span><br />
						<span style="font-size: 17px;color: #ca373c;font-weight: 600;"><strong><i class="fa">&#xf0ac;</i> <span style='padding-left:3px;'> : </span></strong>www.kettimelammatrimony.com</span>
					</div>

				</div>

			</div>

			<div class="print-pg">
				<div class="container" style="margin:auto;">
					<div class="pdfs" style="margin-top: 10px;">
						<h2 style=" color:#ffffff; margin-bottom:5px;    margin-top: 15px !important;">
							<i class="fa fa-pencil-square-o"></i> மணமகன் / மணமகள் தகவல்
						</h2>
					</div>

					<div class="col-left">
					</div>

					
					<div oncontextmenu="return false;" class="col-right">
												<img id="myImg" src="https://www.kettimelammatrimony.com/user-photo/medium/1695196727_20201124_BUD004.jpg" width="218" height="125" style="height:160px; border: 5px solid #00a859; margin: -33px 0 0 0;" />
					</div>

					<div class="clearfix "></div>

					<br>

					<div style="margin-top: -13px;">

						<table width="100%" border="0" cellpadding="6" cellspacing="0">
							<tr>
								<td class="t1">
									<strong>பெயர்</strong>
								</td>
								<td class="t1">
																	</td>

								<td class="t1">
									<strong>பாலினம்</strong>
								</td>
								<td class="t1">								</td>
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

							<tr>

								<td class="t1">

									<strong>தொழில்</strong>

								</td>

								<td class="t1">

									


								</td>

								<td class="t1" style="border-top: 0px;">

									<strong>தொழில் / வேலை விவரம்</strong>

								</td>

								<td class="t1" style="border-top: 0px;">

									


								</td>

							</tr>

							<tr>

								<td align="left">

									<strong>வேலை விவரம்</strong>

								</td>

								<td align="left">

									


								</td>

								<td align="left">

									<strong>மாத வருமானம்</strong>

								</td>

								<td align="left">


								</td>

							</tr>

							<tr>

								<td align="left">

									<strong>சொத்து விபரம்</strong>

								</td>

								<td align="left">

									


								</td>

							</tr>

							<tr>

								<td class="t1">
									<strong>உயரம்</strong>
								</td>

								<td class="t1">

									
									
								</td>

								<td align="left">
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

						</table>

					</div>

					<div>

						<table width="100%" border="0" cellpadding="6" cellspacing="0">

							<tr>
								<td class="t1">
									<strong>பிறப்பின் வரிசை</strong>
								</td>
								<td class="t1"> </td>

								<td class="t1">
									<strong>அக்கா</strong>
								</td>
								<td class="t1">
									<strong>அண்ணன்</strong>
								</td>
								<td class="t1">
									<strong>தங்கை</strong>
								</td>
								<td class="t1">
									<strong>தம்பி</strong>
								</td>
								<td class="t1">
									<strong>எதிர்பார்ப்பு</strong>
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
								<td class="t1"> </td>
							</tr>

						</table>

					</div>

					
					<div class="contact">

						<div class="pdfs" style="margin-top:-5px;">
							<h2 class="pdfs" style="color: #ffffff; margin-bottom: 10px;    margin-top: 24px !important;">
								<i class="fa fa-pencil-square-o"></i>தொடர்பு கொள்ள
							</h2>
						</div>

						<table width="100%" border="0" cellpadding="5" cellspacing="0" style="font-size:13px" bgcolor="#fdf278">
							<tr>
								<td class="t1">
									<strong>தந்தை பெயர்</strong>
								</td>
								<td class="t1">
									
								</td>
								<td align="left">
									<strong>தந்தையின் தொழில் / வேலை</strong>
								</td>
								<td align="left">
									
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
														
															<!-- new With Address Start -->
																	<tr>
										<td class="t1">
											<strong>முகவரி</strong>
										</td>
										<td class="t1" colspan="3">

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
									<!-- <tr>
										<td align="left">
											<strong>Pincode</strong>
										</td>
										<td align="left">
											216542
										</td>

										<td width="147" align="left">
											<strong>Proof of Identity</strong>
										</td>
										<td width="597" align="left">
											Driving
										</td>
									</tr> -->
									<!-- changed 17-03-2022 -->
									<!-- <tr>
										<td class="t1">
											<strong>Mobile No</strong>
										</td>
										<td class="t1">
											8610698874
										</td>
										<td align="left">
											<strong>Whatsapp No</strong>
										</td>
										<td align="left">
											8124105331
										</td>
									</tr> -->
									<!-- <tr>
										<td align="left">
											<strong>Phone No</strong>
										</td>
										<td align="left">
											-
										</td>
										<td align="left">
											<strong>Email Id</strong>
										</td>
										<td align="left">
											gowthamcomputer28@gmail.com
										</td>
									</tr> -->
									<!-- changed 17-03-2022 -->
																<!-- new with address end -->

														
							<!--  -->

							
							
						</table>

					</div>

					<div class="horo">

						<div class="pdfs" style="margin-top:-10px;">
							<h2 style=" color:#ffffff; margin-bottom:5px;    margin-top: 24px !important;">
								<i class="fa fa-pencil-square-o"></i> ஜாதக விவரம்
							</h2>

						</div>

						<table width="100%" border="0" cellpadding="5" cellspacing="0" style="font-size:13px" bgcolor="#fdf278">

							<tr>

								<td class="t1">

									<strong>பிறந்த தேதி</strong>

								</td>

								<td class="t1">

									


								</td>

								<td align="left">

									<strong>பிறந்த கிழமை</strong>

								</td>

								<td align="left" colspan="2">

									


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

					<br />

					<br>
					<div class="horoNew" style="margin-top:-10px;">

						<div class="rasi" style="float: left;width: 50%;">

							<table cellspacing="0" border="1" style=" width:90%; height:100px;">

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

						
						<div class="amsam" style="float: right;width: 50%;">

							<table cellspacing="0" align="right" border="1" style="width:90%; height:100px;">

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

					<div class="clearfix"></div>
                    <p style="font-size:20px;">1.English with Address and Contact Number</p>
                    <p style="font-size:20px;">2.English with Contact Number</p>
                    <p style="font-size:20px;">3.English without Address and Contact Number</p>
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
