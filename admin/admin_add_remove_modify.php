<?php
include "burger_db.php";

$id = $_POST['id'];
if (isset($_POST['DELETE'])) {
  echo "$id";
  $productDelete = "DELETE FROM  product_tbl WHERE product_id=$id";
  mysqli_query($conn, $productDelete);
  header("Location: admin_add_remove.php");

}if (isset($_POST['UPDATE'])) {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $category = $_POST['category'];
 

    $productUpdate = "UPDATE  product_tbl SET product_name = '$name', product_description = '$desc', product_stock = '$stock', product_price = '$price', product_category = '$category'";
    mysqli_query($conn, $productUpdate);
    echo "$name $desc $stock $price";
    // header("Location: admin_add_remove.php");
  }

?>