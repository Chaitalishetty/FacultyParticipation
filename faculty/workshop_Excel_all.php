<?php  
include('session.php');
$conn = mysqli_connect("localhost", "root", "", "faculty_par");  
//mysqli_select_db($conn, 'crud');  
$sql = "SELECT * FROM `workshop` WHERE SDRN = '$user_check'";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "SDRN" . "\t" . "Name" . "\t" . "Criteria" . "\t" . "Name of Seminar" . "\t" .  "Sponsorship" . "\t" . "Venue" . "\t" . "Date_To" . "\t" .  "Date_From" . "\t" . "Days" . "\t" . "Organiser" . "\t" . "Days" . "\t" . "Level" . "\t" . "Funding" . "\t" . "Registration Amount" . "\t" . "Amount Funded" . "\t" . "TA" . "\t";  
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
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 