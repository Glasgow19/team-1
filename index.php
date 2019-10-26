<?php include('php functions/login_register.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Team 1">

    <title> Actify</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://d3js.org/d3.v5.js"></script>
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><i class="fas fa-running"
                                        title="Logo"></i>
        Company Name Here</a>
    <button class="navbar-toggler my-1" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>
        </ul>
        <div class="text-center">
            <a class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2 buy-btn text-white" data-toggle="modal" data-target="#elegantModalForm" role="button">Log In</a>
        </div>
        <form class="navbar-form form-inline" action="login.php" method="POST">
            <div id="id3" class="form-group">
                <input readonly="true" id="id3.1" class="form-control mr-2" type="text" placeholder="Username"
                       name="userName" required aria-label="Enter your username">
                <input readonly="true" id="id3.2" class="form-control mr-2" type="password" placeholder="Password"
                       name="uncrypPass" required aria-label="Enter your Password">
                <input class="form-control" type="hidden" name="remember" value="checked">
                <button class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2" type="submit">Log In</button>
                <button class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2" type="register"
                        onclick="location.href='register.php';">Register
                </button>
            </div>
        </form>
        <div id="id4" class="logout">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link account" href="dashboard.php">

                        Account</a>
                </li>
                <li class="nav-item">
                    <form action="login.php" method="POST">
                        <input type='hidden' name="logout" value="true">
                        <button class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2" type="submit">Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header with Background Image -->
<header class="header" role="banner">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="float-lg-left text-center">
                    <br><br>
                    <h1 class="mt-5">Some text here</h1>
                </div>
            </div>
        </div>
    </div>


</header>


<!-- Page Content -->
<!-- --------------------------------------------------------------------- -->

<!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <form class="navbar-form" method="post" action="login.php">
                    <?php include('php functions/errors.php'); ?>
                    <div class="form-group">
                        <label>Username   </label><br>
                        <input class="form-control mr-2" type="text" name="username" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Password   </label><br>
                        <input class="form-control mr-2" type="password" name="password">
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success buy-btn my-2 my-sm-0 mr-2" name="login_user">Login</button>
                    </div>
                    <p> <br>
                        Not yet a member? <a href="register.php"></a>
                        <a class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2 buy-btn text-white" data-toggle="modal" data-target="#elegantModalsignupForm" role="button">Sign up</a>


                    </p>
                </form>
            </div>
            <!--Footer-->
            <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="./pages/register.php" class="blue-text ml-1">
                        Sign Up</a></p>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->



<!-- Modal -->
<div class="modal fade" id="elegantModalsignupForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold " id="myModalLabel"><strong>Register</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mx-4">
                <form class="navbar-form" method="post" action="register.php">
                    <?php include('php functions/errors.php'); ?>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control mr-2" type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input  class="form-control mr-2" type="text" name="gender" value="<?php echo $gender; ?>">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input class="form-control mr-2" type="text" name="age" value="<?php echo $age; ?>">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input class="form-control mr-2" type="text" name="location" value="<?php echo $location; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control mr-2" type="password" name="password_1">
                    </div>
                    <div class="form-group">
                        <label>Confirm password</label>
                        <input class="form-control mr-2" type="password" name="password_2">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2 buy-btn text-white" type="submit" class="btn" name="reg_user">Register</button>
                    </div>
                    <p>
                        Already a member? <a href="login.php"></a>
                        <a class="btn btn-outline-success login-btn my-2 my-sm-0 mr-2 buy-btn text-white" data-toggle="modal" data-target="#elegantModalForm" role="button">Sign in</a>


                    </p>
                </form>
            </div>
        </div>
    </div>
</div>






























<img src="./Assets/openmoji-svg-color/1F602.svg" alt="LMAO">


<!-- Footer -->
<footer class="py-3 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">&copy; Company Name Here 2019</p>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>