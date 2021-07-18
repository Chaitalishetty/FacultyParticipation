<!DOCTYPE html>
<html>
<head>

<title>Seminar</title>

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

<h2>***  Data of Seminar table  ***</h2>

<br>

<div class="container">
    <center>
       
        <form method="post">
            <input type="date" name="txtStartDate">
            <input type="date" name="txtEndDate">
            <input class="name-field" type="text" name="name_of_faculty" placeholder="Enter Name of the Faculty">


            <input class="search-btn" type="submit" name="search" value="View Record">
            
            <a href="seminar.php" class="search-btn1">
                All Records
            </a>

        </form>
        
    </center>
    
    <br>
    
    <table border="3px">
       
        <tr>
            <th>sr_no</th>
            <th>sdrn</th>
            <th>name_of_faculty</th>
            <th>seminar_webinar</th>
            <th>seminar_webinar_name</th>
            <th>sponsorship</th>
            <th>venue</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>no_of_days</th>
            <th>organizer</th>
            <th>local_state_national_international</th>
            <th>source_of_funding</th>
            <th>registration_amount</th>
            <th>amount_funded</th>
            <th>TA</th>
        </tr>
    
    <br>


<?php


$conn = @mysqli_connect("localhost","root","","faculty_par");
    
if(!$conn){
	die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['search']))
    
{
    
    $name_of_faculty = $_POST['name_of_faculty'];
	$txtStartDate = $_POST['txtStartDate'];
	$txtEndDate = $_POST['txtEndDate'];
    
    
	$query = "SELECT * FROM seminar_webinar WHERE (
    ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate')) AND (name_of_faculty = '$name_of_faculty') OR ((name_of_faculty = '$name_of_faculty') OR ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate'))) ) ORDER BY start_date";
    
    
	$count = @mysqli_query($conn,$query);


?>

<?php


    while($row = @mysqli_fetch_array($count)){
        
        echo "<tr>"; 
        
            echo "<td>" . $row['sr_no'] . "</td>"; 
            echo "<td>" . $row['sdrn'] . "</td>";
            echo "<td>" . $row['name_of_faculty'] . "</td>"; 
            echo "<td>" . $row['seminar_webinar'] . "</td>";
            echo "<td>" . $row['seminar_webinar_name'] . "</td>";
            echo "<td>" . $row['sponsorship'] . "</td>";
            echo "<td>" . $row['venue'] . "</td>";
            echo "<td>" . $row['start_date'] . "</td>";
            echo "<td>" . $row['end_date'] . "</td>";
            echo "<td>" . $row['no_of_days'] . "</td>";
            echo "<td>" . $row['organizer'] . "</td>"; 
            echo "<td>" . $row['local_state_national-international'] . "</td>"; 
            echo "<td>" . $row['source_of_funding'] . "</td>"; 
            echo "<td>" . $row['registration_amount'] . "</td>"; 
            echo "<td>" . $row['amount_funded'] . "</td>"; 
            echo "<td>" . $row['TA'] . "</td>"; 


        echo "</tr>";
    }       
}


?>



</table>
</div>

</body>
</html>


<!--	$query = "SELECT * FROM seminar_webinar WHERE ((name_of_faculty = '$name_of_faculty') OR ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate'))) ORDER BY start_date";-->