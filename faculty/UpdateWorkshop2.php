<style>
    <?php include 'css/styles.css'; ?>
</style>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "faculty_par");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id3=$_GET['id2'];
// Escape user inputs for security
$sdrn = mysqli_real_escape_string($link, $_REQUEST['SDRN']);
$name = mysqli_real_escape_string($link, $_REQUEST['Name_of_faculty']);
$cri = mysqli_real_escape_string($link, $_REQUEST['criteria']);
$sem = mysqli_real_escape_string($link, $_REQUEST['Name_of_Seminar/Webinar']);
$spon = mysqli_real_escape_string($link, $_REQUEST['Sponsor_received_for_event_from']);
$ven = mysqli_real_escape_string($link, $_REQUEST['Venue']);
$newven = mysqli_real_escape_string($link, $_REQUEST['new_venue']);
$dateto = mysqli_real_escape_string($link, $_REQUEST['Date_To']);
$datefrom = mysqli_real_escape_string($link,$_REQUEST['Date_From']);
$num = mysqli_real_escape_string($link,$_REQUEST['Days']);
$org = mysqli_real_escape_string($link,$_REQUEST['Organiser']);
$choose = mysqli_real_escape_string($link,$_REQUEST['Local/State/National/International']);
$src = mysqli_real_escape_string($link,$_REQUEST['Source_of_Funding']);
$other_source = mysqli_real_escape_string($link, $_REQUEST['Other_source']); //new
$reg = mysqli_real_escape_string($link,$_REQUEST['Registration_Amount']);
$fund = mysqli_real_escape_string($link,$_REQUEST['Amount_funded']);
$ta1 = mysqli_real_escape_string($link,$_REQUEST['TA1']);
$ta = mysqli_real_escape_string($link,$_REQUEST['TA']);

 

   $finalsrc= ($src =='Other') ?  $other_source : $src;
 
$finalvenue= ($src =='Other') ?  $newven : $ven;
 $finalta= ($src =='NA') ?  "000" : $ta1;

 $filename = $_FILES["file"]["name"];
 $temp = explode(".", $filename); //sep filename and extension
 $file_ext = substr($filename, strripos($filename, '.')); //getting extension
 $newfilename = $sdrn . '_' . $name . '_' . $cri . '_' . $sem . '_' . $org . '_' . $datefrom . $file_ext;
 $targetfolder = "uploads/" . $newfilename;

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
//$sql = "INSERT INTO workshop (SDRN, Name_of_faculty, criteria,Name_of_Seminar, Sponsorship, Venue, Datr_To ,Date_From, Days, Organiser, level, Source_of_Funding, Registration_Amount, Amount_funded, TA) VALUES ('$sdrn','$name','$cri','$sem', '$spon', '$ven', '$dateto','$datefrom','$num', '$org' ,'$choose' ,'$finalsrc','$reg', '$fund','$finalta')";

$sql = "UPDATE workshop SET SDRN=$sdrn, Name='$name', criteria='$cri', Name_workshop='$sem', sponsor='$spon', venue='$newven',sdate='$dateto',edate='$datefrom',ndays='$num',organiser='$org',org_type='$choose',sfunding='$finalsrc',ramount='$reg',amount_funded='$fund',TA='$ta1' , uploads='$targetfolder' WHERE Srno=$id3";
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
