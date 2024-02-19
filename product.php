<?php //
include 'connection.php';
include 'userfunctions.php';
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}

$category_slug = $_GET['category'];
$category_data = getSlugActive('category', $category_slug);
$category = mysqli_fetch_array($category_data);
$categoryid = $category['categoryid'];
?>

<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title> product Page</title>
    <style>
        
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
        .pro-container {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            flex-wrap: wrap;
            position: relative;
            margin-left: 20px;
        }

        .pro-container .item {
            position: relative;
            width: 200px;
            padding: 15px 12px;
            border: 1px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
            margin: 20px;
            margin-top: 20px;
            transition: 0.4s ease;
            list-style: none;
        }
        
        .pro-container .item a {
            text-decoration: none;
            color: black;
        }
        
        .pro-container .item img {
            width: 100%;
            border-radius: 20px;
        }
        
        .pro-container .item:hover {
            box-shadow: 20px 20px 30px rgba(0,0,0,0.06);
        }

        .pro-container .item i {
            font-size: 14px;
        }
        
        .pro-container .item .cart {
            position: absolute;
            bottom: 40px;
            right: 10px;
            color: #088178;
            font-weight: 350;
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

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Category/ <?= isset($category['categoryname']) ? $category['categoryname'] : ''; ?></h1>
                <br/>
                <hr><br/>
                <div class="pro-container">
                    <?php
                    if ($category !== null) {
                        $product = getProdByCategory($categoryid);
                        if (mysqli_num_rows($product) > 0) {
                            foreach ($product as $item) {
                                $productImage = isset($item['productimage']) ? $item['productimage'] : '';
                                $productBrand = isset($item['brandname']) ? $item['brandname'] : '';
                                
                                $productName = isset($item['productname']) ? $item['productname'] : '';
                                $productDesc = isset($item['productdesc']) ? $item['productdesc'] : '';
                                $price = isset($item['price']) ? $item['price'] : '';
                                ?>
                                <div class="item">
                                    <a href="productview.php?product=<?= $item['slug']; ?>">
                                        <img src="<?= $productImage; ?>" alt="Product Image">
                                        <h3><?= $productBrand; ?></h3>
                                        <h4><?= $productName; ?></h4>
                                        <h4><?= $productDesc; ?></h4>
                                        <h4><?= $price . $dollar; ?></h4>
                                        <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                                    </a>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No data available";
                        }
                    } else {
                        echo "Category not found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
