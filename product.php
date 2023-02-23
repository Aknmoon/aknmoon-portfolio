<?php

require_once "database.php";

class Product extends Database{

    public function displayAllProducts(){

        $sql = "SELECT * FROM `items` ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving bed products: " .$this->conn->error);
        }

    }

    

    // public function displayAllBedProducts(){

    //     $sql = "SELECT * FROM `bed` ";

    //     if($result = $this->conn->query($sql)){
    //         return $result;
    //     }else{
    //         die("Eroor retrieving bed products: " .$this->conn->error);
    //     }

    // }
    public function displayAllChairProducts(){

        $sql = "SELECT * FROM `items` WHERE category_id ='1' ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving chair products: " .$this->conn->error);
        }

    }

    public function displayAllBedProducts(){

        $sql = "SELECT * FROM `items` WHERE category_id ='2' ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving bed products: " .$this->conn->error);
        }

    }

    public function displayAllBathProducts(){

        $sql = "SELECT * FROM `items` WHERE category_id ='3' ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving bed products: " .$this->conn->error);
        }

    }

    public function displayAllLampProducts(){

        $sql = "SELECT * FROM `items` WHERE category_id ='4' ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving lamp products: " .$this->conn->error);
        }

    }


    public function displayAllDiningProducts(){

        $sql = "SELECT * FROM `items` WHERE category_id ='6' ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving dining products: " .$this->conn->error);
        }

    }

    // public function displayAllCandleProducts(){

    //     $sql = "SELECT * FROM `candle` ";

    //     if($result = $this->conn->query($sql)){
    //         return $result;
    //     }else{
    //         die("Eroor retrieving candle products: " .$this->conn->error);
    //     }

    // }


    public function displayAllCandleProducts(){

        $sql = "SELECT * FROM `items` WHERE category_id ='8' ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Eroor retrieving candle products: " .$this->conn->error);
        }

    }















    public function displaySpecificProduct($product_id){
        $sql = "SELECT * FROM items WHERE id = '$product_id'";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error in retrieving product: ".$this->conn->error);
        }
    }

    // public function displaySpecificBedProduct($product_id){
    //     $sql = "SELECT * FROM bed WHERE id = '$product_id'";

    //     if($result = $this->conn->query($sql)){
    //         return $result->fetch_assoc();
    //     }else{
    //         die("Error in retrieving bed product: ".$this->conn->error);
    //     }
    // }

    public function displaySpecificBedProduct($product_id){
        $sql = "SELECT * FROM items WHERE id = '$product_id'";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error in retrieving bed product: ".$this->conn->error);
        }
    }

    //comment outした↓

    // public function displaySpecificLampProduct($product_id){
    //     $sql = "SELECT * FROM items WHERE id = '$product_id'";

    //     if($result = $this->conn->query($sql)){
    //         return $result->fetch_assoc();
    //     }else{
    //         die("Error in retrieving bed product: ".$this->conn->error);
    //     }
    // }


    //comment outした↓
    
    // public function displaySpecificCandleProduct($product_id){
    //     $sql = "SELECT * FROM candle WHERE id = '$product_id'";

    //     if($result = $this->conn->query($sql)){
    //         return $result->fetch_assoc();
    //     }else{
    //         die("Error in retrieving candle product: ".$this->conn->error);
    //     }
    // }


    # create a funcion to have an add to cart function
    function addToCart() {
        #code goes here
    }

    

    

    



}