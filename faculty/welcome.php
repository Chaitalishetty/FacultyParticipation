<?php
  include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Faculty</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <!--logo-->
        <div style="display:flex;justify-content:space-between;">
            <a href="welcome.php"><img src="images/logo.png" style="height:10vh;width:auto"></a>
            <div style="display:flex;justify-content:space-between">
            <?php 
                if($user_check=='150'){
                    echo '<div id="buttons">
                    <a href="../admin/welcome.php">Admin</a>
                </div>';
                }
            ?>
            <div id="buttons"><a href = "logout.php">Sign Out</a></div>
            </div>
            
        </div>
       
        <h2>
        <!--header-->
        
        <!-- <div class="container">
             
        </div> -->
        <h2 class="welcomeHead">Welcome <?php echo $login_session;?></h2>
        <div id="gen">
            <a href="reportgenerate.html">GENERATE PERSONAL REPORTS</a>
        </div>
        <div class="jumbotron text-center" style="background-color:transparent">
            <div class="row">
                <div class="col-sm-4">
                <div class="card">
                      <a href="orientation 1.php" name="University">COURSE ORIENTATION</a>   
                </div>                
                </div>
                <div class="col-sm-4">
                <div class="card">
                    <a href="syllabus1.php" name="Syllabus">SYLLABUS SETTING</a>
                </div>
                </div>     
                <div class="col-sm-4">
                <div class="card">
                    <a href="workshop_new1.php" name="Worshops">WORKSHOPS - STTP - FDP</a>
                </div>
                </div>     
            
            </div>
            <div class="row">
                <div class="col-sm-4">
                      <a href="UpDelOrientation.php" name="University" class="up-btn">Update Course Orientation</a>   
                </div>                  
                <div class="col-sm-4">
                    <a href="UpDelSyllabus.php" name="Syllabus" class="up-btn">Update Syllabus Setting</a>
                </div>
                <div class="col-sm-4">
                    <a href="UpDelWorkshop.php" name="Worshops" class="up-btn">Update Workshops</a>
                </div>
            </div>
          
        </div>
        
  


    </body>

</html>
