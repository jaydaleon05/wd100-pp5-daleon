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

                           <div class="container " style="margin-top: 100px !important;">
                           <?php

                                include "admin/burger_db.php";

                                $id = $_SESSION['id'];
                                $orderQuery = "SELECT * FROM user_tbl INNER JOIN order_tbl ON user_tbl.user_id = order_tbl.order_user_id WHERE order_tbl.order_user_id = $id";
                                $orderResult = mysqli_query($conn, $orderQuery);

                                $totalPrice = 0;
                                while ($orderShow = mysqli_fetch_assoc($orderResult)) {
                                    $totalPrice += $orderShow['product_price'];
                                    echo "
                                    <div class='row align-items-center mb-3'>
                                    <div class='col-4'><img class='w-100' src='admin/{$orderShow['product_image']}' alt='Product image'></div>
                                    <div class='col-6'>
                                        <h5>{$orderShow['product_name']}</h5>
                                        <p class='mb-1'>&#8369;{$orderShow['product_price']}</p>
                                    </div>
                                    <div class='col-2'>
                                        <form action='remove_item.php' method='POST'>
                                        <input type='hidden' name='id' value='{$orderShow['order_id']}'>
                                        <button type='submit' class='btn btn-danger btn-sm'>Remove</button>
                                        </form>
                                    </div>
                                    </div>
                                    <hr>";
                                }
                            ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Check out now
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Payment details</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- form for payment -->
                                                    <div class="container my-5">
                                                        <div class="card bg-light text-dark">
                                                            <div class="card-header">
                                                                <h2>Order Confirmation</h2>
                                                            </div>
                                                            <div class="card-body">
                                                                <?php while ($orderShow = mysqli_fetch_assoc($orderResult)) {
                                                                    $totalPrice += $orderShow['product_price'];
                                                                    echo "
                                                                    <div class='row align-items-center mb-3'>
                                                                    <div class='col-4'><img class='w-100' src='admin/{$orderShow['product_image']}' alt='Product image'></div>
                                                                    <div class='col-6'>
                                                                        <h5>{$orderShow['product_name']}</h5>
                                                                        <p class='mb-1'>&#36;{$orderShow['product_price']}</p>
                                                                    </div>
                                                                    </div>
                                                                    <hr>";
                                                                } ?>
                                                                <div class="row">
                                                                    <div class="col-12 text-end">
                                                                        <h4>Total Price: &#8369;<?php echo $totalPrice; ?></h4>
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- Payment Method Selection -->
                                                                <div class="row mt-4">
                                                                    <div class="col-12">
                                                                        <h5>Select Payment Method:</h5>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="paymentMethod" id="gcash" value="Gcash" required>
                                                                            <label class="form-check-label" for="gcash">
                                                                                Gcash
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer" value="Bank Transfer" required>
                                                                            <label class="form-check-label" for="bankTransfer">
                                                                                Bank Transfer
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="paymentMethod" id="cash" value="Cash" required>
                                                                            <label class="form-check-label" for="cash">
                                                                                Cash
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-end">
                                                                <a href="cartpage.php" class="btn btn-secondary">Back to Cart</a>
                                                                <form action="complete_order.php" method="POST" class="d-inline">
                                                                    <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
                                                                    <input type="hidden" name="userId" value="<?php echo $id; ?>">
                                                                    <button type="submit" class="btn btn-primary">Confirm Order</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <!-- form payment -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-warning">Enter</button>
                                                    </div>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                    <div class="col-6 text-end">
                                        <h4>Total Price: &#8369;<?php echo $totalPrice; ?></h4>
                                    </div>
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

     