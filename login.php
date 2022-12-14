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

<body style=" height: 100vh; width: 99vw;">
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900  md:mb-0" href="index.php">
            <span class="ml-3 text-xl">i-Bike</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
            <a class="mr-5 hover:text-gray-900" href="index.php">About Us</a>
            <a class="mr-5 hover:text-gray-900" href="index.php">Services</a>
            <a class="mr-5 hover:text-gray-900" href="index.php">Contact Us</a>
          </nav>
        </div>
      </header>

    <div class="maincontainer" style="width: 99vw; height: 100vh; display: flex;">
        <div class="container"
            style="width: 70vw; height: 100vh; display: flex; justify-content: center; align-items: center; ">
            <form action="index.php" method="post" class="row g-3" style="width: 40vw;">
                <h1>Sign In Here:-</h1>
                <h6 style="color:green;">we will never share your details with anyone</h6>
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St"
                        required>
                </div>

                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" class="form-control" id="city" required>
                </div>
                <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="state" required>
                </div>

                <div class="col-md-2">
                    <label for="zipcode" class="form-label">Zip</label>
                    <input type="tel" name="zipcode" class="form-control" id="zipcode" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Sign in</button>
                </div>
            </form>
        </div>

        <div class="container-2" 
        style="width: 30vw; height: 100vh; padding-top: 3em; display: flex; justify-content: center;">
          <div class="formcontainer" >
            <form style="background-color: rgb(219, 219, 222); padding: 2em; border-radius: .5rem; box-shadow: 0px 0px 20px 2px rgb(237, 225, 225);">
                <div class="mb-3">
                    <legend>Already have an account</legend>
                    <h5 style="color: green;"> Login Here</h5>
                    <label for="emil" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="emil" aria-describedby="emailHelp"
                        required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="passoword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="passoword" required>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>

        </div>
    </div>

    <!-- footer starts here -->
    <?php
    include 'supportive-files/footer.php';

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>