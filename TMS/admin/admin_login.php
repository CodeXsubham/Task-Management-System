<?php
    session_start();
    include('../includes/connection.php');
    if(isset($_POST['adminlogin'])){
    $query = "select email,password,name from admin where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
        while($row = mysqli_fetch_assoc($query_run)){
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
        }
        echo "<script type='text/javascript'>
        window.location.href = 'admin_dashboard.php';
        </script>
        ";
    }
    else{
            echo "<script type='text/javascript'>
            alert('Wrong Details.');
            window.location.href = 'admin_login.php';
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
    <title>Admin Login</title>
    <!-- jQuery file -->
    <script src="../includes/jquery.js"></script>
    <!-- bootstrap file -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootsrap/js/bootstrap.min.js"></script>
    <!-- External css file  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>


<body>
    <div class="row">
        <div class="col-md-3 m-auto" id="login_home_page">
            <h1>Admin Login</h1>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    <br>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    <br>
                </div>
                <div class="form-group">
                    <input type="submit" name="adminlogin" value="login" class="btn btn-warning">
                </div>
            </form>
            <center><a href="../index.php" class="btn btn-danger">Back</a></center>
        </div>
    </div>
</body>

</html>
