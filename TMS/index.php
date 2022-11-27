<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSM</title>
    <!-- jQuery file -->
    <script src="includes/jquery.js"></script>
    <!-- bootstrap file -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootsrap/js/bootstrap.min.js"></script>
    <!-- External css file  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <center>
            <h3 style="background-color:#d4f6cc;height:7vh;">Task Management System</h3>
        </center>
    </header>
    <div class="row">
        <div class="col-md-4 m-auto" id="home_page">
            <center>
                <h3>Choose Login Role</h3>
            </center>
            <br>
            <a href="user_login.php" class="btn btn-success" style="margin-right: 20px;">User Login</a>
            <a href="register.php" class="btn btn-warning" style="margin-right: 20px;">User Registration</a>
            <a href="admin/admin_login.php" class="btn btn-info" style="margin-right: 20px;">Admin Login</a>
        </div>
    </div>
</body>
</html>