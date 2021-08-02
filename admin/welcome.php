<?php
include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../faculty/css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <!--logo-->
    <div style="display:flex;justify-content:space-between">
        <a href="welcome.php"><img src="images/logo.png" style="height:10vh;width:auto"></a>
            <div style="display:flex;justify-content:space-between">
                <div id="buttons"><a href="../faculty/welcome.php">Faculty</a></div>
                <div id="buttons"><a href = "logout.php">Sign Out</a></div>
            </div>
        </div>
        <!--header-->
        <h2 class="welcomeHead">Welcome <?php echo $login_session;?>(Admin)</h2>
        <div class="jumbotron text-center" style="background-color:transparent">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                      <a href="SortOrientation.php" name="University">COURSE ORIENTATION ATTENDED</a>
                    </div>
                </div>
            <div class="col-sm-4">
                <div class="card">
                    <a href="SortSyllabus.php" name="Syllabus">SYLLABUS SETTING ATTENDED</a>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <a href="SortWorkshop.php" name="Worshops">WORKSHOPS - STTP - FDP ATTENDED</a>
                </div>
            </div>
            </div>
        </div>

    </div>




</body>

</html>