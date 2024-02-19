<?php
include 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) &&
    isset($_POST['email']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['gender']) &&
    $_POST['firstname'] != '' &&
    $_POST['lastname'] != '' &&
    $_POST['email'] != '' &&
    $_POST['username'] != '' &&
    $_POST['password'] != '' &&
    $_POST['gender'] != ''
) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
//    hone el value of the name key bel $_FILES['avatar'] super global array
//     3am na3mela set equal lal variable $avatarname 
    
    $avatarname =$_FILES['avatar']['name'];
    $target='http://localhost/avatars/'.$avatarname;


    $query = "INSERT INTO `userlogin` (`firstname`, `lastname`, `email`, `username`, `password`, `gender`, `avatar`) 
              VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$gender', '$target')";
    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "Error: " . mysqli_error($con);
    } else {
        header("Location: index.php");
    }
}
?>
