<?php

function component($productname, $productprice, $productimg, $productid,$dgsao,$url,$link){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                              <span class=\"dgsao\">$dgsao
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\"></s></small>
                                <span class=\"price\">$productprice VNĐ</span>
                               
                            </h5>
                                <a href='$link' <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Xem chi tiết</button></a>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

?>
