<?php
session_start();
include "user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

                      <!-- Navbar -->
            <?php
            include "navbar.php";
            ?>
                            <!-- End of Navbar -->
                            <br><br><br><br><br>
                                        <div class="container-fluid">
                                            <img src="admin/image/red yellow minimalist art burger special banner.png" alt="" class="img-fluid p-2 mt-0"> 
                                        </div>

                                        <!-- Gallery -->
                            <div class="container">
                                <h1 style="text-align: center;">GALLERY</h1>
                                <div class="row g-5">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/bacon king.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Bacon King</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/cheese burger.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Cheese Burger</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/bacon burger.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Bacon Burger</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/chicken sandwich.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Chicken Sandwich</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/Classic RCC.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Chicken Royal</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/croissant loaded.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Crossant Loaded</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/double burger.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Double Burger</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/fish sanwich.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Fish Sandwich</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/Rodeo Burger.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Rodeo Burger</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/spicy royal.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Spicy Royal</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/Nuggets.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Nuggets</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <img src="admin/image/fries.png" class="rounded" alt="" width="100%">
                                            <h5 style="text-align: center;">Fries</h5>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                                            <!-- End of Gallery -->
                            
                    
                         <!-- Footer -->
                        <?php
                        include "footer.php";
                        ?>
                                                   
                        <!-- End of Footer -->        
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- <script src="items.js"></script> -->
<script src="js/main.js"></script>
</html>