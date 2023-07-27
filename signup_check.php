<?php
$con = mysqli_connect('localhost', 'root', '', 'tech_trend');

// get the post records
$user_name = $_POST['name'];
$name = $_POST['uname'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO users (name, user_name, password) VALUES ('$uname', '$name', '$password')";

// insert in database
$rs = mysqli_query($con, $sql);

if ($rs) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . mysqli_error($con);
}

// close the database connection
mysqli_close($con);
?>
