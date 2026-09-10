<html>
<head>
<title>Home Bage</title>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>Login Page</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
/*---------------------Footer section------------------*/


.text {
  font-family: monospace;
  font-size: 30px;
  font-weight: bold;
  color:black;

  padding: 10px;
  border-radius: 3px;
}

.image-style {
  width: 500px;
  height: 500px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
  object-fit: cover;
}

.image-style1 {
  width: 500px;
  height: 500px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
  object-fit: cover;
}
.image-style2 {
  width: 500px;
  height: 500px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
  object-fit: cover;
}
.image-style3 {
  width: 500px;
  height: 500px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
  object-fit: cover;
}


</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="stylee.css" rel="stylesheet" type="text/css">
</head>


<body><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php
session_start();
?>

<main>
<nav class="navtop">
			<div>
			<!--Our Logo-->
				<a href="index.php">
				<img src="cl.png" align="left" width="100" height="50">
				</a>
			&nbsp;&nbsp;&nbsp;
				<h1>Caffeine cafe Shop</h1>
				<a href="menu.php"><i class="fa fa-list-ul"></i>Menu</a>
				<a href="contact.php"><i class="fas fa-comments"></i>Contact us</a>
				<a href="Settings.php"><i class="fa fa-gears"></i>Settings</a>
				<?php 
				if (!isset($_SESSION['UName'])) {echo"<a href='singup.php'><i class='fas fa-sign-out-alt'></i>Sing Up</a>";}
				if (!isset($_SESSION['UName'])) {echo"<a href='login.php'><i class='fas fa-sign-out-alt'></i>Login</a>";}
				else {echo"<a href='profile.php'><i class='fas fa-sign-language'></i>".$_SESSION['UName']."</a>
				<a href='logoutva.php'><i class='fas fa-sign-out-alt'></i>Logout</a>"; }?>
              
			
			</div>
		</nav>

<br>
<br>
<br>
<br>
<img src="latte.jpg" class="image-style">
<img src="espresso.jpg" class="image-style1" align="right">
<h6 align="center" class="text">"If we don’t get our coffee,<br>
 we can’t think anymore"</h6>
<img src="mocha.jpg" class="image-style2" align="left">
<img src="frenchpress.jpg" class="image-style3" align="right">		
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
</main>
<br><footer>
<?php include "footer.php";?>
</footer>

</body>
</html>