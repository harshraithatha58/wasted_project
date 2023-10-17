<?php
require '../_conn.php';


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
    <link rel="stylesheet" href="../colorlib-regform-7/colorlib-regform-7/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-left:7%;margin-right:7%;text-align: center;">
            You will redirected to this page if your input does not satisfy
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration Form</h2>
                        <!-- DB -->
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="Name of CEO/Owner"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Name of CEO/Owner" id="Name of CEO/Owner" placeholder="Name of CEO/Owner" required>
                            </div>
                            <div class="form-group">
                                <label for="CIN no."><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="CIN no." id="CIN no." placeholder="CIN no." required>
                            </div>
                            <div class="form-group">
                                <label for="Company Name"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="Company Name" id="Company Name" placeholder="Company Name" required>
                            </div>
                            <div>
                                <label for="Company Address"><i class="zmdi zmdi-account"></i></label>
                                <textarea style="resize: none;" class="mb-2 rounded-2" name="Company Address" id="Company Address" cols="63" rows="5" placeholder="Company Address"></textarea>
                            </div>
                            <div>
                                <label for="Company Description"><i class="zmdi zmdi-account"></i></label>
                                <textarea style="resize: none;" class="mb-2 rounded-2" name="Company Description" id="Company Description" cols="63" rows="5" placeholder="Company Description" FIXED></textarea>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" class="btn btn-lg bd-btn-lg btn-outline-primary" name="submit">Register</button>

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