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

        <h3>Shop Page</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>

        <h5>Categories</h5>
        <div class="row">
            <div class="col-md-3">

                <ul class="list-group list-group-flush">
                    <?php foreach ($categorie as $key => $value) { ?>
                        <li class="list-group-item">
                            <?= $key ?> - <?= $value ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- col -->
            <div class="col-md-9">

                <div class="row">
                    <?php foreach ($products as $key => $value) { ?>

                        <div class="col-md-4 mb-2" data-aos="fade-up">
                            <div class="card">
                                <a href="product_details.php">
                                    <img src="images/<?= $value['image'] ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $value['name'] ?>
                                    </h5>

                                    <h5>
                                        <?= $value['price'] ?>
                                        <s class="text-danger">
                                            <?= $value['old_price'] ?>
                                        </s>

                                    </h5>

                                    <a href="cart.php" class="btn btn-dark fw-bold">
                                        <i class="bi bi-cart-fill"></i>
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <!-- col -->

                </div>
                <!-- row2 -->

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