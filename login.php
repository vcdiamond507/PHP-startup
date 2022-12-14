<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>i-bike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style=" height: 100vh; width: 100vw;">
    <div class="maincontainer" style="width: 100vw; height: 100vh; display: flex;">
        <div class="container"
            style="width: 80vw; height: 100vh; display: flex; justify-content: center; align-items: center;">
            <form action="index.php" method="post" class="row g-3" style="width: 40vw;">
                <h1>Sign In Here:-</h1>
                <h6 style="color:blue;">we will never share your details with anyone</h6>
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
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>

        <div class="container-2" style="width: 20vw; height: 100vh; padding-top: 3em;">
            <form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>