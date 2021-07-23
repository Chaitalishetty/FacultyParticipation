<!DOCTYPE html>
<html>

<head>
    <title>Syllabus</title>
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

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        button {
            align-items: center;
            background-color: lightyellow;
        }

        h2 {
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

        .search-btn {
            text-align: center;
            vertical-align: middle;
            padding: .37em .37em;
            cursor: pointer;
            background-color: #4CBB17;
            color: white;
        }

        .name-field {
            text-align: center;
            vertical-align: middle;
            padding: .37em .37em;

        }
    </style>
</head>

<body>
    <h2>*** Data of Syllabus table ***</h2>

    <br>

    <div class="container">
        <center>
            <form action="" method="post">
                <input class="name-field" type="text" name="NameOfFaculty" placeholder="Enter Name of the Faculty">
                <input class="search-btn" type="submit" name="search" value="SEARCH">
            </form>
        </center>
        <br>
        <table>

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
            $conn = mysqli_connect("localhost", "root", "", "rait");

            if (isset($_POST['search'])) {
                $NameOfFaculty = $_POST['NameOfFaculty'];

                $query = " SELECT * FROM syllabus_settings WHERE NameOfFaculty = '$NameOfFaculty' ";
                $query_run = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($query_run)) {
                    echo "<tr>";
                    echo "<td>" . $row['sr'] . "</td>";
                    echo "<td>" . $row['sdrn'] . "</td>";
                    echo "<td>" . $row['NameOfFaculty'] . "</td>";
                    echo "<td>" . $row['University'] . "</td>";
                    echo "<td>" . $row['Subject'] . "</td>";
                    echo "<td>" . $row['Semester'] . "</td>";
                    echo "<td>" . $row['Venue'] . "</td>";
                    echo "<td>" . $row['Date'] . "</td>";
                    echo "</tr>";
                }
            }

            ?>
        </table>
    </div>
    <br>
    <br>

    <h2>
        <a href="csvfiles/syllabus_Excel_all.php">
            <button class="btn btn-primary shop-item-button">Download</button>
        </a>
    </h2>
</body>

</html>











<!--
if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM syllabus_settings WHERE NameOfFaculty = 'Pratik sir'"; 
                if($res = $conn->query($sql)){ 
                    if($res->num_rows > 0){ 
                        echo "<table>"; 
                            echo "<tr>"; 
                                echo "<th>sr</th>"; 
                                echo "<th>sdrn</th>"; 
                                echo "<th>NameOfFaculty</th>";
                                echo "<th>University</th>"; 
                                echo "<th>Subject</th>";
                                echo "<th>Semester</th>";
                                echo "<th>Venue</th>";
                                echo "<th>Date</th>";
                            echo "</tr>"; 
                        while($row = $res->fetch_array()){ 
                            echo "<tr>"; 
                                echo "<td>" . $row['sr'] . "</td>"; 
                                echo "<td>" . $row['sdrn'] . "</td>"; 
                                echo "<td>" . $row['NameOfFaculty'] . "</td>";
                                echo "<td>" . $row['University'] . "</td>";
                                echo "<td>" . $row['Subject'] . "</td>";
                                echo "<td>" . $row['Semester'] . "</td>";
                                echo "<td>" . $row['Venue'] . "</td>";
                                echo "<td>" . $row['Date'] . "</td>";
                            echo "</tr>"; 
                        } 
                        echo "</table>"; 
                        $res->free(); 
                    } 
                    else { 
                        echo "No matching records are found."; 
                    } 
            }
            else { 
                echo "ERROR: Could not able to execute $sql. "  
                                                . $conn->error; 
            } 

            $conn->close();-->