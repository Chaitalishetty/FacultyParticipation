<?php  
$conn = mysqli_connect("localhost", "root", "", "faculty_par");  
//mysqli_select_db($conn, 'crud');  
$sql = "SELECT * FROM orientation";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "sr" . "\t" . "sdrn" . "\t" . "NameOfFaculty" . "\t" .  "Subject" . "\t" . "Semester" . "\t" . "Venue" . "\t" . "Date" . "\t";  
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
header("Content-Disposition: attachment; filename=User_Detail_university_orientation.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 