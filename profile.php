<!DOCTYPE html>
<html>
	<head>
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>Profile Page</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>	
<main>

		<div class="login">
			
			<h1><i class="fas fa-user-circle fa-lg"></i> <br>Profile</h1>
			<form action="info.php" method="post">

	            <label for="userid">
					<i class="fas fa-id-card"></i>
				</label>
				 <input type="text" name="userid" placeholder="User ID" >
			 

				<input type="submit" value="YOUR PROFILE" name="sing">
			</form>

		</div>
</main>		
<footer>
<?php include "footer.php";?>
</footer>		
	</body>
</html>