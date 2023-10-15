<?php
<<<<<<< HEAD:login/hr_signup.php
require '../_conn.php';
=======
require '_conn.php';
>>>>>>> 10e73c9 (login sign up done):hr_signup.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
<<<<<<< HEAD:login/hr_signup.php
    <link rel="stylesheet" href="../colorlib-regform-7/colorlib-regform-7/css/style.css">
=======
    <link rel="stylesheet" href="colorlib-regform-7/colorlib-regform-7/css/style.css">
>>>>>>> 10e73c9 (login sign up done):hr_signup.php
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7Rxn☻atzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">HR Sign Up</h2>
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
                            <div class="col">
                            <br>
                            <select id="inputState" class="form-select">
                              <option selected>Select Your Company</option>
                              <option>F Ux2</option>
                            </select>
                          </div>
                            <div class="form-group form-button mt-5">
                                <button type="submit" class="btn btn-lg bd-btn-lg btn-outline-primary" name="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../colorlib-regform-7/colorlib-regform-7/images/signup-image.jpg" alt="sing up image"></figure>
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