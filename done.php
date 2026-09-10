
	
</body>
<html><head>
<link href="stylee.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>
<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>
<main>
<?php

include "con.php";


If (empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['cardname']) || empty($_POST['cardnumber']))
{
            echo "<div class='login'><form action='order.php' method='post'><div class='msg'>
			<h2>Error! </h2></div>
			<div class='emoj'><i class='fa-solid fa-face-frown-open' style='font-size:120px;'></i></div>
			<div class='secc'><i class='fas fa-times-circle''></i> Please Enter All requirements!! <br>Error In Your Order!!<br></div><br>
	        <input type='submit' value='Return to order'></from></div>" ;	


}

else  {	



		echo "<div class='content'>
		    	<h2>Thank $_POST[firstname] Your Order is done Seccessfuly !! </h2>
			<div>
				<p>Information about Your order:</p>
				<table>
					<tr>
						<td>Your Email :</td>
						<td> $_POST[email]</td>
					</tr>
					<tr>
						<td>Your Address :  </td>
						<td> $_POST[address]</td>
					</tr>
					<tr>
						<td>Your Card Name : </td>
						<td>$_POST[cardname]</td>
					</tr>
					<tr>
						<td>Your Card Number : </td>
						<td>$_POST[cardnumber]</td>
					</tr>					
					<tr>
						<td>Your Order Name : </td>
						<td> ".$_SESSION['PName']."</td>
					</tr>					
					<tr>
						<td>Your Order Price : </td>
						<td>".$_SESSION['price']."</td>
					</tr>					
				</table>
			</div>
</div>";}
		

echo"</main><footer>";
include "footer.php";
echo"</footer>";
	
?>



</body></html>