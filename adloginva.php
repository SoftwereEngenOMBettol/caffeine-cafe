<html><head>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Admin Login</title>
</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>

<?php
include "con.php";

// Change this to your connection info.
$UName=$_POST['username'];
$pass=$_POST['password'];

//Check values insert well
if (empty($UName) || empty($pass)) 
{
include"header.php";
	    echo "
<div class='login'><form action='login.html' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> &nbsp; Please Enter Your Username and Password </div><br>
	        <input type='submit' value='Return to Login'></form></div>" ;
}

//select data from table: 



//In adminlogin table we have 4 admin:

/*username: admin ----- password: admin
username: admin2 ----- password: admin2
username: admin3 ----- password: admin3
username: admin4 ----- password: admin4*/

$sql=mysqli_query($con,"Select * from adminlogin");
if ($row= mysqli_fetch_array($sql)) {
	  if ($pass==$row["password"] and $UName==$row["username"]){
		 $_SESSION['pass'] = $row['password'];
		 $_SESSION['UName'] = $row['username'];
   ?>
<nav class="navtop">
			<div>
			<!--Our Logo-->
				<a href="index.php">
				<img src="cl.png" align="left" width="100" height="50">
				</a>
			&nbsp;&nbsp;&nbsp;
				<h1>Caffeine cafe Shop</h1>
				<a href="usersinfo.php"><i class="far fa-address-book"></i>User Info</a>
				<a href="transction.php"><i class="fas fa-file-invoice-dollar"></i>transaction</a>
				<a href="erd.php"><i class="fas fa-bezier-curve"></i>ER diagram</a>
			</div>
		</nav>
  <?php
	 echo" <div class='login'><form action='index.php' method='post'>
	  <div class='msg'><h2>Done !</h2></div>
	  <div class='emoj'><i class='fa-solid fa-thumbs-up' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fa-solid fa-circle-check'></i> &nbsp; Success! Login As Admin Hello Admin.</div><br>
         <input type='submit' value='Go To Home'></form></div>";}

         else 
        {include"header.php";
	    echo "	
		<div class='login'><form action='login.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> &nbsp; Error In Login As Admin !!</div><br>
	        <input type='submit' value='Return to Login'></from></div>" ;
        }} 


 //close the connection
mysqli_close($con);
?>
</main>

<footer>
<?php include "footer.php";?>
</footer>


</body></html>