<?php 

include '../Functions/func.php';



if( isset($_POST["register"])){
    if( registuser($_POST) > 0 ){
        echo "<script>
                alert('Register success');        
            </script>";
    } else {
        echo mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../style/regist_user.css">
    <title>User Registration Page</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<div class="center">
    
    <h1>Registration Page</h1>
    

    <form action="" method="post">

    
            <!--Q1-->
            <div class="txt_field">
            <input type="text" name="username" class="form-label" id="username" aria-describedby="emailHelp" required>
            <label for="username" class="form-label">Username</label>
            </div>
            
            <!--Q2-->
            <div class="txt_field">
            <input type="password" name="password" class="form-label" id="password" aria-describedby="emailHelp" required>
            <label for="password" class="form-label">Password</label>
            </div>
            
            
            <!--Q3-->
            <div class="txt_field">
            <input type="password" name="password2" class="form-label" id="password2" aria-describedby="emailHelp" required>    
            <label for="password2" class="form-label">Confirm Password</label>
            
            </div>
            
         
                <input type="submit" name="register"
                value="Register!">
                <div class="signup_link">
            </input>
                <a href="loguser.php">Back to login</a></button>
    
                </div>

    </form>
</body>
</html>