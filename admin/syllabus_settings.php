<!DOCTYPE html>
<html>
<head>
<title>All Records Syllabus</title>
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
<h2>***  Data of Syllabus table  ***</h2>

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
    </tr>
    
    <?php
        $conn = mysqli_connect("localhost", "root", "", "faculty_par");
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM syllabus_settings";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["sr"]. "</td><td>" . $row["sdrn"]. "</td><td>"
                    . $row["NameOfFaculty"]. "</td><td>" . $row["University"]. "</td><td>" . $row["Subject"]. "</td><td>" . $row["Semester"]. "</td><td>" . $row["Venue"]. "</td><td>" . $row["Date"]. "</td></tr>";
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