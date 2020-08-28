<?php 
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("America/Los_Angeles");

	$con = mysqli_connect("localhost", "root", "", "spotifyclone");
	// mysqli_connect('servername', 'username', 'password', 'sql database name');

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}



?>
