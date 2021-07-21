<style>
<?php include 'css/styles.css'; ?>
</style>
<?php
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
 $temp = explode(".", $filename);//sep filename and extension
 $file_ext = substr($filename, strripos($filename, '.')); //getting extension
 $newfilename = $sdrn.'_'.$name.'_'.$sub.'_'.$date.$file_ext; //giving new name
 $ok=1;
 $targetfolder = "uploads/".$newfilename;
$file_type=$_FILES['file']['type'];
if ($file_type=="application/pdf") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 {
 echo ("<div class='alert alert-success'>The file ".  $newfilename. " is uploaded </div><br>");
 }
 else {
 echo "<div class='alert alert-error'>Problem uploading file </div>";
 }
}
else {
 echo "<div class='alert alert-error'>You may only upload PDFs, JPEGs or GIF files. Please update it.</div><br>";
 echo("<script>
    setTimeout(function(){ window.location='UpdateOrientation1.php' }, 4000);
    </script>");
}
// Attempt insert query execution
$sql = "INSERT INTO orientation (SDRN, Name, University, Subject, Semester, Venue, Date,uploads) VALUES ('$sdrn', '$name','$uni', '$sub', $sem, '$finalvenue', '$date','$targetfolder')";
if(mysqli_query($link, $sql)){
    echo ("<div class='alert alert-success'>

       Records added successfully. <br>
    <a href='welcome.php'>Go back to homepage<br><a> </div>");

    echo("<script>
    setTimeout(function(){ window.location='welcome.php' }, 6000);
    </script>");
} else{
    echo "
    <div class='alert alert-error'>
    ERROR: Could not able to execute $sql. </div>" . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>