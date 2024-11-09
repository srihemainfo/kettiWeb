<!DOCTYPE html>
<html>
<head>
    <title>PDF Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        /* Define custom styles here if needed */

        @page {
            margin:0;
        }

        @font-face {
            font-family: 'Latha';
            src: url('{{ storage_path('fonts/Latha.ttf') }}') format('truetype');
        }

        .tamil-font {
            font-family: 'Latha', sans-serif;
            font-size: 8px;
        }

        body {
            font-family: sans-serif;
            background:#fdf278;
            font-size:12px;
            color:#ca373c;
        }
        h2 {
            background-color: #ca373c;
            color:#fff;
            display:inline-block;
            padding: 3px 7px;
            margin:10px;
        }
        .header {
            width: 100%;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 10px 0;
            background-color: #fdf278;
        }
        .content {
            margin-top: 75px;
            padding: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #00a859;
            padding: 2px;
            text-align: left;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="https://laravel.kettimelammatrimony.com/images/header-pdf.png" style="width:650px;height:90px;">
    </div>

    <div class="content">

        <div style="width:100%;">

            <h2>Bride / Groom Information</h2>
            <table>
                <tr style="width:100%;">
                    <td style="width:90%">
                        <table class="table">
                            <tr>
                                <td class="t1" style="width:25% !important;">
                                    <strong>Name</strong>
                                </td>
                                <td class="t1" style="width:25% !important;"><b>Gowtham</b></td>

                                <td class="t1" style="width:25% !important;">
                                    <strong>Gender</strong>
                                </td>
                                <td class="t1" style="width:25% !important;"><b>Male</b></td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <strong>Religion / Sub Religion</strong>
                                </td>
                                <td align="left"><b>Hindu</b></td>
                                <td align="left">
                                    <strong>Caste No Bar</strong>
                                </td>
                                <td align="left"><b>Yes</b></td>
                            </tr>

                            <tr>
                                <td class="t1">
                                    <strong>Caste</strong>
                                </td>
                                <td class="t1"><b>Viswakarma</b></td>

                                <td width="129" class="t1">
                                    <strong>Sub Caste</strong>
                                </td>
                                <td class="t1"><b>-</b></td>
                            </tr>

                            <tr>
                                <td class="t1">
                                    <strong> Marital Status</strong>
                                </td>
                                <td class="t1"><b>Unmarried</b></td>

                                <td class="t1">
                                    <strong> Mother Tongue</strong>
                                </td>

                                <td class="t1"><b>Tamil</b></td>
                            </tr>

                            <tr>

                                <td class="t1">

                                    <strong> Date of Birth </strong>

                                </td>

                                <td class="t1"><b>26.08.1995</b></td>

                                <td align="left">
                                    <strong>Age</strong>
                                </td>

                                <td align="left"><b>29 Years</b></td>

                            </tr>

                            <tr>

                                <td class="t1" style="border-top: 0px;">

                                    <strong>Education</strong>

                                </td>

                                <td class="t1" style="border-top: 0px;"><b>BE/B.Tech - CSE</b></td>

                                <td class="t1" style="border-top: 0px;">

                                    <strong>Occupation</strong>

                                </td>

                                <td class="t1"><b>Software Engineer</b></td>

                            </tr>

                        </table>
                    </td>
                    <td style="width:10%;">
                        <img src="https://laravel.kettimelammatrimony.com/images/female.png" style="width:130px;border: 2px solid #00a859;background:#fff;">
                    </td>
                </tr>
            </table>

            <table class="table" style="margin-bottom:5px;">
                <tbody>
                    <tr>
                        <td class="t1" style="width:25% !important;">
                            <strong>Monthly Income</strong>
                        </td>
                        <td class="t1" style="width:25% !important;"><b>15,000 To 20,000</b></td>
                        <td align="left" style="width:25% !important;">
                            <strong>Employed / Occupation Details</strong>
                        </td>
                        <td align="left" style="width:25% !important;"><b>Private</b></td>
                    </tr>
                    <tr>
                        <td class="t1">
                            <strong>Property Details</strong>
                        </td>
                        <td class="t1"><b>-</b></td>
                        <td align="left">
                            <strong> Employed in</strong>
                        </td>
                        <td align="left"><b>Sri Hema Infotech</b></td>
                    </tr>
                    <tr>
                        <td align="left">
                            <strong>Blood Group</strong>
                        </td>
                        <td align="left"><b>A +ve</b></td>
                        <td class="t1">
                            <strong>Country Living in</strong>
                        </td>
                        <td class="t1"><b>India</b></td>
                    </tr>
                    <tr>
                        <td align="left">
                            <strong> Complexion</strong>
                        </td>
                        <td align="left"><b>-</b></td>
                        <td align="left">
                            <strong>Eating Habits</strong>
                        </td>
                        <td align="left"><b>Non-Veg</b></td>
                    </tr>
                        <tr>
                        <td align="left">
                            <strong> Height</strong>
                        </td>
                        <td align="left"><b>7 Feet 213 cm</b></td>
                        <td align="left">
                            <strong> Physical Status</strong>
                        </td>
                        <td align="left"><b>Average</b></td>
                    </tr>
                    <tr>
                        <td align="left">
                            <strong> Body Type</strong>
                        </td>
                        <td align="left"><b>-</b></td>
                        <td align="left">
                            <strong> Weight</strong>
                        </td>
                        <td align="left"><b>65 KG</b></td>
                    </tr>
                            <tr>
                        <td class="t1">
                            <strong> Expectation:</strong>

                        </td>
                        <td class="t1" colspan="3"><b>-</b></td>
                    </tr>
                </tbody>
            </table>

            <table class="table">
                <tr>
                    <td class="t1" style="width:15% !important;">
                        <strong> Birth Order</strong>
                    </td>
                    <td class="t1" style="width:7% !important;"></td>

                    <td class="t1" style="width:7% !important;">
                        <strong>Elder Sisters</strong>
                    </td>
                    <td class="t1" style="width:7% !important;">
                        <strong>Elder Brothers</strong>
                    </td>
                    <td class="t1" style="width:7% !important;">
                        <strong>Younger Sisters</strong>
                    </td>
                    <td class="t1" style="width:7% !important;">
                        <strong>Younger Brothers</strong>
                    </td>
                    <td class="t1" rowspan="3" style="vertical-align:baseline;">
                        <strong>Expectations:</strong>
                        <p style="font-size: 12px;">In the midst of a bustling city, where towering
                            skyscrapers reached towards the sky and neon lights painted the night,
                            a small café nestled in a quiet alley offered solace. The aroma of freshly
                            brewed coffee mingled with the sweet scent of pastries, inviting passersby
                            to step inside. Soft jazz music played in the background, creating a soothing
                            ambiance. Patrons, lost in their books or deep in conversation, found a temporary
                            escape from the chaos outside.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td class="t1">
                        <strong>Married</strong>
                    </td>
                    <td class="t1"><b>0</b></td>
                    <td class="t1"><b>0</b></td>
                    <td class="t1"><b>0</b></td>
                    <td class="t1"><b>0</b></td>
                    <td class="t1"><b>0</b></td>
                </tr>

                <tr>
                    <td class="t1">
                        <strong>Unmarried</strong>
                    </td>
                    <td class="t1"><b>1</b></td>
                    <td class="t1"><b>-</b></td>
                    <td class="t1"><b>1</b></td>
                    <td class="t1"><b>-</b></td>
                    <td class="t1"><b>-</b></td>
                </tr>

            </table>

            <h2>Contact Information</h2>
            <table class="table">
                <tr>
                    <td class="t1" style="width:25% !important;">
                        <strong> Father’s Name</strong>
                    </td>
                    <td class="t1" style="width:25% !important;"><b>Murugan</b></td>
                    <td align="left" style="width:25% !important;">
                        <strong> Father’s Occupation</strong>
                    </td>
                    <td align="left" style="width:25% !important;"><b>Business</b></td>
                </tr>
                <tr>
                    <td class="t1">
                        <strong>Mother’s Name</strong>
                    </td>
                    <td class="t1"><b>Mageshwari</b></td>
                    <td align="left">
                        <strong>Mother’s Occupation</strong>
                    </td>
                    <td align="left"><b>Home Maker</b></td>
                </tr>
                <tr>
                    <td align="left">
                        <strong>Country</strong>
                    </td>
                    <td align="left"><b>India</b></td>
                    <td class="t1">
                        <strong> State</strong>
                    </td>
                    <td class="t1"><b>Tamil Nadu</b></td>
                </tr>
                <tr>
                    <td align="left">
                        <strong>District</strong>
                    </td>
                    <td align="left"><b>Kallakurichi</b></td>
                    <td align="left">
                        <strong>Taluk</strong>
                    </td>
                    <td align="left"><b>Thirukoilure</b></td>
                </tr>
                <tr>
                    <td align="left">
                        <strong>Pincode</strong>
                    </td>
                    <td align="left"><b>605757</b></td>
                    <td align="left">
                        <strong>Proof of Identity</strong>
                    </td>
                    <td align="left"><b>Aadhar</b></td>
                </tr>
                <tr>
                    <td align="left">
                        <strong>Mobile No</strong>
                    </td>
                    <td align="left"><b>6379163256</b></td>
                    <td align="left">
                        <strong>Whatsapp No</strong>
                    </td>
                    <td align="left"><b>6379163256</b></td>
                </tr>
                <tr>
                    <td align="left">
                        <strong>Phone No</strong>
                    </td>
                    <td align="left"><b>-</b></td>
                    <td align="left">
                        <strong>Email Id</strong>
                    </td>
                    <td align="left"><b>design@cwd.co.in</b></td>
                </tr>
                <tr>
                    <td class="t1">
                        <strong>Address</strong>
                    </td>
                    <td class="t1" colspan="3"><b>Esse labore et aut Voluptatem Occaecat Necessitatibus dolor</b></td>
                </tr>
            </table>

            <h2>Horoscope Information</h2>
            <table class="table">

                <tr>

                    <td class="t1" style="width:20% !important;">

                        <strong>Date of Birth</strong>

                    </td>

                    <td class="t1" style="width:20% !important;"><strong>23.06.1995 / 29</strong>

                    </td>

                    <td align="left" style="width:20% !important;">

                        <strong>Time of Birth</strong>

                    </td>

                    <td align="left" colspan="2" style="width:40% !important;">

                        <strong>11.AM</strong>


                    </td>

                </tr>

                <tr>

                    <td class="t1">

                        <strong>Birth Day</strong>

                    </td>

                    <td class="t1">

                        <strong>Monday</strong>


                    </td>

                    <td class="t1">

                        <strong>Place of Birth</strong>

                    </td>

                    <td class="t1" colspan="2">
                        <strong>Trichy</strong>
                    </td>

                </tr>

                <tr>

                    <td class="t1">

                        <strong>Native Place</strong>

                    </td>

                    <td class="t1">
                        <strong>Trichy</strong>
                    </td>

                    <td class="t1">

                        <strong>Gothram</strong>

                    </td>

                    <td class="t1" colspan="2">

                        <strong>Shiva</strong>


                    </td>

                </tr>

                <tr>

                    <td class="t1">

                        <strong>Star</strong>

                    </td>

                    <td class="t1">

                        <Strong>Ashwini</Strong>


                    </td>

                    <td class="t1">

                        <strong>Rasi</strong>

                    </td>

                    <td class="t1" colspan="2">

                        <strong>Cancer</strong>


                    </td>

                </tr>

                <tr>

                    <td class="t1">

                        <strong>Laknam</strong>

                    </td>

                    <td class="t1">
                        <strong>Thulam</strong>



                    </td>

                    <td class="t1">

                        <strong>Dosham </strong>

                    </td>

                    <td class="t1" colspan="2">

                        <strong>-</strong>


                    </td>

                </tr>

                <tr>

                    <td class="t1">

                        <strong>Dasa Balance</strong>

                    </td>

                    <td class="t1">

                        <strong>Planet - RAGHU</strong>


                    </td>

                    <td class="t1">

                        <strong>14 Year</strong>

                    </td>

                    <td class="t1">

                        <strong>11 Month</strong>


                    </td>

                    <td class="t1">

                        <strong>2 Days</strong>


                    </td>

                </tr>

            </table>

            <table style="width:100%;" class="tamil-font">
                <tr>
                    <td>
                        <table class="table">

                            <tbody>

                                <tr>

                                    <td width="25%" style="text-align:center;">சூரி</td>

                                    <td width="25%" style="text-align:center;">

                                    சந்
                                    </td>

                                    <td width="25%" style="text-align:center;">
                                    செ

                                    </td>

                                    <td width="25%" style="text-align:center;">
                                        கேது

                                    </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center;">

                                        மா
                                    </td>

                                    <td colspan="2" rowspan="2"  style="text-align:center;">

                                        <h3><strong>RASI</strong></h3>

                                    </td>

                                    <td style="text-align:center;">
                                        சுக்

                                    </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center;" style="text-align:center;">

                                        பு
                                    </td>

                                    <td style="text-align:center;">
                                        செ

                                    </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center;">
                                        லக்

                                    </td>

                                    <td style="text-align:center;">
                                    ராகு

                                    </td>

                                    <td style="text-align:center;">
                                        சூரி

                                    </td>

                                    <td style="text-align:center;">
                                        சுக்

                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </td>
                    <td>
                        <table class="table">
                            <tbody>

                                <tr>

                                    <td style="text-align:center;">
                                        லக்

                                    </td>

                                    <td style="text-align:center;">
                                        சந்

                                    </td>

                                    <td style="text-align:center;">
                                        செ

                                    </td>

                                    <td style="text-align:center;">
                                        பு

                                    </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center;">


                                    </td>

                                    <td colspan="2" rowspan="2"  style="text-align:center;">

                                        <h3><strong>AMSAM</strong></h3>

                                    </td>

                                    <td style="text-align:center;">

                                        -
                                    </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center;">

                                    சனி
                                    </td>

                                    <td style="text-align:center;">

                                        குரு
                                    </td>

                                </tr>

                                <tr>

                                    <td style="text-align:center;">

                                    மா

                                    <td style="text-align:center;">

                                        சந்
                                    </td>

                                    <td style="text-align:center;">
                                        சூரி

                                    </td style="text-align:center;">

                                    <td style="text-align:center;">
                                        சந்

                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>

        </div>

        <div class="print-para">
            <p>1.English with Address and Contact Number</p>
        </div>

    </div>

</body>
</html>
