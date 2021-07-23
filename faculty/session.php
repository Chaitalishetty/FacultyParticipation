<?php
// include('config.php');
session_start();
$link = mysqli_connect("localhost", "root", "", "faculty_par");

// Check connection
if ($link === false) {
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

$user_check = $_SESSION['login_user'];

$sql = "select First_name,Last_name from faculty where Sdrn = '$user_check'";
$result = mysqli_query($link, $sql);

//   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$login_session = $row['First_name'];
$login_sess = $row['Last_name'];

if (!isset($_SESSION['login_user'])) {
   header("location:login.php");
   die();
}
