<?php

require_once "../classes/admin-function.php";

$new_thing = new Thing;


if(isset($_POST['add_category'])){
    $category_name = $_POST['category_name'];
    
    $new_thing->addCategory($category_name);
}

elseif(isset($_POST['add_item'])){
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    // $photo = $_POST['photo'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

    $new_thing->addItem($product_name, $price, $quantity, $photo_name, $category_id, $photo_tmp);

    // $new_thing違う名前にする必要があるかも
}


?>

