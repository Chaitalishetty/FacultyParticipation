<!DOCTYPE html>
<html>
<head>
<title>All Records Syllabus</title>
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
<h2>Data of Syllabus table</h2>

<br>

<table border="3px">
    <tr>
        <th>sr</th>
        <th>sdrn</th>
        <th>NameOfFaculty</th>
        <th>University</th>
        <th>Subject</th>
        <th>Semester</th>
        <th>Venue</th>
        <th>Date</th>   
        <th>Document</th>  
    </tr>
    
    <?php
        $conn = mysqli_connect("localhost", "root", "", "faculty_par");
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM syllabus";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $doc = '../faculty/'. $row['uploads'];
                    echo "<tr><td>" . $row["Srno"]. "</td><td>" . $row["SDRN"]. "</td><td>"
                    . $row["Name"]. "</td><td>" . $row["University"]. "</td><td>" . $row["Subject"]. "</td><td>" . $row["Semester"]. "</td><td>" . $row["Venue"]. "</td><td>" . $row["Date"]. "</td>";
                    echo "<td><a href='".$doc."'><img src='images/doc.png' style='width:20px'></td></a></tr>";
                }
                echo "</table>";
            } 
            else { echo "0 results"; }
        $conn->close();
    ?>
</table>

<br>
<br>

<h2>

<a href="syllabus_Excel_all.php">
    <button class="btn btn-primary shop-item-button">Download</button>
</a>

</h2>
</body>
</html>











<?php

//$conn = mysqli_connect('localhost','root','','rait');
////if (!$conn) {
////    echo "Sorry";
////} else {
////    echo "Success";
////}
//
//$query = "SELECT * FROM syllabus_settings WHERE Name_of_Faculty = 'pratik sir';";
//$result = mysqli_query($conn,$query);
//while ($row = mysqli_fetch_assoc($result)) {
//    echo "".$row["Name_of_Faculty"]."<br>";
//    echo "".$row["Name_of_University"]."<br>";
//    echo "".$row["Subject"]."<br>";
//    echo "".$row["Semester"]."<br>";
//    echo "".$row["Venue"]."<br>";
//    echo "".$row["Date"]."<br>";
//    
//}
//
//
//
//$query = "SELECT * FROM syllabus_settings WHERE Name_of_Faculty = 'pawar sir';";
//$result = mysqli_query($conn,$query);
//while ($row = mysqli_fetch_assoc($result)) {
//    echo "".$row["Name_of_Faculty"]."<br>";
//    echo "".$row["Name_of_University"]."<br>";
//    echo "".$row["Subject"]."<br>";
//    echo "".$row["Semester"]."<br>";
//    echo "".$row["Venue"]."<br>";
//    echo "".$row["Date"]."<br>";
//    
//}

?>