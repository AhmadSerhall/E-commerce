<?php
session_start();
include 'connection.php';

if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['password']) && $_POST['password'] != "") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username, password, user_type, wishlist,cart FROM userlogin WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($res);
    if ($row) {
        $_SESSION['isloggedin'] = true;
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_type'] = $row['user_type'];

        if ($row['wishlist']) {
            $_SESSION['wishlist'] = explode(',', $row['wishlist']);
        } else {
            $_SESSION['wishlist'] = array();
        }
        if ($row['cart']) {
            $_SESSION['cart'] = explode(',', $row['cart']);
        } else {
            $_SESSION['cart'] = array();
        }

        if ($row['user_type'] == "user") {
            header('Location: home.php');
        } elseif ($row['user_type'] == "admin") {
            header('Location: admin/adminhome.php');
        }
    } else {
        $_SESSION['login_error'] = "Username or password incorrect";
        header('Location: index.php');
    }
}

   






