<?php
require '../../../_conn.php';

if (!isset($_SESSION['loggedin']) == true) {
  header('Location: ../../../signin.php');
  exit;
}


$session_email = $_SESSION['session_email'];
$sql = "select name from `employee` where email='$session_email'";
// session email yet to declare 
$result =  mysqli_query($conn, $sql);

if ($result) {
  $row = mysqli_fetch_row($result);
}
global $_user_name;
$_user_name = $row[0];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Genti lala | wizard form</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container" style="background-color: white ">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view" style="background-color: white ">
          <div class="navbar nav_title" style="border: 0; background-color: white ">
            <a href="index3.php" class="site_title"><i class="fa fa-paw"></i> <span>
                <font color="black">
                  <?php
                  echo $_user_name;
                  ?>

                </font>
              </span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>
                <font color="black">Welcome,</font>
              </span><br>
              <font color="black">
                John Doe
              </font>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li>
                  <a href="index3.php">
                    <font color="black"><i class="fa fa-home"></i>
                      Home </font>
                  </a>
                </li>

                <li>
                  <a href="form_wizards.html">
                    <font color="black">
                      <i class="fa fa-edit"></i>
                      Wizard Form
                    </font>
                  </a>
                </li>



                <li>
                  <a href="echarts.html">
                    <font color="black"><i class="fa fa-bar-chart-o"></i>
                      E-Charts </font>
                  </a>
                </li>
                <li>
                  <a href="../../../Landing/index.php">
                    <font color="black">
                      <i class="fa fa-laptop"></i>
                      Landing Page
                    </font>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">John Doe
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Form Wizards</h3>
            </div>

            <div class="title_right">

            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel" style="padding-bottom: 10%;">
                <div class="x_title">
                  <h2>Form Wizards <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


                  <!-- Smart Wizard -->
                  <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                  <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                      <li>
                        <a href="#step-1">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                            Step 1<br />
                            <small>Step 1 basic details</small>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                            Step 2<br />
                            <small>Step 2 Services</small>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                            Step 3<br />
                            <small>Step 3 CV/resume</small>
                          </span>
                        </a>
                      </li>
                    </ul>
                    <div id="step-1">
                      <form class="row g-3">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email</label>
                          <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="container">
                          <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>


                          <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                          </div>
                          <div class="col">
                            <label for="inputState" class="form-label">State</label>
                            <br>
                            <select id="inputState" class="form-select">
                              <option selected>Select Your State</option>
                              <option>F U</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div id="step-2">
                      <h2 class="StepTitle">Step 2 Content</h2>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                    <div id="step-3">
                      <h2 class="StepTitle">Step 3 Content</h2>
                      <label class="form-label" for="customFile">Default file input example</label>
                      <input type="file" class="form-control" id="customFile" />



                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
                <!-- jQuery -->
                <script src="../vendors/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <!-- FastClick -->
                <script src="../vendors/fastclick/lib/fastclick.js"></script>
                <!-- NProgress -->
                <script src="../vendors/nprogress/nprogress.js"></script>
                <!-- jQuery Smart Wizard -->
                <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
                <!-- Custom Theme Scripts -->
                <script src="../build/js/custom.min.js"></script>


</body>

</html>