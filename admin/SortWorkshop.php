<!DOCTYPE html>
<html>

<head>

<title>Sorted Workshops</title>

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
<h2>Data of Workshop table</h2>

    <br>

    <div class="container">
        <center>

            <form method="post">
                <input type="date" name="txtStartDate">
                <input type="date" name="txtEndDate">
                <input class="name-field" type="text" name="Name_of_Faculty" placeholder="Enter Name of the Faculty">

                <input class="search-btn" type="submit" name="search" value="View Record">

                <a href="workshops_sttp-fdp.php" class="search-btn1">
                    All Records
                </a>

            </form>

        </center>

        <br>

        <table border="3px">

            <tr>
                <th>sr</th>
                <th>sdrn</th>
                <th>Name_of_Faculty</th>
                <th>Criteria</th>
                <th>Name_of_Workshop</th>
                <th>Sponsorship</th>
                <th>Venue</th>
                <th>Start_Date</th>
                <th>End_Date</th>
                <th>No_of_days</th>
                <th>Organizer</th>
                <th>level</th>
                <th>Source_of_Funding</th>
                <th>Registration_Amount</th>
                <th>Amount_Funded</th>
                <th>TA</th>
                <th>Document</th>
            </tr>
            <br>


            <?php


$conn = @mysqli_connect("localhost", "root", "", "faculty_par");
if (!$conn) {
    die("Connection Failed:" . @mysqli_connect_error());
}

if(isset($_POST['search']))
    
{
    
    $Name_of_Faculty = $_POST['Name_of_Faculty'];
	$txtStartDate = $_POST['txtStartDate'];
	$txtEndDate = $_POST['txtEndDate'];
    
    
	$query = "SELECT * FROM workshop WHERE (
    ((sdate Between '$txtStartDate' AND '$txtEndDate') AND (edate Between '$txtStartDate' AND '$txtEndDate')) AND (Name = '$Name_of_Faculty') OR ((Name = '$Name_of_Faculty') OR ((sdate Between '$txtStartDate' AND '$txtEndDate') AND (edate Between '$txtStartDate' AND '$txtEndDate'))) ) ORDER BY sdate";
    
    
	$count = @mysqli_query($conn,$query);
    while($row = @mysqli_fetch_array($count)){
        $doc = '../faculty/'. $row['uploads'];
        echo "<tr>
        <td>".$row["Srno"]."</td>
        <td>".$row["SDRN"]."</td>
        <td>".$row["Name"]."</td>
        <td>".$row["criteria"]."</td>
        <td>".$row["Name_workshop"]."</td>
        <td>".$row["sponsor"]."</td>
        <td>".$row["venue"]."</td>
        <td>".$row["sdate"]."</td>
        <td>".$row['edate']."</td>
        <td>".$row['ndays']."</td>
        <td>".$row['organiser']."</td>
        <td>".$row['org_type']."</td>
        <td>".$row['sfunding']."</td>
        <td>".$row['ramount']."</td>
        <td>".$row['amount_funded']."</td>
        <td>".$row['TA']."</td>";
        echo "<td><a href='".$doc."'><img src='images/doc.png' style='width:20px'></td></a></tr>";
    }       
}
?>



        </table>
    </div>

</body>

</html>


<!--	$query = "SELECT * FROM seminar_webinar WHERE ((name_of_faculty = '$name_of_faculty') OR ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate'))) ORDER BY start_date";-->