<?php
//updating
// Escape user inputs for security
$link = mysqli_connect("localhost", "root", "", "faculty_par");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $id3=$_GET['id2'];
$sdrn = mysqli_real_escape_string($link, $_REQUEST['SDRN']);
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$uni = mysqli_real_escape_string($link, $_REQUEST['University']);
$sub = mysqli_real_escape_string($link, $_REQUEST['Subject']);
$sem = mysqli_real_escape_string($link, $_REQUEST['Semester']);
$ven = mysqli_real_escape_string($link, $_REQUEST['Venue']);
$date = mysqli_real_escape_string($link, $_REQUEST['Date']);

$newven = mysqli_real_escape_string($link, $_REQUEST['new_venue']);
$finalvenue= ($ven =='Other') ?  $newven : $ven;
 

$targetfolder = "uploads/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded<br>";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

// Attempt insert query execution
//$sql = "INSERT INTO orientation (SDRN, Name, University, Subject, Semester, Venue, //Date) VALUES ('$sdrn', '$name','$uni', '$sub', $sem, '$finalvenue', '$date')";

$sql ="UPDATE syllabus SET SDRN=$sdrn, Name='$name', University='$uni', Subject='$sub', Semester='$sem', Venue='$finalvenue', Date='$date' WHERE Srno=$id3";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";


    echo "<a href='welcome.php'>Go back to homepage<br><a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



?>
