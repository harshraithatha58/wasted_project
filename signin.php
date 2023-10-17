<?php
require ('./_conn.php');
if(isset($_SESSION['loggedin']) == false)
{
    if (isset($_POST['submit'])) 
    {
        $useremail = $_POST['email'];
        $password = $_POST['your_pass'];

        // selct password from wmail na mase to wrong email 
        //check password with password_verify 
        // true thai to redirect

        $sql = "select password from `employee` where email='$useremail'";
        $result = mysqli_query($conn , $sql);
        if($result){
            $row = mysqli_fetch_row($result);
            $hashed_password = $row[0];
            $password_varification = password_verify($password,$hashed_password );
            if($password_varification){
                $_SESSION['loggedin'] = true;
                header('Location: dashboard/Employee/Production/index3.php');
                exit;
            }
            //else
            
        }

    }
}
else{

    
    $session_email = $_SESSION['session_email'];
    $sql = "SELECT * FROM `employee` where email='$session_email'";
    $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: dashboard\Employee\Production\index3.php');
            exit;
            }
    $sql = "SELECT * FROM `hr` where email='$session_email'";
    $result_hr = mysqli_query($conn, $sql);
        if ($result_hr) {
            header('Location: dashboard\Employee\Production\index3.php');
            exit;

        }
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/colorlib-regform-7/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/theme.css" rel="stylesheet" />

</head>

<body>
    <!-- Sing in  Form -->

    <section class="sign-in">

        <div class="container" style="margin-top: 5%;">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="colorlib-regform-7/colorlib-regform-7/images/signin-image.jpg"
                            alt="sing in image"></figure>
                    <a href="signup.php" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title mt-6">Sign In</h2>
                    <!-- DB -->
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password" minlength="8"
                                required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg bd-btn-lg btn-outline-primary" name="submit">
                                <span>
                                    Sign in
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script src="vendors/@popperjs/popper.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="vendors/feather-icons/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
feather.replace();
</script>
<script src="assets/js/theme.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">

</html>