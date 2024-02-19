<?php
session_start();
if($_SESSION['isloggedin']!=1){
    header("Location:index.php");
}
else{
    $username=$_SESSION['username'];
}
require_once 'connectionadmin.php';
$categoryid=$_GET['categoryid'];
$query="SELECT * FROM category WHERE categoryid=$categoryid";
$result= mysqli_query($con, $query);

if($result){
    $row= mysqli_fetch_assoc($result);
}


?>
<html>
    <head>
        <style>
             body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f1f1f1;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1{
                text-align: center;
            }
            .center{
                margin-left: auto;
                margin-right: auto;
            }
            .btn{
                font-weight: 500;
                border-radius:5px;
                border:4px;
                width:auto;
                height:30px;
                margin-top:20px;
                margin-left:360px;
                cursor:pointer;
                color:black;
                background-color:#f1f1f1;
            }
            .btn:hover{
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
                color:#088178;
            }
        </style>
    </head>
    <body>
        <div class='container'>
<h1>Editing Category</h1>
<!--lezim ykoun same method bel tnen editproduct w editproduct2 la tezbat aw byetla3le blank white screen ya3ne bel tnen method=GET-->
 <form method="GET" action="editcategory2.php">
    <table border="3" class='center'>
        <tr>
            <td>ID</td>
            <td><input type="text" name="categoryid" size="20" value="<?php echo $row['categoryid']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="categoryname" size="20" value="<?php echo $row['categoryname']; ?>"/></td>
        </tr>
         <tr>
            <td>Category Image</td>
            <td><input type="text" name="categoryimage" size="20" value="<?php echo $row['categoryimage']; ?>"/></td>
        </tr>
        
        
<!--        <tr>
            <td>
                <input type="submit" value="UPDATE"/> 
            </td>
        </tr>-->
    </table>
     <button type='submit' class='btn'>Edit Category</button>
    </form>
        </div>
    </body>
</html>
   



