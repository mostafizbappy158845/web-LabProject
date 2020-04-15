<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    echo "Connection failed!!!";
    exit();
}
else
{
echo "Connected successfully";
}

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['user_email'];
$country = $_POST['country_name'];
$message = $_POST['message'];

$sql = "INSERT INTO collect (firstName, lastName, email, country, message)
VALUES ('$fname','$lname','$email', '$country', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ";
}



mysqli_close($conn);

?> 