<?php
include('includes/connection.php');
if (isset($_POST['Userregistration'])) {
    $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo "<script type='text/javascript'>
                alert('User registered successfully...');
                window.location.href = 'index.php';
                </script>
                ";
    } else {
        echo "<script type='text/javascript'>
                alert('Error...Plz try again later');
                window.location.href = 'register.php';
                </script>
                ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- jQuery file -->
    <script src="includes/jquery.js"></script>
    <!-- bootstrap file -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootsrap/js/bootstrap.min.js"></script>
    <!-- External css file  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="register_home_page">
            <Center>
                <h1>USER REGISTRATION</h1>
            </center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    <br>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No." required>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="Userregistration" value="Register" class="btn btn-warning">
                        </div>
            </form>
            <center><a href="index.php" class="btn btn-danger">Back</a></center>
        </div>
    </div>
</body>

</html>
