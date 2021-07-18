<!DOCTYPE html>
<html>
<head>
<title>All Records Courses</title>
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
<h2>***  Data of Courses table  ****</h2>

<br>

<table border="3px">
    <tr>
    <th>sr</th>
    <th>sdrn</th>
    <th>NameOfFaculty</th>
    <th>CourseDetails</th>
    <th>CourseType</th>
    <th>StartDate</th>
    <th>EndDate</th>
    <th>Weeks</th>
    <th>Organizer</th>
    <th>RegistrationAmount</th>
    <th>Amountfunded</th>
    <th>fdp</th>
    <th>ResultP</th>
    <th>Result</th>
    <th>Topper</th>
    </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "faculty_par");
        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM courses_attended";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["sr"]. "</td><td>" . $row["sdrn"]. "</td><td>"
                    . $row["NameOfFaculty"]. "</td><td>" . $row["CourseDetails"]. "</td><td>" . $row["CourseType"]. "</td><td>" . $row["StartDate"]. "</td><td>" . $row["EndDate"]. "</td><td>" . $row["Weeks"]. "</td><td>" . $row["Organizer"]. "</td><td>" . $row["RegistrationAmount"]. "</td><td>" . $row["Amountfunded"]. "</td><td>" . $row["fdp"]. "</td><td>" . $row["ResultP"]. "</td><td>" . $row["Result"]. "</td><td>" . $row["Topper"]. "</td></tr>";
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
<a href="cources_Excel_all.php">
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
//$query = "SELECT * FROM courses_attended WHERE Name_of_Faculty = 'Prasad sir';";
//$result = mysqli_query($conn,$query);
//while ($row = mysqli_fetch_assoc($result)) {
//    echo "".$row["Name_of_Faculty"]."<br>";
//    echo "".$row["Course_Details"]."<br>";
//    echo "".$row["NPTEL_Coursera_CDAC_CISCO"]."<br>";
//    echo "".$row["Start_Date"]."<br>";
//    echo "".$row["End_Date"]."<br>";
//    echo "".$row["No_of_weeks"]."<br>";
//    echo "".$row["Organizer"]."<br>";
//    echo "".$row["Registration_Amount"]."<br>";
//    echo "".$row["Amount_Funded"]."<br>";
//    echo "".$row["1/2 FDP or 1 FDP or 1&1/2 FDP"]."<br>";
//    echo "".$row["Result_in_percentage"]."<br>";
//    echo "".$row["Result Successfully completed/ Elite/ Elite Silver/ Gold"]."<br>";
//    echo "".$row["Topper 1% / 2% / 5% / 10%/"]."<br>";
//    
//}
//
//
//
//$query = "SELECT * FROM courses_attended WHERE Name_of_Faculty = 'Srinivas Sir';";
//$result = mysqli_query($conn,$query);
//while ($row = mysqli_fetch_assoc($result)) {
//    echo "".$row["Name_of_Faculty"]."<br>";
//    echo "".$row["Course_Details"]."<br>";
//    echo "".$row["NPTEL_Coursera_CDAC_CISCO"]."<br>";
//    echo "".$row["Start_Date"]."<br>";
//    echo "".$row["End_Date"]."<br>";
//    echo "".$row["No_of_weeks"]."<br>";
//    echo "".$row["Organizer"]."<br>";
//    echo "".$row["Registration_Amount"]."<br>";
//    echo "".$row["Amount_Funded"]."<br>";
//    echo "".$row["1/2 FDP or 1 FDP or 1&1/2 FDP"]."<br>";
//    echo "".$row["Result_in_percentage"]."<br>";
//    echo "".$row["Result Successfully completed/ Elite/ Elite Silver/ Gold"]."<br>";
//    echo "".$row["Topper 1% / 2% / 5% / 10%/"]."<br>";
//    
//}

?>