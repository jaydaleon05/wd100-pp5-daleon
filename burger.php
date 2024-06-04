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
                            <br>

                        <div class="container mb-3">
                                <h1>Our Burgers</h1> 
                                <h3>Introducing Burger House, the newest gourmet burger company dedicated to crafting mouthwatering, artisanal burgers with premium ingredients and innovative flavors.</h3>
                                <br>
                            <div class="row g-5">
                                <?php
                                 include "admin/burger_db.php";

                                 $productStmt = "SELECT * FROM product_tbl WHERE product_category = 'Burger'";
                                  $productResult = mysqli_query($conn, $productStmt);
                                  while ($productShow = mysqli_fetch_assoc($productResult)){
                                    echo "
                                    
                                    <div class='col-md-4'>
                            
                                    <div class='card'>
                                        <!-- card image top -->
                                        <img src='admin/$productShow[product_image]' class='card-img-top'>
                                        <!-- card image top -->
                        
                        
                                        <!-- start of card body -->
                                        
                                            <div class='card-body'>
                                                    <h3 class='card-title text-dark'>
                                                    $productShow[product_name]
                                                    </h3>
                                                    <!-- card title -->
                                                    <!-- card sub title -->
                                                    <h5 class='card-subtitle'>
                                                        $productShow[product_price]
                                                    </h5>
                                                    <!-- card subtitle -->
                                
                                                    <!--  card text -->
                                                    <p class='card-text'>
                                                    $productShow[product_description]
                                                    </p>
                                                    <!-- card text -->
                                
                                                        <!-- buttons -->
                                                    <form action='order-getter.php' method='POST'>
                                                        <input type='hidden' name='id' value='$productShow[product_id]'>
                                                        <input type='submit' name='order' value='Order now' class='btn btn-warning'>
                                                    </form>  
                                                        <!-- buttons -->
                                            </div>                                           
                                    </div>
                                </div>  
                               
                                    ";
                                  
                                  }
                                ?>
                        </div>
                    </div>            
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