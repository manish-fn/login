<?php
require 'database.php';

$a=$_POST['email'];

$sql = "SELECT email, password FROM student WHERE email='$a'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["email"]. " - password: ". $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
