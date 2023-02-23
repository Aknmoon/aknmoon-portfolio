<?php

    // session_start();

    // if (!(isset($_SESSION['cart']))){
    
    //     $_SESSION['cart']=array();
    // }
    
     

    include "../../classes/product.php";

    include "../../classes/cart.php";


    $product_obj = new Product;
    $cart_obj = new Cart;

    $product_details = $product_obj->displaySpecificBedProduct($_GET['product_id']);

    if(isset($_POST['buy_product'])){ 
       
        session_start();

        // if (isset($_SESSION['id'])) {
        //     header("location:view-cart.php");
        // }else {
        //     $user_id = $_SESSION['id'];
        //     $id = $_GET['product_id'];
        //     $qty = $_POST['buy_quantity']; 
        // }
        
   

        $id = $_GET['product_id'];
        $qty = $_POST['buy_quantity'];
        $user_id = $_SESSION['user_id'];

        //echo "$id, $qty, $user_id";
        $cart_obj->addToCart($user_id, $id, $qty);



        // if (isset($_SESSION['cart'][$id])){
        //     $_SESSION['cart'][$id]+=$qty;

            // これはカートにすでにその商品が入っていてもプラスで追加するようにする機能


            // header("location: ../../views/view-cart.php");
            // exit;

            //$_SESSION['cart'][$id] = $_SESSION['cart'][$id] + $qty;
            
        // }else{

        //     $_SESSION['cart'][$id]=$qty; 
        //     }
            //これはまだカートにその商品が入ってない場合、そのままquantityを追加する機能

            // header("location: ../../views/view-cart.php");
            // exit;
        // print_r($_SESSION['cart']);
        //echo count($_SESSION['cart']);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/main-styles.css">
    <link rel="stylesheet" href="../../assets/footer.css">


    <link rel="stylesheet" href="../../assets/sales-products.css">

</head>
<body>


    <div class="iloom" id="iloom">
        <header>
            <?php //include "../../views/menu.php"; ?>
        </header>
        
        <div class="iloom-gallery">
            <form action="" method="post">
                <div class="iloom-items">
                    <img src="../../images/<?=$product_details['photo']?>" alt="">
                    
                </div>

                <div class="iloom-items">
                    <div class="item-information">
                        
                        <h3><?= $product_details['product_name']?></h3>
                        <span>*****</span>
                        <p>$<?= $product_details['price']?>.00</p>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente officiis veniam laboriosam esse eligendi nemo alias expedita eos magni. Quisquam impedit blanditiis aperiam fugit consequatur quae quasi, ducimus dolor earum.</p>

                        <label for="buy-quantity" class="form-label small text-secondary">Buy Quantity</label>

                        <input type="number" name="buy_quantity" id="buy-quantity" class="form-control fw-bold w-25 mb-5" required min="1" max="<?= $product_details['quantity']?>">

                        <button type="submit" class="btn btn-dark w-75 mb-5" name="buy_product">ADD TO CART</button>

                        <h5>Scheduled Delivery Date</h5>
                        <p>December 29 - January 2</p>
                        
                    </div>
                    
                </div>
            </form>

        

        </div>

        
    </div>

    <footer>
        <?php //include "../../views/footer.php"; ?>
    </footer>

    
    
</body>
</html>