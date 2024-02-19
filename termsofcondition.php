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
  <title>Terms of Conditions</title>
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
    <h1>Terms of Conditions</h1>
    <p>Welcome to our website. By accessing and using this website, you accept and agree to be bound by the following terms and conditions:</p>
    
    <h2>Use of Website</h2>
    <p>You agree to use this website for shopping purposes and in a way that does not infringe upon the rights of others or restrict their use and enjoyment of the website. Prohibited activities include, but are not limited to, transmitting or uploading malicious software, spamming, or engaging in any form of illegal or unauthorized activity.</p>
    
    <h2>Intellectual Property</h2>
    <p>All content on this website, including text, graphics, logos, images, and software, is the property of our company and protected by intellectual property laws. You may not reproduce, distribute, modify, or otherwise use any content without our prior written permission.</p>
    
    <h2>Disclaimer</h2>
    <p>This website is provided on an "as is" basis. We make no warranties, expressed or implied, regarding the accuracy, reliability, or availability of the website. We disclaim any liability for any damages or losses arising from the use of this website.</p>
    
    <h2>Links to Third-Party Websites</h2>
    <p>This website may contain links to third-party websites. We have no control over the content and availability of these websites and are not responsible for any damages or losses incurred by accessing or using them. The inclusion of any links does not imply our endorsement of the linked websites.</p>
    
    <h2>Changes to Terms of Conditions</h2>
    <p>We reserve the right to update or modify these terms and conditions at any time without prior notice. By continuing to use the website after the changes are made, you accept the updated terms and conditions.</p>
    
    <h2>Contact Us</h2>
    <p>If you have any questions or concerns about our Terms of Conditions, feel free to press  <a href='contactus.php'>here</a>  contact us:</p>
  </div>
    
</body>
</html>

