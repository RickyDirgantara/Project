<?php
require_once ("db.php");
require_once ("db_connection.php");
require_once ("productdetail.php");

$db = new CreateDb("oop", "producttb");
if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'shoppingcart.php'</script>";
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>Shop</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="css/style.css">
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
 <section class="pt-8 pb-5">
     <div class="container">
        <div class="col-lg-12 col-md-12 col-12">
    <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
    <table id="shoppingCart" class="table table-condensed table-responsive">               
                            <?php
                            $total = 0;
                          if (isset($_SESSION['cart'])){
                         $product_id = array_column($_SESSION['cart'], 'product_id');
                         $result = $db->getData();
                      while ($row = mysqli_fetch_assoc($result)){
                     foreach ($product_id as $id){
                    if ($row['id'] == $id){
                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                    $total = $total + (int)$row['product_price'];
                }
            }
        }
    }else{
        echo "<h5>Cart is Empty</h5>";
    }

?>


</table>
<div class="align-items-center">
<div class="float-right text-right">
                <h4> <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?></h4>
                <h5>Subtotal: </h5>
                <h4>$<?php echo $total; ?></h4>
            </div>
                        </div>
                        </div>
                  
</section>
 

         


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>