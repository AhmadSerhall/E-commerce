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


<title>Home Page</title>
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
        color:#222;
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
    #homeoffer{
        background-image:url('https://img.freepik.com/premium-vector/people-choosing-clothes-flat-vector-illustration-family-couple-isolated-cartoon-characters-white-background-fashion-wardrobe-shopping-together-presents-bags-purchases-party-celebration_106317-8717.jpg?w=2000');
        height:90vh; 
        width:100%;
        background-size:cover;
        background-position:top 25% right 0;
        display:flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
    }
    #homeoffer h4{
        padding-top:40px;
        padding-bottom: 60px;
        padding-left:20px;
    }
    #homeoffer h2{
        padding-bottom: 20px;
        padding-top:10px;
        padding-left: 20px;
    }
    #homeoffer h1{
        padding-left:20px; 
        color:red;
    }
    #homeoffer button{
        background-image:url('assets/button.png');
        background-color:transparent;
        color:black;
        border:0;
        padding:14px 80px 14px 65px;
        background-repeat: no-repeat;
        cursor:pointer;
        font-weight:700;
        font-size:15px;
    }
/*     3am nshil el decoration underline w l blue color ele bya3ti el link lal button*/
     #homeoffer button a{
        text-decoration:none;
        color:black;
    }
   
   #homeoffer button a:hover,
    #homeoffer button a:active{
       text-decoration: none;
       color:black;
    }
    
    #product1 .pro-container{
        display: flex;
        justify-content: space-between;
        padding-top:20px;
        padding-left:20px;
        padding-right:20px;
        flex-wrap: wrap;
        position: relative;
    }
    
/*    featured product text*/
    #product1{
        text-align: center;
        padding-top:50px;
        padding-bottom: 30px;   
    }
/*    border ele men7ot be2albo el image*/
    #product1 .pro{
        position:relative;
        width:23%;
        min-width:250px;
        padding:10px 12px;
        border:1px solid #cce7d0;
        border-radius:25px;
        cursor: pointer;
        box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
        margin:20px;
        margin-top:60px;
        transition:0.4sec ease;
    }

    #product1 .pro:hover{
        box-shadow: 20px 20px 30px rgba(0,0,0,0.06);
    }
    
    #product1 .pro img{
        width:100%;
        border-radius:20px;
    }
    #product1 .pro .des{
        text-align: start;
        padding:10px 0;

/*        addidas*/
    }
    #product1 .pro .des span{
        color:#060663;
        font-size:13px;
    }
    #product1 .pro .des h5{
        padding-top:7px;
        font-size:14px;
        color:black;
    }
    #product1 .pro .des i{
        font-size:12px;
        
    }
    #product1 .pro .des h4{
        font-size:16px;
        padding-top:7px;
        font-weight:700;
        color:#088178;
        
    }
    #product1 .pro .cart{
        
        width:40px;
        height:40px;
        line-height:40px;
        border-radius: 50px;
        font-weight: 500;
        background-color:#e8f6ea; 
        color:#088178;
        border:1px solid #cce7d0;
        position:absolute;
        bottom:40px;
        right:5px;

    }
    #banner{
        display:flex;
        flex-direction:column;
        justify-content:center;
        text-align: center;
        color:white;
        background-image: url('assets/img/banner/b2.jpg');
        width:100%;
/*        vh hiye viewport height w vw hiye viewport width la ta3tine measurement proportunate lal browser w better placement*/
        height:40vh;
        background-size:cover;
        background-position:center;
        
        

    }
    #banner button{
        width:100px;
        height:30px;
        font-size:13px;
        font-weight: 600;
        color:black;
        border:none;
        border-radius: 8px;
        cursor: pointer;
        outline:none;
        position:relative;
        margin-left:550px;
        transition: 0.2s;       
    }
    #banner button a{
        text-decoration: none;
        color:black;
    }
    
    #banner button:hover{
        background: #088178;
        color:white;
    }
    #banner h4{
        color:#fff;
        font-size: 16px;
        
    }
    #banner h2{
        color:white;
        padding-bottom: 10px;
        font-size:30px;
    }
    #banner h2 span{
        color:#ef3636;
    }
   #sm-banner{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        
    }
    #sm-banner .banner-Box{
         display:flex;
        flex-direction:column;
        justify-content:center;
/*        text-align: center;*/
        align-content: flex-start;
        color:white;
        background-image: url('assets/img/banner/b17.jpg');      
        min-width: 505px;
        height:50vh;
        background-size:cover;
        background-position:center;
        padding:20px;
       
    }
     #sm-banner .banner-Box2{
         display:flex;
        flex-direction:column;
        justify-content:center;
