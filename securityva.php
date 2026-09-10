<!DOCTYPE html>
<html>
	<head>
		<link href="stylee.css" rel="stylesheet" type="text/css">
		<title>Sing Up</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	
	
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";
 include "con.php";
 $uemail=$_POST['uemail'];
 $security=$_POST['security'];
 
if (empty($uemail) || empty($security)) 
{
            echo "<div class='login'><form action='login.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Please Enter Your Your Email or Security answer<br></div><br>
	        <input type='submit' value='Return to Login'></from></div>" ;	


}


$sql= mysqli_query($con,"SELECT email, security FROM csingup");
if ($row= mysqli_fetch_array($sql)) {
	if( $uemail==$row["email"] and $security==$row["security"]) {
		 $_SESSION['uemail'] = $row['email'];
		 $_SESSION['security'] = $row['security'];
?>
		<div class="login">
			<h1><i class="fa-solid fa-circle-info fa-lg"></i><br>
              Reset Password</h1>
			<form action="resetva.php" method="post">
				<label for="userid">
					<i class="fas fa-id-card"></i>
				</label>
				 <input type="text" name="userid" placeholder="User ID" >
				</label>
								<label for="repassword">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" >
				<label for="repassword">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="repassword" placeholder="Repeat Password" >


				<input type="submit" value="Reset Password" name="resetp">
			</form>

		</div>
<?php		
		
}


   else {
	   
    // The security answers are incorrect, show an error message
	echo"<div class='login'><form action='login.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> The security answers are incorrect. Please try again.<br></div><br>
	        <input type='submit' value='Return to Login'></from></div>";

}}
mysqli_close($con);
?>

<footer>
<?php include "footer.php";?>
</footer>
</body>
</html>