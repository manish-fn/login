<?php
require 'database.php';

$a=$_POST['email'];
$b=$_POST['password'];

$sql = "DELETE FROM student WHERE email = '$a' AND password ='$b'";
mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    echo "You have successfully updated your data.<br><br>";
}
else {
    echo "The data you submitted matched the current data so nothing was changed.<br><br>";
}
mysqli_close($conn);
?>
