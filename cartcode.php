<?php
//echo '<a href="logout.php">click here to logout</a>'; logout.php
?>

<!DOCTYPE html>
<!--potential working cart code for add to cart functionality to use later-->
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <title>Modern E-Commerce Store</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
    h1 {
      margin: 0;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }
    .item {
      width: 250px;
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      transition: box-shadow 0.3s;
    }
    .item:hover {
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }
    .item img {
      max-width: 100%;
      height: auto;
    }
    .item h3 {
      margin: 10px 0;
    }
    .item p {
      color: #777;
    }
    .add-to-cart {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }
    .cart {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border-radius: 100%;
      font-size: 20px;
      cursor: pointer;
    }
    .cart span {
      font-size: 12px;
    }
    .cart-count {
      position: absolute;
      top: 5px;
      right: 5px;
      background-color: #fff;
      color: #007bff;
      padding: 2px 6px;
      border-radius: 50%;
      font-size: 12px;
    }
  </style>
  <script>
    // Cart object to store the items
    var cart = [];

    // Function to add an item to the cart
    function addToCart(item) {
      cart.push(item);
      updateCartCount();
    }

    // Function to update the cart count display
    function updateCartCount() {
      var cartCount = document.getElementById('cart-count');
      cartCount.textContent = cart.length;
    }
  </script>
</head>
<body>
  <header>
    <h1>Modern E-Commerce Store</h1>
  </header>

  <div class="container">
    <div class="item">
      <img src="https://template194360.motopreview.com/mt-demo/194300/194360/mt-content/uploads/2021/08/mt-2249-products-img1.jpg" alt="Mino notebook">
      <h3>Mino notebook</h3>
      <p>$10.00</p>
      <button class="add-to-cart" onclick="addToCart('Item 1')">Add to Cart</button>
    </div>

    <div class="item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMKinTGYdg8voQm-7AeznSEltPaLe--hsCuw&usqp=CAU" alt="Item 2">
      <h3>Item 2</h3>
      <p>$15.00</p>
      <button class="add-to-cart" onclick="addToCart('Item 2')">Add to Cart</button>
    </div>

    <div class="item">
      <img src="item3.jpg" alt="Item 3">
      <h3>Item 3</h3>
      <p>$20.00</p>
      <button class="add-to-cart" onclick="addToCart('Item 3')">Add to Cart</button>
    </div>

    <div class="item">
      <img src="item4.jpg" alt="Item 4">
      <h3>Item 4</h3>
      <p>$25.00</p>
      <button class="add-to-cart" onclick="addToCart('Item 4')">Add to Cart</button>
    </div>
  </div>

  <div class="cart" onclick="showCart()">
    <i class="fa fa-shopping-cart"></i>
    <span id="cart-count"></span>
  </div>

  <script>
    // Function to show the cart
    function showCart() {
      alert('Items in Cart: ' + cart.join(', '));
    }
  </script>
</body>
</html>
