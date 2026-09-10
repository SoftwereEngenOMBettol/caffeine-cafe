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

<?php
// Start the session and connection.....
 include "con.php";

$pass=$_POST['password'];
$rpass=$_POST['repassword'];
$uid=$_POST['userid'];




//Check values insert well
if (empty($pass) || empty($rpass)) 
{
	echo "<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Error ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>Please Enter Your New Password<br>
	It should 8 digits..</div><br>
	        <input type='submit' value='Go To Home'></form></div>";

}

$sql = "UPDATE csingup SET  password = '$pass' WHERE UID = '$uid'";


if (mysqli_query($con,$sql)){
	

      echo"<div class='login'><form action='index.php' method='post'>
	  <div class='msg'><h2>Done !</h2></div>
	  <div class='emoj'><i class='fa-solid fa-thumbs-up' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fa-solid fa-circle-check'></i>Success! Reset Password</div><br>
      <input type='submit' value='Go To Home'></form></div>";}


mysqli_close($con);


?>
</main>		
<footer>
<?php include "footer.php";?>
</footer>
	</body>
</html>
