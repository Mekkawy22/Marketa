<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Marketa</title>
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
            <div class="col-lg-00 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(50% - 30px); z-index: 999;">
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
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                            <a href="cart.php" class="nav-item nav-link ">Shopping Cart</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                   
                                 
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    
                                  
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-lg-4">
                <!--
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/MakeUP.png" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="img/shoes.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
        <div class="row px-xl-5 pb-3">
            <?php
                $con = mysqli_connect("localhost:4306", "root", "", "online_shop");
                $select_query = "SELECT DISTINCT     `Category_Name` AS Category_Name, `Category_Image` AS Category_Image,
                (SELECT COUNT(product.Product_ID) FROM product WHERE product.Category_ID = category.`Category_ID` )  As numOfProducts
                FROM `category`,`product`";
                $result = mysqli_query($con, $select_query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $Category_Name = $row['Category_Name'];
                    $Category_Image = $row['Category_Image'];
                    $Product_Numbers = $row['numOfProducts'];
                    echo " <div class='col-lg-3 col-md-4 col-sm-6 pb-1'>
                                <a class='text-decoration-none' href=''>
                                    <div class='cat-item d-flex align-items-center mb-4'>
                                        <div class='overflow-hidden' style='width: 100px; height: 100px;'>
                                            <img class='img-fluid' src='img/$Category_Image' alt=''>
                                        </div>
                                        <div class='flex-fill pl-3'>
                                            <h6>$Category_Name</h6>
                                            <small class='text-body'>$Product_Numbers    Products</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    ";
                }
            
            ?>            
        </div>
    </div>
    <!-- Categories End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        <div class="row px-xl-5">
                <?php
                $con = mysqli_connect("localhost:4306", "root", "", "online_shop");
                $select_query = "Select * from product";
                $result = mysqli_query($con, $select_query);
                // $row = mysqli_fetch_assoc($result);
                // echo $row['Product_Name'];
                while ($row = mysqli_fetch_assoc($result)) {
                    $prod_id = $row['Product_ID'];
                    $prod_name = $row['Product_Name'];
                    $prod_Price = $row['Product_Price'];
                    $prod_Desc = $row['Product_Desc'];
                    $prod_imageName = $row['Product_imageName'];
                    echo "<div class='col-lg-3 col-md-4 col-sm-6 pb-1'>
                    <div class='product-item bg-light mb-4'>
                        <div class='product-img position-relative overflow-hidden'>
                            <img class='img-fluid w-100' src='img/$prod_imageName' alt=''>
                            <div class='product-action'>
                                <a class='btn btn-outline-dark btn-square' href=''><i class='fa fa-shopping-cart'></i></a>
                            </div>
                        </div>
                        <div class='text-center py-4'>
                            <a class='h6 text-decoration-none text-truncate' href=''>$prod_name</a>
                            <div class='d-flex align-items-center justify-content-center mt-2'>
                                <h5>$prod_Price</h5><h6>&nbsp;&nbsp;L.E.</h6>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                ?>        
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="img/5.jpg" alt="">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->          

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, maddi, EGYPT</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Marketa@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+201126847953</p>
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