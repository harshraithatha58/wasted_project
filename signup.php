<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'main');
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];


    //session variable
    $_SESSION['email'] = $email;

    // <--- SECURITY CHECKS --->
    $checked_email = false;
    // email check 
    $sql = 'SELECT count(*) FROM `user_info` WHERE email="' . $email . '"';
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
    }
    if ($count == 0) {

        function isValidEmail($email)
        {
            // Check if the email has a valid format
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Get the domain of the email address
                list($username, $domain) = explode('@', $email);

                // Check if the domain has valid DNS records
                if (checkdnsrr($domain, 'MX') || checkdnsrr($domain, 'A')) {
                    return true; // Valid email address
                } else {
                    // Domain does not exist
                    header("Location: ./signup.php");
                    exit;
                }
            } else {
                // Invalid email format
                header("Location: ./signup.php");
                exit;
            }
        }
    }
    else{
        header("Location: ./signup.php");
        exit;
    }
 
    // Example usage

    if (isValidEmail($email)) {
        echo "Email address is valid and domain exists.";
    } else {
        echo "Invalid email address or domain does not exist.";
    }

    //checking password length ...
    if (strlen($password) < 8) {
        header("Location: ./signup.php");
        exit;
    }
    // radio button stored ..
    if (isset($_POST["status"]) && !empty($_POST["status"])) {
        $status = $_POST["status"];
    }
    // checking password is same 
    if ($password == $re_password) {
        $checked_password = $_POST['password'];
        $in = "INSERT INTO `user_info` (`name`, `email`, `password`, `status`, `dt`) VALUES ('$name', '$email', '$checked_password', '$status', current_timestamp())";
        $result = mysqli_query($conn, $in);
        header("Location: dashboard/Admin/production/index.php");
        exit;
    } else {
        $checked_password = "";
        header("Location: ./signup.php");
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
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/colorlib-regform-7/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left:7%;margin-right:7%;text-align: center;">
            You will redirected to sign up page if your input does not satisfy
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <!-- DB -->
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="re-password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_password" placeholder="Repeat your password" required>
                            </div>
                            <div>
                                <!-- change text area to enable when clicked on company radio button-->
                                <label for="text"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="CIN" id="CIN" placeholder="CIN Number" required aria-label="Disabled input example" disabled>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="status" id="agree-term" class="agree-term" value="Company">
                                <label for="agree-term" class="label-agree-term">Company</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="status" id="agree-term" class="agree-term" value="Employee">
                                <label for="agree-term" class="label-agree-term">Employee</label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-lg bd-btn-lg btn-outline-primary" name="submit">Sign Up</button>

                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="colorlib-regform-7/colorlib-regform-7/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="./signin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- #region -->
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>