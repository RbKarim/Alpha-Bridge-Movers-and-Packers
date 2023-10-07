<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Alpha Bridge Movers & Packers</title>
</head>

<body class="d-flex flex-column min-vh-100">


    <!--navgation bar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand">Alpha Bridge Movers And Packers</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            echo $_SESSION['LoggedUserName'];
                            ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="SignOut.php">Log Out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Creating database and insertion for Form properties-->
    <?php
    if (isset($_POST["form_submit"])) {

        $name = $email = $p_location = $pack_date = $service = $mobile = $place = $d_location = $move_date = "";

        $name = input($_POST["name"]);

        $email = input($_POST["email"]);

        $p_location = input($_POST["p_loc"]);

        $pack_date = input($_POST["p_date"]);

        $service = input($_POST["service"]);

        $mobile = input($_POST["mobile"]);

        $place = input($_POST["place"]);

        $d_location = input($_POST["d_loc"]);

        $move_date = input($_POST["d_date"]);




        if (!empty($name) && !empty($email) && !empty($p_location) && !empty($pack_date) && !empty($service) && !empty($mobile) && !empty($place) && !empty($d_location) && !empty($move_date)) {

            //echo ("Everything is properly filled up");

            //DATABASE creation
            $server_name = "localhost";
            $user_name = "root";
            $password = "";

            $connection = mysqli_connect($server_name, $user_name, $password);

            if (!$connection) {
                echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
            }

            $db = "CREATE DATABASE IF NOT EXISTS MoversAndPackers";

            if (mysqli_query($connection, $db)) {
               // echo "Database Creation Successful<br>";
            } else {
                echo ("Error: " . mysqli_error($connection));
            }
            mysqli_close($connection);

            //TABLE creation
            $db_name = "MoversAndPackers";

            $connection1 = mysqli_connect($server_name, $user_name, $password, $db_name);

            $query = "CREATE TABLE IF NOT EXISTS order_list
            (
                Names varchar(30),
                Email varchar(50),
                Present_Location varchar(50),
                Packing_Date DATE,
                Services varchar(50),
                Mobile varchar(15),
                Place varchar(30),
                Destination varchar(50),
                Moving_Date DATE
            )";



            if (mysqli_query($connection1, $query)) {
            } else {
                echo ("Error: " . mysqli_error($connection1));
            }

            //insert into table

            $value = "INSERT INTO order_list (Names,Email, Present_Location, Packing_Date,Services,Mobile,Place,Destination,Moving_Date) VALUES ('$name','$email','$p_location','$pack_date','$service','$mobile','$place','$d_location','$move_date')";

            if (mysqli_query($connection1, $value)) {
                // header("Location: quote.php?info=added");
            } else {
                echo "Error: " . mysqli_error($connection1) . "<br>";
            }


            mysqli_close($connection1);
        } else {
            echo "<h4 class=\"warning\">All Fields Are Required....!!!</h4>";
        }
    }
    ?>

    <!-- Display any info -->
    <div>
        <?php if (isset($_REQUEST['info'])) { ?>
            <?php if ($_REQUEST['info'] == "added") { ?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php } ?>
        <?php } ?>

    </div>


    <!--Check whether SignUp fields are filled or not-->
    <?php
    function input($data)
    {
        $data = trim($data);
        return $data;
    }

    ?>

    <form method="POST" id="Qform" class="input_form2">
        <!--Assessment form-->
        <div class="container-fluid">
            <div class="row">
                <div class="center">
                    <h1 class="assessment mt-5">Assessment Form</h1>
                    <p class="assessment_p">Please fill up the form!</p>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-md-3 ">

                </div>
                <div class="col-md-3 ">
                    <!--Qoute form left-->

                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="Mr.X" name="name" required><br>
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="Email" placeholder="name@mail.com" name="email" required><br>
                    <label for="ploc" class="form-label">Present Location</label>
                    <input type="text" class="form-control" id="ploc" placeholder=" " name="p_loc" required><br>
                    <label for="pacdate" class="form-label">Packing Date</label>
                    <input type="date" class="form-control" id="pacdate" name="p_date" required><br>
                    <label for="" class="form-label">Services</label>
                    <select name="service" class="form-select" aria-label="Default select example" required>
                        <option value="Cargo packing staff">Cargo packing staff</option>
                        <option value="Residential packaging and shifting service">Residential packaging and shifting service</option>
                        <option value="Commercial packaging and shifting service">Commercial packaging and shifting service</option>
                        <option value="Disposal service">Disposal service</option>
                        <option value="Carpentry service">Carpentry service</option>
                    </select><br>

                </div>
                <div class="col-md-3 ">
                    <!--Quote form right-->
                    <label for="mblno" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mblno" placeholder="01XXXXXXXXX" name="mobile" required><br>
                    <label for="" class="form-label">House / Office</label>
                    <select name="place" class="form-select" aria-label="Default select example" required>
                        <option value="House">House</option>
                        <option value="Office">Office</option>
                    </select><br>
                    <label for="Dloc" class="form-label">Destination Location</label>
                    <input type="text" class="form-control" id="Dloc" placeholder=" " name="d_loc" required><br>
                    <label for="Ddate" class="form-label">Delivery Date</label>
                    <input type="date" class="form-control" id="Ddate" placeholder=" " name="d_date" required>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <button type="submit" form="Qform" class="submit_btn" name="form_submit">Send us</button>


                </div>
            </div>



        </div>
    </form>





    <!--Footer-->

    <div class="footer_ab container-fluid">
        <footer class="mt-auto">
            <div class="row">

                <div class="col-md-6 mt-5 footertext">
                    <h5>Contact</h5>
                    <div class="my-4 ">
                        <i class="fa fa-phone-square" aria-hidden="true"> 01748700219</i><br>
                        <i class="fa fa-envelope" aria-hidden="true"> info@abmp.com</i><br>
                        <i class="fa fa-map-marker mt-1" aria-hidden="true"> House # 67, Road # 20, Block - B,
                            Banani, Dhaka 1212</i><br>
                    </div>
                </div>

                <div class="col-md-6 mt-5 footertext ">
                    <h5>USeful Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sevices</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blogs</a></li>
                    </ul>
                </div>


            </div>

            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>
                        <span class="text-muted">© 2022 Company, Inc</span>
                    </div>

                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <div class="col-2">
                            <a class="btn btn-primary btn-lg btn-floating" style="background-color: #0077b5;" href="https://www.linkedin.com/" role="button"><i class="fa fa-linkedin"></i></a><br>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-lg btn-floating" style="background-color: #4267B2;" href="https://www.facebook.com/" role="button"><i class="fa fa-facebook"></i></a><br>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary btn-lg btn-floating" style="background-color: #00acee;" href="https://www.twitter.com/ " role="button"><i class="fa fa-twitter"></i></a><br>
                        </div>
                    </ul>
                </footer>
            </div>
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>