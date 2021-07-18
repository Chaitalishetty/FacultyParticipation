<?php  
$conn = mysqli_connect("localhost", "root", "", "faculty_par");  
//mysqli_select_db($conn, 'crud');  
$sql = "SELECT * FROM seminar_webinar";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "sr_no" . "\t" . 
    "sdrn" . "\t" . 
    "name_of_faculty" . "\t" . 
    "seminar_webinar" . "\t" . 
    "seminar_webinar_name" . "\t" . 
    "sponsorship" . "\t" . 
    "venue" . "\t" . 
    "start_date" . "\t" . 
    "end_date" . "\t" . 
    "no_of_days" . "\t" .  
    "organizer" . "\t" .  
    "local_state_national_international" . "\t" . 
    "source_of_funding" . "\t" . 
    "registration_amount" . "\t" . 
    "amount_funded" . "\t" . 
    "TA" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Seminar.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
?> 
 