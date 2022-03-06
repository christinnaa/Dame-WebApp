<?php
include "../db/config.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/img/cropped-NDDU-Site-Favicon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <title>NDDU Document</title>
</head>

<div id="form" class="container border mt-4 text-center">
    <div class="d-flex justify-content-center mt-3">
        <div class="logo">
            <img class="school-logo" src="../assets/img/NDDUseal.png" />
        </div>
        <div class="name">
            <h4>Notre Dame of Dadiangas University</h4>
            <h6>Marist Avenue, General Santos City</h6>
            <p>Guidance and Testing Center</p>
        </div>
    </div>

    <br />
    <?php
    $id = $_GET['id'];
    $squery =  mysqli_query($conn, "select * from students where id = $id");
    while ($row = mysqli_fetch_array($squery)) {
    ?>
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group" style="justify-content: center">
                    Name: <?php echo $row['name'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="input-group" >
                   Previous School:  <?php echo $row['prev_school'] ?>

                </div>
            </div>
            <div id="info" class="col-4">
                <div class="dropdown">
                    Gender: <?php echo $row['gender'] ?>

                </div>


            </div>
        </div>
       
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Type of Test</th>
                        <th>Percent Rank</th>
                        <th>Standard Nine</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>School Ability</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <?php echo $row['school_ability_score'] ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Aptitude Verbal</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <?php echo $row['apt_verbal_score'] ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                    </tr>
                    <tr>
                        <td>Aptitude Numerical</td>
                        <td>
                            <div id="percent-rank" class="col-4">
                                <div class="input-group">
                                    <?php echo $row['apt_numerical_score'] ?>
                                    <!-- <input type="text" class="form-control shadow-none" placeholder="insert score" /> -->
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>
     
    <?php
    }
    ?>
    <br />
    <div class="wrapper clearfix">
        <div class="float-start">
            <h4>________________</h4>
            <h6>Applicant's Signature</h6>
        </div>
    </div>
</div>
<div class="print-tool">
    <button class="btn btn-outline-success" id="print-btn" onclick="printPage()">
        Print
    </button>
    <button class="btn btn-outline-success" id="back-btn" onclick="history.back()">
        Back
    </button>
</div>

</html>