<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Panel</title>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="css/adminstyle.css" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" href="css/navstyle.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<script src="js/clock.js"></script>
	</head>
	<?php include 'navigation.php';?>
	<body class="loggedin" onload="clock();" onunload="stop();">
	<div class="container">
		<div class="row">
			<div class="content">
				<h2>Panel Administracyjny</h2>
				<p>Witaj, <?=$_SESSION['name']?>! <span id="clock"></span></p>
			</div>
		</div>
		</div>
	</body>
	
</html>