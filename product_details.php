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

        <h3>Product Details</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-6" data-aos="fade-right">
                <img src="images/2.jpg" class="img-fluid" alt="">
            </div>
            <!-- col -->

            <div class="col-md-6" data-aos="fade-left">
                <h4>Imac 24 Pouce M2</h4>
                <div>
                    <span class="text-warning">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </span>
                    17k Reviews
                </div>

                <p class="my-2">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum voluptatem blanditiis deleniti fuga odit dolorem ducimus, laboriosam deserunt placeat nam, provident eius, accusamus dolor. Non deserunt laboriosam voluptate error laborum?
                </p>

                <h3>
                    24 000,00 DH
                    <s class="text-danger">
                        24 500,00 DH
                    </s>
                </h3>

                <a href="cart.php" class="btn btn-dark btn-lg fw-bold rounded-pill animate__animated animate__shakeX animate__infinite">
                    <i class="bi bi-cart-fill"></i>
                    Add to cart
                </a>
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