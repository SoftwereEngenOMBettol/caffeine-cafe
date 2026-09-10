
<!DOCTYPE html>
<html>
	<head>
		<link href="stylee.css" rel="stylesheet" type="text/css">
		<title>Sing Up</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	
	
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>

		
<main>		
		<div class="login">
			<h1><i class="fa-solid fa-circle-info fa-lg"></i><br>
               Reset Your Password</h1>
			<form action="securityva.php" method="post">

				<label for="useremail">
					<i class="fas fa-envelope"></i>
				</label>
				 <input type="text" name="uemail" placeholder="User Email" >
				 				<label for="useremail">
					<i class="fa fa-key icon"></i>
				</label>
				 <input type="text" name="security" placeholder="What is your favorite color?" >
				<input type="submit" value="Reset Password">
			</form>

		</div>
	

</main>

<footer>
<?php include "footer.php";?>
</footer>
</body>
</html>