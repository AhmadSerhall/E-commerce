<?php
include 'userfunctions.php';
include('connection.php');
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <title> Shop Page</title>
  
  <style>
    *{
        margin: 0;
        padding:0;
        font-family: 'spartan',sans-serif;
        box-sizing:border-box;
    }
    
    h1{
        font-size:50px;
        line-height: 64px;
        color:#222;
    }
    
    h2{
        font-size:20px;
        line-height: 54px;
        color:black;
    }
    
      h4{
        font-size:20px;
        color:#222;
    }
    
    h6{
        font-weight:700;
        font-size: 12px;
    }
    p{
        font-size: 16px;
        color: #465b52;
        margin:15px 0px 20px 0;
        
    }
    span{
        font-size:18px;
        font-weight: 600;
        text-height: 20px;
    }
    .sectionp1{
       padding:40px 80px;
        
    }
    .sectionm1{
       margin:40px 0; 
    }
    body{
       width:100%;
    }
    
    .logo{
       position:relative;
       left:-8px;
       top:8px;
       height:50px;
       width: 50px;
        
    }
    #header{
        display:flex;
        align-items: center;
        justify-content: space-between;
        padding:20px 30px;
        background:white;
/*        hon el ossa kela bas zabit el postion bebatlo befouto be ba3don howe ken hateta sticky ana 8ayarta la2ano 3am befouto be ba3d*/
        position:relative;
        top:0px;
        box-shadow:0 5px 15px rgba(0,0,0,0.2);
        
    }
    #navbar{
        display:flex;
        align-items: center;
        justify-content: center;
/*        z-index: 9999;*/
    }
    #navbar li{
/*        daroure n7ot position relative bel parent navbar li la ybayin el pseudo class navbar li a.active::after*/
        position: relative;
        list-style: none;
        padding:0 20px;
    }
    #navbar li a{
        font-size: 15px;
        font-family: sans-serif;
        text-decoration: none;
        font-weight: 600;
        color:#1a1a1a;
    }
    #navbar li a:hover,
    #navbar li a.active{
        color:#088178;
        transition:0.1s ease; 
/*        pseudo class*/
    }
    #navbar li a.active::after{
        content:"";
        background:#088178;
        width:30%;
        height:2px;
        position:absolute;
        bottom:-4px;
        left:20px; 
    }
    #page-header{
        background-image:url('assets/img/banner/b1.jpg');
        height:40vh; 
        width:100%;
        background-size:cover;
        background-position:top 25% right 0;
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

     .about-header h2 {
        color:white;
        font-weight: 600;
    }
    .about-header p{
        color:white;
        font-weight: 100;
    }
    .about-header p span{
        color:#ef3636;
    }
    #product1 h2{
        text-align: center;
    }
     #product1 p{
        text-align: center;
    }
    .container {
      position:relative;
      display: inline-flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      cursor:pointer;
      padding: 20px;
    }
    .container .item {
      width: 200px;  
      min-height:auto;
      margin: 20px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      transition: box-shadow 0.3s;
    }
    .container a{
        text-decoration: none;
    }
    .item:hover {
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }
    .item img {
      width: 100%;
      height: auto;

    }
    .item h4 {
      margin: 10px 0;
      color:black;
    }

/*    footer*/
    footer{
        display: flex;
        flex-wrap:wrap;
        justify-content: space-between;
    }
    footer .col{
        display:flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 20px;
    }
    
    footer .logo{
        margin-bottom: 17px;
    }
    footer h4{
        font-size:14px;
        padding-bottom:10px;
        
    }
    footer p{
        font-size:13px;
        margin:0 0 8px 0;
    }
    footer a{
        font-size:13px;
        text-decoration: none;
        color:black;
        margin:0 0 8px 10px;
        margin-bottom: 10px;
    }
    footer .follow{
        margin-top: 20px;
        
    }
    footer .follow i{
        color:#465b52;
        padding-right:4px;
        cursor:pointer;
    }
/*    lama na3te margin 4 values bye5od top ba3den right ba3den bottom ba3den left*/
    footer .install .row img{
        border:1px solid #088178;
        border-radius: 6px;
        margin:10px 0 10px 0 ;
    }

    footer .follow i:hover,
    footer a:hover{
        color:#088178;
    }
    footer .copyright{
        width:100%;
        text-align:center;
    }
    
    </style>
</head>

<body>
     <section id="header">
<a href="#"><img src="https://seeklogo.com/images/R/risingwave-icon-logo-837E37238C-seeklogo.com.png" class = "logo" ></a>

<div>
<ul id="navbar">
<li><a href="home.php">Home</a></li>
<li><a href="shop.php"   class="active " target="-blank">Shop</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contactus.php" target="-blank">Contact Us</a></li>
<li><a href="cart.php" target="-blank"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
<li><a href='profile.php' target="-blank"><i class="fa-regular fa-user fa-lg"></i></a></li>
</ul>
</div>
</section>
    
     <section id="page-header" class="about-header">
        <h2>Stay Fresh & Fit</h2>
        <p>Get discounts on all our products up to <span>60%</span></p>
    </section>
    
     </section>
<section id="product1">
    <h2>Our Newest Collection Of Products Is Here!</h2>
    <p>Search our finest product easier by choosing the category</p>
</section>
     
    <?php 
$category = getAllActive("category");

if (!empty($category)) {
    foreach ($category as $item) {
?>
<div class="container">
    <a href="product.php?category=<?= isset($item['slug']) ? $item['slug'] : ''; ?>">
        <div class="item">
            <img src="<?= isset($item['categoryimage']) ? $item['categoryimage'] : ''; ?>">
            <h4><?= isset($item['categoryname']) ? $item['categoryname'] : ''; ?></h4>
        </div>
    </a>
</div>
<?php
    }
} else {
    echo("no data");
}
?>

    
    
    
    <footer class='sectionp1'>
        <div class='col'>
            <img class='logo' src="https://seeklogo.com/images/R/risingwave-icon-logo-837E37238C-seeklogo.com.png"style='width:40px ;padding-bottom:20px'" alt="alt"/>
            <h4>Contact</h4>
            <p>Address: <strong>kaslik,Lebanon</strong>
            <p>Phone Number: <strong>+961 9 830 065</strong></p>
            <p>Hours: <strong>10:00 - 22:00 , Mon-Sat</strong></p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="aboutus.php">About Us</a>
            <a href="deliveryinformation.php">Delivery Information</a>
            <a href="privacypolicy.php">Privacy Policy</a>
            <a href="termsofcondition.php">Terms Of Condition</a>
            <a href="contactus.php">Contact Us</a>
  
        </div>
        
         <div class="col">
            <h4>My Account</h4>
            <a href="index.php">Create Another Account</a>
            <a href="cart.php">View Cart</a>
            <a href="wishlist.php">My WishList</a>
            <a href="faq.php">FAQ's</a>
            <a href="help.php">Help</a>
            
        </div>
        
         <div class="col install">
            <h4>Install App</h4>
            <p>from AppStore or PlayStore</p>
            <div class="row">
                <img src="assets/img/pay/app.jpg">
                 <img src="assets/img/pay/play.jpg">
                 <p>Secure Payment Gateways</p>
                  <img src="assets/img/pay/pay.png">
            </div>
            
        </div>
        <div class="copyright">
            <p><strong>@2023,Mystic Marketplace-HTML CSS PHP E-COMMERCE Web3 Final Project</strong></p>
        </div>
        
    </footer>
    
    
</body>
</html>