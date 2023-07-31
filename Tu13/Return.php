<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "university";

$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$s = "SELECT * FROM students";
$result = $conn->query($s);

if ($result->num_rows > 0) {
    echo "<h2>Students Details</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No students data found.";
}
?>
