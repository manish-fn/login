<?php
$a=$_POST['email'];
$b=$_POST['password'];

if (($a!=NULL) && ($b!=NULL))
	{
		echo $a . " " . $b;
	}
else
	{
	echo "Fields cannot be empty.";
	}

?>
