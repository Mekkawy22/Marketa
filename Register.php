<?php
$con = mysqli_connect("localhost:4306", "root", "", "online_shop");

if (isset($_POST['submit'])) {
    $name = $_POST['user_Name'];
    $Adress = $_POST['user_Address'];
    $Phone = $_POST['user_Phone'];
    $email = $_POST['user_Email'];
    $Password = $_POST['user_Password'];
    $DOB = $_POST['user_Birthday'];

    $emailExist = "SELECT * FROM `user` WHERE `User_Mail` ='$email';";
    $emailResult = mysqli_query($con, $emailExist);
    if ($emailResult->num_rows > 0) {
        echo "<script>alert('Email Exists Before')</script>";
    } else {
        $sql = "INSERT INTO `user` (`User_Name`, `User_Birthday`, `User_Address`, `User_Mail`, `User_Pass`, `User_Phone`) VALUES ('$name','$DOB','$Adress','$email','$Password','$Phone')";
        $result = mysqli_query($con, $sql);
        if (mysqli_affected_rows($con) == 1) {
            header("Location: login.php");
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
            echo mysqli_error($con);
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Marketa </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-6">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <a href="" class="nav-item nav-link">Meat& Fish</a>
                        <a href="" class="nav-item nav-link">Dairy</a>
                        <a href="" class="nav-item nav-link"> Vegetables and fruit</a>
                        <a href="" class="nav-item nav-link">Freezer</a>
                        <a href="" class="nav-item nav-link">Dried Goods</a>
                        <a href="" class="nav-item nav-link">Snacks</a>
                        <a href="" class="nav-item nav-link">Beverages</a>
                        <a href="" class="nav-item nav-link">Oil and Cooking fats</a>
                        <a href="" class="nav-item nav-link">Seasonings and Spices</a>
                        <a href="" class="nav-item nav-link">>Tea, coffee and powders</a>
                        <a href="" class="nav-item nav-link">Detergents</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                            <a href="cart.php" class="nav-item nav-link">Shopping Cart</a>
                            <a href="contact.php" class="nav-item nav-link ">Contact</a>
                            <div class="LOGIN">
                                <a href="Register.php" class="nav-item nav-link">Register</a>
                            </div>
                            <div class="LOGIN">
                                <a href="Login.php" class="nav-item nav-link">Login</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Register</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <center>
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Register</span></h2>
            <div>
                <div class="col-lg-7 mb-5">
                    <div class="contact-form bg-light p-30">
                        <div id="success"></div>
                        <form method="POST">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="user_Name" placeholder="Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="address" name="user_Address" placeholder="Address" required="required" data-validation-required-message="Please enter your address" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="phone" name="user_Phone" placeholder="Phone" required="required" data-validation-required-message="Please enter your phone" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="user_Email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" id="subject" name="user_Password" placeholder="Password" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label style="position:relative;left:-340px">Birthday</label>
                                <input type="date" class="form-control" name="user_Birthday" id="subject" placeholder="Birthday" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="sendMessageButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, maddi, EGYPT</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Marketa@gmail.com </p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+201126847953 </p>
            </div>

        </div>

    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>