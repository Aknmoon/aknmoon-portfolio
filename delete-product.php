<?php
    include "../classes/cart.php";

    $cart_obj = new Cart;

    $cart_obj->deleteProduct($_GET['product_id']);

?>


