<?php
session_start();
include 'connection.php';
if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
    exit();
} else {
    $username = $_SESSION['username'];
    $password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
}

// Retrieve user information from the database
$sql = "SELECT * FROM userlogin WHERE username='$username'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("Error: Unable to fetch user information from the database.");
}

// Handle form submission for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];

    // Update the username and password in the database
    $sql = "UPDATE userlogin SET username = '$newUsername', password = '$newPassword' WHERE username = '$username'";
    
    if (mysqli_query($con, $sql)) {
        $username = $newUsername; // Update the current username
        $row['username'] = $newUsername; // Update the fetched row's username
         $password = $newPassword; // Update the current username
        $row['password'] = $newPassword; // Update the fetched row's username
        
    } else {
        die("Error: Unable to update user information in the database.");
    }
}

// Function to display the user's avatar image
function displayAvatar($avatar) {
    echo '<div class="avatar"><img src="' . $avatar . '" alt="Avatar"></div>';
}

// Function to display the user information form
function displayForm($email, $username, $password) {
    echo '<form method="post" action="">';
    echo '<label>Email: </label><input type="text" value="' . $email . '" readonly><br><br>';
    echo '<label>Username: </label><input type="text" name="username" value="' . $username . '"><br><br>';   
    echo '<label>Password: </label>'. ' <input type="password" name="password" value="' . $password . '"><br><br>';
    echo '<input type="submit" value="Update">';
    echo '</form>';
}

// Handle avatar update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['avatar'])) {
    $avatarFile = $_FILES['avatar'];
    $avatarName = $avatarFile['name'];
    $avatarTmp = $avatarFile['tmp_name'];
    $avatarPath = 'avatars' . $avatarName;

    // Move the uploaded avatar to the avatars directory
    move_uploaded_file($avatarTmp, $avatarPath);

    // Update the avatar path in the database
    $sql = "UPDATE userlogin SET avatar = '$avatarPath' WHERE username = '$username'";
    if (mysqli_query($con, $sql)) {
        // Refresh the page to reflect the updated avatar
        header("Location: profile.php");
        exit();
    } else {
        die("Error: Unable to update avatar path in the database.");
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <style>
        body{
            padding:20px;
            background-color: #f1f1f1;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          }
        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            overflow: hidden;
            justify-content: center;
            
        }

        .avatar img {
            width: 100%;
            height: auto;
            justify-content: center;
            
        }
          
        .avatar-container {
            display: flex;
            justify-content: center;
            padding:20px;
            margin:20px;
        }
        a{
            text-decoration: none;
            color:black;
        }
        a:hover{
            color:blue;
        }
        
    </style>
</head>

<body>
    <div class="container">
    <h1>Profile Page</h1>
    <h2>Welcome <?php echo $row['username']; ?></h2>
    
    <div class="avatar-container">
    <?php
    
    displayAvatar($row['avatar']);?>
    </div>
    
    <?php displayForm($row['email'], $row['username'], $row['password']);?>
    
    <br>
<!--    <form method="post" action="" enctype="multipart/form-data">
        <label>Change Avatar: </label><input type="file" name="avatar" accept="avatars/*"><br><br>
        <input type="submit" value="Update Avatar">
    </form>-->
    <br>
    <a href="logout.php">Logout</a>
    </div>
</body>
</html>

<?php

mysqli_close($con);
?>
