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
$sql = "SELECT * FROM category";
//$result = $con->query($sql);
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


    
    <title>Admin Page - categories</title>
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
    <h1>Admin Page - categories</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Image</th>          
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
        
        <?php
        // Loop through each row of the result set
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["categoryid"] . "</td>";
                echo "<td>" . $row["categoryname"] . "</td>";
                echo "<td><img src='" . $row["categoryimage"] . "' alt='Product Image' width='50' height='50'></td>";
               
//                echo "<td><a href='editproduct.php'><i class=\"fa-solid fa-pen\"></i></a></td>";
//                hone hatayna hek la net2akad enno 3am na3te el id mazbout bel method get la ne2dar nsewe 3le el actions edit or delete
                echo "<td><a href=\"editcategory.php?categoryid=" . $row['categoryid'] . "\"><i class=\"fa-solid fa-pen\"></i></a></td>";

                echo "<td><a href=\"deletecategory.php?categoryid=" .$row['categoryid']. "\"><i class=\"fa-solid fa-trash\"></i></a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No categories found.</td></tr>";
        }
        ?>
    </table>
    <button class="btn"><a href='addcategory.php'>Add Category</a></button>
    
</body>
</html>

<?php
// Close the database connection
$con->close();
?>
