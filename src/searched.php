<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div>
		<span> <?php $_SESSION['HELLO'])?> </span> 
		<br>
		
		<a href="index.php">Back to Home Page</a>
	</div>
</body>
</html>