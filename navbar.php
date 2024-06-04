<nav class="navbar bg-warning navbar-expand-lg fixed-top">
                <!-- you can have it as fixed-top, fixed-bottom, sticky-top, sticky-bottom -->
                <div class="container-fluid">
                    <a class="navbar-brand" href="">
                        <img src="admin/image/logo-white.png" alt="Logo" class="w-30 h-30 d-inline-block align-text-top"></a>
                        
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#wd100navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
              
                    <div class="collapase navbar-collapse" id="wd100navbar">
                        <ul class="navbar-nav">
            
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Menu
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="burger.php">Burgers</a></li>
                                  <li><a class="dropdown-item" href="addon.php">Add-ons</a></li>
                                </ul>
                              </li>
                            <!-- dropdown -->
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php">
                                    Contact Us
                                </a>
                            </li>
            
                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">
                                    Gallery
                                </a>
                            </li>              
            
                        </ul>
                    </div>
                    <li class="nav-item navbar-nav navbar-right">
                        <a href="cartpage.php"><i class="fa-solid fa-cart-shopping"></i><span class="badge">
                            <?php
                            include "admin/burger_db.php";
                            $countStmt = "SELECT * FROM order_tbl";
                            $countResult = mysqli_query($conn, $countStmt);
                            $countRow = mysqli_num_rows($countResult);
                            echo "<p class='text-danger'>$countRow</p>";
                            ?>
                        </span></a>
                        <a href="logout.php"><i class="fa-solid fa-user me-5"></i></a>
                    </li>
            
                    <!-- <form class="d-flex input-group" style="max-width: 300px;">
                        <input type="form-control" type="search" placeholder="search">
                        <button class="btn btn-dark" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                    </form>     -->
                </div>
            </nav>