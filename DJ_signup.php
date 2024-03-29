

<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/jumbotron.css">
	<link rel="stylesheet" href="css/signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Jomolhari|Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>Sign up</title>
</head>
<body>
    <!--Navigation-->
	
	<nav class="navbar" id="myNavbar"> 
	<a href="index.php">Home</a> 
	<a href="DJ_about.php" >About me</a> 
	<a href="DJ_sd.php">Software development</a> 
	<a href="DJ_photography.php">Photography</a> 
	<a href="DJ_family.php">Family</a> 
	<a href="DJ_socialmedia.php">Social Media</a> 
	<a href="DJ_contactme.php">Contact Me</a>
	<a href="DJ_signup.php" class="active">Sign up</a>
	<a href="DJ_login.php">Log in</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</nav>
	
	<!--Header-->

	<div class="jumbotron text-center">
		
		<h1>Sign up</h1>
			
	</div>
	
	<!--Form which sends data to signup.php to go to the database-->

	<div class="container">

		<form action="includes/signup.inc.php" method="POST" >
			<div class="form-group">
				<label for="firstName">First Name</label>
				<input type="text" name="first" class="form-control">

				<label for="LastName">Last Name</label>
				<input type="text" name="surname" class="form-control">

				<label for="mail">E-mail</label>
				<input type="email" name="email" class="form-control">

				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">

				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">

				<label for="password">Confirm password</label>
				<input type="password" name="pwd2" class="form-control">

				<button type="submit" name="submit">Sign up</button>

			</div>
		
		</form>
	</div>
	
	<script>
  function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
  }
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<?php
// at bottom:
include('footer.php');
?>
	
</body>
</html>