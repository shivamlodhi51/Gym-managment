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
<?php
require 'connection.php';
$result = mysqli_query($conn, "SELECT * FROM product");
$id = mysqli_num_rows($result) > 0;
?>
<?php
// session_destroy();
require 'connection.php';
if (isset($_POST["submit"])) {
    $pid = $_POST["pid"];
    $result = mysqli_query($conn, "SELECT * FROM product WHERE  pid = '$pid'");
    $row = mysqli_fetch_assoc($result);
    $_SESSION["pid"] = $row["pid"];
    session_start();
    header("Location: buy.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
    <!-- fonts -->
    <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=Poppins:wght@800&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <!-- CSS here -->
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


    <style>
        .pbox {
            text-align: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* background-color: #c5c2c2; */
            /* overflow: hidden; */
            margin-bottom: 30px;
            padding: 20px 10px;
            box-shadow: 1px 1px 12px black;
            border-radius: 10px;
        }

        .pimg {
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 50%;
        }

        .pname,
        .pdis {
            width: 100%;
            padding: 5px 20px;
            font-size: 11px;
            font-weight: 600;
        }
        .pname h2{
            font-weight: 700;

        }
        .pname span{
            /* color: skyblue; */
            font-weight: 800;
        }
    </style>
</head>

<body>
    <!-- header start -->
    <div class="header-area header-transparent" style="background-color: black; padding: 25px 0px;">
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
                                        <li><a href="#">schedule</a></li>
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
                                <div style="font-size: 1.0rem;" class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile.php">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="stcourse.php">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cart
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
    <!-- products start -->
    <div class="product-main mt-5" style="margin-top: 180px;">
        <div class="container " style="margin-top: 180px;">
            <div class="row d-flex justify-content-evenly">
                <?php   
                if ($id) {

                    while ($row = mysqli_fetch_assoc($result)) {

                ?>
                        <div class="col-md-4 col-lg-4 col-sm-10 d-flex align-items-center justify-content-center">
                            <div class="pbox">
                                <div class="pimg">
                                    <img src="<?php echo $row['ppic']; ?>" width="200px" height="200px" alt="">
                                </div>
                                <div class="pname">
                                    <h2><?php echo $row['pname']; ?></h2>
                                    <h2>RS.<span><?php echo $row['pprize']; ?></span></h2>
                                </div>
                                <div class="pdis">
                                    <p><?php echo $row['pdescription']; ?></p>
                                </div>
                                <div class="buttn">
                                    <form action="" method="post">
                                        <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>">
                                        <button type="submit" class=" btn btn-primary" name="submit" >BUY NOW</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- products end -->


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