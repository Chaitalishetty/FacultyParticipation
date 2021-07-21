<!DOCTYPE html>
<html>

<head>
    <title>All Records Workshops</title>
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
    </style>
</head>

<body>
    <h2>*** Data of Workshops table ***</h2>

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




        <?php
        $conn = mysqli_connect("localhost", "root", "", "faculty_par");
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        }

        $sql = "SELECT sr,sdrn,Name_of_Faculty,Criteria,Name_of_Workshop,Sponsorship,Venue,Start_Date,End_Date,No_of_days,Organizer,level,Source_of_Funding,Registration_Amount,Amount_Funded,TA,uploads FROM workshops";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $doc = '../faculty/' . $row['uploads'];
                echo "<tr>
        <td>" . $row["sr"] . "</td>
        <td>" . $row["sdrn"] . "</td>
        <td>" . $row["Name_of_Faculty"] . "</td>
        <td>" . $row["Criteria"] . "</td>
        <td>" . $row["Name_of_Workshop"] . "</td>
        <td>" . $row["Sponsorship"] . "</td>
        <td>" . $row["Venue"] . "</td>
        <td>" . $row["Start_Date"] . "</td>
        <td>" . $row['End_Date'] . "</td>
        <td>" . $row['No_of_days'] . "</td>
        <td>" . $row['Organizer'] . "</td>
        <td>" . $row['level'] . "</td>
        <td>" . $row['Source_of_Funding'] . "</td>
        <td>" . $row['Registration_Amount'] . "</td>
        <td>" . $row['Amount_Funded'] . "</td>
        <td>" . $row['TA'] . "</td></tr>";
                echo "<td><a href='" . $doc . "'>Doc </td></a>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }

        $conn->close();
        ?>

    </table>

    <br>
    <br>

    <h2>

        <a href="workshops_sttp-fdp_Excel_all.php">
            <button class="btn btn-primary shop-item-button">Download</button>
        </a>

    </h2>

</body>

</html>