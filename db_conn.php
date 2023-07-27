<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "tech_trend";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
