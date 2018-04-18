<?php
require 'database.php';
$a=$_POST['email'];

?><?php $a=$_POST['email'];

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

$conn->close(); ?>					
<!DOCTYPE html>
<html>
<head>
<title>forgot password</title>
</head>
<body>
<form action="forgot.php" method="POST">
<input type="text" name="email" placeholder="Enter the e-mail id"/>
<input type="submit" name="submit" value="forgot"/>


</form>

</body>
</html>

