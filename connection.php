<?php

$db_hostname = 'localhost';
$db_database = 'web3proj';
$db_username = 'root';
$db_password = ''; // your username and passwords might be different on your xampp (usually username is “root”, password is ‘’)
$con = new mysqli($db_hostname,$db_username,$db_password,$db_database,3307);

// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
