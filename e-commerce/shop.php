<?php

session_start();

require_once ('db.php');
require_once ('productdetail.php');
require_once ('db_connection.php');

   if(!$user->isLoggedIn()){ 

     header("location: login.php"); //Redirect ke halaman login 

   } 

   $currentUser = $user->getUser(); 


// create instance of Createdb class
$database = new CreateDb("oop", "producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'shop.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>Shop</title>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- owl carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<!-- animate css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	


</head>
	<body data-bs-spy="scroll" data-bs-target=".navbar">
		<!--Navbar-->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
				<div class="container">		
		<?php require_once ("cart.php"); ?>
</nav>
</div>
			
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>A N G E L A R I U M</p>
						<h1>MARKET</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="container-fluid">
		<div class="flex-container">
			<div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'],$row['product_desc'], $row['product_price'], $row['product_image'], $row['id']);
                }
            ?>		
			</div>
			</div>
			</div>

	<!-- end products -->



	<footer>
   <div class="container">
    <div class="footer-top">
          <div class="row gy-5">
             <div class="col-md-4">
                <h4 class="logo-text">Quote</h4>
                <p>"The man who has seen the rising moon break out of the clouds at midnight has been present like an archangel at the creation of light and of the world."</p>
                <div class="social-icons">
                   <a href="#"><i class="bx bxl-facebook"></i></a>
                   <a href="#"><i class="bx bxl-twitter"></i></a>
                   <a href="#"><i class="bx bxl-instagram"></i></a>
                   <a href="#"><i class="bx bxl-github"></i></a>
                </div>
             </div>
             <div class="col-md-2">
                <h5 class="title-sm">Navigation</h5>
                <div class="footer-links">
                   <a href="#">Services</a>
                   <a href="#">Our Work</a>
                   <a href="#">Team</a>
                   <a href="#">Blog</a>
                </div>
             </div>
             <div class="col-md-2">
                <h5 class="title-sm">More</h5>
                <div class="footer-links">
                   <a href="#">FAQ's</a>
                   <a href="#">Privacy & Policy</a>
                   <a href="#">Liscences</a>
                </div>
             </div>
             <div class="col-md-2">
                <h5 class="title-sm">Contact</h5>
                <div class="footer-links">
                   <p class="mb">Jalan Tentara Pelajar, Pemalanng, Jawa Tengah</p>
                   <p class="mb-">082326164669</p>
                   <p class="mb">www.TugasPWL.com</p>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
    <div class="footer-bottom">
       <div class="container">
          <div class="row justify-content-between gy-3">
             <div class="col-md-6">
                <p class="mb-0">© Agency2022. All rights reserved</p>
             </div>
             <div class="col-auto">
                <p class="mb-0">Created by Kelompok 7</p>
             </div>
          </div>
       </div>
    </div>
 </footer>
	
	<!-- jquery -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- count down -->
	<script src="js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="js/jquery.isotope-3.0.6.min.js"></script>
	<!-- mean menu -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- main js -->
	<script src="js/main.js"></script>

</body>
</html>