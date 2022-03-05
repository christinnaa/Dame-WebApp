<?php

$showAlert = false;
$showError = false;
$exists = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'db/config.php';

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];


    $sql = "Select * from users where username='$username'";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if ($num == 0) {
        if (($password == $cpassword) && $exists == false) {

            $hash = md5($password);

            // Password Hashing is used here. 
            $sql = "INSERT INTO `users` ( `username`, `email`,
                `password`) VALUES ('$username', '$email',
                '$hash')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    } // end if 

    if ($num > 0) {
        $exists = "Username not available";
    }
} //end if   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/cropped-NDDU-Site-Favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>NDDU Sign Up</title>
</head>

<body>
    <?php

    if ($showAlert) {

        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>  Your account is 
            now created and you can login. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
    }

    if ($showError) {

        echo '  <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>  ' . $showError . '
    
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> ';
    }

    if ($exists) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $exists . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    ?>




    <div class="wrapper">
        <div class="logo"> <img src="assets/img/NDDUseal.png" alt=""> </div>
        <div class="text-center mt-4 name"> Notre Dame of Dadiangas University </div>
        <form class="p-3 mt-3" action="sign-up.php" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="cpassword" id="pwd" placeholder="Confirm Password" required>
            </div>
            <button class="btn mt-3" type="submit">Signup</button>
        </form>
        <div class="text-center fs-6"> Already have an account? <a href="index.php">Login</a> </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="
    https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="
    https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>