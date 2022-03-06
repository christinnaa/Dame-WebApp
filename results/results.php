<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/cropped-NDDU-Site-Favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <title>NDDU Document</title>
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
            <li><a class="active" href="../results/results.php"><b>Results</b></a></li>
            <li><a href="../students/students.php">Students</a></li>
            <li><a href="../about/about.php">About</a></li>
            <li><a href="../logout.php">Log Out</a></li>
        </ul>
    </nav>
    <?php include "../include/loader.php"; ?>
    <div id="form" class="container border mt-4 text-center">
        <div class="d-flex justify-content-center mt-3">
            <div class="logo">
                <img class="school-logo" src="../assets/img/NDDUseal.png">
            </div>
            <div class="name">
                <h4>Notre Dame of Dadiangas University</h4>
                <h6>Marist Avenue, General Santos City</h6>
                <p>Guidance and Testing Center</p>
            </div>

        </div>

        <br>
        <form action="add-records.php" method="post" enctype="multipart/form-data">
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group">
                    <span class="input-group-text">
                        <span class="bi-person"></span>
                    </span>
                    <input type="text" name="name" class="form-control shadow-none" placeholder="Student's Full Name" required>
                </div>
            </div>
            <div id="info" class="col-4">
                <div class="input-group" style="width: 90%;">
                    <span class="input-group-text">
                        <span class="bi-building"></span>
                    </span>
                    <input type="text" name="prev_school" class="form-control shadow-none" placeholder="Previous School" required>
                </div>
            </div>
            <div id="info" class="col-3">
                <div class="dropdown">
                    <select name="gender" class="btn dropdown-toggle form-select shadow-none" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" required>
                        <option selected>Select Gender</option>
                        <option class="dropdown-item" value="Female">Female</option>
                        <option class="dropdown-item" value="Male">Male</option>
                    </select>

                </div>



                <!-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select Gender
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" value="Male" href="#">Male</a></li>
                            <li><a class="dropdown-item" value="Female" href="#">Female</a></li>
                            <li><a class="dropdown-item" href="#">...</a></li>
                        </ul>
                    </div> -->
            </div>
        </div>
        <div>
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
                                    <input type="text" name="school_ability_score" class="form-control shadow-none" placeholder="insert score" required>
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
                                    <input type="text" name="apt_verbal_score" class="form-control shadow-none" placeholder="insert score" required>
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
                                    <input type="text" name="apt_numerical_score" class="form-control shadow-none" placeholder="insert score" required>
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="signature-div">
            <div id="wrapper" class="wrapper clearfix">
                <div class="float-start">
                    <h4>_____________________</h4>
                    <h6>Applicant's Signature</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-toolbar">
        <button type="submit" id="btn" name="add_official_btn" class="btn btn-outline-success" >Save Changes</button>
        
    </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>