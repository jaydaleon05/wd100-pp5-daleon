<?php

include "admin/burger_db.php";

$id = $_POST['id'];
$deleteStmt = "DELETE FROM order_tbl WHERE order_id = $id";
$deleteResult = mysqli_query($conn, $deleteStmt);
header("Location: cartpage.php");
?>
