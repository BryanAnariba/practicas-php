<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body class="myBackground">
    <div class="container">
        <div class="row mt-5 border rounded mx-auto shadow-lg bg-white">
            <div class="col-lg-4 col-md-5 col-sm-12 p-2 text-center my-auto">
                <img 
                    src="../../assets/images/user.jpg" 
                    style="width: 180px; height: 180px; object-fit: cover;"
                    class="img-fluid rounded js-preview-image"    
                >
                <div class="mt-3">
                    <label for="file" class="form-label">Change Your Image Here!</label>
                    <input 
                        class="form-control" 
                        type="file" 
                        id="file"
                        onchange="onDisplayImage(this.files[0])"    
                    >
                    <div class="alert-preview-image">

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 p-2 text-justify my-auto">
                <h2 class="display-3">Profile</h2>
                <form method="POST">
                    <table class="table table-hover table-bordered table-striped">
                        <tr><th colspan="2" class="text-center">User Details:</th></tr>
                        <tr>
                            <th>
                                <i class="bi bi-person-circle"></i>
                                First Name
                                <td>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                </td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <i class="bi bi-person-square"></i>
                                Last Name
                                <td>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                </td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <i class="bi bi-gender-ambiguous"></i>
                                Gender
                                <td>
                                <select class="form-select mb-3" aria-label=".form-select-lg example">
                                    <option selected value="">--Select Gender--</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="N">No Binary</option>
                                </select>

                                </td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <i class="bi bi-envelope"></i>
                                Email
                                <td>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </td>
                            </th>
                        </tr>
                    </table>
                    <div class="p-2">
                        <button 
                            type="button"
                            class="btn btn-outline-primary btn-rounded float-end">
                            Save
                        </button>
                        <a href="../../index.php">
                            <label class="btn btn-secondary">Go Back</label>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../assets/js/image-preview-controller.js"></script>
</body>

</html>