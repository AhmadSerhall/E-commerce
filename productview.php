<?php
session_start();
include 'connection.php';
include 'userfunctions.php';



if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
    }
else{
    $username=$_SESSION['username'];
    }
if (isset($_GET['product'])) {
    $product_slug = $_GET['product'];
    $product_data = getSlugActive2('product', $product_slug);
    $product = mysqli_fetch_array($product_data);
    }
    

    if ($product) {
        $productImage = isset($product['productimage']) ? $product['productimage'] : '';
    }
        if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

        ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Shop Page</title>
    <style>
        .sectionp1 {
            padding: 10px 80px;
        }

        .logo {
            position: relative;
            left: -8px;
            top: 8px;
            height: 50px;
            width: 50px;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 30px;
            background: white;
            position: sticky;
            top: 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        #navbar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            position: relative;
            list-style: none;
            padding: 0 20px;
        }

        #navbar li a {
            font-size: 15px;
            font-family: sans-serif;
            text-decoration: none;
            font-weight: 600;
            color: #1a1a1a;
        }

        #navbar li a:hover,
        #navbar li a.active {
            color: #088178;
            transition: 0.1s ease;
        }

        #navbar li a.active::after {
            content: "";
            background: #088178;
            width: 30%;
            height: 2px;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        .title {
            padding-top: 30px;
            padding-left: 20px;
        }

        #product-details {
            display: flex;
            margin-top: 20px;
        }

        #product-details .product-image {
            width: 40%;
            margin-right: 50px;
        }

        .product-image {
            width: 100%;
            height: auto;
        }

        .product-image img {
            width: 100%;
            border-radius: 5px;
        }

        .product-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .product-brand {
            font-size: 30px;
            font-weight: bold;
/*            padding-bottom: 5px;*/
            margin-bottom:-30px;
            
        }

        .product-name {
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 0;
            color: #088178;
            margin-bottom: -30px;
        }

        .product-price {
            font-size: 20px;
/*            padding-bottom: 10px;*/
        }

        .product-desc {
            font-size: 16px;
            color: #555;
            margin-top: -20px;
            
        }
        .counter input{
            width:50px;
            height:20px;
            font-size:16px;
        }
        .text p{
            font-size:14px
             
        }
        button-container{
            display:flex;

            
            
        }
        .button1{
           font-size:12px;
           width:80px;
           height:40px;
           background-color: #088178;
           color:white;
           border:none;
           cursor:pointer;
           border-radius: 7px;
           transition: 0.4s ease;
           margin-right:40px;

        }
        button:hover{
            background-color:violet;
            
        }
         .button2{
           font-size:9px;
           width:80px;
           height:40px;
           background-color: red;
           color:white;
           border:none;
           cursor:pointer;
           border-radius: 7px;
           transition: 0.4s ease;
           

        }
        button:hover{
            background-color:violet;
            
        }
        .button-container .button2 {
           margin-left: -5px;

        }
        .cart {
            font-size: 20px;
            color: #088178;
            cursor: pointer;
        }
/*        .cart span {
            font-size: 5px;
            padding-left:5px;
            
        }*/

        #cart-count {
            position: relative;
            font-size: 5px;
            color: white;
            background-color: #088178;
            border-radius: 50%;
            padding: 4px 8px;
            top: -20px;
            left: 6px;
        }
 
            
        
    </style>
</head>
<body>
<section id="header">
    <a href="#"><img src="https://seeklogo.com/images/R/risingwave-icon-logo-837E37238C-seeklogo.com.png"
                      class="logo"></a>

    <div>
        <ul id="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a href="shop.php" class="active" target="-blank">Shop</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php" target="-blank">Contact Us</a></li>
<!--            <li><i class="fa-solid fa-cart-shopping fa-lg cart " onclick="showCart()" <span id="cart-count"></span></i></li>-->
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping fa-lg cart"></i> <span id="cart-count"></span></a></li>

            <li><a href='profile.php' target="-blank"><i class="fa-regular fa-user fa-lg"></i></a></li>
        </ul>
        
    </div>
</section>

<div class="title">
    <h1>Products / <?= isset($product['productname']) ? $product['productname'] : ''; ?></h1>
</div>
<br/>
<hr>
<br/>

<div id="product-details" class='sectionp1'>
    <div class='product-image'>
        <img src="<?= $productImage; ?>" alt="Product Image">
    </div>
    <div class="product-info">
        <div class="product-brand">
            <h2><?= $product['brandname']; ?></h2>
        </div>

        <div class="product-name">
            <h3><?= $product['productname']; ?></h3>
        </div>

        <div class="product-price">
            <h3><?= $product['price']; echo('$')?></h3>
        </div>

        <div class="product-desc">
            <h4><?= $product['productdesc']; ?></h4>
        </div>
        <div class="counter">
            <input type='number' value='1' oninput="preventNegative(event)">
        </div>
        <div class='text'>
            <p>select desired quantity to buy</p>
        </div>
        <div class='button-container'>

            <button id="cart-button" class="button1" onclick="addToCart('<?= $product['productname']; ?>')">Add to Cart</button>

        <button id="wishlist-button" class='button2' onclick="addToWishlist('<?= $product['productname']; ?>')">Add to WishList</button>



        

        
    </div>
</div>
</div>



<script>
    function preventNegative(event) {
        var input = event.target;
        if (input.value < 0) {
            input.value = 0; // Set the input value to 0 if it goes below 0
        }
    }

//    var cart = [];

    // Function to add an item to the cart
 function addToCart(productname) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            if (xhr.responseText === 'success') {
                alert('Product added to cart successfully!');
            } else if (xhr.responseText === 'already_added') {
                alert('Product already in cart!');
            } else {
                alert('Failed to add product to cart. Please try again.');
            }
        }
    };
    xhr.send('product=' + encodeURIComponent(productname));
}


// Function to update the cart session variable on the server-side
//function updateCartSession() {
//    // Send an AJAX request to update the cart session variable
//    var xhr = new XMLHttpRequest();
//    xhr.open('POST', 'update_cart.php', true);
//    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//    xhr.onreadystatechange = function() {
//        if (xhr.readyState === 4 && xhr.status === 200) {
//            // Handle the response if needed
//        }
//    };
//    xhr.send('cart=' + JSON.stringify(cart));
//}
// Function to add an item to the wishlist
function addToWishlist(productname) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_wishlist.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response if needed
            if (xhr.responseText === 'success') {
                alert('Product added to wishlist successfully!');
            } else {
                alert('Product added to wishlist Successfully!');
            }
        }
    };
    xhr.send('product=' + encodeURIComponent(productname));
}


// Function to update the wishlist session variable on the server-side
function updateWishlistSession() {
    // Send an AJAX request to update the wishlist session variable
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_wishlist.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response if needed
        }
    };
    xhr.send('wishlist=' + JSON.stringify(wishlist));
}


</script>




</body>
</html>
