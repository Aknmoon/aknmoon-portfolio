<?php

require_once "database.php";

class Thing extends Database{

    public function displayCategories(){
        
        $sql = "SELECT * FROM categories ";
        
        if($result = $this->conn->query($sql)){

            return $result;
            
                // while($row = $result->fetch_assoc()){
                //     echo"
                //         <tr>
                //             <td>".$row['category_id']."</td>
                //             <td>".$row['category_name']."</td>
                //             <td><a href='update-category.php?cat_id=".$row['category_id']."' class='btn btn-sm btn-warning text-white'>Update</a></td>
                //             <td><a href='delete-category.php?cat_id=".$row['category_id']."' class='btn btn-sm btn-danger text-white'>Delete</a></td>
                //         </tr>
                //     ";
                // }
            }else{
            die("Error retrieving categories: " . $this->conn->error);
        }
    }
    

    public function addCategory($category_name){
    
        $sql = "INSERT INTO `categories`(`category_name`) VALUE ('$category_name')";
    
        if($this->conn->query($sql)){

            header('location: ../admin/add-category.php');
            exit;
            //echo "<div class='mt-5 alert alert-success text-center fw-bold' role='alert'>NEW CATEGORY ADDED: ".$category_name."</div>";
        }else{
            die("Error: " . $this->conn->error);
        }
    }


    public function addItem($product_name, $price, $quantity, $photo_name, $category_id, $photo_tmp)
    {
    
        $sql = "INSERT INTO `items`(product_name, price, quantity, photo, category_id) VALUE ('$product_name', '$price', '$quantity', '$photo_name', '$category_id')";
    
        if($this->conn->query($sql)){

            $destination = "../images/$photo_name";
            move_uploaded_file($photo_tmp, $destination);

            header('location: ../admin/dashboard.php');
            exit;
        }else{
            die("Error: " . $this->conn->error);
        }
    }





    

    












}


?>