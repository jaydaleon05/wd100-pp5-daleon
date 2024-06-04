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
                                    <br><br>
                            <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <h2>Contact Us</h2>
                                <p>If you have any questions, please fill out the form below and we will get back to you as soon as possible.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-warning mt-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                        
                    <div class="w-90 mb-2">
                            <section id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.809303752727!2d121.15074447576889!3d14.205941486615883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd63c8d4296baf%3A0xc3af87fced90c273!2sCalamba%20Central%20Terminal!5e0!3m2!1sen!2sph!4v1713375105434!5m2!1sen!2sph" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </section>
                    </div>
                    
                         <!-- Footer -->
                        <?php
                        include "footer.php"
                        ?>
                                                   
                        <!-- End of Footer -->        
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</html>