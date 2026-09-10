<!DOCTYPE html>
<html>
	<head>
			<link href="stylee.css" rel="stylesheet" type="text/css">
		<title>Menu Page</title>
		
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<style>
* {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
  	-webkit-font-smoothing: antialiased;

}
body .ll{
	background-image: url("mb.jpg");
	background-repeat: no-repeat;
  background-position: left;
  background-attachment: fixed;
}
ul{
	margin-left:100px;
	display: contents;
	align-items: center;
	position: relative;
	list-style: none;
    vertical-align: baseline;
	
}

ul li{
	
	color: #c1c4c8;
	padding: 20px 20px 0 70px;
}
 ul li .card{
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  background-color: #FDF1E7;
  color: #8c6239;
  
}
.price {
  color: black;
  font-family: Lucida Console;
  font-weight: bold;
  font-size: 22px;
}

.card input {
  border: none;
  outline: 0;
  padding: 12px;
  color: #FDF1E7;
  background-color: #000000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card input:hover {
  opacity: 0.7;
  background-color: #8c6239;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
	margin-top:100px;
	text-align: center;
    padding: 1 0.9rem 0.1rem 0.9rem;
    border-radius: 3rem;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body class="ll"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>
<main>
<form action="order.php" method="post">

<div class="row">
<ul>
  <li><div class="card">
  <img src="Americano.jpg" alt="Americano" style="width:100%">
  <h1>Americano</h1>
  <p class="price">1.500 OMR</p>
  <p>Made with freshly brewed espresso and hot water,
  it's the perfect choice for coffee lovers who appreciate
  a strong and robust taste.</p>
  <input type="submit" value="Buy Now" name="am1">
</div> </li><li>
<div class="card">
  <img src="coldbrew.jpg" alt="Cold Brew" style="width:100%">
  <h1>Cold Brew</h1>
  <p class="price">2.200 OR</p>
  <p>Made with espresso, steamed milk, and a touch of cinnamon,
  it's a perfect blend of flavors that will satisfy your 
  sweet tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="cb">
</div> </li><li>
<div class="card">
  <img src="flatwhite.jpg" alt="Flat White" style="width:100%">
  <h1>Flat White</h1>
  <p class="price">1.700 OMR</p>
  <p>Made with a double shot of espresso and steamed milk, 
  it's a perfect balance
  of strength and creaminess that will keep you going throughout the day.</p>
  <input type="submit" value="Buy Now" name="fw">
</div> </li><li>

<div class="card">
  <img src="cappuccino.jpg" alt="Cappuccino" style="width:100%">
  <h1>Cappuccino</h1>
  <p class="price">1.500 OMR</p>
  <p>Made with espresso and steamed milk creating rich, velvety taste.</p>
  <input type="submit" value="Buy Now" name="am2">
</div> 
</li><li>
<div class="card">
  <img src="frenchpress.jpg" alt="French Press" style="width:100%">
  <h1>French Press</h1>
  <p class="price">1.600 OR</p>
  <p>Indulge in a smooth Cortado with rich coffee and creamy milk,
  crafted from freshly brewed espresso and steamed milk
  topped with delicate foam</p>
  <input type="submit" value="Buy Now" name="fp1">
</div> </li><li>
<div class="card">
  <img src="hazelnutlatte.jpg" alt="Hazelnut Latte" style="width:100%">
  <h1>Hazelnut Latte</h1>
  <p class="price">1.200 OR</p>
  <p>Made with espresso and steamed milk creating rich, velvety taste.</p>
  <input type="submit" value="Buy Now" name="cp">
</div> </li><li>
<div class="card">
  <img src="whitemocha.jpg" alt="White Mocha" style="width:100%">
  <h1>White Mocha</h1>
  <p class="price">1.500 OR</p>
  <p>Made with espresso, steamed milk, and chocolate,
  it's a perfect blend of flavors that will satisfy your sweet 
  tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="am3">
</div> </li><li>
<div class="card">
  <img src="macchiato.jpg" alt="Macchiato" style="width:100%">
  <h1>Macchiato</h1>
  <p class="price">1.600 OR</p>
  <p>Indulge in the rich and creamy essence of our perfectly
  crafted Macchiato, made with expertly brewed espresso, 
  topped with a dollop of velvety foam,
  for a satisfying coffee experience.</p>
  <input type="submit" value="Buy Now" name="fp2">
</div> </li><li>
<div class="card">
  <img src="mocha.jpg" alt="Mocha" style="width:100%">
  <h1>Mocha</h1>
  <p class="price">1.500 OR</p>
  <p>Made with espresso, steamed milk, and chocolate,
  it's a perfect blend of flavors that will satisfy your sweet 
  tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="am4">
</div> </li><li>
<div class="card">
  <img src="v60.jpg" alt="V 60" style="width:100%">
  <h1>V 60</h1>
  <p class="price">1.500 OR</p>
  <p>Made with espresso and steamed milk creating rich, velvety taste.</p>
  <input type="submit" value="Buy Now" name="am5">
</div> </li><li>
<div class="card">
  <img src="spanishlatte.jpg" alt="Spanish Latte" style="width:100%">
  <h1>Spanish Latte</h1>
  <p class="price">1.600 OR</p>
  <p>Made with espresso, steamed milk, and a touch of cinnamon,
  it's a perfect blend of flavors that will satisfy your 
  sweet tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="fp3">
</div> </li><li>
<div class="card">
  <img src="chemex.jpg" alt="Chemex" style="width:100%">
  <h1>Chemex</h1>
  <p class="price">1.600 OR</p>
  <p>Indulge in a smooth Cortado with rich coffee and creamy milk,
  crafted from freshly brewed espresso and steamed milk
  topped with delicate foam</p>
  <input type="submit" value="Buy Now" name="fp4">
</div> </li><li>
<div class="card">
  <img src="roselatte.jpg" alt="Rose Latte" style="width:100%">
  <h1>Rose Latte</h1>
  <p class="price">1.500 OR</p>
  <p>Made with espresso, steamed milk, and a touch of cinnamon,
  it's a perfect blend of flavors that will satisfy your 
  sweet tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="am6">
</div> </li><li>
<div class="card">
  <img src="caramellatte.jpg" alt="Caramel Latte" style="width:100%">
  <h1>Caramel Latte</h1>
  <p class="price">1.600 OR</p>
  <p>Made with espresso, steamed milk, and a touch of cinnamon,
  it's a perfect blend of flavors that will satisfy your 
  sweet tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="fp5">
</div> </li><li>
<div class="card">
  <img src="latte.jpg" alt="Latte" style="width:100%">
  <h1>Latte</h1>
  <p class="price">1.600 OR</p>
  <p>Made with espresso, steamed milk, and a touch of cinnamon,
  it's a perfect blend of flavors that will satisfy your 
  sweet tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="fp6">
</div> </li><li>
<div class="card">
  <img src="saffronlatte.jpg" alt="Saffron Latte" style="width:100%">
  <h1>Saffron Latte</h1>
  <p class="price">1.500 OR</p>
  <p>Indulge in a smooth Cortado with rich coffee and creamy milk,
  crafted from freshly brewed espresso and steamed milk
  topped with delicate foam</p>
  <input type="submit" value="Buy Now" name="am7">
</div> </li><li>
<div class="card">
  <img src="pistachiolatte.jpg" alt="Pistachio Latte" style="width:100%">
  <h1>Pistachio Latte</h1>
  <p class="price">1.500 OR</p>
  <p>Made with espresso, steamed milk, and a touch of cinnamon,
  it's a perfect blend of flavors that will satisfy your 
  sweet tooth and pick you up any time of the day.</p>
  <input type="submit" value="Buy Now" name="am8">
</div> </li><li>
<div class="card">
  <img src="espresso.jpg" alt="Espresso" style="width:100%">
  <h1>Espresso</h1>
  <p class="price">1.600 OR</p>
  <p>Indulge in a smooth Cortado with rich coffee and creamy milk,
  crafted from freshly brewed espresso and steamed milk
  topped with delicate foam</p>
  <input type="submit" value="Buy Now" name="fp7">
</div> </li><li>
 </div>
</main>	
</form>	
<footer>
<?php include "footer.php";?>
</footer>		
	</body>
</html>
