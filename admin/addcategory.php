
<?php
session_start();
include 'connectionadmin.php';

if ($_SESSION['isloggedin'] != 1) {
    header("Location:index.php");
    exit(); // Terminate script execution after redirection
}

if (isset($_GET['categoryid']) && $_GET['categoryid'] != ""
    && isset($_GET['categoryname']) && $_GET['categoryname'] != ""
    && isset($_GET['categoryimage']) && $_GET['categoryimage'] != ""){

    $categoryid = $_GET['categoryid'];
    $categoryname = $_GET['categoryname'];
    $categoryimage = $_GET['categoryimage'];
    
    
//    hone hatoule enno slug w proddescription ma 3andon default value emet la zabit l error re7et 3a database w 7ataytelon default value Null

    $query = "INSERT INTO category (categoryid, categoryname, categoryimage)
              VALUES ('$categoryid', '$categoryname', '$categoryimage')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    } else {
        echo "A new Category has been inserted successfully";
    }
}

mysqli_close($con);
?>

<html>
<head>
    <title>Add Category</title>
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
<h1>Adding a new Category</h1>
<form method="GET" action="addcategory2.php">
    <table border="3" class='center'>
        <tr>
            <td>ID</td>
            <td><input type="text" name="categoryid" size="20"/></td>
        </tr>
        <tr>
            <td>Category Slug</td>
            <td><input type="text" name="slug" size="20"/></td>
        </tr>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="categoryname" size="20"/></td>
        </tr>
        <tr>
            <td>Category Image</td>
            <td><input type="text" name="categoryimage" size="20"/></td>
        </tr>
        
        

<!--                lamme neje nekbos submit 3al category beda tenzal el category bel database sha8ale w mbayne w betbayin kmn bel website
bas lamma tekbos 3alaya fiya error la2ano el slug mana m3arfino bel addcategory
3atayta ana bel database default value null bas bel website bye5od slug w ana m3arafo
la zabeta taret ana be ide bel database erja3 a3te slug la yemshe l hal w ybatil fi errors fiya 

Rje3et zabata zedet el slug attribut  bel addcategory bel table w bel addcategory2 zedta sarit do8re bas zid category ma bta3tine errors bas bede 
efta7a bas el database el slug attribut fadye lakan el solution hoton bel tedrij la yemsho w yezbato -->

        
    </table>
    <button type='submit' class='btn'>Add Category</button>
</form>
</body>
</div>
</html>
