<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
<?php

// include('session.php');
// $conn = mysqli_connect("localhost", "root", "", "faculty_par");   
// $sql = "SELECT * FROM `orientation` WHERE SDRN = '$user_check'";  
// $setRec = mysqli_query($conn, $sql);  




$file = '.\uploads\401.pdf';
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=filename.pdf");
@readfile($file);

?>
</body>
</html>