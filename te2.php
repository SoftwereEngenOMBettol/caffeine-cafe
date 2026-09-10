<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header('Location: HomeBage.html');
    exit();
}

// Get the transaction amount from the form
if (isset($_POST['amount'])) {
    $amount = $_POST['amount'];
    
    // Perform the transaction using the payment gateway API
    // Here you would need to replace the placeholders with your actual payment gateway API credentials and code
    $api_key = "YOUR_API_KEY";
    $api_secret = "YOUR_API_SECRET";
    $api_endpoint = "https://api.paymentgateway.com/transaction";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_endpoint);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "api_key=$api_key&api_secret=$api_secret&amount=$amount");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Check the transaction response and display a success or error message
    if ($response == "success") {
        $message = "Transaction successful!";
    } else {
        $message = "Transaction failed. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transaction Page</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
	<p>Please enter the transaction amount:</p>
	
	<form method="post">
		<input type="text" name="amount" placeholder="Enter amount">
		<input type="submit" name="submit" value="Submit">
	</form>
	
	<?php
	if (isset($message)) {
	    echo "<p>$message</p>";
	}
	?>
</body>
</html>