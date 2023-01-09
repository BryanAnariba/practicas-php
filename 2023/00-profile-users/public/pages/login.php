<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body class="myBackground">

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12 text-center shadow mx-auto p-4 bg-white rounded">
                <form method="post">
                    <div class="card">
                        <div class="card-header bg-primary text-center text-white">
                            <h2>Sign In</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="name@example.com" autofocus>
                                    <label for="userEmail">
                                        <i class="bi bi-envelope"></i>
                                        Email:
                                    </label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="userPassword" class="form-control" id="userPassword" placeholder="Password">
                                    <label for="userPassword">
                                        <i class="bi bi-key"></i>
                                        Password:
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                                <div class="mt-3 text-justify">
                                    <small>Dont Have an account?! </small><a href="./signup.php">Signup Here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-primary">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>