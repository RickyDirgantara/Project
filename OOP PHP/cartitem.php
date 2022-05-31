
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