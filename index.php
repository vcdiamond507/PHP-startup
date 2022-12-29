<?php
            // checking connection with server
                $server_name = "localhost";
                $user_name ="root";
                $spassword = "";
                $database ="ibike";
                $conn = mysqli_connect($server_name, $user_name, $spassword, $database);
                
                if ($_SERVER["REQUEST_METHOD"] == "POST")
         {
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
                  $mailresult = false;
                   while($rows= mysqli_fetch_assoc($result))
                   {
                    $preid = $rows['Email'];
                    if($email==$preid)
                    {
                         $mailresult = true;

                    }
                   }
                  if(!$mailresult)
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
                     else
                     {
                        echo('<div class="alert alert-danger   alert-dismissible fade 
                         show" role="alert">
                        <strong>Alert</strong>  &nbsp &nbsp &nbsp Email & Password already exists. 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
                             
                             
                       
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
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- nav bar starts here -->
    <?php
          include 'supportive-files/header.php';
      ?>

    <!-- crousel section starts here -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/kirill-petropavlov-f_gCjlNcVWo-unsplash.jpg" style="height: 90vh;"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kirill-Petropavlov</h5>
                    <p>Always with you till the end of the road and beyond.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/harley-davidson-eeTJKC_wz34-unsplash.jpg" style="height: 90vh;" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Harley-Davidson</h5>
                    <p>Behind me, there's nothing</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/yulian-as-gpvgmCBc_QE-unsplash.jpg" style="height: 90vh;" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Yulian-As</h5>
                    <p>Biker by heart, rider by soul.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- bikes card section here -->
     <div class="details-section" style="margin-top: 3rem;">
        <!-- sections heading div starts here -->
        <div style="display: flex; justify-content: center;">
            <h1 style="font-size:xx-large;"> Know Everything about All catogery of Bikes</h1>
        </div>
          <!-- sections heading div ends here -->

          <!-- main card section starts here -->
        <div class="row" style=" width: 100vw; display: flex; justify-content: space- 
           evenly;">

            <!-- here finalproduct.php file should be used -->
            <?php
            // connecting to the server 
                $server_name = "localhost";
                $user_name ="root";
                $spassword ="";
                $database = "ibike";
                $conn = mysqli_connect($server_name, $user_name, $spassword, 
                  $database);
               
                // finding the total number of rows
                $sql = "SELECT * FROM `bikedetails`";
                $result = mysqli_query($conn, $sql);

                $totalrows = mysqli_num_rows($result);
               
                //  fatching data from the server
                while($rowdata=mysqli_fetch_assoc($result))
                {

                    // saving server data to the local veriables
                    $srno = $rowdata['Sr_no.'];
                    $bikename = $rowdata['Bikename'];
                    $description = $rowdata['Description'];
                    $Engine = $rowdata['Engine'];
                    $Power = $rowdata['Power'];
                    $Torque = $rowdata['Torque'];
                    $Breaks = $rowdata['Breaks'];
                    $TyreTypes = $rowdata['Tyre_type'];
                    $Price= $rowdata['Price'];
                    
                    // printing card using the local variable values
                    
                    echo '
                    <div class="card col-md-3" id="'.$srno.'" style="margin: 30px 0px;">
                          <img src="images/' . $srno .'.png" style="height: 20rem;" 
                          class="card-img-top" alt="puslar 
                           220">
                          <div class="card-body">
                            <h5 class="card-title" style="color: green; font-weight:  
                              bold; font-style: italic; font-size: x-large;">' . $bikename 
                              .'
                             </h5>
                             <p class="card-text">' . $description .'</p>
                             <a href="#" class="btn btn-primary" style="margin-top: 2em;" 
                              data-bs-toggle="modal" data-bs-target="#' . $bikename .'">Know 
                               More</a>
                         </div>
                     </div>
         <!-- main card section ends here -->
    
                <div class="modal fade" id="' . $bikename .'" tabindex="-1" aria- 
                        labelledby="' . $bikename .'" aria-hidden="true" >
                     <div class="modal-dialog" style="display: flex; justify-content: 
                           center; width: 90vw;" >
                           <div class="modal-content" style=" width: 90vw;">
                              <div class="modal-body" style=" width: 90vw;">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
              <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                  <h1 class="title-font font-medium text-xl mb-2 text-gray-900" style="font-weight: bold;">' . $bikename .'</h1>
                  <div class="leading-relaxed">' . $description .'</div>
                </div>
                <div class="p-3 sm:w-1/2 lg:w-1/4 w-1">
                  <h2 class="title-font font-medium text-3xl text-gray-900" style="color: green;">' . $Engine .'</h2>
                  <p class="leading-relaxed" style="color: red; font-style: italic;">Engine</p>
                </div>
                <div class="p-3 sm:w-1/2 lg:w-1/4 w-1">
                  <h2 class="title-font font-medium text-3xl text-gray-900" style="color: green;">' . $Power .'</h2>
                  <p class="leading-relaxed" style="color: red; font-style: italic;">Power</p>
                </div>
                <div class="p-3 sm:w-1/2 lg:w-1/4 w-1">
                  <h2 class="title-font font-medium text-3xl text-gray-900" style="color: green;">' . $Torque .'
                  </h2>
                  <p class="leading-relaxed" style="color: red; font-style: italic;">Torque</p>
                </div>
                <div class="p-3 sm:w-1/2 lg:w-1/4 w-1">
                  <h2 class="title-font font-medium text-3xl text-gray-900" style="color: green;">' . $Breaks .'</h2>
                  <p class="leading-relaxed" style="color: red; font-style: italic;">Brakes</p>
                </div>
                <div class="p-3 sm:w-1/2 lg:w-1/4 w-1">
                  <h2 class="title-font font-medium text-3xl text-gray-900" style="color: green;">' . $TyreTypes .'</h2>
                  <p class="leading-relaxed" style="color: red; font-style: italic;">Tyre Type</p>
                </div>
                <div class="p-3 sm:w-1/2 lg:w-1/4 w-1">
                  <h2 class="title-font font-medium text-3xl text-gray-900" style="color: green;">' . $Price .'&#8377</h2>
                  <p class="leading-relaxed" style="color: red; font-style: italic;">Price</p>
                </div>
              </div>
              <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center " src="images/' . $srno .'.png" style="height: 30rem; width: 50rem;" alt="stats">
              </div>
            </div>
          </section>
                                 </div>
    
                                  <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
   
                            </div>
                     </div>
                </div>';
                }

            ?>

        </div>
     <!-- bike card section ends here -->
   



    <!-- footer section starts here -->
    <?php
        include 'supportive-files/footer.php';
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>