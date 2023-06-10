<?php

$con = mysqli_connect("localhost:4306", "root", "", "online_shop");

if (isset($_POST['submit'])) {
    $name = $_POST['category_name'];
    $img = $_POST['category_img'];

    $categoryExist = "SELECT * FROM `category` WHERE `Category_Name` = '$name';";
    $categoryResult = mysqli_query($con, $categoryExist);
    if ($categoryResult->num_rows > 0) {
        echo "<script>alert('Category Name Exists Before')</script>";
    } else {
        $sql = "INSERT INTO `category`(`Category_Name`, `Category_Image`) VALUES ('$name','$img')";
        $result = mysqli_query($con, $sql);
        if (mysqli_affected_rows($con) == 1) {
            header("Location: Admin.php");
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
    <title> Marketa</title>
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
                         <?php
                            $con = mysqli_connect("localhost:4306", "root", "", "online_shop");
                            $select_query = "SELECT `Category_Name` FROM `category`";
                            $result = mysqli_query($con, $select_query);
                            // $row = mysqli_fetch_assoc($result);
                            // echo $row['Product_Name'];
                            while ($row = mysqli_fetch_assoc($result)) {
                                $Category_Name = $row['Category_Name'];
                                echo "<a href='' class='nav-item nav-link'>$Category_Name</a>";
                            }
                        ?>                          
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="Admin.php" class="nav-item nav-link">Home</a>
                            <a href="Add Categorie.php" class="nav-item nav-link active">Add Categorie</a>
                            <a href="Add product.php" class="nav-item nav-link">Add product</a>
                            <div class="LOGIN">
                                <a href="Register.php" class="nav-item nav-link">Register</a>
                                </div>
                                <div class="LOGIN">
                                    <a href="Login.php" class="nav-item nav-link">Login</a>
                                </div>
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
                    <span class="breadcrumb-item active">Add Categorie</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <center>
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Add Categorie</span></h2>
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form method="POST">
                        <div class="control-group">
                            <input  name="category_name" type="text" class="form-control" id="name" placeholder="Category_Name"
                                required="required" data-validation-required-message="Please enter Category_Name"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="category_img" class="form-control" id="email" placeholder="Category_img"
                                required="required" data-validation-required-message="Please enter Category_img" />
                            <p class="help-block text-danger"></p>
                        </div>
                       
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit"  name="submit"  id="sendMessageButton">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</center>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
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