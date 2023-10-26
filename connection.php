<?php

$servername="loclhost";
$username="root";
$dbname="exam_3433";
$password="";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error in Database: " . mysqli_connect_error());
}
?>


?>