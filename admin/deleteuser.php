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
$username=$_GET['username'];


$query2="DELETE FROM userlogin where username= '$username'";
$result= mysqli_query($con, $query2);
//echo $result2;
header("location:adminusers.php");