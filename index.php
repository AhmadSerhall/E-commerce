<?php
session_start();
//tdaret eftah session start hon la temshe el $_SESSION['error']
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('https://cdn.wallpapersafari.com/33/46/QCWw1E.jpg');
      position: relative;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding-top: 100px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 5px;
    }
    .error {
            color: #ff0000;
            font-size: 17px;
            left:200px;
            
/*            text-align: center;*/
        }

    .form-group button {
      width: 105%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    .form-group2 button {
      width: 105%;
      padding: 10px;
      background-color: blueviolet;
      color: white;
      border: none;
      cursor: pointer;
      margin-bottom:20px;
    }
    

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    
    <div class="logoimage">
        <img src='https://seeklogo.com/images/R/risingwave-icon-logo-837E37238C-seeklogo.com.png' style="width:60px; height:60px;">
    </div>
   
  <div class="container">
    <h1>Login</h1>
    
    <form onsubmit="return validateForm()" action="login.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
<!--        <span id="passwordError" class="error"></span>-->
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
<!--        <span id="passwordError" class="error"></span>-->
      </div>
        
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
    
    
    <form action="signuppage2.php" method="POST">
        <div class="form-group2">
        <button type="submit">Sign-up</button>
      </div>
    </form>
     <?php
        if (isset($_SESSION['login_error'])) {
            echo '<span class="error">' . $_SESSION['login_error'] . '</span>';
//            eza ma hatayneha add ma 3melna refresh lal page betdal el message w 7ata law fetna 3al page login w rje3na 3al index bedda terja3 tbayin lahala
            unset($_SESSION['login_error']);
        }
        ?>
  </div>
    

</body>
</html>
