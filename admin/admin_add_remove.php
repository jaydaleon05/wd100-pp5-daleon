<?php
session_start();
include "admin-user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin_add_remove</title>
    
</head>
<body>
<?php
include "burger_db.php";
?>
    <div class="container_fluid">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center mt-3">Product Import</h1>
                    <hr>
                    <div class="card-body">
                        <div class="row">

                            <form action="admin_burger_getter.php" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                   
                                    <div class="col-md-3">
                                        <label for="name">Product Name:</label><br>
                                        <input type="text"  name="name" required><br>
                                    </div> 
                                    
                                    <!-- IMAGE -->
                                    <div class="col-md-6">
                                        <label for="formFileMultiple" class="form-label">Image</label>
                                        <input class="form-control" type="file"  name="image">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <input type="text" name="description" class="form-control" >
                                    </div>

                                    <div class="col-md-6">
                                        <label for="price">Price:</label><br>
                                        <input type="number" step="0.01"  name="price" required><br>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="stock">Stock:</label><br>
                                        <input type="number"  name="stock" required><br><br>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleFormControlTextarea1" class="form-label">Category</label>
                                        <input type="text" name="category" class="form-control" >
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <input type="submit" value="Add Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $productStmt = "SELECT * FROM product_tbl";
            $productQuery = mysqli_query($conn, $productStmt);
            while ($productShow = mysqli_fetch_assoc($productQuery)) {
                    echo "
                    
                        <div class='col-4'>
                            <form action='admin_add_remove_modify.php' method='POST'>
                            <input type='hidden' name='id' value='$productShow[product_id]'>
                           <input type='text' name='name' value='$productShow[product_name]'>
                           <input type='number' name='price' value='$productShow[product_price]'>
                           <input type='text' name='desc' value='$productShow[product_description]'>
                           <input type='number' name='stock' value='$productShow[product_stock]'>
                           <input type='text' name='category' value='$productShow[product_category]'>
                           <img src='$productShow[product_image]' class='w-100'>
                           <input type='submit' value='Delete' name ='DELETE' class='btn btn-warning'>
                           <input type='submit' value='Update' name ='UPDATE' class='btn btn-warning'> 
                            </form>
                        </div>
                    ";
            }
            ?>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>