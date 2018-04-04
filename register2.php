<?php
require 'database.php';

$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['password1'];

echo $a . "\n" . $b;
if (($b!=$c) || ($a==NULL) ||($b==NULL))
	{
		echo"\nFault";
		exit();
	}

$sql = "INSERT INTO users (email, password) VALUES ('$a', '$b')";
if ($conn->query($sql) === TRUE) 
	{
    echo "\nNew record created successfully";
} else {
    echo "\nError: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
