<?php

require "database/db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "body/head.php" ?>
</head>

<body>

    <?php include "body/nav.php" ?>
    <main class="container mt-3">

        <h3>Cart page</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Product Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>




        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <img src="images/2.jpg" width="50" alt="">
                                </th>
                                <th>
                                    Imac 24 pouce M2
                                </th>
                                <th>
                                    24 000,00 DH
                                </th>
                                <th>
                                    <input type="number" class="form-control w-50" value="1">
                                </th>
                                <th>
                                    24 000,00 DH
                                </th>
                                <th>
                                    <a href="" class="text-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- responsive -->
            </div>
            <!-- col -->

            <div class="col-md-4">
                <div class="bg-light p-3">
                    <h2>Total: 23 800,00 DH</h2>

                    <ul class="list-group">
                        <li class="list-group-item bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            Total:
                            <span class="badge bg-dark rounded-pill">24 000,00 DH</span>
                        </li>
                        <li class="list-group-item bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            Discount:
                            <span class="badge bg-dark rounded-pill">200 DH</span>
                        </li>
                        <li class="list-group-item bg-transparent fw-bold d-flex justify-content-between align-items-center">
                            Total to pay:
                            <span class="badge bg-dark rounded-pill">23 800,00 DH</span>
                        </li>
                    </ul>

                    <a href="proceed_checkout.php" class="btn btn-dark mt-2 fw-bold rounded-pill animate__animated animate__shakeX ">
                        <i class="bi bi-credit-card-fill"></i>
                        Proceed to checkout
                    </a>
                </div>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </main>

    <footer>
        <?php include "body/footer.php" ?>
    </footer>

    <?php include "body/script.php" ?>

</body>

</html>