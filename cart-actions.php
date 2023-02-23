<?php


// require_once "../classes/cart.php";

// $cart_obj = new Cart;

// if(isset($_POST['buy_product'])){ 
//     session_start();

//     $id = $_GET['product_id'];
//     $qty = $_POST['buy_quantity'];
//     $user_id = $_SESSION['id'];

//     //echo "$id, $qty, $user_id";
//     $cart_obj->addToCart($user_id, $id, $qty);
// }



?>


<?php


    include "../classes/product.php";

    include "../classes/cart.php";

    // include "../sales-view/bed-items/view-bed.php"


    $product_obj = new Product;
   

    $product_obj->displaySpecificProduct($_GET['product_id']);
    //displaySpecificedProduct

    if(isset($_POST['buy_product'])){ 


       
        session_start();
        //なんでこのセッションはここじゃないといけないのか
        if(!empty($_SESSION['user_id'])){
        $id = $_GET['product_id'];
        $qty = $_POST['buy_quantity'];
        $user_id = $_SESSION['user_id'];

        $cart_obj = new Cart;

        //echo "$id, $qty, $user_id";
        $cart_obj->addToCart($user_id, $id, $qty);

        }else{
            header("location: ../views/login.php");
        }


    }


?>



<!-- <form action="../../actions/cart-actions.php" method="post"> -->


