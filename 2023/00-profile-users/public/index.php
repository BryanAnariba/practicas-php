<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body class="myBackground">
    <div class="container">
        <div class="row mt-5 border rounded mx-auto shadow-lg bg-white">
            <div class="col-lg-4 col-md-5 col-sm-12 p-2 text-center my-auto">
                <img src="./assets/images/user.jpg" style="width: 180px; height: 180px; object-fit: cover;" class="img-fluid rounded">
                <div class="mt-3">
                    <a href="./views/profile/profile-edit.php" style="text-decoration: none;">
                        <button class="btn btn-sm btn-outline-danger">
                            Delete Profile
                        </button>
                    </a>
                    <a href="./views/profile/profile-edit.php" style="text-decoration: none;">
                        <button class="btn btn-sm btn-outline-primary">
                            Edit Profile
                        </button>
                    </a>
                    <a href="./pages/logout.php" style="text-decoration: none;">
                        <button class="btn btn-sm btn-outline-danger">
                            Logout
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 p-2 text-justify my-auto">
                <h2 class="display-3">Profile</h2>
                <table class="table table-hover table-bordered table-striped">
                    <tr><th colspan="2" class="text-center">User Details:</th></tr>
                    <tr>
                        <th>
                            <i class="bi bi-person-circle"></i>
                            First Name
                        <td>John</td>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <i class="bi bi-person-square"></i>
                            Last Name
                        <td>Doe</td>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <i class="bi bi-gender-ambiguous"></i>
                            Gender
                        <td>Male</td>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <i class="bi bi-envelope"></i>
                            Email
                        <td>john@gmail.com</td>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>