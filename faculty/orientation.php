<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "faculty_par"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$sdrn = mysqli_real_escape_string($link, $_REQUEST['SDRN']);
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$uni = mysqli_real_escape_string($link, $_REQUEST['University']);
$sub = mysqli_real_escape_string($link, $_REQUEST['Subject']);
$sem = mysqli_real_escape_string($link, $_REQUEST['Semester']);
$ven = mysqli_real_escape_string($link, $_REQUEST['Venue']);
$date = mysqli_real_escape_string($link, $_REQUEST['Date']);
$newven = mysqli_real_escape_string($link, $_REQUEST['new_venue']);
$finalvenue= ($ven =='Other') ?  $newven : $ven; 
$filename=$_FILES["file"]["name"];
// changes
 $temp = explode(".", $filename);//sep filename and extension
 $file_ext = substr($filename, strripos($filename, '.')); //getting extension
 $newfilename = $sdrn.'_'.$name.'_'.$sub.'_'.$date.$file_ext; //giving new name
 $ok=1;
 $targetfolder = "uploads/".$newfilename;
$file_type=$_FILES['file']['type'];
if ($file_type=="application/pdf") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 {
 echo "The file ".  $newfilename. " is uploaded<br>";
 }
 else {
 echo "Problem uploading file";
 }
}
else {
 echo "You may only upload PDFs, JPEGs or GIF files.<br>";
}
// Attempt insert query execution
$sql = "INSERT INTO orientation (SDRN, Name, University, Subject, Semester, Venue, Date,uploads) VALUES ('$sdrn', '$name','$uni', '$sub', $sem, '$finalvenue', '$date','$targetfolder')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";


    echo "<a href='welcome.php'>Go back to homepage<br><a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>