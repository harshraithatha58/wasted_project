<?php
require '_conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/colorlib-regform-7/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left:20%;margin-right:20%;text-align: center;">
            You will redirected to login page if your input does not satisfy
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!-- CIN -->
        <section class="signup" style="margin-left: 20%; margin-right: 20%;">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Corporate Identification Number</h2>
                        <!-- DB -->
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-lg bd-btn-lg btn-outline-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php

        session_start();
        $conn = mysqli_connect('localhost', 'root', '', 'main');
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $re_password = $_POST['re_password'];


            // add sessions variables ....
            if (count($password) < 8) {
                header("Location: ./signup.php");
                exit;
            }

            if (isset($_POST["status"]) && !empty($_POST["status"])) {
                $status = $_POST["status"];
            }
            if ($password == $re_password) {
                $checked_password = $_POST['password'];
                $in = "INSERT INTO `user_info` (`name`, `email`, `password`, `status`, `dt`) VALUES ('$name', '$email', '$checked_password', '$status', current_timestamp())";
                $result = mysqli_query($conn, $in);
                header("Location: dashboard/admin/production/index.php");
                exit;
            } else {
                $checked_password = "";
                header("Location: ./signup.php");
                exit;
            }
        }

        ?>
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>