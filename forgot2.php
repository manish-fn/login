<?php
require 'database.php';
$a=$_POST['email'];
$sql = "SELECT email, password FROM student WHERE email = '$a'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["email"]. " - Password: " . $row["password"]. "<br>";

    }
} else {
    echo "0 results";
}

$conn->close();
?>
