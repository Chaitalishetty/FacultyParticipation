<style>
    <?php include 'css/styles.css'; ?>
</style>
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
$filename = $_FILES["file"]["name"];
$temp = explode(".", $filename); //sep filename and extension
$file_ext = substr($filename, strripos($filename, '.')); //getting extension
$newfilename = $sdrn . '_' . $name . '_' . $sub . '_o_' . $date  . '_updated' . $file_ext;
$targetfolder = "uploads/" . $newfilename;

// $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
    echo ("<div class='alert alert-success'>The file " . $newfilename . " is uploaded </div><br>");

 }

 else {

    echo "<div class='alert alert-error'>Problem uploading file </div>";

 }

}

else {

    echo "<div class='alert alert-error'>You may only upload PDF files. Please update it.</div><br>";

}

// Attempt insert query execution
//$sql = "INSERT INTO orientation (SDRN, Name, University, Subject, Semester, Venue, //Date) VALUES ('$sdrn', '$name','$uni', '$sub', $sem, '$finalvenue', '$date')";

$sql ="UPDATE orientation SET SDRN=$sdrn, Name='$name', University='$uni', Subject='$sub', Semester='$sem', Venue='$finalvenue', Date='$date', uploads='$targetfolder' WHERE Srno=$id3";
if(mysqli_query($link, $sql)){
    echo ("<div class='alert alert-success'>

       Records updated successfully. <br>
    <a href='welcome.php'>Go back to homepage<br><a> </div>");

        echo ("<script>
    setTimeout(function(){ window.location='welcome.php' }, 8000);
    </script>");
    } else {
        echo "
    <div class='alert alert-error'>
    ERROR: Could not able to execute $sql. </div>". mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
