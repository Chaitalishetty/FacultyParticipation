<?php  
$conn = mysqli_connect("localhost", "root", "", "faculty_par");  
//mysqli_select_db($conn, 'crud');  
$sql = "SELECT * FROM courses_attended";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "sr" . "\t" . "sdrn" . "\t" . "NameOfFaculty" . "\t" . "CourseDetails" . "\t" . "CourseType" . "\t" . "StartDate" . "\t" . "EndDate" . "\t" .  "Weeks" . "\t" .  "Organizer" . "\t" .  "RegistrationAmount" . "\t" . "Amountfunded" . "\t" . "fdp" . "\t" . "ResultP" . "\t" . "Result" . "\t" . "Topper" . "\t";  
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
header("Content-Disposition: attachment; filename=User_Detail_cources_attended.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
?> 
 