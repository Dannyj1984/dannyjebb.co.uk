<?php
session_start();
include 'header.php';
?>


<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/jumbotron.css">
	<link rel="stylesheet" href="css/signupv2.css">
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
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</nav>
	
	<!--Header-->

	<div class="jumbotron text-center">
		
		<h1>Sign up</h1>
		<h3>Please do not enter any senstive passwords you use for other purposes. This page is to show a registration page. The user details are saved to database. Passwords are hashed to keep them safe in the event of a database hack. Please see github for the source php code which runs this registration page.</h3>
			
	</div>
	
	<!--Form which sends data to signup.php to go to the database-->

	<div class="container">
	    
	    <div class="error">
	<?php
			    //get the url for the current page
			    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			    
			    //Check the url to see if it contains any of the text to identify which error has occured and then print out the appropriate error message on the screen.
			    
			    if(strpos($fullurl, "error=emptyfields") == true) {
			        echo "<p class='error'>Please fill in all the fields</p>";
			        return;
			    }
			    
			    else if(strpos($fullurl, "error=invalidemail") == true) {
			        echo "<p class='error'>Invalid email</p>";
			        return;
			    }
			    
			    else if(strpos($fullurl, "error=invaliduid") == true) {
			        echo "<p class='error'>Invalid username</p>";
			        return;
			    }
			    else if(strpos($fullurl, "error=usertaken") == true) {
			        echo "<p class='error'>That username is already in use</p>";
			        return;
			    }
			    
			    else if(strpos($fullurl, "error=passwordcheck") == true) {
			        echo "<p class='error'>Please ensure that passwords match</p>";
			        return;
			    }
			    
			    
			    
			    //If submission has been successful then print out successfull.
			    else if(strpos($fullurl, "success") == true) {
			        echo "<p class='success'>Signup successful</p>";
			    }
			    
			    ?>
	
			    
			    </div>

		<form action="includes/signup.inc.php" method="POST" >
			<div class="form-group">
			    
			    
				<label for="first">First Name</label>
				<input type="text" name="first" id="first" class="form-control">
				
				

				<label for="surname">Last Name</label>
				<input type="text" name="surname" id="surname" class="form-control">
				

				<label for="mail">E-mail</label>
				<input type="email"  name="email" id="email" class="form-control">
				

				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control">
				

				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
				

				<label for="pwd2">Confirm password</label>
				<input type="password" name="pwd2" id="pwd2" class="form-control">
				

				<button type="submit" id="submit" name="submit">Sign up</button>

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
  
  
	
	<?php
// at bottom:
include('footer.php');
?>


	
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="js/script.js"></script>