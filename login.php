<?php

include 'conection.php';

if (!$conn) {
    echo "Error in Database";
}

$name = $_POST["name"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE name = '$name' AND password = '$password';";
$result = mysqli_query($conn, $sql);

$response = array();

if (mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_assoc($result);
    $code = 'login_successfully';
    $response["code"] = $code;
    $response["name"] = $name;
    $response["password"] = $password;
} 
else 
{
    $code = "login_failed";
    $mess = "Invalid emailid and password";
    $response["code"] = $code;
    $response["message"] = $mess;
}

echo json_encode($response);
mysqli_close($conn);
?>
