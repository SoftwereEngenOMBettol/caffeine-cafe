<html><head>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<title>Transction Page</title>
</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php
include "header.php";
include "con.php";
echo"<div class=table>";
$sql=mysqli_query($con,"Select * from cocart");
   echo "<h1>Customer Table</h1><table border=1>";
echo"<tr><td>Transction ID</td><td> User ID</td><td> Produt Name</td><td> Price</td></tr>";
while($row = mysqli_fetch_array($sql)) {
$uid=$row['UID'];
	echo "<td>".$row['ID']."</td><td>".$row['UID']."</td><td>".$row['Name']."</td><td>".$row['Price']."</td></tr>";
}
echo "</table>";


// Display data in a table

    echo "<table border=1><h1>Customer Order Table</h1>";
echo"<tr><td>User ID</td><td> User Name</td><td>User Email </td></tr>";
	// If All things Enter correctly do this :  
$sql=mysqli_query($con,"Select * from csingup");
       //Don't need to insert id since it's an PRI_KEY A_I	
while ($row= mysqli_fetch_array($sql)) { 
			echo "<td>".$row['UID']."</td><td>".$row['UName']."</td><td>".$row['email']."</td></tr>";
          echo "<br>";}
echo "</table></div>";


	
	

?>
</main>		
<footer>
<?php include "footer.php";?>
</footer>		
</body>
</html>
