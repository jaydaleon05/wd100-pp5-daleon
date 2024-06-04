<?php

if(!isset($_SESSION['level'])){
    header("Location: ../user_login.php");
}else if($_SESSION['level'] !=1){
    header("Location: ../user_login.php");
}
// echo "$_SESSION[id] $_SESSION[level] $_SESSION[username]"; 

?>