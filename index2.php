<?php
require 'connection.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM register WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RK Fitnes</title>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
    <!-- fonts -->
    <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=Poppins:wght@800&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bb1a74625a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo"><a href="index2.php">Rk fitnes</a></div>

                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="d-flex justify-content-end align-items-center">
                            <div class="menu">
                                <nav>
                                    <ul class="d-flex align-center">
                                        <li><a href="index2.php">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="disptrainer.php">Trainer</a></li>
                                        <li><a href="dispmembership.php">Membership</a></li>
                                        <li><a href="orders.php">Orders</a></li>
                                        <li><a href="dispproduct.php">Products</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- <div class="loginbtn"><a href="#">Login</a></div> -->
                            <li class="nav-item dropdown text-center no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
                                    <!-- <i class="fa-sharp fa-solid fa-user"></i> -->
                                    <i style="font-size: 17px;" class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span style="font-size: 11px;" class="mr-2 d-none d-flex text-gray-700"><?php echo $row['fullname']; ?>
                                    </span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div style="font-size: 1.0 rem;" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="tblist.php">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Trainer
                                    </a>
                                    <a class="dropdown-item" href="admissionform.php">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Membership
                                    </a>
                                    <a class="dropdown-item" href="feedback.php">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Feedback
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                            <!-- <button class="loginbtn menu-bar"><a href="register.html">Register</a></button>
                            <button class="loginbtn menu-bar"><a href="login.html">Login</a></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current
                    session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>

                </div>
            </div>
        </div>
    </div>
    <!-- slider start -->

    <div class="SliderArea d-block d-inline">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                    <div class="hero__caption">
                        <span data-animation="fadeInLeft" data-delay="0.1s">with patrick potter</span>
                        <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy
                            life.</h1>
                        <a href="from.html" class="btnn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">became a
                            member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end -->
    <!-- banner start -->
    <div class="banner-main ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-lg-6">
                    <div class="banner-img  d-flex justify-content-center">
                        <img src="img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 col-lg-6 mt-5">
                    <div class="banner-caption w-100">
                        <div class="title-banner w-100 d-flex flex-column align-content-center ">
                            <span>ABOUT OUR GYM</span>
                            <h2>Safe Body building proper Solutions That Saves our Valuable Time!</h2>
                        </div>
                        <p class="pera-top">Brook presents your services with flexible, convenient and cdpose layouts.
                            You can select your favorite layouts & elements for cular ts with unlimited ustomization
                            possibilities. Pixel-perfect replication of the designers is intended.</p>
                        <p class="mb-65 pera-bottom">Brook presents your services with flexible, convefnient and chient
                            anipurpose layouts. You can select your favorite layouts.</p>
                        <a href="from.html" class="btnn">became a member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- banner end -->
    <!-- service area start-->
    <div class="service-area">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="row pt-4 d-flex justify-content-between">
                    <div class="service-content w-75">
                        <span>our services for you</span>
                        <h1>push your limits forward <br> we offer to you</h1>
                    </div>
                    <div class="service-button col-lg-2 col-md-2">
                        <a href="#">MORE SERVICES</a>
                    </div>
                </div>
                <div class="row pt-50">
                    <div class="col-md-4 col-sm-6 col-xl-4">
                        <div class="box text-center mb-5">
                            <div class="cat-icon">
                                <i class="flaticon-fitness"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">QUALITY EQUIPMENT</a></h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting
                                    to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xl-4">
                        <div class="box text-center mb-5">

                            <div class="cat-icon">
                                <i class="flaticon-healthcare-and-medical"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">health caring</a></h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting
                                    to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 col-xl-4">
                        <div class="box text-center mb-5">

                            <div class="cat-icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">gym strategies</a></h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting
                                    to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end-->
    <!-- about area end-->
    <div class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-11 col-sm-11">
                    <div class="about-img">
                        <img src="img/gallery/about2.png" alt="">
                        <div class="shape-qutaion d-none d-sm-block">
                            <img src="img//gallery/qutaion.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-19 col-sm-19">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-55">
                            <span>Client Feedback</span>
                            <h2>What Our Client thik about our gym</h2>
                        </div>
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                    <div class="rattiong-caption">
                                        <span>Shivam lodhi<span>Gym Trainer</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>Brook presents your services with flexible, convenient and cdpose layouts. You
                                        can select your favorite layouts & elements for cular ts with unlimited
                                        ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls
                                        intended csents your se.</p>
                                    <div class="rattiong-caption">
                                        <span>Rahul kashyap<span>Gym Trainer</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- gallery area start -->
    <div class="gallery-area mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery mb-30">
                        <div class="images"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                <h3>Best fitness gallery</h3>
                                <p>Fitness, Body</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-small mb-30">
                                <div class="images-small" style="background-image: url(img/gallery/gallery2.png);">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                        <h3>Best fitness gallery</h3>
                                        <p>Fitness, Body</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-small mb-30">
                                <div class="images-small" style="background-image: url(img/gallery/gallery3.png);">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                        <h3>Best fitness gallery</h3>
                                        <p>Fitness, Body</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-small mb-30">
                                <div class="images-small" style="background-image: url(img/gallery/gallery4.png);">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                        <h3>Best fitness gallery</h3>
                                        <p>Fitness, Body</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-small mb-30">
                                <div class="images-small" style="background-image: url(img/gallery/gallery5.png);">
                                </div>
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                        <h3>Best fitness gallery</h3>
                                        <p>Fitness, Body</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery area end -->
    <!-- trainer area start -->
    <div class="trainer-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="content">
                        <span>OUR TEAM MAMBERS</span>
                        <h2>OUR MOST EXPRIENCED TRAINERS</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <div class="btnmore d-flex justify-content-end">
                        <a href="#">More services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- trainer area end -->
    <!-- team member area start -->
    <div class="team-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/gallery/team1.png" alt="">
                            <div class="team-caption">
                                <span>Creative derector</span>
                                <h3><a href="#">Jhon Sunsaev</a></h3>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/gallery/team2.png" alt="">
                            <div class="team-caption">
                                <span>Creative derector</span>
                                <h3><a href="#">Jhon Sunsaev</a></h3>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/gallery/team3.png" alt="">
                            <div class="team-caption">
                                <span>Creative derector</span>
                                <h3><a href="#">Jhon Sunsaev</a></h3>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team member area end -->
    <!--? Want To work -->
    <section class="wantToWork-area  w-padding section-bg" data-background="img/gallery/section_bg02.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
                    <div class="wantToWork-caption">
                        <h2>April membership offer available Now</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <a href="services.html" class="btn wantToWork-btn f-right">More Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!--? Date Tabs Start -->
    <section class="date-tabs section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-tittle text-center mb-100">
                        <span>OUR TIME SCHEDULE</span>
                        <h2>SELECT THE pERFECT TIME YOU NEED NOW</h2>
                    </div>
                </div>
            </div>
            <!-- Heading & Nav Button -->
            <div class="row justify-content-center mb-10">
                <div class="col-lg-11">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Saturday</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sunday</a>
                                <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Monday</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Tuesday</a>
                                <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Language</a>
                                <a class="nav-item nav-link" id="nav-six" data-toggle="tab" href="#nav-nav-six" role="tab" aria-controls="nav-contact" aria-selected="false">Thursday</a>
                                <a class="nav-item nav-link" id="nav-seven" data-toggle="tab" href="#nav-nav-seven" role="tab" aria-controls="nav-seven" aria-selected="false">Friday</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
            <!-- Tab content -->
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!--  one -->
                        <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Two -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Three -->
                        <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Fur -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Five -->
                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Six -->
                        <div class="tab-pane fade" id="nav-nav-six" role="tabpanel" aria-labelledby="nav-six">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  seven -->
                        <div class="tab-pane fade" id="nav-nav-seven" role="tabpanel" aria-labelledby="nav-seven">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-wrapper">
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single -->
                                        <div class="single-box">
                                            <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
            </div>
        </div>

    </section>
    <!-- Date Tabs End -->
    <!-- feedback form start -->

    <div class="feedback-main">
        <div class="container-fluid">
            <div class="feedback">
                <div class="feedback-img">
                    <img src="img/gallery/contact_form.png" alt="">
                </div>
                <div class="feedback-form d-flex justify-content-center align-items-center">
                    <div class="col-md-10 col-lg-10">
                        <div class="feed-title">
                            <h2>Feel Free for Your Feedback</h2>
                        </div>
                        <form action="feedd.php" method="post">

                            <div class="inp1">
                                <input type="text" class="inp1" placeholder="Enter Your Name" name="fname">
                            </div>

                            <div class="inp2">
                                <input type="text" class=" inp2" name="feed" placeholder="Mesasage">
                            </div>
                            <input type="submit" class="form-control bg-primary sub text-dark" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feedback form end -->
    <!-- bottom start -->
    <div class="bottom-main">
        <div class="container">
            <div class="bottom d-flex justify-content-between">
                <div class="boxx col-md-3 col-lg-3 col-sm-10">
                    <h2>COMPANY</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Press & Blog</a></li>
                        <li><a href="#">privacy Policy</a></li>
                    </ul>
                </div>
                <div class="boxx col-md-3 col-lg-3 col-sm-10">
                    <h2>OPEN OUR</h2>
                    <ul>
                        <li><a href="#">Monday 11am-7pm</a></li>
                        <li><a href="#">Tuesday-Friday 11am-8pm</a></li>
                        <li><a href="#">Saturday 10am-6pm</a></li>
                        <li><a href="#">Sunday 11am-6pm</a></li>
                    </ul>
                </div>
                <div class="boxx col-md-3 col-lg-3 col-sm-10">
                    <h2>RESOURCES</h2>
                    <ul>
                        <li><a href="#">Home Insurance</a></li>
                        <li><a href="#">Travel Insurance</a></li>
                        <li><a href="#">Car Insurance</a></li>
                        <li><a href="#">Business Insurance</a></li>
                        <li><a href="#">Heal Insurance</a></li>
                    </ul>
                </div>
                <div class="boxx col-md-3 col-lg-3 col-sm-10">
                    <h1>Rk Fitness</h1>
                    <p>GThe trade war currently ensuing between te US anfd several natxions around thdhe globe, most
                        fiercely with.</p>
                    <div class="list d-flex flex-row">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom end -->

    <!-- JS here -->

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="js/wow.min.js"></script>
    <script src="js/animated.headline.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(".menu-bar").click(function() {
            $(".menu").toggleClass("show-menu");
        });
    </script>

</body>

</html>