<!DOCTYPE html>
<html lang="en">


<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Luxlo</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/fonts/flaticon.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/animate.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/slicknav.min.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/style.css">
    <link rel="stylesheet" href="<?= $this->Url->build('/')?>landpage/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= $this->Url->build('/')?>landpage/img/banner/image_threee.png">
    <script src="https://kit.fontawesome.com/35c7786524.js" crossorigin="anonymous"></script>
</head>

<body data-spy="scroll" data-target="#scroll-menu" data-offset="65">
    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <!-- header-area-end -->
    <!-- slider-area-start -->
    <div class="slider-area">
        <!-- <div class="slider-banner wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"></div> -->
        <div class="slider-bg-1"></div>
        <div class="slider-bg-2"></div>
        <div class="slider-bg-3"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 m-auto slider-sec">
                    <div class="slider-carousel owl-carousel">
                        <div class="slider-box">
                            <img src="<?= $this->Url->build('/')?>landpage/img/banner/image_one.png" class="img-fluid">
                        </div>
                            <div class="slider-box">
                                <img src="<?= $this->Url->build('/')?>landpage/img/banner/image_threee.png" class="img-fluid">
                            </div>
                            <div class="slider-box">
                                <img src="<?= $this->Url->build('/')?>landpage/img/banner/image_two.png" class="img-fluid">
                            </div>
                            <div class="slider-box">
                                <img src="<?= $this->Url->build('/')?>landpage/img/banner/image_four.png" class="img-fluid">
                            </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-12 m-auto ">
                    <div style="padding: 80px 0px;">
                        <div class="text-center mb-4">
                            <img src="<?= $this->Url->build('/')?>landpage/img/banner/logo.png" class="img-fluid" width="150">
                        </div>
                        <p style="text-align: center;"><span style="font-size: 18px;">OCTOBER 2021</span></p>
                        <h2 class="title1 animated  mb-5">We're almost ready to launch our product</h2>
                        
                        <div class="text-center pt-2">
                        <div class="h1ftaw-subscribe h1fta-widget">
                            <p class="title">Subscribe Us</p>
                            <form action="#">
                                <div class="footer-subscribe-box">
                                    <input type="text" placeholder="Enter your mail">
                                    <input type="submit" value="Notify">
                                </div>
                            </form>
                            <ul class="f-social mt-3">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> -->
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->
    <div class="h2-who-we-area">
        <div class="h2-who-we-banner animated bounce"><img src="<?= $this->Url->build('/')?>landpage/img/home2/who-we-banner.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                    <div class="section-title">
                        <h6 class="intro">Features</h6>
                        <h2 class="title">ALPHA <br> Smart Watch</h2>
                    </div>
                    <div class="h2-who-we feature-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress"> 
                                    <div class="content">
                                        <h2 class="title"><i class="fa fa-heartbeat"></i> Measure Heart rate</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fas fa-user-md"></i> Measure Blood Oxygen</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fas fa-stethoscope"></i>  Measure Blood Pressure</h2>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fa fa-phone-square"></i>
                                        Manage calls</h2>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content"> 
                                        <h2 class="title"><i class="fas fa-running"></i> Multi sports mode</h2>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fa fa-clock-o"></i> 300 watchfaces</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fa fa-bell"></i> Alarms and Reminders</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fa fa-volume-control-phone"></i> Phone notifications on watch</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fa  fa-gamepad"></i> For entertainment 2 games on watch</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="h2-single-progress">
                                    <div class="content">
                                        <h2 class="title"><i class="fas fa-hand-holding-water"></i> IP 67 waterproof</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-area-start -->
    <footer class="h1-footer">
        <div class="h1-footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                        <div class="h1fba-left">
                            <p class="copyright">© 2021 RegaloLux Pvt. Ltd.  All Rights Reserved.</p>
                        </div>
                    </div>
                   <!--  <div class="col-lg-6 col-md-6 col-sm-5 col-12">
                        <div class="h1fba-right">
                            <ul class="links">
                                <li><a href="#">Privacy.</a></li>
                                <li><a href="#">FAQ.</a></li>
                                <li><a href="#">Account</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- Scripts -->
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery-3.2.0.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery-ui.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/owl.carousel.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/isotope.pkgd.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/wow.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery.counterup.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/countdown.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery.slicknav.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery.scrollUp.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/jquery.waypoints.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/popper.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/bootstrap.min.js"></script>
    <script src="<?= $this->Url->build('/')?>landpage/js/theme.js"></script>
</body>

</html>