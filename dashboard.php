<?php
// session_start();
// include "functions/dashboard-functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main-style.css">
</head>


<body>
    <header>
       



        <div class="container-fluid bg-dark bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fas fa-user-cog me-3"></i>Dashboard</h2>
        </div>
    </header>
    <div class="container-fluid bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary d-block" href="add-item.php"><i class="fas fa-plus-circle me-2"></i>Add Item</a>
                </div>
                <div class="col">
                    <a class="btn btn-success d-block" href="add-category.php"><i class="fas fa-folder-plus me-2"></i>Add Category</a>
                </div>
                <!-- <div class="col">
                    <a class="btn btn-warning text-white d-block" href="users.php"><i class="fas fa-user-plus me-2"></i>Add User</a>
                </div> -->
            </div>
        </div>
    </div>

    
</body>

</html>