/*        text-align: center;*/
        align-content: flex-start;
        color:white;
        background-image: url('assets/img/banner/b18.jpg');      
        min-width: 505px;
        height:50vh;
        background-size:cover;
        background-position:center;
        padding:20px;
       
    }
   
    
     #sm-banner h4{
        font-size: 20px;
        color:white;
        font-weight: 300;
    }
    #sm-banner h2{
        font-size: 26px;
        font-weight:600;
        color:white;
        
    }
    #sm-banner span{
        color:black;
        font-size:18px;
        font-weight: 500;
        padding-bottom:15px;
        
    }
     #sm-banner button {
        width:94px;
        height:50px;
        font-size:10px;
        font-weight:600;
        color:white;
        border:1.4px solid #fff;
        outline:none;
        cursor:pointer;
        background-color: transparent;
        padding:11px 18px;
        margin:15px;
        transition:0.2s ease;
    }
    #sm-banner button a{
        color:white;
        text-decoration: none;
    }
    #sm-banner button:hover{
        background-color:#088178;
    }
      #sm-banner .banner-Box2 button{
        width:94px;
        height:50px;
        font-size:10px;
        font-weight:600;
        color:white;
        border:1.4px solid #fff;
        outline:none;
        cursor:pointer;
        background-color: transparent;
        padding:11px 18px;
        margin:15px;
        transition:0.2s ease;
    }
    #sm-banner .banner-Box2 button a{
        color:white;
        text-decoration: none;
    }
     #sm-banner .banner-Box2 button:hover{
        background-color:rgb(243,181,25); 
    }
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
/*    .follow{
        padding:5px;
        
    }*/
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
<li><a href="home.php" class="active ">Home</a></li>
<li><a href="shop.php" target="-blank">Shop</a></li>
<li><a href="aboutus.php" target="-blank">About Us</a></li>
<li><a href="contactus.php" target="-blank">Contact Us</a></li>
<li><a href="cart.php" target="-blank"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
<li><a href='profile.php' target="-blank"><i class="fa-regular fa-user fa-lg"></i></a></li>
</ul>
</div>
</section>
    <section id="homeoffer">
        <h4>Trade in offer</h4>
        <h2>Super Deals</h2>
        <h2>On All products</h2>
        <h1>Save up to 60%</h1>
        <button><a href='shop.php'>Shop Now</a></button>
          
    </section>
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div class="pro">
            <a href='homeproducts/paparazi.php'><img src="http://localhost/products/tshirts/f1.jpg" alt=""></a>
        <div class='des'>
            <span>Lacoste</span>
            <h5> paparrazi T-Shirt</h5>
            <div class='star'>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4>70$</h4>
        </div>
<!--        hone kenit el cart icon ma 3m betbayin emet na2alet el tag te3 el i w zedet class bel e5ir esma cart-->
         <a href='#'><i class=" fal fa-shopping-cart cart "></i></a>
    </div>
        
        <div class="pro">
            <a href='homeproducts/gst.php'><img src="http://localhost/products/tshirts/n4.jpg" alt=""></a>
        <div class='des'>
            <span>Adidas</span>
            <h5> G.ST T-Shirt</h5>
            <div class='star'>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
            </div>
            <h4>78$</h4>
        </div>
        <a href='#'><i class="fal fa-shopping-cart cart"></i></a>
    </div>
        <div class="pro">
            <a href='homeproducts/blossom.php'><img src="http://localhost/products/tshirts/f4.jpg" alt=""></a>
        <div class='des'>
            <span>Adidas</span>
            <h5> Blossom T-Shirt</h5>
            <div class='star'>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4>62$</h4>
        </div>
        <a href='#'><i class="fal fa-shopping-cart cart"></i></a>
    </div>
        <div class="pro">
            <a href='homeproducts/pant.php'><img src="http://localhost/products/pants/n6.jpg" alt=""></a>
        <div class='des'>
            <span>Adidas</span>
            <h5> classic pant</h5>
            <div class='star'>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4>80$</h4>
        </div>
        <a href='#'><i class="fal fa-shopping-cart cart"></i></a>
    </div>
        <div class="pro">
            <a href='homeproducts/dress.php'><img src="http://localhost/products/dresses/Dress4.jpg" alt=""></a>
        <div class='des'>
            <span>Chanel</span>
            <h5> Water Flower Dress</h5>
            <div class='star'>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4>$70</h4>
        </div>
        <a href='#'><i class="fal fa-shopping-cart cart"></i></a>
    </div>
        <div class="pro">
            <a href='homeproducts/freshfit.php'><img src="http://localhost/products/tshirts/f6.jpg" alt=""></a>
        <div class='des'>
            <span>Boss</span>
            <h5> Fresh&Fit T-Shirt</h5>
            <div class='star'>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star" style='color:rgb(243,181,25)'></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4>70$</h4>
        </div>
        <a href='#'><i class="fal fa-shopping-cart cart"></i></a>
    </div>
        
    </div>
    </section>
    
    <section id="banner" class='sectionm1'>
        
        <h2>Up to <span>60%</span> on all T-shirts and Accessories</h2>
        <button><a href ='http://localhost/web3%20project/product.php?category=t-shirts'>Explore More</a></button>
        
    </section>
    
    <section id='sm-banner' class='sectionp1'>
        <div class='banner-Box'>
            <h4>Crazy Trades</h4>
            <h2>Buy 1 and fall in love</h2>
            <span>We got the most fancy and stylish heels on sale </span>
            <button><a href='http://localhost/web3%20project/product.php?category=heels'>Learn More</a></button>
            
        </div>
        
        <div class='banner-Box2'>
            <h4>Spring/Summer</h4>
            <h2>Upcomming Season</h2>
            <span>We got the best classic dresses on sale </span>
            <button><a href='http://localhost/web3%20project/product.php?category=dresses'>Collection</a></button>
        </div>
        
    </section>
    
<!--    footer divided into column-->
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
                    <a href='https://www.facebook.com/BossiniLebanon/?locale=fr_FR' target="-blank"><i class="fab fa-facebook-f"></i></a>
                    <a href='https://twitter.com/hkartagener/status/638005603646967810' target="-blank"><i class="fab fa-twitter"></i></a>
                    <a href='https://www.instagram.com/bossinileb/?hl=fr' target="-blank"><i class="fab fa-instagram"></i></a>
                    <a href='https://www.pinterest.com/sellegedara/bossini/' target="-blank"><i class="fab fa-pinterest-p"></i></a>
                    <a href='https://www.youtube.com/c/bossinishower' target="-blank"><i class="fab fa-youtube"></i></a>
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
            <a href='logout.php'>Create Another Account</a>
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







