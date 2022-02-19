<?php
session_start();
include "config.php";

$incorrectDetails = false;
if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);    // removes backslashes
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    // Check user is exist in the database
    $hash = md5($password);
    $query    = "SELECT * FROM `users` WHERE username='$username'
                 AND password='$hash' ";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        // Redirect to user dashboard page
        header("Location: home/home.php");
    } else {

        $incorrectDetails = "Incorrect Username/password.";
        
    }
} else {}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>NDDU Log In</title>
</head>
<body>
<?php

    if ($incorrectDetails) {

        echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>  ' . $incorrectDetails . '
    
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
    }?>

    <div class="wrapper">
  
        <div class="logo"> <img src="img/NDDUseal.png" alt=""> </div>
        <div class="text-center mt-4 name"> Notre Dame of Dadiangas University </div>
        <form class="p-3 mt-3" name="login" method="POST">
            <div class="form-field d-flex align-items-center"> 
                <span class="far fa-user"></span> 
                <input type="text" name="username" id="userName" placeholder="Username"> 
            </div>
            <div class="form-field d-flex align-items-center"> 
                <span class="fas fa-key"></span> 
                <input type="password" name="password" id="pwd" placeholder="Password"> 
            </div> 
            <button class="btn mt-3" type="submit" value="Login" name="submit" >Login</button>
       
        </form>
      
        <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="sign-up.php">Sign up</a> </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</body>
</html>