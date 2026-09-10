<html><head>
</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php
 include "header.php";
 include "con.php";


// Change this to your connection info.
$UName=$_POST['username'];
$pass=$_POST['password'];
$rpass=$_POST['repassword'];
$uemail=$_POST['uemail'];
$security=$_POST['security'];



//Check values insert well
if (empty($UName) || empty($pass) || empty($rpass) || empty($uemail) || empty($security)) 
{
	echo "<div class='login'><form action='singup.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>Please Enter All Requirements<br>
	It should 8 digits..</div><br>
	        <input type='submit' value='Return to Sing Up'></form></div>";

}
elseif ($pass!=$rpass || strlen($pass)!=8)
{
	//Check Password..
	echo "<div class='login'><form action='singup.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>Password And Repassword Should be same and<br>
	It should 8 digits..</div><br>
	        <input type='submit' value='Return to Sing Up'></form></div>";
	
} 
elseif (!filter_var($uemail, FILTER_VALIDATE_EMAIL))
// it same --> !preg_match("/^[A-Za-z0-9]{3-20}[@gmail.com]$/",$uemail) and !preg_match('/^[A-Za-z0-9]{3-20}[@ict.edu.om]$/',$uemail)
	{
		//Check Email..
		echo "<div class='login'><form action='singup.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>Please Enter Correct Email.</div><br>
	        <input type='submit' value='Return to Sing Up'></form></div>";
	}
	
else 
{
$sql1="INSERT INTO csingup (UName, password, email, security) VALUES ('$UName','$pass','$uemail','$security')";
	// If All things Enter correctly do this :  
$sql=mysqli_query($con,"Select * from csingup");
       //Don't need to insert id since it's an PRI_KEY A_I	
if ($row= mysqli_fetch_array($sql)) { 
if (mysqli_query($con,$sql1)){
$_SESSION['UName'] = $UName;
		$_SESSION['pass'] = $pass;
		$_SESSION['UID'] = $row['UID'];
	echo "<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-thumbs-up' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fa-solid fa-circle-check'></i>Success! Sing Up to Caffeine cafe... Your ID: ".$row['UID']." </div><br>
	        <input type='submit' value='Go To Home'></form></div>";
} 	
else{
    echo "		<div class='login'><form action='singup.php' method='post'><div class='msg'>
			<h2>Error ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>  Error In Sing Up to Caffeine Cafe!!</div><br>
	        <input type='submit' value='Return to Sing UP'></form>" ;
   
}}}
mysqli_close($con);

?>


</main>
<footer>
<?php include "footer.php";?>
</footer>
</body></html>