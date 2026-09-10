<html><head>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Update Profile</title>
</head>	

<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
		<nav class="navtop">
			<div>
			<!--Our Logo-->
				<h1>Caffeine cafe Shop</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="singup.php"><i class="fas fa-sign-out-alt"></i>Sing Up</a>
				<a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="index.php"><i class="fa-solid fa-house"></i>Home</a>

			</div>
		</nav>
<main>

<?php
// Change this to your connection info.
$UName=$_POST['username'];
$pass=$_POST['password'];
$rpass=$_POST['repassword'];
$uemail=$_POST['uemail'];
$uid=$_POST['userid'];


// Create and Check connection..
$con = mysqli_connect("localhost", "root", "", "phplogin");

if (!$con) {
	// If there is an error with the connection, stop the script and display the error.
die("<div class='login'><form action='login.html' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Connection failed:<br></div><br>
	        <input type='submit' value='Return to Login'></from></div>" . $con->connect_error);
}

//Check values insert well
if (empty($UName) || empty($pass) || empty($rpass) || empty($uemail) ||
empty($uid)) 
{
	echo "<div class='login'><form action='singup.html' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>Please Enter All Requirements<br>
	It should 8 digits..</div><br>
	        <input type='submit' value='Return to Sing Up'></form></div>";

}

$sql = "UPDATE csingup SET UName = '$UName', password = '$pass', email = '$uemail' WHERE UID = '$uid'";


if (mysqli_query($con,$sql)){

      echo"<div class='login'><form action='index.php' method='post'>
	  <div class='msg'><h2>Done !</h2></div>
	  <div class='emoj'><i class='fa-solid fa-thumbs-up' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fa-solid fa-circle-check'></i>Success! Update profile to Caffeine cafe</div><br>
      <input type='submit' value='Go To Home'></form></div>";}

else{
        
	    echo "<div class='login'><form action='edit.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Error In Update Your Ptofile... </div><br>
	        <input type='submit' value='Return to Edit'></from></div>" ;
}


mysqli_close($con);


?> 


</main>
<footer>
<?php include "footer.php";?>
</footer>


	</body>
</html>