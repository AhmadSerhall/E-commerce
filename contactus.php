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
  <title>Contact Us</title>
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

     .contactus-header h2 {
        color:white;
        font-weight: 600;
    }
    .contactus-header p{
        color:white;
        font-weight: 100;
    }
    
    #contact-details{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
     #contact-details .details {
        width:40%;
            height:auto;
     }
     #contact-details .details span,
     #form-details form span{
         font-size:16px;
     }
     #contact-details .details h2,
     #form-details form h2{
         font-size:26px;
         line-height:35px;
         padding:20px 0;
     }
    
     #contact-details .details li{
         list-style: none;
         display: flex;
         padding:10px 0;
     }
     #contact-details .details li i{
         font-size: 14px;
         padding-right: 22px;
     }
     #contact-details .details li p{
         margin:0;
         font-size: 14px;
     }
     
     #contact-details .map {
         width:55%;
         height:400px;
     }
     #contact-details .map iframe{
         width:100%;
         height:100%;
     }
     #form-details{
         display: flex;
         justify-content: space-between;
         margin:30px;
         padding:80px;border:1px solid #e1e1e1;
     }
     #form-details form{
         width:65%;
         display:flex;
         flex-direction: column;
         align-items: flex-start;
     }
     #form-details form input,
     #form-details form textarea{
         width:100%;
         padding:12px 15px;
         outline:none;
         border:1px solid #e1e1e1;
         margin-bottom: 20px; 
     }
     #form-details form button{
         background-color: #088178;
         color:white;
         width:80px;
         height:60px;
         cursor: pointer;
         border-radius:15px;
         
     }
     #form-details .people div{
         padding-bottom:25px;
         display: flex;
         align-items: flex-start;
         
     }
     #form-details .people div img{
         width:65px;
         height:65px;
         object-fit: cover;
         margin-right:20px;
         margin-top:140px;
         margin-left: 80px;
     }
     #form-details .people div p{
         
         font-size:14px;
         line-height: 25px;
         margin-top:100px;
         margin-right:90px;
         
         
     }
      #form-details .people div p span{
       display:block;
       font-size: 14px;
       font-weight:500;
       color:black;
         
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
<li><a href="aboutus.php" target="-blank">About Us</a></li>
<li><a href="contactus.php"   class="active " target="-blank">Contact Us</a></li>
<li><a href="cart.php" target="-blank"><i class="fa-solid fa-cart-shopping fa-lg"></i></a></li>
<li><a href='profile.php' target="-blank"><i class="fa-regular fa-user fa-lg"></i></a></li>
</ul>
</div>
</section>
    
     <section id="page-header" class="contactus-header">
        <h2>Let's Talk</h2>
        <p> Leave A Message We Love To Hear Your Feedback</p>
    </section>
    
    <section id='contact-details' class='sectionp1'>
        <div class='details'>
            <span>Get In Touch</span>
            <h2>Visit One Of Our Agency Locations Or Contact Us Today</h2>
            <h3>head office</h3>
            <div>
                <li>
                    <i class='fal fa-map'></i>
                    <p>Kaslik Lebanon 54 Street </p>
                </li>
                
                 <li>
                    <i class='far fa-envelope'></i>
                    <p>mohamad.baydoun@gmail.com</p>
                </li>
                
                 <li>
                    <i class='fas fa-phone-alt'></i>
                    <p>+961 9 830 065</p>
                </li>
                
                 <li>
                    <i class='far fa-clock'></i>
                    <p>10:00 - 22:00 , Mon-Sat</p>
                </li>
            </div>
        </div>
        
        <div class='map'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13234.194571525568!2d35.6153017!3d33.9784389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f4085da2b912d%3A0x88c7622fffd6d6d4!2sBossini!5e0!3m2!1sfr!2slb!4v1686859512796!5m2!1sfr!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </section>
    <section id='form-details' class='sectionp1'>
        <form action='savemessage.php' method='POST'>
            <span>Leave A Message</span>
            <h2>We Would Love To Hear From You</h2>
<!--            <input type='text' placeholder='Username'>
             <input type='text' placeholder='E-mail'>-->
              <input type='text' name='subject'placeholder='Subject'>
              <textarea name='message'  cols='30' row='10' placeholder="Your Message"></textarea>
              <button type='submit' class='button' >Submit</button>
        </form>
        <div class='people'>
            <div>
            <img src=http://localhost/avatars/1.png>
            <p><span>
                Mohammad Baydoun
                </span> Customer Representative aka V.O.C (Voice Of Clients)<br/>
                        Phone:+961 71 380 271<br/>
                        mail:mohammad.baydoun@gmail.com</p>
            </div>
        </div>
            
    </section>
    
    
    
    
    
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
            <a href="logout.php">Create Another Account</a>
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