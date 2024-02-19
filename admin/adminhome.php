<?php
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
        }
        .logo{
       position:relative;
       float:right;
       top:-60px;
       height:50px;
       width: 50px;
        
       }
        
        .sidebar {
            width: 100px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        .sidebar h2 {
            margin-top: 0;
        }
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        
        .sidebar li {
            margin-bottom: 10px;
        }
        .sidebar li a{
            text-decoration: none;
            color:black;
            margin-bottom:40px;
        }
        .sidebar li a:hover{
            color:#088178;
        }
        
        
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        
        h1 {
            margin-top: 0;
            text-align: center;
        }
        
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            float: left;
            margin-right: 20px;
        }
        
        .greeting {
            margin-top: 0;
        }
        
        .message {
            font-style: italic;
            color: #777;
            padding-top:10px;
            padding-bottom:30px;
        }
        
        .menu {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Admin Home</h1>
        <a href="#"><img src="https://seeklogo.com/images/R/risingwave-icon-logo-837E37238C-seeklogo.com.png" class = "logo" ></a>
        <div>
            <h2 class="greeting">Hello, Admin</h2>
            <img class="avatar" src="http://localhost/avatars/admin.png" alt="Admin Avatar">
        </div>
        <div class="menu">
            <div class="message">Click on a menu option to view  specific contents.</div>
            <div class="sidebar">
                <h2>Menu</h2>
                <ul>
                    <li><a href="adminusers.php" onclick="showUsers()">Users</a></li>
                    <li><a href="adminproducts.php" onclick="showProducts()">Products</a></li>
                    <li><a href="admincategories.php" onclick="showCategories()">Categories</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script>
        function showUsers() {
            // Perform actions to display users
            document.getElementById('result').innerHTML = "You clicked on 'Users'. Perform actions to display users.";
        }
        
        function showProducts() {
            // Perform actions to display products
            document.getElementById('result').innerHTML = "You clicked on 'Products'. Perform actions to display products.";
        }
        
        function showCategories() {
            // Perform actions to display categories
            document.getElementById('result').innerHTML = "You clicked on 'Categories'. Perform actions to display categories.";
        }
    </script>
</body>
</html>
