<style>
    <?php include 'css/styles.css'; ?>
</style>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "faculty_par");
// Check connection
if ($link === false) {
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
$finalvenue = ($ven == 'Other') ?  $newven : $ven;
$filename = $_FILES["file"]["name"];
// changes
$temp = explode(".", $filename);
$file_ext = substr($filename, strripos($filename, '.'));
$newfilename = $sdrn . '_' . $name . '_' . $sub . '_syllabus_' . $date . $file_ext;
$ok = 1;
$targetfolder = "uploads/" . $newfilename;
$file_type = $_FILES['file']['type'];



// checking duplicate entry 
$query = "SELECT uploads FROM syllabus WHERE SDRN = '$sdrn' ";

$count = @mysqli_query($link, $query);
$flag = 0;

while ($row = @mysqli_fetch_array($count)) {
    // CHECK FOR DUPLICATES

    if ($targetfolder == $row['uploads']) {
        $flag = 1;
        echo "<div class='alert alert-error'>Duplicate Entry Found ...Please check again and update.</div>";
        echo ("<script>
        setTimeout(function(){ window.location='UpDelSyllabus.php' }, 6000);
        </script>");
        break;
    }
}


if ($flag == 0) {
    if ($file_type == "application/pdf") {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
            echo ("<div class='alert alert-success'>The file " .  $newfilename . " is uploaded </div><br>");
        } else {
            echo "<div class='alert alert-error'>Problem uploading file </div>";
        }
    } else {
        echo "<div class='alert alert-error'>You may only upload PDF files. Please update it.</div><br>";
    }

    // Attempt insert query execution
    $sql = "INSERT INTO syllabus (SDRN, Name, University, Subject,Semester, Venue, Date ,uploads) VALUES ('$sdrn', '$name', '$uni','$sub', '$sem', '$finalvenue', '$date' ,'$targetfolder')";
    if (mysqli_query($link, $sql)) {
        echo ("<div class='alert alert-success'>

    Records added successfully. <br>
 <a href='welcome.php'>Go back to homepage<br><a> </div>");

        echo ("<script>
 setTimeout(function(){ window.location='welcome.php' }, 5000);
 </script>");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
};









// Close connection
mysqli_close($link);
?>