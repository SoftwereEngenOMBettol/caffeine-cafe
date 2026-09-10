<html><head>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Edit Profile Page</title>
</head>

<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>
<main>


		<div class="login">
			<h1><i class="fas fa-user-circle fa-lg"></i><br><br>
              Edit Profile</h1>
<form action="editva.php" method="post">
				<label for="userid">
					<i class="fas fa-id-card"></i>
				</label>
				 <input type="text" name="userid" placeholder="User ID" >
				
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				 <input type="text" name="username" placeholder="User Name" >
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" >
				<label for="repassword">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="repassword" placeholder="Repeat Password" >
				<label for="useremail">
					<i class="fas fa-envelope"></i>
				</label>
				 <input type="text" name="uemail" placeholder="User Email" >
				<input type="submit" value="Update Now" name="sing">
			</form>

		</div>
	
<footer>
<?php include "footer.php";?>
</footer>
	</body>
</html>