<?php
session_start();
include 'connectionadmin.php';

if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
    exit(); // Terminate script execution after redirection
}

if (isset($_GET['productid']) && $_GET['productid'] != ""
        && isset($_GET['slug']) && $_GET['slug'] != ""
    && isset($_GET['productname']) && $_GET['productname'] != ""
    && isset($_GET['productimage']) && $_GET['productimage'] != ""
    && isset($_GET['categoryid']) && $_GET['categoryid'] != ""
    && isset($_GET['brandname']) && $_GET['brandname'] != ""
    && isset($_GET['price']) && $_GET['price'] != ""
    && isset($_GET['quantity']) && $_GET['quantity'] != "") {

    $productid = $_GET['productid'];
    $slug = $_GET['slug'];
    $productname = $_GET['productname'];
    $productimage = $_GET['productimage'];
    $categoryid = $_GET['categoryid'];
    $brandname = $_GET['brandname'];
    $price = $_GET['price'];
    $quantity = $_GET['quantity'];

    $query = "INSERT INTO product (productid,slug, productname, productimage, categoryid, brandname, price, quantity)
              VALUES ('$productid','$slug', '$productname', '$productimage', '$categoryid', '$brandname', '$price', '$quantity')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        header("Location: adminproducts.php");
        exit(); // Terminate script execution after redirection
    }
}

mysqli_close($con);
?>
