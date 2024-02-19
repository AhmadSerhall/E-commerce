<?php
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}


?>
<?php
include'connectionadmin.php';


// Retrieve the products from the database
//darouree nhot where user_type='user' 3ashen ma ya3tina el admin ma3 el user bel table
$sql = "SELECT * FROM userlogin WHERE user_type='user'";

$result= mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
<!--hayda last link howe ele zabat el icons-->


    
    <title>Admin Page - users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        i{
            color:black;
        }
        i:hover{
            color:#088178;
        }
        .btn{
            border:transparent;
            cursor:pointer;
            width:90px;
            height:50px;
            margin-top:20px;
            margin-left:550px;
            border-radius: 20px;
            
            background-color:#088178;
            text-align: center;
        }
        .btn a{
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body>
    <h1>Admin Page - users</h1>
    
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th> Email</th>
            <th>Username</th>
            <th>Password</th>      
            <th>gender </th>
            <th>Avatar</th>
            <th>Subject</th>
            <th>Message</th>
            <th>cart</th>
            <th>wishlist</th>
            <th>Date Created</th>
            <th>Delete</th>
            
        </tr>
        
        <?php
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td><img src='" . $row["avatar"] . "' alt='avatar' width='50' height='50'></td>";
                echo "<td>" . $row["subject"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "<td>" . $row["cart"] . "</td>";
                echo "<td>" . $row["wishlist"] . "</td>";
                echo "<td>" . $row["accdate"] . "</td>";


                echo "<td><a href=\"deleteuser.php?username=" .$row['username']. "\"><i class=\"fa-solid fa-trash\"></i></a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No users found.</td></tr>";
        }
        ?>
    </table>

    
</body>
</html>

<?php
$con->close();
?>




