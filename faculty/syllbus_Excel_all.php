<?php  
include('session.php');
$conn = mysqli_connect("localhost", "root", "", "faculty_par");  
//mysqli_select_db($conn, 'crud');  
$sql = "SELECT * FROM `syllabus` WHERE SDRN = '$user_check'";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "SDRN" . "\t" . "Name" . "\t" . "University" . "\t" . "Subject" . "\t" . "Venue" . "\t" . "Date" . "\t" . "Semester" . "\t";  
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
