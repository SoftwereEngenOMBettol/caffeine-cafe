<html><head>
<title>Information Page</title>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<main>	<?php include "header.php";?>
<?php
include "con.php";
//select data from table: 
$sql ="DELETE FROM csingup WHERE UID=$_SESSION[du]";
if ( mysqli_query($con,$sql)) {
 	
      echo"<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Done ! </h2></div>
			<div class='emoj'><i class='fa-regular fa-face-sad-sweat' style='font-size:120px;'></i></div>
<div  class='secc'><i class='fas fa-trash'></i>   You Delete ".$_SESSION['UName']." from Caffeine cafe Shop !! </div><br>
	        <input type='submit' value='Return to Home'></form>" ;
} else {
 echo "<div class='login'><form action='index.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Error In Delete User from Caffeine Cafe !!</div><br>
	        <input type='submit' value='Return To User INFO'></from></div>";
}
mysqli_close($con);
?>
</main>


<footer>
<?php include "footer.php";?>
</footer>

</body></html>
