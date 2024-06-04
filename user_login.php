<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


                                                                        <!-- login -->
                                    <br> <br><br><br><br><br>
                                <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
                                <div class="card p-4 shadow">
                                    <h3 class="text-center">Login</h3>
                                    <form action="user_login_getter.php" method="POST">
                                        <!-- Username input -->
                                        <div class="mb-3">
                                            <label for="username" class="form-label">User name</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="username">
                                        </div>
                                        <!-- Password input -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                        </div>
                                        <!-- Remember me -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                                        </div>
                                        <!-- Submit button -->
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary" value="login">
                                        </div>
                                    </form>
                                    <!-- Additional links -->
                                    <div class="text-center mt-3">
                                        <a href="#" class="text-primary">Forgot Password?</a>
                                    </div>
                                    <!-- Social login -->
                                    <div class="text-center mt-3">
                                        <span>Or login with:</span>
                                        <div>
                                            <a href="#" class="btn btn-light mx-1"><i class="fab fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-light mx-1"><i class="fab fa-google"></i> Google</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                                                                        <!-- End of Login -->
                                        
                                          <!-- Footer -->
                                        <?php
                                        include "footer.php";
                                        ?>
                                                                
                                        <!-- End of Footer -->    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</html>