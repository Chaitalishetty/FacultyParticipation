<!DOCTYPE html>
<html>

<head>

    <title>Sorted Workshops</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }

        th {
            background-color: #c9243f;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        h2 {
            text-align: center;
            font-family: inherit;
            color: slategray;
        }

        .search-btn {
            text-align: center;
            vertical-align: middle;
            padding: .57em .57em;
            cursor: pointer;
            background-color: #4CBB17;
            color: white;
        }

        .search-btn1 {
            text-align: center;
            vertical-align: middle;
            padding: .57em .57em;
            cursor: pointer;
            background-color: skyblue;
            color: black;
            text-decoration: none;
            font-family: serif;
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

            if (isset($_POST['search'])) {

                $Name_of_Faculty = $_POST['Name_of_Faculty'];
                $txtStartDate = $_POST['txtStartDate'];
                $txtEndDate = $_POST['txtEndDate'];


                $query = "SELECT * FROM workshops WHERE (
    ((Start_Date Between '$txtStartDate' AND '$txtEndDate') AND (End_Date Between '$txtStartDate' AND '$txtEndDate')) AND (Name_of_Faculty = '$Name_of_Faculty') OR ((Name_of_Faculty = '$Name_of_Faculty') OR ((Start_Date Between '$txtStartDate' AND '$txtEndDate') AND (End_Date Between '$txtStartDate' AND '$txtEndDate'))) ) ORDER BY Start_Date";


                $count = @mysqli_query($conn, $query);


            ?>

            <?php


                while ($row = @mysqli_fetch_array($count)) {
                    $doc = '../faculty/' . $row['uploads'];
                    echo "<tr>";

                    echo "<td>" . $row['sr'] . "</td>";
                    echo "<td>" . $row['sdrn'] . "</td>";
                    echo "<td>" . $row['Name_of_Faculty'] . "</td>";
                    echo "<td>" . $row['Criteria'] . "</td>";
                    echo "<td>" . $row['Name_of_Workshop'] . "</td>";
                    echo "<td>" . $row['Sponsorship'] . "</td>";
                    echo "<td>" . $row['Venue'] . "</td>";
                    echo "<td>" . $row['Start_Date'] . "</td>";
                    echo "<td>" . $row['End_Date'] . "</td>";
                    echo "<td>" . $row['No_of_days'] . "</td>";
                    echo "<td>" . $row['organizer'] . "</td>";
                    echo "<td>" . $row['level'] . "</td>";
                    echo "<td>" . $row['Source_of_Funding'] . "</td>";
                    echo "<td>" . $row['Registration_Amount'] . "</td>";
                    echo "<td>" . $row['Amount_Funded'] . "</td>";
                    echo "<td>" . $row['TA'] . "</td>";
                    echo "<td><a href='" . $doc . "'>$doc </td></a>";


                    echo "</tr>";
                }
            }


            ?>



        </table>
    </div>

</body>

</html>


<!--	$query = "SELECT * FROM seminar_webinar WHERE ((name_of_faculty = '$name_of_faculty') OR ((start_date Between '$txtStartDate' AND '$txtEndDate') AND (end_date Between '$txtStartDate' AND '$txtEndDate'))) ORDER BY start_date";-->