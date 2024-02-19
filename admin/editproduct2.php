<?php
session_start();
include 'connectionadmin.php';
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}

if(isset($_GET['productid']) && ($_GET['productid']!="")
        && isset($_GET['productname']) && ($_GET['productname']!="")
        && isset($_GET['categoryid']) && ($_GET['categoryid']!="")
        &&  isset($_GET['brandname']) && ($_GET['brandname']!="")
        &&  isset($_GET['price']) && ($_GET['price']!="")
        &&  isset($_GET['quantity']) && ($_GET['quantity']!=""))
{
    $productid=$_GET['productid'];
    $productname=$_GET['productname'];
    $categoryid=$_GET['categoryid'];
    $brandname=$_GET['brandname'];
    $price=$_GET['price'];
    $quantity=$_GET['quantity'];
    
    
    $query="UPDATE product set productname='$productname', categoryid='$categoryid',brandname='$brandname',price='$price',quantity='$quantity' where productid ='$productid'";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:adminproducts.php");
    }
    else
    {
        header("location:editproduct.php?productid=$productid");
    }

}
?>
