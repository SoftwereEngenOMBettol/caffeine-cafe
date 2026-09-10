<?php
include "con.php";

//Should be add Database in phpadmin befor this step. For Select Database use:
mysqli_select_db($con,"phplogin");
//Check values insert well

$today = date("Y-m-d");
if (isset($_POST['am1']))	{
    $name = 'Americano';
	$price = '1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am2']))	{
    $name = 'Cappuccino';
	$price = '1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am3']))	{
    $name = 'White Mocha';
	$price = '1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am4']))	{
    $name = 'Mocha';
	$price = '1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am5']))	{
    $name = 'V 60';
	$price = '1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am6']))	{
    $name = 'Rose Latte';
	$price ='1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am7']))	{
    $name = 'Saffron Latte';
	$price = '1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
if (isset($_POST['am8']))	{
    $name = 'Pistachio Latte';
	$price ='1.500';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
else if (isset($_POST['cb'])) {
	$name = 'Cold Brew';
	$price ='2.200';
	$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
	 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
else if (isset($_POST['fw'])) {
	$name = 'Flat White';
	$price ='1.700';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
else if (isset($_POST['cp'])) {
	$name = 'Cappuccino';
	$price ='1.200';
	$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
	 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}
else if (isset($_POST['fp1'])) {
	$name = 'French Press';
	$price ='1.600';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}  
else if (isset($_POST['fp2'])) {
	$name = 'Macchiato';
	$price = '1.600';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

} 
else if (isset($_POST['fp3'])) {
	$name = 'Spanish Latte';
	$price = '1.600';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

} 
else if (isset($_POST['fp4'])) {
	$name = 'Chemex';
	$price = '1.600';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

} 
else if (isset($_POST['fp5'])) {
	$name = 'Caramel Latte';
	$price = '1.600';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

} 
else if (isset($_POST['fp6'])) {
	$name = 'Latte';
	$price = '1.600';
$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]')";
 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

} 
else if (isset($_POST['fp7'])) {
	$name = 'Espresso';
	$price = '1.600';
	$sql= "INSERT INTO cocart VALUES (' ','$name','$price','$_SESSION[UID]',)";
	 if (mysqli_query($con,$sql)){	
        
		 $_SESSION['price'] =$price;
		 $_SESSION['PName'] = $name;
}

}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
	<head>
			<link href="stylee.css" rel="stylesheet" type="text/css">
		<title>Menu Page</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
<body class="ll"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>
<main>
<style>
.row {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -16px;
}


.col-25 {
  flex: 15%;
}

.col-50 {

  flex: 15%;
}

.col-75 {
  flex: 15%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #FDF1E7;
  padding: 80px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #8c6239;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

input[type=submit] {
  background-color: #8c6239;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

input[type=submit]:hover {
  background-color: #000000;
}

span.price {
  float: right;
  color: grey;
}


</style>
</head>
<body>
<form action="done.php" method="post">
 <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="done.php">
        <div class="row">
          <div class="col-50">
            <h2>Billing Address</h2>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" name="firstname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" name="address">

          </div>

          <div class="col-50">
            <h2>Payment</h2>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text"  name="cardname">
            <label for="ccnum">Credit card number</label>
            <input type="text" name="cardnumber">

          </div>

        </div>
       
        <input type="submit" value="Pay" name="pay">
      </form>
    </div>
  </div>

</main>		
<footer>
<?php include "footer.php";?>
</footer>		
	</body>
</html>
