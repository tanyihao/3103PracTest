<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en">
	<head>
		<title>Search</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container-dashboard">
			Displayed: <?php echo '<div class="output">'.$_SESSION["hello"].'</div>'?>
			<br>
			
			<a href="index.php" class="logout-link">Back to Search Page</a>
		</div>
	</body>
</html>