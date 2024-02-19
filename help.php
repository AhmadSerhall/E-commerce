<?php
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help - Clothing Website</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    main {
      padding: 40px;
    }

    h1 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .help-section h1{
        font-size:50px;
        font-weight:800;
    }

    .help-topic {
      margin-bottom: 40px;
    }

    .help-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .help-description {
      color: #777;
    }

    footer {
      background-color: #f9f9f9;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <main>
    <section class="help-section">
      <h1>Help Center</h1>

      <div class="help-topic">
        <h2 class="help-title">Ordering & Shipping</h2>
        <p class="help-description">Learn how to place an order by visiting the <a href='shop.php'>Shop</a> page and get it shipped to your address.</p>
      </div>

      <div class="help-topic">
        <h2 class="help-title">Returns & Exchanges Policies</h2>
        <p class="help-description">Find out how to return or exchange items and our policy on refunds. Click <a href='privacypolicy.php'>here</a></p>
      </div>

      <div class="help-topic">
        <h2 class="help-title">Sizing Guide</h2>
        <p class="help-description">Get information on how to determine the right size for your clothing items all the details of all the products will be disposed at once <a href='shop.php'>here</a>.</p>
      </div>

      <div class="help-topic">
        <h2 class="help-title">Contact Us</h2>
        <p class="help-description">Have a question or need further assistance? Feel free to contact us by clicky on this button <a href='contactus.php'>here</a>.</p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy;@2023,Mystic Marketplace Website. All rights reserved.</p>
  </footer>
</body>
</html>
