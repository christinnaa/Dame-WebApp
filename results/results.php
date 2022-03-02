<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"> <img class="school-logo" src="../assets/img/nddu-logo.png"> </label>
        <ul>
            <li><a  href="../home/home.php">Home</a></li>
            <li><a class="active" href="../results/results.html"><b>Results</b></a></li>
            <li><a href="../students/students.html">Students</a></li>
            <li><a href="#">About</a></li>
            <li><a href="../logout.php">Log Out</a></li>
        </ul>
    </nav>
    <?php include "../include/loader.php";?>
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
        <div id="form-input" class="row g-2">
            <div id="info" class="col-4">
                <div class="input-group">
                    <span class="input-group-text">
                        <span class="bi-person"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="Student's Full Name">
                </div>
            </div>
            <div id="info" class="col-4">
                <div class="input-group" style="width: 90%;">
                    <span class="input-group-text">
                        <span class="bi-building"></span>
                    </span>
                    <input type="text" class="form-control" placeholder="Previous School">
                </div>
            </div>
            <div id="info" class="col-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     Select Gender
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Male</a></li>
                      <li><a class="dropdown-item" href="#">Female</a></li>
                      <li><a class="dropdown-item" href="#">...</a></li>
                    </ul>
                  </div>
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
                                    <input type="text" class="form-control" placeholder="insert score">
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
                                    <input type="text" class="form-control" placeholder="insert score">
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
                                    <input type="text" class="form-control" placeholder="insert score">
                                </div>
                            </div>
                        </td>
                        <td>---</td>
                    </tr>                    
                </tbody>
            </table>
        </div>
        <br>
         <div class="wrapper clearfix">
            <div class="float-start">
                <h4>_____________________</h4>
                <h6>Applicant's Signature</h6>
            </div>
        </div>
    </div>

   
        <div class="btn-toolbar">
            <button type="button" id="btn" class="btn btn-outline-success">Save Changes</button>
        </div>



    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>