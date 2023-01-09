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
                            <h2>Sign Up</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">

                                <div class="form-floating mb-3">
                                    <input type="text" name="firstName" class="form-control" id="userEmail" placeholder="name@example.com" autofocus>
                                    <label for="firstName">
                                        <i class="bi bi-person-circle"></i>
                                        First Name:
                                    </label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="lastName" class="form-control" id="userEmail" placeholder="Your Name">
                                    <label for="lastName">
                                        <i class="bi bi-person-square"></i>
                                        Last Name:
                                    </label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select class="form-select  mb-3" aria-label=".form-select-lg example">
                                        <option selected value="">--Select Gender--</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="N">No Binary</option>
                                    </select>
                                    <label for="firstName">
                                        <i class="bi bi-gender-ambiguous"></i>
                                        Gender:
                                    </label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="Your Name">
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

                                <div class="form-floating">
                                    <input type="password" name="userPasswordR" class="form-control" id="userPassword" placeholder="Password">
                                    <label for="userPasswordR">
                                        <i class="bi bi-key"></i>
                                        Repeat Password:
                                    </label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary">
                                        Sign Up
                                    </button>
                                </div>

                                <div class="progress mt-3" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%">
                                        Loading...
                                    </div>
                                </div>

                                <div class="mt-3 text-justify">
                                    <small>Already Have an account! </small><a href="./login.php">Login Here</a>
                                </div>
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