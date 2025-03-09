<?php
session_start();
if (isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid'])) {
    header("location:index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">

  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- Custom CSS for Background and Centering -->
  <style>
    body.cyan {
      background-image: url('images/banner1.jpg'); /* Background image */
      background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    #login-page {
      background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px; /* Adjust width as needed */
    }

    #loader-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.8);
      z-index: 1000;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 120px;
      height: 120px;
      animation: spin 2s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- Login Page -->
  <div id="login-page" class="row">
    <header id="main-navigation">
      <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-default">
                <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                  <ul class="nav navbar-nav">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../food.html">Our Food</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../faq.html">FAQ</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Login Form -->
    <div class="col s12 z-depth-4 card-panel">
      <form method="post" action="routers/router.php" class="login-form" id="form">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login for Food Ordering System</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="username" id="username" type="text">
            <label for="username" class="center-align">Username (admin or user1)</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password">
            <label for="password">Password (Demopass@123)</label>
          </div>
        </div>
        <div class="row">
          <a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.php">Register Now!</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Scripts -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="js/plugins.min.js"></script>
  <script type="text/javascript" src="js/custom-script.js"></script>
</body>
</html>
<?php
}
?>