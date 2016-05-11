<?php
include 'core/init.php'
?>
<!DOCTYPE html>
<html>

  <head>
    <title>Timmage</title>
       <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta charset="Utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/about.css" rel="stylesheet" />
	<link href="css/login.css" rel="stylesheet" />
    
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
	   <div class="navbar-header">
    <a href="index.php" class="navbar-brand">
    <img class="logga" src="images/Timmage.png" alt="logga" />
  </a>
  <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>    
  </div>
              <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu                                                                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Login</a>
                </li>
                <li>
                  <a href="#">Register</a>
                </li>
                <li>
                  <a href="#">Setting</a>
                </li>
                <li>
                  <a href="#">Log out</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li></li>
          </ul>
        </div>
    </div>
	</div>
    <h1>Login</h1>
     

      <?php
include 'includes/loginwidget.php'
?>


    
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src = "js/modal.js"></script>
  </body>
  

</html>

