
<!DOCTYPE html>
<html>

  <head>
    <title>Timmage</title>
      <link rel="icon" 
      type="image/png" 
      href="images/title.png">

    <meta charset="Utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    
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
                  <a href="login.php">Login</a>
                </li>
                <li>
                  <a href="#">Register</a>
                </li>
                <li>
                  <a href="report.html">Feedback</a>
                </li>
                <li>
                  <a href="#">Log out</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">info</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li></li>
          </ul>
        </div>
    </div>
	</div>
    <h1>Welcome</h1>
      
  <!-- Trigger/Open The Modal -->
      <div class="uploadknapp">
    <button class="button" id="myBtn" data-toggle="tooltip" title="Upload a picture">Upload</button>
</div>
     

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Timmage</h2>
    </div>
    <div class="modal-body">
      <p>Upload a picture by pressing the "Upload" button</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
     
         <p>Upload</p>
    </div>
    <div class="modal-footer">
      <h3>Thanks for using Ti<span style="color:#007bd3;font-weight:normal">mm</span>age</h3>
    </div>
  </div>

</div>
      <br></br>
<div class="gallery">

      <?php
$image_dir = 'uploads/';
$dir = new DirectoryIterator(dirname(__FILE__).DIRECTORY_SEPARATOR.$image_dir);
foreach ($dir as $fileinfo) {
    if ($fileinfo->isFile() && in_array($fileinfo->getExtension(),array('jpg','png','jpeg','PNG'))) { ?>
        <a href="<?php echo $image_dir.$fileinfo->getBasename(); ?>"><img class="upp" width="100" height="100" src="<?php echo $image_dir.$fileinfo->getBasename(); ?>" /></a>
  <?php  }
  }
?>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src = "js/modal.js"></script>
       <br></br>
    <div class="GreyBG"></div>
  </body>


</html>

