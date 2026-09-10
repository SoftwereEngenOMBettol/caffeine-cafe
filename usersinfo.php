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
$sql = mysqli_query($con,"SELECT * FROM csingup");


while ($row= mysqli_fetch_array($sql)) {
	  //if email and password correct then show user details
	  $_SESSION['du']=$row["UID"];
		echo"
		<div class='content'>
			<h2>User Information Page</h2>
			<form action='del.php' method='post'>
			<div>
				<p>User account details:</p>
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
										<tr>
						<td>     </td>
						<td><input type='submit' value='DELETE USER'></td>
					</tr>
					
				</table>
			</div>
			
		</div>
";
}
 

?>
</main>


<footer>
<?php include "footer.php";?>
</footer>
</body>
</html>