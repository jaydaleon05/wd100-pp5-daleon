<?php

include 'admin/burger_db.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$checkUserStmt = "SELECT * FROM user_tbl WHERE user_username = '$username' AND user_password = '$password' AND user_level = 0";
$checkUserQuery = mysqli_query($conn, $checkUserStmt);

$checkAdminStmt = "SELECT * FROM user_tbl WHERE user_username = '$username' AND user_password = '$password' AND user_level = 1";
$checkAdminQuery = mysqli_query($conn,$checkAdminStmt);

if(mysqli_num_rows($checkUserQuery)){
    $userShow = mysqli_fetch_assoc($checkUserQuery);    

    $_SESSION['id'] = $userShow['user_id'];
    $_SESSION['level'] = $userShow['user_level'];
    $_SESSION['username'] = $userShow['user_username'];

    header("Location: index.php");

}else if(mysqli_num_rows($checkAdminQuery)){
   $adminShow = mysqli_fetch_assoc($checkAdminQuery);

   $_SESSION['id'] = $adminShow['user_id'];
   $_SESSION['level'] = $adminShow['user_level'];
   $_SESSION['username'] = $adminShow['user_username'];

   header("Location: ../wd100_pp5_daleon/admin/admin_add_remove.php");
   
} else {
    header("Location: user_login.php");
}

?>