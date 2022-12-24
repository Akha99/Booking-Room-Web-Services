<?php

include '../Functions/func.php';


if( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];
     
    $result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

    //cek username
    if( mysqli_num_rows($result) === 1) {

    //cek password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ){
        header("Location: homeuser.php");
        exit;
        }
    }
    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="../style/login_user.css">
    <title>User Login Page</title>
</head>
<body>
    

<div class="center">
<ul>
    <h1>Login</h1>
</ul>


<?php if( isset($error)) : ?>
    <p style = "color: red; font-style: italic;">Your Username or Password Wrong</p>
<?php endif; ?>

    

<form action="" method="post">
            <!--Q1-->
            <div class="txt_field">
            <input type="text" name="username" id="username" required> 
            <label for="text">Username</label>
            <span></span></div>
             <!--Q2-->
            <div class="txt_field">
            <input type="password" name="password" id="password" required> 
            <label for="text">Password</label>
            <span></span></div>
            

            <input type="submit" name="login">
            <br><br>
            <div class="signup_link">
            Not a member? <a href="registuser.php">Signup</a>
            </div>
             
        
 
</form>
</body>
</html>