<?php
session_start();
include "../config.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NDDU Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"> <img class="school-logo" src="../img/nddu-logo.png"> </label>
      <ul>
        <li><a class="active" href="#"><b>Home </b></a></li>
        <li><a href="../results/results.html">Results</a></li>
        <li><a href="../students/students.html">Students</a></li>
        <li><a href="#">About</a></li>
        <li><a href="../logout.php">Log Out</a></li>
      </ul>
    </nav>
    <section>
      <div class="container">
        <br>
          <h1>Notre Dame</h1>
      </div>
    </section>
  </body>
</html>