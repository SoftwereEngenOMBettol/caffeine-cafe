<html>
<body>
<form action="" method="post">
<br>NAME:<input type="text" name="name">
<br>amount:<input type="text" name="am">
<br><input type="submit" value="Add">
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
if (!$con)
{ die('colud not connect:'. mysqli_error()); }
mysqli_select_db($con,"phplogin");
$sql="INSERT INTO customer ( NAME, amount)
VALUES (,'$_POST[name]','$_POST[am]')";

if (!mysqli_query($con,$sql))
{ die('Error:' . mysql_error()); }
echo "1 record added";
mysqli_close($con);
?>

