<?php  
$conn = mysqli_connect("localhost", "root", "", "faculty_par");  
//mysqli_select_db($conn, 'crud');  
$sql = "SELECT * FROM workshops";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Sr_No" . "\t" . "sdrn" . "\t" . "Name_of_Faculty" . "\t" . "Criteria_of_Workshop_STTP_Training_Program_FDP" . "\t" . "Name of Workshop / STTP / Training Program / FDP" . "\t" . "Sponsorship received for event from" . "\t" . "Venue" . "\t" . "Start_Date" . "\t" . "End_Date" . "\t" . "No. of days" . "\t" .  "Organizer" . "\t" .  "Local / State / National / International" . "\t" . "Source of Funding" . "\t" . "Registration Amount" . "\t" . "Amount Funded" . "\t" . "TA" . "\t";  
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
header("Content-Disposition: attachment; filename=User_Detail_workshops.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
?> 
 