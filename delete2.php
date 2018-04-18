<?php
include 'database.php';

$a=$_POST['email'];
$b=$_POST['password'];
$sql = "DELETE FROM student WHERE email='$a' AND password='$b'";
mysqli_query($conn,$sql);

if (mysqli_affected_rows($conn)) {
    echo "row deleted.<br><br>";
}
else {
    echo "No changes.<br><br>";
}

$conn->close();
?>
