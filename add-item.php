<?php
//session_start();
include '../classes/admin-function.php';

$new_thing = new Thing;


$category_list = $new_thing->displayCategories();

// $new_thing->addItem();

// if(isset($_POST['add_item'])){
//     addItem();
// }
?>

    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<header>
        
        <div class="container-fluid bg-primary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fas fa-pen-nib me-3"></i>Item</h2>        
        </div>
    </header>
    <main class="container w-50 mx-auto">

        <a href="posts.php" class="text-secondary"><i class="fas fa-chevron-left fa-2x"></i></a>

        <h2 class="display-4 text-center my-4"><i class="far fa-edit me-1"></i>Add Item</h2>

        <div class="col-10 mx-auto">
            <form action="../actions/admin-actions.php" method="post" enctype="multipart/form-data">
                <input type="text" name="product_name" class="form-control mb-5" placeholder="Product_Name" required autofocus>

                <input type="number" name="price" placeholder="price" class="form-control mb-5" required autofocus>

                <input type="number" name="quantity" placeholder="quantity" class="form-control mb-5" required>

                
                <select name="category_id" id="category_id" class="form-select mb-5" required>
                    <option value="" hidden>Select Section</option>
                    <?php
                        while($category_details = $category_list->fetch_assoc()){
                            echo "<option value='". $category_details['category_id']."'>".$category_details['category_name']."</option>";
                        }
                    ?>

                </select>
                
                <input type="file" name="photo" class="form-control mb-5" required>
                
                <button type="submit" name="add_item" class="btn btn-primary w-100 mb-5 text-uppercase">Add Item</button>

                

            </form>
        </div>
    </main>
</body>

</html>

