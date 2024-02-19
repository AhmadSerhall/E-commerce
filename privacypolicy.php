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
  <title>Privacy Policy</title>
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
        font-weight: 800;
        font-size:50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Privacy Policy</h1>
    <p>Your privacy is important to us. This Privacy Policy outlines the types of personal information we receive and collect when you use our website and how we safeguard your information. By using our website, you consent to the collection, use, and disclosure of your personal information as described in this policy.</p>
    
    <h2>Information Collection and Use</h2>
    <p>We may collect personal information such as your name, email address, and contact details when you fill out forms on our website. We use this information to communicate with you and provide the services you request.</p>
    
    <h2>Information Sharing and Disclosure</h2>
    <p>We do not sell, trade, or rent your personal information to third parties. We may share your information with trusted service providers who assist us in operating our website and conducting our business, but they are obligated to keep your information confidential.</p>
    
    <h2>Security</h2>
    <p>We take reasonable measures to protect the personal information we collect from unauthorized access, disclosure, or alteration. However, no method of transmission over the internet or electronic storage is 100% secure, so we cannot guarantee absolute security.</p>
    
    <h2>Changes to This Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the updated policy on our website. By continuing to use our website after the changes are made, you accept the updated policy.</p>
    
    <h2>Contact Us</h2>
    <p>If you have any questions or concerns about our Privacy Policy, please press <a href='contactus.php'>here</a> contact us</p>

  </div>
</body>
</html>

