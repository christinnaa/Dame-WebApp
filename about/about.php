<?php
session_start();
include "../db/config.php";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>NDDU Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
</head>

<body>
  

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"> <img class="school-logo" src="../assets/img/nddu-logo.png"> </label>
        <ul>
            <li><a href="../home/home.php">Home</a></li>
            <li><a href="../results/results.php">Results</a></li>
            <li><a href="../students/students.html">Students</a></li>
            <li><a class="active" href="#"><b>About</b></a></li>
            <li><a href="../logout.php">Log Out</a></li>
        </ul>
    </nav>
<?php include "../include/loader.php";?>
<section>
      
      <div class="container">
          <div class="main-container">
              <div class="left-container">
                <div class="vision">
                  <h1 class="title">About</h1>
                  <p class="description">NDDU Guidance and Testing Center supports the holistic development of students
                      by providing services such as Counseling, testing, FGD and Growth Sessions.
                  </p>
                </div> <br>
              </div>
              <div class="right-container">
              </div>
          </div>
      </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

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