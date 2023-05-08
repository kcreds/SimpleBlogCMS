<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="css/loginstyle.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js">
		<script src="js/particles.js-master/dist/particles.min.js"></script>
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label class="input-group-text" for="username">
					<i class="fas fa-user"></i>
				</label>
				<input class="form-control" type="text" name="username" placeholder="Username" id="username" required>
				<label class="input-group-text" for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input class="form-control" type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
		<canvas class="background"></canvas>
	</body>
	<script>
	window.onload = function() {
  	Particles.init({
    selector: '.background',
	color: ['#00AF3F', '#F96FD5'],
	sizeVariations: '5'
  });
};
</script>
</html>