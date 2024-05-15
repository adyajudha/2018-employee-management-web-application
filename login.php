<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="bootstrap-4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="h-100 bg-info d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
                <!-- Judul Halaman -->
                <h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
                <!-- Input Login -->
                <form method="post" action="ceklogin.php">
                    <input type="text" placeholder="Username" id="username" name="username" class="form-control form-control-lg mb-3">
                    <input type="password" placeholder="Password" id="password" name="password" class="form-control form-control-lg mb-3">
                    <input type="submit" value="Login" class="btn btn-info btn-lg btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>