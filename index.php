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
                        include "navbar.php"
                        ?>
                            <!-- End of Navbar -->

                            <!-- Welcome Video -->
                    <div class="pos-relative banner" id="home">
                        <video class="w-100" autoplay muted loop>
                            <!-- autoplay = for the video to play when the website is
                            launched
                            muted = to mute the video
                            loop = to play the video on repeat
                        -->
                            <source src="admin/video/0521.mp4" type="video/mp4">
                        </video>  
                        <div class="video-overlay">
                           <h1>Welcome to Burger House</h1>
                        </div>
                                            
                    </div>
                    <!-- End of Welcome Video -->
                            


                                    <!-- Best Seller -->
                                    <h1 style="text-align: center; margin-top: 1%;">BEST SELLER</h1>
                       <div class="container mt-3 d-flex">
                           <div class="row g-4">
                               <div class="col-md-12 d-flex align-items-center justify-content-center p-4">
                                   <div class="img-container">
                                       <figure>
                                           <a href="burger.php"><img src="admin/image/bacon king.png" class="card-img" alt="Bacon King"></a>
                                           <H4 class="text-center">BACON KING</H4>
                                       </figure>
                                   </div>
                                   <div class="img-container">
                                       <figure>
                                           <a href="burger.php"><img src="admin/image/croissant loaded.png" class="card-img" alt="Croissant Loaded"></a>
                                           <h4 class="text-center">CROISSANT LOADED</h4>
                                       </figure>
                                   </div>
                                   <div class="img-container">
                                       <figure>
                                           <a href="burger.php"><img src="admin/image/double burger.png" class="card-img" alt="Double Burger"></a>
                                           <H4 class="text-center">DOUBLE BURGER</H4>
                                       </figure>
                                   </div>
                               </div>
                           </div>
                       </div>
                                    <!-- End of best seller -->

                                
                                                    <!-- carousel -->
                    <div class="carousel slide" id="wd100carousel" data-bs-ride="carousel">
                        <!-- carousel inner -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/1f.jpg" class="d-block w-100  img-fluid custom-height" alt="" height="100">
                            </div>
                            <div class="carousel-item">
                                <img src="image/2.jpg" class="d-block w-100  img-fluid custom-height" alt="" height="100">
                            </div>
                            <div class="carousel-item">
                                <img src="image/3.jpg" class="d-block w-100  img-fluid custom-height" height="100" alt="">
                            </div>
                            
                        </div>
                        <!-- carousel inner -->
                        <!-- carousel indicators -->
                        <div class="carousel-indicators">
                            <button class="active" type="button" data-bs-target="#wd100carousel" data-bs-slide-to="0"></button>
                            <button type="button" data-bs-target="#wd100carousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#wd100carousel" data-bs-slide-to="2"></button>
                        
                        </div>
                        <!-- carousel button -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#wd100carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#wd100carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                        <!-- carousel -->

                    
                         <!-- Footer -->
                        <?php
                        include "footer.php"
                        ?>
                                                   
                        <!-- End of Footer -->        
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</html>