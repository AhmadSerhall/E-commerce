<?php
session_start();

// Check if the request contains the cart data
if (isset($_POST['cart'])) {
    // Update the cart session variable with the new cart data
    $_SESSION['cart'] = json_decode($_POST['cart'], true);
}
