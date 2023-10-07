<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Alpha Bridge Movers & Packers</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!--navgation bar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Alpha Bridge Movers And Packers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="CargoPacking.php">Cargo packing staff</a></li>
                            <li><a class="dropdown-item" href="ResidentialP&S.php">Residential packaging and shifting service</a></li>
                            <li><a class="dropdown-item" href="CommercialP&S.php">Commercial packaging and shifting service</a></li>
                            <li><a class="dropdown-item" href="Disposal.php">Disposal service</a></li>
                            <li><a class="dropdown-item" href="Carpentry.php">Carpentry service</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="quote.php">Get Quote</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="Blogs.php">Blogs</a>
                    </li>

                </ul>


            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <form method="POST">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title" required><br>
            <input type="date" class="form-control" id="pacdate" name="b_date" required><br>
            <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"></textarea>
            <button class="btn btn-dark" name="new_post">Add Post</button>
        </form>
    </div>

    <!--blog-->
    <?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection//DATABASE creation
    $server_name = "localhost";
    $user_name = "root";
    $password = "";

    $connection = mysqli_connect($server_name, $user_name, $password);


    // Destroy if not possible to create a connection
    if (!$connection) {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }
    //db creation
    $db = "CREATE DATABASE IF NOT EXISTS MoversAndPackers";

    if (mysqli_query($connection, $db)) {
      //  echo "Database Creation Successful<br>";
    } else {
        echo ("Error: " . mysqli_error($connection));
    }
    mysqli_close($connection);


    //TABLE creation
    $db_name = "MoversAndPackers";

    $connection1 = mysqli_connect($server_name, $user_name, $password, $db_name);

    $query = "CREATE TABLE IF NOT EXISTS Blogs
         (   
             id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
             title varchar(30),
             dates DATE,
             content varchar(30)
         )";


    if (mysqli_query($connection1, $query)) {
    } else {
        echo ("Error: " . mysqli_error($connection1));
    }



    // Create a new post
    if (isset($_REQUEST['new_post'])) {
        $title = $_REQUEST['title'];
        $date = $_REQUEST['b_date'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO Blogs(title, dates, content) VALUES('$title', '$date ', '$content')";
        mysqli_query($connection1, $sql);

        echo $sql;

        header("Location: index.php?info=added");
        exit();
    }
    // Get data to display on index page
    $sql2 = "SELECT * FROM blog_data";
    $query = mysqli_query($connection1, $sql2);

    // Get post data based on id
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql3 = "SELECT * FROM blog_data WHERE id = $id";
        $query = mysqli_query($connection1, $sql3);
    }

    // Delete a post
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];

        $sql4 = "DELETE FROM blog_data WHERE id = $id";
        mysqli_query($connection1, $sql4);

        header("Location: index.php");
        exit();
    }

    // Update a post
    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql5 = "UPDATE blog_data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($connection1, $sql5);

        header("Location: Blogs.php");
        exit();
    }
    ?>

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
                        <li class="nav-item mb-2"><a href="Blogs.php" class="nav-link p-0 text-muted">Blogs</a></li>
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