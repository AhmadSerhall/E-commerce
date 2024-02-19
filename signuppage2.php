<!DOCTYPE html>
<html>
<head>
    <title>Sign Up </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .error-message {
            color: red;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
      text-align: center;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
    }

    .btn:hover {
            background-color: #0069d9;
    }
    </style>
   
</head>
<body>
    <div class="container">
    <h2>Sign Up</h2>
    <form onsubmit="return validateForm()" action="signup.php" method="POST" enctype="multipart/form-data">
        <label for="first_name">First Name:</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name"required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" required>
        
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        
         <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password"required>
        <p id="error-message" class="error-message"></p>

        <label for="gender">Gender:</label>
        <input type="radio" id="gender_male" name="gender" value="male">Male


        <input type="radio" id="gender_female" name="gender" value="female">Female

        <br/><br/>
<!--gender manna el meshkle bas in order la tetsayav el data bel data base w ma yotla3le blank screen lezim tetna2a ya dakar ya enteye-->

        <label for="avatar">Avatar:</label>
        <input type="file" id="avatar" name="avatar" accept="image/*" >

        <button type="submit" class="btn">Sign Up</button>
        <p id="error-message" class="error-message"></p>
    </form>
    </div>
     <script>
        function validateForm() {
            var emailInput = document.getElementById("email");
            var passwordInput = document.getElementById("password");
            var usernameInput = document.getElementById("username");
            var errorMessage = document.getElementById("error-message");

            errorMessage.innerHTML = "";

            // Check if email is valid
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                errorMessage.innerHTML = "Invalid email address";
                return false;
            }

            // Check password strength
            var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/;
            if (!passwordRegex.test(passwordInput.value)) {
                errorMessage.innerHTML = "Weak password. It should contain at least 6 characters with at least one uppercase letter, one lowercase letter, and one digit.";
                return false;
            }

            // Check if username already exists (assuming you have a list of existing usernames)
            var existingUsernames = ["ahmad", "moe", "admin"];
            if (existingUsernames.includes(usernameInput.value)) {
                errorMessage.innerHTML = "Username already exists";
                return false;
            }

            return true;
        }
//        hayde l method sha8ale lamma ykoun el name msayav bel database w ykoun maktoub bel existingUsernames var w thoto mara tenye byetla3lak error
//        bas ma byezbat eza l username msayav bel database w katabto mara tenye w manak hatto be2alb existingUsernames bya3tik else el message ele 
//        enta hateta bas yetla3lak error
    </script>
</body>
</html>

