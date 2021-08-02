<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "faculty_par");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);

$sql = "select *from faculty where Sdrn = '$username' and Password = '$password'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    if ($username == '150') {
        header("location: ../admin/welcome.php");
    } else {

        header("location: welcome.php");
    }
    // echo "<h1><center> Login successful </center></h1>";  


    //session_register("username");
    $_SESSION['login_user'] = $username;
} else {
    echo "<h3> Login failed. Invalid username or password.</>";
}
