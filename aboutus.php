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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <title>About Us</title>
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
        font-size:46px;
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
        background-image:url('assets/img/about/banner.png');
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
    #page-header .about-head img{
        height:40px;
        width:40px;
    }
    #about-head{
        display:flex;
        align-items:center;
    }
    #about-head div{
        padding-left: 40px;
    }
    #about-head p{
        font-size: 12px;
        line-height: 1.5;
        margin-bottom: 20px;
        color: #333;
    }
    #about-head img{
        width:50%;
         height:auto; 
/*       height auto allow image to adjust its high naturally to fit withoutexplicit height constraint*/
    }
    #about-head h2{
        color:black;
        font-weight: 600;
    }
    #about-app h2{
        text-align: center;
        color:black;
    }
    #about-app .video{
        width:70%;
        height:100%;
        margin: 30px auto 0 auto;
        
    }
    #about-app .video video{
        height:100%;
        width:100%;
        border-radius: 20px;
        
    }
/*    footer css code*/
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
<li><a href="shop.php">Shop</a></li>
<li><a href="aboutus.php"  class="active " target="-blank">About Us</a></li>
<li><a href="contactus.php" target="-blank">Contact Us</a></li>
<li><a href="cart.php" target="-blank"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
<li><a href='profile.php' target="-blank"><i class="fa-regular fa-user fa-lg"></i></a></li>
</ul>
</div>
</section>
    
    <section id="page-header" class="about-header">
        <h2>Know Us</h2>
        <p> Get To Know Us And Know What We Provide</p>
    </section>
    <section id='about-head' class='sectionp1'>
        <img src='assets/img/about/a6.jpg'>
        <div>
            <h2>Who We Are?</h2>
            <p>
                We are a passionate team of fashion enthusiasts dedicated to providing the latest trends and high-quality clothing to our valued customers. With a keen eye for style and a commitment to exceptional customer service, we strive to create an unforgettable shopping experience.

                At our clothing store, we believe that fashion is a form of self-expression, and we're here to help you discover your unique style. Whether you're looking for trendy outfits, timeless classics, or statement pieces, our diverse collection caters to every individual's taste and preference.

                With a focus on quality, we carefully curate our clothing selection to ensure that each piece meets our stringent standards. From the fabric choice to the craftsmanship, we prioritize excellence to deliver garments that not only look great but also stand the test of time.

                We understand the importance of staying up-to-date with the latest fashion trends, which is why our team is constantly researching and sourcing new styles. We aim to offer a curated selection that reflects the current fashion landscape while also providing timeless wardrobe staples that transcend seasons.

                Above all, our customers' satisfaction is our top priority. We strive to provide a seamless shopping experience, from browsing our website to receiving your order at your doorstep. Our friendly and knowledgeable customer support team is always ready to assist you with any queries or concerns you may have.

                Join us on this fashion journey and let us help you express your unique style with confidence. 
         
            </p>
            <marquee bgcolor='#ccc' loop='-1' scrollamount='infinite' width='100%' >
                We invite you to explore our collection and experience the joy of fashion at our clothing store
                
            </marquee>
        </div>
        
    </section>
    
    <section id='about-app' class='sectionp1'>
        <h2>Download Our <a href='https://apps.microsoft.com/store/detail/river-island-clothing/9WZDNCRDSBC7' target=' blank'> App</a> For Free</h2>
        <div class='video'>
            <video autoplay muted loop src='assets/img/about/1.mp4' alt=''/>
        </div>
        
    </section>
    
    
<!--    footer-->
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


