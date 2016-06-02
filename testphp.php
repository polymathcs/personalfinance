<?php
$mysqli = mysqli_connect("localhost", "root", "root", "personal_finance");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$res = mysqli_query($mysqli, "SELECT id,user_fname,user_lname AS _msg FROM user");
$row = mysqli_fetch_assoc($res);
echo $row['_msg'];

//$mysqli = new mysqli("example.com", "user", "password", "database");
//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
//}
//
//$res = $mysqli->query("SELECT 'choices to please everybody.' AS _msg FROM DUAL");
//$row = $res->fetch_assoc();
//echo $row['_msg'];
?>