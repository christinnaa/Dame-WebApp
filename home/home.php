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
            <li><a class="active" href="#"><b>Home </b></a></li>
            <li><a href="../results/results.php">Results</a></li>
            <li><a href="../students/students.html">Students</a></li>
            <li><a href="#">About</a></li>
            <li><a href="../logout.php">Log Out</a></li>
        </ul>
    </nav>
<?php include "../include/loader.php";?>
<section>
      
      <div class="container">
          <div class="main-container">
              <div class="left-container">
                <div class="vision">
                  <h1 class="title">Vision</h1>
                  <p>Notre Dame of Dadiangas University is a Catholic, Filipino Institution of Academic Excellence established by 
                    the Marist Brothers of the Schools (F M.S. -Fratres Maristae a Scholis) characterized by St. Marcellin Champagnat’s
                    ideals of simplicity humility and quiet zeal for God’s work as inspired by the Blessed Virgin Mary. 
                    The school is dedicated to the formation of persons in all levels of learning, who, as Christian Leaders, 
                    Competent Professionals, Community-Oriented Citizens and Culture Sensitive Individuals will actively participate in 
                    building a peaceful and progressive nation.</p>
                </div> <br>
                <div class="mission">
                  <h1 class="title">Vision</h1>
                  <p>As a Catholic Educational Institution, NDDU shares in the Church’s mission of evangelization by integrating life and faith; <br>

                    As a Filipino Institution, NDDU seeks to preserve Filipino Culture and propagate love of country and its people;<br>
                    
                    As an Institution of Quality Education, NDDU aims leadership in Curricular Programs, Multi-Disciplinary Programs, Research, and Community Services;<br>
                    
                    As a Marist Institution, NDDU promotes the core values of Family Spirit, Marian Spirit, Simplicity, Presence, Preference for the Least Favored, Love of Work, and Integrity of Creation; and <br>
                    
                    As a Community-Oriented Institution NDDU aims to respond to the challenges of the locality it is serving: South Cotabato, Sultan Kudarat, Sarangani Province and, General Santos City (SOCCSKSARGEN Area).</p>
                </div>
              </div>
              <div class="right-container">
                <img class="landing-logo" src="../assets/img/nddu-campus.jpg">
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