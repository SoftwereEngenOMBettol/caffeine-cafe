<html><head>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Edit Profile Page</title>
</head>

<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>
<main>
<?php
include "con.php";

// Change this to your connection info.
$FName=$_POST['FName'];
$LName=$_POST['LName'];
$City=$_POST['LName'];
$Comment=$_POST['Comment'];



//Check values insert well
if (empty($FName) || empty($LName) || empty($City) || empty($Comment)) 
{
	echo "<div class='login'><form action='contact.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-circle-exclamation' style='font-size:120px;'></i></div>
			<div  class='secc'><i class='fa-solid fa-face-frown-open'></i>Please Enter All Requirements<br>
	It should 8 digits..</div><br>
	        <input type='submit' value='Return to Contact'></form></div>";

}

else 
{
$sql="INSERT INTO contact (CID,UID,FName, LName, City, Comment) VALUES ('','$_SESSION[UID]','$FName','$LName','$City','$Comment')";
if (mysqli_query($con,$sql)){
	echo "<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-solid fa-thumbs-up' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fa-solid fa-circle-check'></i>Thank For Your Comment !! </div><br>
	        <input type='submit' value='Go To Home'></form></div>";
}
}
mysqli_close($con);

?>	
<footer>
<?php include "footer.php";?>
</footer>
	</body>
</html>