<?php
session_start();
include 'connectionadmin.php';
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}

if(isset($_GET['categoryid']) && ($_GET['categoryid']!="")
        && isset($_GET['categoryname']) && ($_GET['categoryname']!="")
        && isset($_GET['categoryimage']) && ($_GET['categoryimage']!="")
       )
{
    $categoryid=$_GET['categoryid'];
    $categoryname=$_GET['categoryname'];
    $categoryimage=$_GET['categoryimage'];
    
    
    //hone darouree ma ensaa WHERE categoryid='$categoryid' aw behotole error 
    $query="UPDATE category set categoryid='$categoryid', categoryname='$categoryname',categoryimage='$categoryimage' WHERE categoryid='$categoryid'";
    $result= mysqli_query($con, $query);
    if($result)
    {
        header("location:admincategories.php");
    }
    else
    {
        header("location:editcategory.php?categoryid=$categoryid");
    }

}
?>

