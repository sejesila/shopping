<?php
function component($productname,$productprice,$productimg)
{
    $element="
    
<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"POST\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$productimg\" alt=\"laptop\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$productname </h5>
                <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                </h6>
                <p class=\"card-text\">
                    Best Laptop in the world.
                </p>
                <h5>
                    <small><s class=\"text-secondary\">Ksh 65000</s></small>
                    <span class=\"price\"> Ksh $productprice</span>
                </h5>
                <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\"> Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
            </div>
        </div>
    </form>
</div>
    ";
    echo $element;
}
?>
