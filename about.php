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
                            
                            <h2 class="text-center">About Us</h2>
                            <div class="container">
                              <img src="admin/image/bh.jpg" class="mb-3" alt="Nature" style="width:100%;">
                              <div class="text-block">
                                <h4>Burger House</h4>
                                <p>Welcome to Burger House, where we believe that a great burger is more than just food—it's an experience. Our journey began with a simple love for quality, flavor, and the joy of sharing a delicious meal with friends and family. Today, we are proud to serve the community with burgers that are crafted with passion and precision.  
                                At Burger House, we believe in the power of good food to bring people together. Whether you're dining in, taking out, or ordering delivery, we invite you to join us and experience the best burgers in town. Thank you for choosing [Burger House Name], where every burger is made with love and dedication.
                                </p>
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