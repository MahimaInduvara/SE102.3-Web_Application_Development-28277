<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "university";


$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



$d = "DELETE * FROM students";

if ($conn->query($d) === TRUE) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $conn->error;
}


?>
