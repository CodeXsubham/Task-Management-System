<?php
session_start();
if(isset($_SESSION['email'])){
include('../includes/connection.php');
if (isset($_POST['create_task'])) {
    $query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo "<script type='text/javascript'>
            alert('Task created successfully...');
            window.location.href = 'admin_dashboard.php';
            </script>
            ";
    } else {
        echo "<script type='text/javascript'>
            alert('Error..Please try again.');
            window.location.href = 'admin_dashboard.php';
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
    <title>Admin Dashboard</title>
    <!-- jQuery file -->
    <script src="../includes/jquery.js"></script>
    <!-- bootstrap file -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootsrap/js/bootstrap.min.js"></script>
    <!-- External css file  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- jQuery code (very complicated) -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#create_task").click(function() {
                $("#right_sidebar").load("create_task.php");
            });
        });

        $(document).ready(function() {
            $("#manage_task").click(function() {
                $("#right_sidebar").load("manage_task.php");
            });
        });

        $(document).ready(function() {
            $("#view_leave").click(function() {
                $("#right_sidebar").load("view_leave.php");
            });
        });
    </script>
</head>

<body>
    <!-- Header code starts here  -->
    <div class="row" id="header">
        <div class="col-md-12">
            <div class="col-md-4" style="display:inline-block;">
                <h3>Task Management system </h3>
            </div>
            <div class="col-md-6" style="display:inline-block; text-align:right;">
                <b>Email:</b> <?php echo $_SESSION['email']; ?>
                <span style="margin-left:35px;"><b>Name: </b><?php echo $_SESSION['name']; ?></span>
            </div>
        </div>
    </div>
    <!-- Header code ends here -->

    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td style="text-align: center;">
                        <a href="admin_dashboard.php" type="button" id="Logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="create_task">Create Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a  type="button" class="link" id="manage_task">Manage Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a type="button" class="link" id="view_leave">Leave Applications</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="../logout.php" type="button" id="Logout_link">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>Instructions for Admin</h4>
            <ul style="line-height: 3em;font-size:1.0em;">
                <li>All the employee should mark their attendance daily.</li>
                <li>Everyone must complete the task assigned to them.</li>
                <li>Kindly maintain decorum of the office.</li>
                <li>Keep office and your area neat and clean.</li>
            </ul>
        </div>
    </div>
</body>

</html>
<?php
}
else{
    header('Location:user_login.php');
}