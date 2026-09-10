<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="stylee.css" rel="stylesheet" type="text/css">
		<title>Admin Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include"header.php";?>
<main>
		<div class="login">
			<h1>Login</h1>
			<form action="adloginva.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				 <input type="text" name="username" placeholder="Username" >
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" >
			
				<input type="submit" value="Login">
			</form>
		</div>
		
</main>

<footer>
<?php include "footer.php";?>
</footer>
		</body>
</html>