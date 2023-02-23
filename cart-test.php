<?php

require_once "database.php";


class Cart extends Database{

    public function addToCart($user_id, $id, $qty){
        $cartSql = "SELECT * FROM `cart` WHERE `user_id` = $user_id AND `product_id` = $id";
        $cart = $this->conn->query($cartSql);

        if ($cart) {
            //var_dump($cart);
            if ($cart->num_rows == 1) {
                $cartRecord = $cart->fetch_assoc();
                $newQty = $cartRecord['quantity'] + $qty;

                $sql= "UPDATE `cart`
                SET `user_id` = $user_id,
                    `product_id` = $id,
                    `quantity`    = $newQty
                WHERE `user_id` = $user_id AND `product_id` = $id";

                if($this->conn->query($sql)){

                    header("location: ../../views/view-cart.php");
                    exit;

                }else{
                    die('Error in : '.$this->conn->error);
                }
            } 
            else {

                $sql= "INSERT INTO `cart`(`user_id`, `product_id`, `quantity`) VALUES ('$user_id','$id','$qty')";

                if($this->conn->query($sql)){

                    header("location: ../../views/view-cart.php");
                    exit;

                }else{
                    die('Error in : '.$this->conn->error);
                }
            }
        } else {
            die('Error in : '.$this->conn->error);
        }

        
    }


    public function displayAllCartProducts($user_id){

        $sql = "SELECT * FROM `cart` WHERE user_id =$user_id ";

        
        if($result = $this->conn->query($sql)){

            return $result;
        }else{
            die("Eroor retrieving bed products: " .$this->conn->error);
        }

    }



    public function deleteProduct($product_id){
        $sql = "DELETE FROM `cart` WHERE product_id = '$product_id'";

        if($this->conn->query($sql)){
            header("location: ../views/view-cart.php");
            exit;
        }else{
            die("Error in deleting product: ".$this->conn->error);
        }
    }

    

}




?>





<?php

require_once "database.php";


class Cart extends Database{

    public function addToCart($user_id, $id, $qty){
    

        $sql= "INSERT INTO `cart`(`user_id`, `product_id`, `quantity`) VALUES ('$user_id','$id','$qty')";

        if($this->conn->query($sql)){

            

            

            header("location: ../../views/view-cart.php");
            exit;


        }else{
            die('Error in : '.$this->conn->error);
        }
    }

    ?>