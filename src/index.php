<?php 
	session_start();
	if (!isset($_SESSION['hello'])) {
		$_SESSION['hello'] = "";
	}
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en">
	<head>
		<title>Test</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
			<form action="" method="post" onsubmit="return checkXSS()">
					<label>Search: </label>
					<input type="text" id="search" name="search" required placeholder="">
					<input type="submit" name="submit"></button>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/xss.js"></script>
	</body>
</html>