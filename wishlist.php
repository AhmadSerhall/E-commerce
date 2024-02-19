<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin'] != 1) {
    header("Location: index.php");
    exit();
}

// Check if the wishlist session variable is set
if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = array(); // Initialize an empty wishlist array
}

// Retrieve the wishlist items from the session
$wishlistItems = $_SESSION['wishlist'];

?>

<html>
<head>
    <!-- Head section code goes here -->
</head>
<body>
    <h1>Wishlist</h1>

    <?php if (empty($wishlistItems)) : ?>
        <p>Your wishlist is empty.</p>
    <?php else : ?>
        <ul>
            <?php foreach ($wishlistItems as $item) : ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <a href="shop.php">Go back to Shop</a>

    <!-- Additional HTML and styling for wishlist page -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>