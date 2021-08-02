<style>
    <?php include 'css/styles.css'; ?>
</style>
<?php

// Escape user inputs for security
$link = mysqli_connect("localhost", "root", "", "faculty_par");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id3=$_GET['id'];
 
$sql = "DELETE FROM workshop WHERE Srno=$id3";
if (mysqli_query($link, $sql)) {
    echo "<div class='alert alert-success'>Record deleted successfully</div>";
    echo "<script> setTimeout(function(){  window.location.href='UpDelWorkshop.php' }, 3000);</script>";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>