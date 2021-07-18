<!DOCTYPE html>
<html>
<head>
<title>All Records Orientation</title>
    
    <style>
    
    table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    
    th {
        background-color: #c9243f;
        color: white;
    }
    
    tr:nth-child(even) {background-color: #f2f2f2}
    button{
        align-items: center;
        background-color: lightyellow;
    }
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
    .btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .3em;
    font-weight: bold;
    }
    
    </style>
    
</head>

<body>
<h2>***  Data of Orientation table  ***</h2>

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
</tr>

<?php
$conn = mysqli_connect("localhost","root","","faculty_par");
if($conn -> connect_error) {
	die("Connection failed:" . $conn -> connect_error);
}

$sql = "SELECT SDRN,Name,Subject,Semester,Venue,Date FROM orientation";
$result = $conn-> query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()) {
		echo "<tr>
            <td>" . "1"."</td>
            <td>".$row['SDRN']."</td>
            <td>".$row["Name"]."</td>
            <td>".$row["Subject"]."</td>
            <td>".$row["Semester"]."</td>
            <td>".$row["Venue"]."</td>
            <td>".$row["Date"]."</td>
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


