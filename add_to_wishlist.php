<!--hayda el code eza katabto hek bya3tine enno mazbout product added to wishlist-->
//<?php
//session_start();
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['username'])) {
//    $productname = $_POST['productname'];
//
//    // Add the product to the wishlist in the user's session
//    $_SESSION['wishlist'][] = $productname;
//
//    echo 'success';
//} else {
//    echo 'error';
//}
//?>

<?php
session_start();
include 'connection.php';

// Retrieve the product name from the AJAX request
$productname = $_POST['product'];

// Retrieve the user's username from the session
$username = $_SESSION['username'];

// Check if the product is already in the wishlist
if (in_array($productname, $_SESSION['wishlist'])) {
    echo 'already_added';
} else {
    // Update the wishlist attribute in the userlogin table
    $query = "UPDATE userlogin SET wishlist = CONCAT(wishlist, '$productname,') WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Update the wishlist array in the user's session
        $_SESSION['wishlist'] = array_merge($_SESSION['wishlist'], [$productname]);
        echo 'success';
    } else {
        echo 'error';
    }
}

?>


