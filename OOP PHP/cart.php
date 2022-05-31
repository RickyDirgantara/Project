			  <a class="navbar-brand" href="#">
					<img src="https://www.pngkey.com/png/full/400-4000674_archangel-ios-android-mobile-action-rpg-transparent-archangel.png"  width="40" height="40"></a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto ml-auto mb-2 mb-lg-0">
					  <li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="index.php#features">Features</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="index.php#product">Archangels</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="index.php#team">About</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" style="color: brown;" class="red" href="shop.php">Store&nbsp;&nbsp;&nbsp;</a>
					  </li> 
					  <li class="nav-item">
                      <a class="nav-link" href="shoppingcart.php">
                      <i class="bi bi-cart2 cart"></i>                    
                      <?php
                        if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-success bg-light\">$count</span>";
                        }else{
                         echo "<span id=\"cart_count\" class=\"text-success bg-light\">0</span>";
                        }
?>
						
</a>
					  </li> 
					  
              <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<?php  
         echo $_SESSION['user_session'];
          ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a href="logout.php" class="dropdown-item text-center" href="#">Logout</a></li>
          </ul>
        </li>                  
					</ul>
				  </div>
