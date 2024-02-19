<?php
session_start();
include 'connectionadmin.php';
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}
//ken lezim hotelo hayde la tozbat la a3ti el productid hadedlo aya howe
$categoryid=$_GET['categoryid'];


$query2="DELETE FROM category where categoryid= $categoryid";
$result2= mysqli_query($con, $query2);
//echo $result2;
header("location:admincategories.php");

