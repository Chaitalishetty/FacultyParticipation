<!DOCTYPE html>
<html>

<head>

<title>Sorted Syllabus</title>

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
    
    .search-btn{
        text-align: center;
        vertical-align: middle;
        padding: .57em .57em;
        cursor: pointer;
        background-color: #4CBB17;
        color: white;
    }
    
    .search-btn1{
        text-align: center;
        vertical-align: middle;
        padding: .57em .57em;
        cursor: pointer;
        background-color: skyblue;
        color: black;
        text-decoration: none;
        font-family: serif;
    }
    
    .name-field{
        text-align: center;
        vertical-align: middle;
        padding: .37em .37em;
        
    }
</style>
</head>
<body>
<a href="welcome.php"><img src="images/logo.png" style="height:10vh;width:auto"></a>
<h2>Data of Syllabus table</h2>

    <br>

    <div class="container">
        <center>

            <form method="post">
                <input type="date" name="txtStartDate">
                <input type="date" name="txtEndDate">
                <input class="name-field" type="text" name="NameOfFaculty" placeholder="Enter Name of the Faculty">


                <input class="search-btn" type="submit" name="search" value="View Record">

                <a href="syllabus_settings.php" class="search-btn1">
                    All Records
                </a>


            </form>

        </center>

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

            <br>


            <?php


            $conn = mysqli_connect("localhost", "root", "", "faculty_par");

            if (!$conn) {
                die("Connection Failed:" . mysqli_connect_error());
            }
            if(isset($_POST['search']))
                
            {
                
                $NameOfFaculty = $_POST['NameOfFaculty'];
                $txtStartDate = $_POST['txtStartDate'];
                $txtEndDate = $_POST['txtEndDate'];
                
                
            //	$query = "SELECT * FROM syllabus_settings WHERE (
            //    ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate')) AND (NameOfFaculty = '$NameOfFaculty') OR ((NameOfFaculty = '$NameOfFaculty') OR ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate'))) ) ORDER BY start_date";
                
                $query = "SELECT * FROM syllabus WHERE ((Date Between '$txtStartDate' AND '$txtEndDate') OR (Name= '$NameOfFaculty'))" ;
    
	$count = @mysqli_query($conn,$query);
    while($row = @mysqli_fetch_array($count)){
        $doc = '../faculty/'. $row['uploads'];
        echo "<tr>"; 
        
            echo "<td>" . $row['Srno'] . "</td>"; 
            echo "<td>" . $row['SDRN'] . "</td>"; 
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['University'] . "</td>";
            echo "<td>" . $row['Subject'] . "</td>";
            echo "<td>" . $row['Semester'] . "</td>";
            echo "<td>" . $row['Venue'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td><a href='".$doc."'><img src='images/doc.png' style='width:20px'></a></td>";
            

        echo "</tr>";
}        
}
?>
        </table>
    </div>

</body>

</html>
