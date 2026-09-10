<html><head>
<title>Information Page</title>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php 
include "header.php";
include "con.php";
$uid=$_POST['userid'];
if (empty($uid)){echo "<div class='login'><form action='login.html' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Please Enter Your ID..<br></div><br>
	        <input type='submit' value='Return to Login'></from></div>";}
//select data from table: 
$sql = "SELECT * FROM csingup WHERE (UID=$uid)";
$result= mysqli_query($con,$sql);

while ($row= mysqli_fetch_array($result)) {

	  //if email and password correct then show user details
		echo"
		<div class='content'>
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>User ID:</td>
						<td>".$row["UID"]."</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td>".$row["UName"]."</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>".$row["password"]."</td>
					</tr>
					<tr>
						<td>Email : </td>
						<td>".$row["email"]."</td>
					</tr>
				</table>
			</div>
		</div>
";
	
}
mysqli_close($con);	  
?>
</main>


<footer>
<?php include "footer.php";?>
</footer>
</body>
</html>