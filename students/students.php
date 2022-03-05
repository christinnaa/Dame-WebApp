<?php

include "../db/config.php";

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NDDU Students</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../assets/img/cropped-NDDU-Site-Favicon.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
      <li><a class="active" href="../students/students.php"><b>Students</b></a></li>
      <li><a href="../about/about.php">About</a></li>
      <li><a href="../logout.php">Log Out</a></li>
    </ul>
  </nav>
  <?php include "../include/loader.php"; ?>
  <section>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Previous School</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
          </tr>
        </thead>


        <tbody>
          <?php

          $squery =  mysqli_query($conn, "select * from students");
          while ($row = mysqli_fetch_array($squery)) {

          ?>
            <tr>
              <td scope="row"><?php echo $row['id'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['prev_school'] ?></td>
              <td><?php echo $row['gender'] ?></td>
              <td><a class="btn btn-outline-success" href="../print/print.php?id=<?php echo $row['id']?>">View</a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</body>

</html>