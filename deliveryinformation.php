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
<html>
<head>
  <title>Delivery Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
    }
    
    h1 {
      color: #333;
    }
    
    p {
      color: #666;
      line-height: 1.6;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .container h1{
        font-size: 50px;
        font-weight: 800;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Delivery Information</h1>
    <p>Thank you for choosing our delivery service. Here are some important details regarding the delivery:</p>
    
    <h2>Delivery Options</h2>
    <ul>
      <li>Standard Delivery: 3-5 business days</li>
      <li>Express Delivery: 1-2 business days</li>
      <li>Same-Day Delivery: Available in select areas</li>
    </ul>
    
    <h2>Delivery Charges</h2>
    <p>Delivery charges may apply based on the delivery option and location. The charges will be displayed during the checkout process.</p>
    
    <h2>Tracking Your Order</h2>
    <p>Once your order is dispatched, you will receive a tracking number via email or SMS. You can use this tracking number to track the status of your delivery on our website.</p>
    
    <h2>Contact Us</h2>
    <p>If you have any questions or need further assistance regarding your delivery, please feel free to press <a href ='contactus.php'> here </a> in order to contact our customer support team.</p>
  </div>
</body>
</html>

