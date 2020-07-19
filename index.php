<?php 
$conn = mysqli_connect("localhost:3307", "root", "phproot", "social-network");
if(mysqli_connect_errno()){
	echo "Failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($conn, "");
?>
<html>
<head>
	<title>Welcome to PC Network!</title>
</head>
<body>
 Hello!
</body>
</html>