<?php
require 'database.php';

$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['newpass'];

echo $a, $b, $c;
$sql = "UPDATE student SET password = '$c' WHERE email = '$a' AND password = '$b'";
mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    echo "Password updated.<br><br>";
}
else {
    echo "No changes.<br><br>";
}
mysqli_close($conn);
?>
