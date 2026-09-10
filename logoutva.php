<html><head>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Delete account</title>
</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php 
include "header.php";
include "con.php";

//--------------You need ID for Delete Account-------------------

// --------------sql to delete a record----------------
$sql ="DELETE FROM csingup WHERE UID=$_SESSION[UID]";

if ( mysqli_query($con,$sql)) {
 	
      echo"<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-regular fa-face-sad-sweat' style='font-size:120px;'></i></div>
<div  class='secc'><i class='fas fa-trash'></i>   We are sorry to see you leave our Caffeine cafe Shop. ".$_SESSION['UName']."! </div><br>
	        <input type='submit' value='Return to Home'></form>" ;
} else {
 echo "<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Error In Logout From Caffeine Cafe !!</div><br>
	        <input type='submit' value='Return to Logout'></from></div>";
}
 session_destroy();
mysqli_close($con);
?>
</main>


<footer>
<?php include "footer.php";?>
</footer>

</body></html>