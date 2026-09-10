<html><head>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php


// Change this to your connection info.
include "header.php";
include "con.php";

$UName=$_POST['username'];
$pass=$_POST['password'];  

if (empty($UName) || empty($pass)) 
{
            echo "<div class='login'><form action='login.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Please Enter Your Username and Password<br></div><br>
	        <input type='submit' value='Return to Login'></from></div>" ;	


}

//select data from table: 
$sql=mysqli_query($con, "SELECT UID,UName, password FROM csingup");
if ($row= mysqli_fetch_array($sql)) {
	if( $pass==$row["password"] and $UName==$row["UName"]) {
		 $_SESSION['UName'] = $row['UName'];
		 $_SESSION['pass'] = $pass;
      echo "<div class='login'><form action='index.php' method='post'>
	  <div class='msg'><h2>Done !</h2></div>
	  <div class='emoj'><i class='fa-solid fa-thumbs-up' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fa-solid fa-circle-check'></i>Success! Welcome back,". $_SESSION['UName']."!</div><br>
         <input type='submit' value='Go To Home'></form></div>";	
		
}
else{
// Incorrect password
echo "<div class='login'><form action='login.php' method='post'><div class='msg'>
<h2>Error! </h2></div>
<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
<div class='secc'><i class='fas fa-times-circle''></i> Error In Login to Caffeine Cafe...</div><br>
<input type='submit' value='Return to Login'></from></div>" ;

}}



mysqli_close($con);
?>
</main>

<footer>
<?php include "footer.php";?>
</footer>

</body></html>