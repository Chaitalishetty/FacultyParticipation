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
//$sql = "INSERT INTO workshop (SDRN, Name_of_faculty, criteria,Name_of_Seminar, Sponsorship, Venue, Datr_To ,Date_From, Days, Organiser, level, Source_of_Funding, Registration_Amount, Amount_funded, TA) VALUES ('$sdrn','$name','$cri','$sem', '$spon', '$ven', '$dateto','$datefrom','$num', '$org' ,'$choose' ,'$finalsrc','$reg', '$fund','$finalta')";

$sql = "INSERT INTO workshop (SDRN, Name, criteria,Name_workshop, sponsor, venue, sdate, edate, ndays, organiser, org_type, sfunding, ramount, amount_funded ,TA) VALUES ('$sdrn','$name','$cri','$sem','$spon','$finalvenue', '$dateto','$datefrom','$num', '$org' ,'$choose' ,'$finalsrc','$reg', '$fund','$finalta')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo "<a href='welcome.php'>Go back to homepage<br><a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
