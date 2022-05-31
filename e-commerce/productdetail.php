<?php

function component($productname, $productdesc, $productprice, $productimg, $productid){
    $element = " 
    <div class=\"col-lg-4 col-sm-6\">
    <form action=\"shop.php\" method=\"post\">
    <div class=\"card shadow\">
        <div>
            <img class=\"image-resize \" src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
            <p class=\"card-text\">
            <small><s class=\"text-secondary\">$$productdesc</s></small>
            </p>
            <h5>               
                <span class=\"price\">$$productprice</span>
            </h5>
            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
           <input type='hidden' name='product_id' value='$productid'>
        </div>
    </div>
</form>
                    </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    <form action=\"shoppingcart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    <table id=\"shoppingCart\" class=\"table table-condensed table-responsive\">
    <div< class=\"row\">
    <thead>
        <tr>
            <th style=\"width:10%\">Product</th>
            <th style=\"width:12%\">Price</th>
            <th style=\"width:16%\"></th>
        </tr>
        <tbody>
                    <tr>
    </thead>

    <div class=\"col-md-3 pl-0\">
    <td data-th=\"Product\">
    <img src=\"$productimg\" alt=\"Image1\">
    </div>
    </div>
    <td>
    <div class=\"col-md-9 text-right mt-sm-2\">
        <h4>$productname</h4>
        <p class=\"font-weight-light\"></p>
    </div>
    </td>
<td data-th=\"Price\">$$productprice</td>    
<td class=\"actions\" data-th=\"\">
        <div class=\"text-right\">                            
            <button type=\"submit\" name=\"remove\" class=\"btn btn-white border-secondary bg-white btn-md mb-2\">
            <i class=\"bi bi-trash-fill\"></i>
            </button>
        </div>
    </td>  
    </tr>
    </tbody>
    </div>
    </table>
</form>

";
echo  $element;
}
