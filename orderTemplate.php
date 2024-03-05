<?php include "header.php"; ?>

<head>
    <title>Order History</title>
</head>
<style>
    .big-container {
        display: block;
        margin: 20px;
        margin-bottom: 40px;
        background-color: grey;
        padding: 20px;
    }
    .artist-container {
        cursor: auto;
    }
    .active {
        background-color: #F39C12;
        color: #333;
        margin: 5px;
    }
</style>

<section class="my-cart-line line">
    <h2>Order History</h2>

    <div class="cart-total">

        <?php
        echo '<a href="orderAll.php" class="btn ' . ($currentStatus == "all" ? 'active' : '') . '">All</a>';
        echo '<a href="orderPending.php" class="btn ' . ($currentStatus == "pending" ? 'active' : '') . '">Pending</a>';
        echo '<a href="orderDelivered.php" class="btn ' . ($currentStatus == "delivered" ? 'active' : '') . '">Delivered</a>';
        echo '<a href="orderCanceled.php" class="btn ' . ($currentStatus == "canceled" ? 'active' : '') . '">Canceled</a>';
        ?>
        <a href="artwork.php" class="btn">Continue shopping</a>
    </div>
</section>