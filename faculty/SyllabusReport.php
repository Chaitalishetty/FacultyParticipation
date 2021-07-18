<!DOCTYPE html>
<html>
<head>
<title>orientation</title>
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
<h2>***  Data of Syllabus Setting  ***</h2>

<br>

<div class="container">
    <center>
    <form action="" method="post">
     
    </form>
    </center>
    <br>
    <table>
    
        <tr>
           
            <th>sdrn</th>
            <th>Name Of Faculty</th>
            <th>University</th>
            <th>Subject</th>
            <th>Semester</th>
            <th>Venue</th>
            <th>Date</th>    
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
                
                $query = " SELECT * FROM syllabus WHERE SDRN = '$sdrn' ";
                $query_run = mysqli_query($link,$query);
                
                while($row = mysqli_fetch_array($query_run))
                {
                    echo "<tr>"; 
                            
                            echo "<td>" . $row['SDRN'] . "</td>"; 
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['University'] . "</td>";
                            echo "<td>" . $row['Subject'] . "</td>";
                            echo "<td>" . $row['Semester'] . "</td>";
                            echo "<td>" . $row['Venue'] . "</td>";
                            echo "<td>" . $row['Date'] . "</td>";
                    echo "</tr>";
                }
            //}
             
        ?> 
    </table>
</div>
<br>
<br>

<h2>
<a href="syllbus_Excel_all.php">
    <button class="btn btn-primary shop-item-button">Download</button>
</a>
</h2>
</body>
</html>











