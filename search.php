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
<?php
include 'supportive-files/header.php';
?>


<div class="details-section" style="margin-top: 3rem;">
        <!-- sections heading div starts here -->
       
          <!-- sections heading div ends here -->

          <!-- main card section starts here -->
        <div class="row" style=" width: 100vw; display: flex; justify-content: space- 
           evenly;">

            <!-- here finalproduct.php file should be used -->
            <?php
            // connecting to the server 
            $server_name = "localhost";
            $user_name ="root";
            $spassword = "";
            $database ="ibike";
            $conn = mysqli_connect($server_name, $user_name, $spassword, $database); 
               
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
              $question = $_REQUEST['search'];
              $sql = "SELECT * FROM bikedetails
              WHERE  Bikename  LIKE '%$question%';";
              $result = mysqli_query($conn, $sql);
               $numrows = mysqli_num_rows($result);
               if($numrows<1)
               {
                echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>No Result</strong>  found for :-<span style="color: white; font-weight: bold; font- 
                    style: italic; margin-left: 25px;">'.$question.'</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
               }
               else
               {

                echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Result</strong>  found for :-<span style="color: white; font-weight: bold; font- 
                    style: italic; margin-left: 25px;">'.$question.'</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                while($rows= mysqli_fetch_assoc($result))
                {
                      $bikeid = $rows['Sr_no.'];
                      $bikename = $rows['Bikename'];
                      $description = $rows['Description'];
                      $Engine = $rows['Engine'];
                      $Power = $rows['Power'];
                      $Torque = $rows['Torque'];
                      $Breaks = $rows['Breaks'];
                      $TyreTypes = $rows['Tyre_type'];
                      $Price= $rows['Price'];
                    
                    // printing card using the local variable values
                    
                    echo '
                    <div class="card col-md-3" style="margin: 30px 0px;">
                          <img src="images/' . $bikeid .'.png" style="height: 20rem;" 
                          class="card-img-top" alt="puslar 
                           220">
                          <div class="card-body">
                            <h5 class="card-title" style="color: green; font-weight:  
                              bold; font-style: italic; font-size: x-large;">' . $bikename 
                              .'
                             </h5>
                             <p class="card-text">' . $description.'</p>
                             <a href="index.php#'.$bikeid. '" class="btn btn-primary" style="margin-top: 2em;">Know 
                               More</a>
                         </div>
                     </div>';
                }
               }
             
                 
            }
            ?>

        </div>
     <!-- bike card section ends here -->




</body>
</html>