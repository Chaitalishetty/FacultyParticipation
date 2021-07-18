<?php
  include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <!--logo-->
        <img src="images/logo.jpg" alt="logo" height="100 px">
        <h2>Welcome <?php echo $login_session;?><h2>
        <!--header-->
        <div id="buttons"><a href = "logout.php">Sign Out</a></div>
        <div class="container">

        </div>
        <div id="gen">
            <a href="reportgenerate.html">GENERATE REPORT</a>
        </div>
        <div class="jumbotron text-center" style="background-color:transparent">
            <div class="row">
                <div class="col-sm-2">
                      <a href="orientation 1.php" name="University">UNIVERSITY ORIENTATION</a>
                    
                </div>
                <div class="col-sm-2">
                    <a href="syllabus1.php" name="Syllabus">SYLLABUS SETTING</a>
                </div>
                <div class="col-sm-2">
                    <a href="workshop_new1.php" name="Worshops">WORKSHOPS - STTP - FDP</a>
                </div>
            
            </div>
          
        </div>
        
  


    </body>

</html>