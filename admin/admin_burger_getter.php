<?php 
    include "burger_db.php";

    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $directory = "image/";
    $image = $directory . basename($_FILES['image']['name']);
    $category = $_POST['category'];
    
    move_uploaded_file($_FILES['image']['tmp_name'], $image);
    $storeProductStmt = "INSERT INTO product_tbl (product_name, product_description, product_price, product_stock, product_image, product_category) VALUES ('$name', '$desc', '$price', '$stock', '$image', '$category')";
   mysqli_query($conn, $storeProductStmt);
    echo "$name  $desc $price $stock $image";
    header("Location: admin_add_remove.php");
?>


