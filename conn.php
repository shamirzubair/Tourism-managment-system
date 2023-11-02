<?php

	// $con = mysqli_connect('localhost','root');

	// mysqli_select_db($con,'crud');

    $host = "localhost";
	$user = "root";
	$password = "";
	$database = "mydb";
	$conn = new mysqli($host, $user, $password, $database);
	
	if($conn -> connect_error)
	{
		die ("Connection Failed...");
	}
	// echo "DataBase Successfully Attached...";

?>