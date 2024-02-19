<?php
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}
require_once 'connectionadmin.php';
$productid=$_GET['productid'];
$query="SELECT * FROM product WHERE productid=$productid";
$result= mysqli_query($con, $query);

if($result){
    $row= mysqli_fetch_assoc($result);
}


?>
<html>
    <head>
        <title>editing product</title>
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
                margin-left: auto;
                margin-right: auto;
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
<h1>Editing product</h1>
<!--lezim ykoun same method bel tnen editproduct w editproduct2 la tezbat aw byetla3le blank white screen ya3ne bel tnen method=GET-->
 <form method="GET" action="editproduct2.php">
    <table border="2" class="center">
        <tr>
            <td>ID</td>
            <td><input type="text" name="productid" size="20" value="<?php echo $row['productid']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="productname" size="20" value="<?php echo $row['productname']; ?>"/></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><input type="text" name="categoryid" size="20" value="<?php echo $row['categoryid']; ?>"readonly/></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td><input type="text" name="brandname" size="20" value="<?php echo $row['brandname']; ?>"/></td>
<!--            //ken nese yhot ssn w pnam w status w salary ben ''men ba3ed $row hatayton w zabat ken 3m ya3tine undefined constant error-->
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" size="20" value="<?php echo $row['price']; ?>"/></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><input type="text" name="quantity" size="20" value="<?php echo $row['quantity']; ?>"/></td>
        </tr>
        
<!--        <tr>
            <td>
                <input type="submit" value="UPDATE"/> 
            </td>
        </tr>-->
    </table>
     <button input type="submit" class="btn">Update</button>
    </form>
        </div>
    </body>
</html>
   



