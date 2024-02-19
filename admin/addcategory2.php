<?php
session_start();
include 'connectionadmin.php';

if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
    exit(); // Terminate script execution after redirection
}

if (isset($_GET['categoryid']) && $_GET['categoryid'] != ""
        && isset($_GET['slug']) && $_GET['slug'] != ""
    && isset($_GET['categoryname']) && $_GET['categoryname'] != ""
    && isset($_GET['categoryimage']) && $_GET['categoryimage'] != ""
        )
 {

    $categoryid = $_GET['categoryid'];
    $slug = $_GET['$slug'];
    $categoryname = $_GET['categoryname'];
    $categoryimage = $_GET['categoryimage'];
    
    

    $query = "INSERT INTO category (categoryid,slug, categoryname, categoryimage)
              VALUES ('$categoryid','$slug', '$categoryname', '$categoryimage')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        header("Location: admincategories.php");
        exit(); // Terminate script execution after redirection
    }
}

mysqli_close($con);
?>

