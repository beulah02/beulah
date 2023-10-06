<?php
session_start();
require '../../connection.php';

?>
<!DOCTYPE html>

<html lang="en">



<head>

    <title>Mustard Seed Cooperative</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/coca-leaves.png">
    <!--Style Sheets-->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome.min.css">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
</head>


<body style="max-width: 100% !important;">

    <!-- loader  -->

    <div class="loader_bg">

        <div class="loader"><img src="../../assets/img/loader.gif" alt="#" /></div>

    </div>

    <!-- end loader -->



    <!-- Start Top Nav -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="msc_nav_top">

        <div class="container text-light">

            <div class="w-100 d-flex justify-content-between">

                <div>

                    <i class="fa fa-envelope mx-2"></i>

                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:mustardseedcoop@gmail.com">mustardseedcoop@gmail.com</a>

                    <i class="fa fa-phone mx-2"></i>

                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:7002-2508 / 8636-7209">7002-2508 / 8636-7209</a>

                </div>

                <div>

                    <a class="text-light" href="#" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>

                    <a class="text-light" href="mustardseedcoop@gmail.com" target="_blank"><i class="fab fa-google fa-sm fa-fw me-2"></i></a>
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo "Welcome &nbsp";
                        echo $_SESSION['fname'];
                    } else {
                        echo "";
                    }
                    ?>

                </div>

            </div>

        </div>

    </nav>

    <!-- Close Top Nav -->



    <!-- Header -->

    <div class="manu">

        <nav class="navbar navbar-expand-lg navbar-light shadow">

            <div class="container d-flex justify-content-between align-items-center">



                <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">

                    <img src="assets/img/logo.png" width="120px !important">

                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#msc_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">

                    &nbsp; <span class="navbar-toggler-icon"></span>

                </button>



                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="msc_main_nav">

                    <div class="flex-fill">

                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">

                            <li class="nav-item">

                                <a class="nav-link" href="../../index.php">Home</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="../../Site/allproducts.php">Products</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="../../Site/about.php">About</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" href="../../Site/contact.php">Contact</a>

                            </li>

                            <li class="nav-item nav-link">


                                <?php
                                if (isset($_SESSION["username"])) {
                                    echo "<a href='../../Site/logout.php'>Log Out</a>";
                                } else {
                                    echo "<a href='../../Site/index.php'>Log In</a>";
                                }
                                ?>

                            </li>

                        </ul>

                    </div>

                    <div class="navbar align-self-center d-flex">



                        <a class="nav-icon position-relative text-decoration-none" href="Site/cart.php">

                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>

                        </a>

                        <ul class="navbar-nav ml-auto ml-md-0">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle fa-fw"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="Site/profile.php">My Profile</a>
                                    <a class="dropdown-item" href="change-password.php">Change Password</a>
                                    <div class="dropdown-divider"></div>

                                    <!--   <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>-->
                                    <?php
                                    if (isset($_SESSION["username"])) {
                                        echo "<a class='dropdown-item' data-toggle='modal' data-target='#logoutModal'>Log Out</a>";
                                    } else {
                                        echo "<a  class='dropdown-item' href='Site/index.php'>Log In</a>";
                                    }
                                    ?>
                                </div>
                            </li>
                        </ul>

                        <!-- Logout Modal-->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="Site/logout.php">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Logout Modal-->
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Close Header -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-arrowup btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>
    </div>

    <!-- Start Script -->



    <!-- Start Script -->

    <script src="../../assets/js/jquery-1.11.0.min.js"></script>

    <script src="../../assets/js/jquery-migrate-1.2.1.min.js"></script>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/js/style.js"></script>

    <script src="../../ssets/js/custom.js"></script>
    <script src="../../attendance/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- End Script -->



    <script>
        $('.content').hide();



        $('.slider').click(function() {

            $(this).next('.content').slideToggle();

            this.toggle = !this.toggle;

            $(this).children("span").text(this.toggle ? "-" : "+");

            return false;

        });
    </script>

</body>



</html>