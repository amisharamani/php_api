
<?php
include('conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $password = $_POST['password']; 
 

    if (isset($name) && isset($contact) && isset($password)) {
        
        $latitude = mysqli_real_escape_string($conn, $latitude);
        $longitude = mysqli_real_escape_string($conn, $longitude);
        $userId = mysqli_real_escape_string($conn, $userId);

        if ($count == 0) {
            $insertQuery = "INSERT INTO user (id, name, contact, password) VALUES (id, '$name', '$contact'.'$password')";
            if (mysqli_query($conn, $insertQuery)) {
                echo " inserted successfully.";
            } else {
                echo "Error inserting  data: " . mysqli_error($conn);
            }
        } 
    } else {
        echo "Incomplete or missing data.";
    }
} else {
  
    echo "Invalid request method.";
}
?>

