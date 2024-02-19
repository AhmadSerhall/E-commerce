<?php
session_start();
include 'connectionadmin.php';

if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
    exit(); // Terminate script execution after redirection
}

if (isset($_GET['productid']) && $_GET['productid'] != ""
    && isset($_GET['productname']) && $_GET['productname'] != ""
    && isset($_GET['productimage']) && $_GET['productimage'] != ""
    && isset($_GET['categoryid']) && $_GET['categoryid'] != ""
    && isset($_GET['brandname']) && $_GET['brandname'] != ""
    && isset($_GET['price']) && $_GET['price'] != ""
    && isset($_GET['quantity']) && $_GET['quantity'] != "") {

    $productid = $_GET['productid'];
    $productname = $_GET['productname'];
    $productimage = $_GET['productimage'];
    $categoryid = $_GET['categoryid'];
    $brandname = $_GET['brandname'];
    $price = $_GET['price'];
    $quantity = $_GET['quantity'];
    $slug= $_GET['productname'];
    
//    hone hatoule enno slug w proddescription ma 3andon default value emet la zabit l error re7et 3a database w 7ataytelon default value Null

    $query = "INSERT INTO product (productid, productname, productimage, categoryid, brandname, price, quantity)
              VALUES ('$productid', '$productname', '$productimage', '$categoryid', '$brandname', '$price', '$quantity')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "A new product has been inserted successfully";
    }
}

mysqli_close($con);
?>

<html>
<head>
    <title>Add Product</title>
    <style>
         body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f1f1f1;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1{
                text-align: center;
            }
            .center{
                margin-left:262px;
                
            }
            .btn{
                font-weight: 500;
                border-radius:5px;
                border:4px;
                width:auto;
                height:30px;
                margin-top:20px;
                margin-left:360px;
                cursor:pointer;
                color:black;
                background-color:#f1f1f1;
            }
            .btn:hover{
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
                color:#088178;
            }
            
    </style>
</head>
<body>
    <div class="container">
<h1>Adding a new Product</h1>
<form method="GET" action="addproduct2.php">
    <table border="2" class="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="productid" size="20"/></td>
        </tr>
         <tr>
            <td>Slug</td>
            <td><input type="text" name="slug" size="20"/></td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="productname" size="20"/></td>
        </tr>
        <tr>
            <td>Product Image</td>
            <td><input type="text" name="productimage" size="20"/></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><input type="text" name="categoryid" size="20"/></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td><input type="text" name="brandname" size="20"/></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" size="20"/></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="text" name="quantity" size="20"/></td>
        </tr>
<!--        <tr>
            <td>
                <input type="submit" value="SUBMIT"/>
            </td>
        </tr>-->
    </table>
     <button input type="submit" class="btn">Add Product</button>
</form>
<!--ma daroure ykouno bel tedrij wara ba3don metel el database bas hon ken 3ande error men ba3ed ma hot product variable of object null zabato lamma 5ala2et slug
w 7atayto bel addproduct2.php-->
    </div>
</body>
</html>
