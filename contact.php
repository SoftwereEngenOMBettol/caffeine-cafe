<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
<link href="stylee.css" rel="stylesheet" type="text/css">
		<title>Contact Us</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">	
	<style>
	/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

.container h1 {
  	text-align: center;
  	color: #9E6643;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
/* Style the submit button with a specific background color etc */
 input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #000000;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #ccc;
}

/* Add a background color and some padding around the form */
.container {
  	width: 700px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 80px auto;
}
	</style>
	</head>
	<body class="loggedin"><script src="https://kit.fontawesome.com/2d786c7837.js" crossorigin="anonymous"></script>
<?php include "header.php";?>
<main>		
		<div class="container">
			<h1><i class="fas fa-comments fa-lg"style='font-size:50px;'></i><br>
             Contact Us </h1>
			<form action="contactva.php" method="post">
						
				<label for="username">
					<i class="fas fa-user" style='font-size:30px;'></i>
				</label>		
				 <input type="text" name="FName" placeholder="First Name.." >

				 <input type="text" name="LName" placeholder="Last Name.." >
                
				
				<label for="country"><i class="fa fa-institution" style='font-size:30px;'></i></label>
				 <input type="text" name="City" placeholder="City" >
                

            <label for="subject"><i class="fas fa-comments" style='font-size:30px;'></i></label>
            <textarea id="subject" name="Comment" placeholder="Write Your Comment.." style="height:200px"></textarea>


				<input type="submit" value="Submit">
			</form>
		</div>
		
</main>

<footer>
<?php include "footer.php";?>
</footer>
		</body>
</html>