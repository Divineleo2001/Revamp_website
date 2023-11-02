<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);



if ($name != "" & $email != "" & $phone != "" & $message != "") {
    $ctomail = "shabbirmarur@gmail.com";
    $csub = "AT PAR UI Technologies  - Enquriy-" . $name;
    $body = '<html><body>';
    $body .= '<div style="height:auto;width:500px;border:1px solid black;">';

    $body  .= '<hr>';
    $body  .= '<span style="font-size: 16px;font-weight:bold;padding-left:50px;">AT PAR UI Technologies - Enquriy</span>';
    $body  .= '<div style="text-align:left;font-size: 16px;"><br/>
 --------------------------------------------------------------------

<br />
        <table>
					<tr>
						<th style="padding-left:20px;"> Name :</th>
						<td style="padding-left:10px;">' . $name . '</td>
					</tr>
			
                    <tr >
						<th style="padding-left:20px;">Email :</th>
						<td style="padding-left:10px;">' . $email . '</td>
					</tr>
                    <tr >
                        <th style="padding-left:20px;">Phone :</th>
                        <td style="padding-left:10px;">' . $phone . '</td>
                    </tr>
					<tr >
						<th style="padding-left:20px;">Message:</th>
						<td style="padding-left:10px;">' . $message . '</td>
					</tr>
				

		</table>

		
<br /></div>';
    $body .= "</div>";
    $body .= "</body></html>";

    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= "From:$email" . "\r\n";
    $headers .= 'Cc:#' . "\r\n";

    //$csmsg = wordwrap($cmsg,70);
    mail($ctomail, $csub, $body, $headers);
    //echo "<script> window.location.href='./thankyou';</script>";
} else {
    echo '<script language="javascript">alert("Please Fill Required Details");</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content=" ">

    <!-- ========== Page Title ========== -->
    <title>@PAR Technology</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

    <style>
        pa {
            font-size: 16px;
        }


        p {
            font-size: 16px;
            font-weight: 600;
        }

        .item {

            font-weight: 600;
        }

        .info {

            font-weight: 600 !important;
        }

        .send {

            background-color: #000;
            color: #fff;
            padding: 10px;
            border-radius: 26px;
        }


        body {

            overflow-x: hidden;
            overflow-y: scroll;
            width: 100%;
        }
    </style>

</head>

<body>

    <!-- Preloader Start -->

    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <!--div class="attr-nav button light circle">
                    <ul>
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Register</a>
                        </li>
                    </ul>
                </div-->
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                        <img src="assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->

            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div id="" class="we-offer-area item-border-less bg-gray default-padding bottom-less" style="background-color: #050226;">
        <div class="container">


            <div class="row">
                <div class="our-offer-items less-carousel">
                    <!-- Single Item -->
                    <div class="col-md-12 col-sm-12 equal-height">
                        <div class="item">
                            <center>
                                <h4>Thank You <?php echo "$name"; ?>, We Will Get Back You Soon....

                                </h4>
                                <br>

                                <a href="./" class="send">Go Back</a>
                            </center>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->

                    <!-- Single Item -->

                    <!-- End Single Item -->

                    <!-- Single Item -->

                    <!-- End Single Item -->

                    <!-- Single Item -->

                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->

                    <!-- Single Item -->


                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->
                    <!-- Single Item -->

                    <!-- End Single Item -->


                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Companies Area 
    ============================================= -->

    <!-- End Companies Area -->


    <!-- About Us -->



    <!-- end About-->






    <!-- Start We Offer 
    ============================================= -->

    <!-- End We Offer -->


    <!-- Start Team  
    ============================================= -->

    <!-- End Team -->

    <!-- Start Overview 
    ============================================= -->

    <!-- End Overview -->

    <!-- Start Fun Factor 
    ============================================= -->
    <!-- End Fun Factor -->






    <!-- Start Testimonials 
    ============================================= -->

    <!-- End Testimonials -->



    <!-- Start Contact Area  
    ============================================= -->

    <!-- End Contact -->

    <!-- Start Google Maps 
    ============================================= -->

    <!-- End Google Maps -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding-top bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item about">
                            <img src="assets/img/logo.png" alt="Logo">
                            <p style="text-align:justify;">
                                At Par UI Technologies is an IT services company that helps organisations to improve the way they do business by providing technical solutions to make them more transparent ,
                                and bringing the “ anytime, anyplace” collaborative style in their operations.
                            </p>


                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Quick Links</h4>
                            <ul>
                                <li>
                                    <a href="#index">Home</a>
                                </li>
                                <li>
                                    <a href="#overview">About us</a>
                                </li>
                                <li>
                                    <a href="#Whatweoffer">Services</a>
                                </li>
                                <li>
                                    <a href="#domain">Domain</a>
                                </li>
                                <li>
                                    <a href="#team">Team</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item about">
                            <h4>Follow Us</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Address:</h5>
                                            <span>No 124 1st floor 1st cross <br> 80 feet road Ashwath<br> Nagar RMV 2 stage <br> Bangalore 560094</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span><a href="mailto:info@atparuitechnologies.com">info@atparuitechnologies.com</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span><a href="tel:7774964686">+91-7774964686</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2021. All Rights Reserved by At Par UI Technologies</p>
                        </div>
                        <!--div class="col-md-6">
                            <p>Design & Developed By <a href="http://angikatechnologies.com/">Angika Technologies</a></p>
                        </div -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>