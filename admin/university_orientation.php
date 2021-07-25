<!DOCTYPE html>
<html>
<head>
<title>All Records Orientation</title>
    
    <style>
    
    table {
        border-collapse: collapse;
        width: 100%;
        color: #737373;
        font-size: 25px;
        text-align: center;
    }
    th {
        padding: 10px;
        background-color: #C10223;
        color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}    
    h2{
        text-align: center;
        font-family: inherit;
        color: slategray;
    }
    .btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
    }
    .btn:hover{
        opacity:0.9;
    }
    .btn-primary {
    color: white;
    background-color:#606060;
    border: none;
    border-radius: .3em;
    font-weight: bold;
    }
    </style>
    
</head>

<body>
<a href="welcome.php"><img src="images/logo.png" style="height:10vh;width:auto"></a>
<h2>Data of Orientation table</h2>

<br>

<table border="3px">
<tr>
	<th>sr</th>
	<th>sdrn</th>
	<th>NameOfFaculty</th>
	<th>Subject</th>
	<th>Semester</th>
	<th>Venue</th>
	<th>Date</th>
    <th>Document</th> 
</tr>

<?php
$conn = mysqli_connect("localhost","root","","faculty_par");
if($conn -> connect_error) {
	die("Connection failed:" . $conn -> connect_error);
}

$sql = "SELECT SDRN,Name,Subject,Semester,Venue,Date ,uploads FROM orientation";
$result = $conn-> query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()) {
        $doc = '../faculty/'. $row['uploads'];
        
		echo "<tr>
            <td>" . "1"."</td>
            <td>".$row['SDRN']."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Subject"]."</td>
            <td>".$row["Semester"]."</td>
            <td>".$row["Venue"]."</td>
            <td>".$row["Date"]."</td>
         <td><a href='".$doc."'><img src='images/doc.png' style='width:20px'></a></td>
        </tr>";
}
echo "</table>";
}
else{
echo "0 result";
}
 
$conn -> close();
?>

</table>

<br>
<br>

<h2>

<a href="Orientation_Excel_all.php">
    <button class="btn btn-primary shop-item-button">Download</button>
</a>

</h2>


</body>
</html>


