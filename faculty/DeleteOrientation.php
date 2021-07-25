<?php

// Escape user inputs for security
$link = mysqli_connect("localhost", "root", "", "faculty_par");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id3=$_GET['id'];
 
$sql = "DELETE FROM orientation WHERE Srno=$id3";
if (mysqli_query($link, $sql)) {
    echo "<script>alert('Record deleted successfully');window.location.href='UpDelOrientation.php'</script>";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>