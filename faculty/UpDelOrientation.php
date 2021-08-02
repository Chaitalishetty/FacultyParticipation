<!DOCTYPE html>
<html>
<head>
<title>orientation</title>
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
    button{
        align-items: center;
        background-color: lightyellow;
    }
    h2{
        text-align: center;
        font-family: inherit;
        color: #3e3e3e;
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
<a href="welcome.php"><img src="images/logo.png" style="height:10vh;width:auto"></a>
<h2>Data of Orientation Attended</h2>

<br>

<div class="container">
    <center>
    <form action="" method="post">
     
    </form>
    </center>
    <br>
    <table>
    
        <tr>
           <th>Sr No.</th>
            <th>sdrn</th>
            <th>Name of Faculty</th>
            <th>University</th>
            <th>Subject</th>
            <th>Semester</th>
            <th>Venue</th>
            <th>Date</th>    
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
                
                $query = " SELECT * FROM orientation WHERE SDRN = '$sdrn' ";
                $query_run = mysqli_query($link,$query);
                $srno=1;
                while($row = mysqli_fetch_array($query_run))
                {
                    echo "<tr>"; 
                            echo "<td>" . $srno . "</td>"; 
                            echo "<td>" . $row['SDRN'] . "</td>"; 
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['University'] . "</td>";
                            echo "<td>" . $row['Subject'] . "</td>";
                            echo "<td>" . $row['Semester'] . "</td>";
                            echo "<td>" . $row['Venue'] . "</td>";
                            echo "<td>" . $row['Date'] . "</td>";
							echo "<td>". "<a href=UpdateOrientation1.php?id=".$row['Srno'].">"."<img src='images/edit.png' style='width:20px'>"."</a>". "</td>";
							echo "<td>". "<a href=DeleteOrientation.php?id=".$row['Srno'].">"."<img src='images/delete.png' style='width:20px'>"."</a>". "</td>";
                    echo "</tr>";
                    $srno++;
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