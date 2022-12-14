<?php
            // checking connection with server
                $server_name = "localhost";
                $user_name ="root";
                $spassword = "";
                $database ="ibike";
                $conn = mysqli_connect($server_name, $user_name, $spassword, $database);
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
                  $name = $_REQUEST['name'];
                  $email = $_REQUEST['email'];
                  $password = $_REQUEST['password'];
                  $address = $_REQUEST['address'];
                  $city = $_REQUEST['city'];
                  $state = $_REQUEST['state'];
                  $zipcode = $_REQUEST['zipcode'];

                  $sql = "SELECT * FROM `userdata`";
                  $result = mysqli_query($conn, $sql);
                  $numrows = mysqli_num_rows($result);
                   while($rows= mysqli_fetch_assoc($result))
                   {
                    $preid = $rows['Email'];
                   }
                  if($email!=$preid)
                  {
                    $sql = "INSERT INTO `userdata` ( `Name`, `Email`, `Password`, `Address`, `City`, `State`, 
                    `Zipcode`, `Timespan`) VALUES ('$name', '$email', '$password', 
                   '$address ', '$city', '$state', '$zipcode', 
                    current_timestamp());";
                        $result = mysqli_query($conn, $sql);
                         if($result)
                           {
                              echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Success</strong> Your account created successfully. You can now login. 
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>');
                            }
                     }
                }
            
         ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>i-bike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">ibike</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-success me-2"> <a href="login.php"
                            style="text-decoration: none; color:green;">
                            Login </a></button>
                    <button class="btn btn-outline-success me-2"> <a href="login.php"
                            style="text-decoration: none; color:green;">
                            Signup </a></button>
                </form>
            </div>
        </div>
    </nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>