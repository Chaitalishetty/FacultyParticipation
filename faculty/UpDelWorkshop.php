<!DOCTYPE html>
<html>
<head>
<title>Worshops</title>
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
        background-color: #588c7e;
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
    .search-btn{
        text-align: center;
        vertical-align: middle;
        padding: .37em .37em;
        cursor: pointer;
        background-color: #4CBB17;
        color: white;
    }
    .name-field{
        text-align: center;
        vertical-align: middle;
        padding: .37em .37em;
        
    }
</style>
</head>
<body>
<h2>***  Data of Workshops Attended  ***</h2>

<br>

<div class="container">
    <center>
    <form action="" method="post">
     
    </form>
    </center>
    <br>
    <table>
    
        <tr>
           <th>ID</th>
           <th>SDRN</th>
            <th>Name Of Faculty</th>
            <th>Criteria</th>
            <th>Name</th>
            <th>Sponsored By</th>
            <th>Venue</th>
            <th>Date From</th>
            <th>Date To</th>  
			 <th>Days</th>
			 <th>Organiser</th>
			 <th>Level</th>
			 <th>Source of Funding</th>
			 <th>Registration Amount</th>
			 <th>Amount Funded</th>
			 <th>TA</th>
             <th>Update</th> 
			<th>Delete</th>
        </tr>
    
        <?php
           include('session.php');
			$link = mysqli_connect("localhost", "root", "", "faculty_par");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sdrn=$user_check;

      //      if(isset($_POST['search']))
        //    {
          //      $NameOfFaculty = $_POST['NameOfFaculty'];
                
                $query = " SELECT * FROM workshop WHERE SDRN = '$sdrn' ";
                $query_run = mysqli_query($link,$query);
                
                while($row = mysqli_fetch_array($query_run))
                {
                    echo "<tr>"; 
                            echo "<td>" . $row['Srno'] . "</td>"; 
                            echo "<td>" . $row['SDRN'] . "</td>"; 
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['criteria'] . "</td>";
                            echo "<td>" . $row['Name_workshop'] . "</td>";
                            echo "<td>" . $row['sponsor'] . "</td>";
                            echo "<td>" . $row['venue'] . "</td>";
                            echo "<td>" . $row['sdate'] . "</td>";
							echo "<td>" . $row['edate'] . "</td>";
							echo "<td>" . $row['ndays'] . "</td>";
							echo "<td>" . $row['organiser'] . "</td>";
							echo "<td>" . $row['org_type'] . "</td>";
							echo "<td>" . $row['sfunding'] . "</td>";
							echo "<td>" . $row['ramount'] . "</td>";
							echo "<td>" . $row['amount_funded'] . "</td>";
							echo "<td>" . $row['TA'] . "</td>";
						echo "<td>". "<a href=UpdateWorkshop1.php?id=".$row['Srno'].">"."Update"."</a>". "</td>";
							echo "<td>". "<a href=DeleteWorkshop.php?id=".$row['Srno'].">"."Delete"."</a>". "</td>";
                    echo "</tr>";
                }
            //}   
        ?> 
    </table>
</div>
<br>
<br>
<h2>
</h2>
</body>
</html>