<?php
include('connection.php');


function getAllActive($category){
    global $con;
    $query="SELECT * FROM category ";
    return $query_run= mysqli_query($con,$query);
    
}
//ha el function la talli3 kel el info ta3oul el category w menhoton be array 
function getSlugActive($category,$slug){
    global $con;
    $query="SELECT * FROM category where slug='$slug' LIMIT 1";
    return $query_run= mysqli_query($con,$query);
    
}
//ha la ntali3 kel el info ta3oul el products
function getSlugActive2($product,$slug){
    global $con;
    $query="SELECT * FROM product where slug='$slug' LIMIT 1";
    return $query_run= mysqli_query($con,$query);
}
function getProdByCategory($categoryid){
    global $con;
    $query="SELECT * FROM product where categoryid='$categoryid'";
    return $query_run= mysqli_query($con,$query);
    
}

function getIdActive($category,$id){
    global $con;
    $query="SELECT * FROM category where id='$id'";
    return $query_run= mysqli_query($con,$query);
    
}
$dollar='$';