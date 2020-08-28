<?php
include("includes/config.php");

//session_destroy(); manual log out before button is created

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}

?>
<html>
<head>
	<title>Welcome to my Project</title>
</head>

<body>
	Hello!

</body>

</html>