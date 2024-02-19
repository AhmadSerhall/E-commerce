<?php
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}

//        ?>
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
    <h1>Products / Water Flower Dress</h1>
</div>
<br/>
<hr>
<br/>

<div id="product-details" class='sectionp1'>
    <div class='product-image'>
        <img src='http://localhost/products/dresses/Dress4.jpg' alt="Product Image">
    </div>
    <div class="product-info">
        <div class="product-brand">
            <h2>Chanel</h2>
        </div>

        <div class="product-name">
            <h3>Water Flower Dress</h3>
        </div>

        <div class="product-price">
            <h3>70$</h3>
        </div>

        <div class="product-desc">
            <h4></h4>
        </div>
        <div class="counter">
            <input type='number' value='1' oninput="preventNegative(event)">
        </div>
        <div class='text'>
            <p>Select desired quantity to buy</p>
        </div>
        <div class='button-container'>
        <button class='button1'onclick="addToCart()">Add to Cart</button>
        <button class='button2'onclick="addToWishlist()">Add to WishList</button>
        

        
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

    var cart = [];

    // Function to add an item to the cart
    function addToCart(product) {
        var productData = {
            name: '<?php echo $product['productname']; ?>',
            price: '<?php echo $product['price']; ?>'
        };
        cart.push(productData);
        updateCartCount();
    }

    // Function to update the cart count display
    function updateCartCount() {
        var cartCount = document.getElementById('cart-count');
        cartCount.textContent = cart.length;
    }

</script>




</body>
</html>




