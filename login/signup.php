<?php
require '_conn.php';
$check_email  = true;
$check_password  = true;

if (isset($_POST['submit'])) {
    $name = strip_tags($_POST['name']);
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $repassword = $_POST['re_pass'];
    global $check_password;
    global $check_email;
    $check_email = false;
    $check_password = false;

    $sql = "select * from `employee` where email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($password == $repassword) {
        $check_password = true;
        $hash = password_hash($password, PASSWORD_DEFAULT);
    } else {
        $check_password = false;
    }
    if (!$result) {
        if ($check_password == true) {
            $sql = "INSERT INTO `employee` (`email`, `password`, `name`, `time`) VALUES ('$email', '$hash', '$name', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $_SESSION['loggedin'] = true;
            $_SESSION['session_email'] = $email;
            header('Location:../dashboard/Employee/Production/index3.php');
            exit;
        }else{
            header('Location: ./signup.php');
            exit;
        }
    } else {

    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../colorlib-regform-7/colorlib-regform-7/css/style.css">


    <!-- Main css -->
    <link rel="stylesheet" href="../colorlib-regform-7/colorlib-regform-7/css/style.css">
    <link rel="stylesheet" href="../colorlib-regform-7/colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" checked disabled>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <span class="form-group form-button">
                                    <button type="submit" class="btn btn-lg bd-btn-lg btn-outline-primary" name="submit" id="submit">Sign Up</button>

                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../colorlib-regform-7/colorlib-regform-7/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="./signin.php" class="signup-image-link">I am already member</a>
                        <a href="./hr_signup.php" class="signup-image-link mt-2">Sign up as HR</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- JS -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script> -->
</body>

</html>