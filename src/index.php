<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>]
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
				<label>Search</label>
				<input type="text" id="search" name="search" required placeholder="">
			
				<button type="submit" name="submit" onclick="return checkXSS()">Search</button>
		</form>
	</div>
	<script src="js/xss.js"></script>
</body>
</html>