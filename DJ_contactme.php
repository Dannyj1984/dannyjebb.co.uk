<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/contactus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>Contact Us</title>
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
	<a href="DJ_contactme.php" class="active">Contact Me</a>
	<a href="DJ_signup.php">Sign up</a>
	<a href="DJ_login.php">Log in</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</nav>
	  
	  <!--Main page header-->
	  
	  
	  <div class="jumbotron text-center">
	<h1> Contact Us </h1>
	</div>
	
	<!--Form -->
	
	<div class="container">
	
	<!--Form action to run php script to send data to an email-->
	<form method="post" action="../php/contactform.php">
		<div class="form-group">
	  <label for="firstname"> First Name:</label>
	  <input type="text" name="firstname" id="firstname" class="form-control" required="true">
  		</div>
		<div>
	  <label for="lastname"> Last Name:</label>
	  <input type="text" name="lastname" id="lastname" class="form-control">
  		</div>
		<div>
	  <label for="mail"> E-mail:</label>
	  <input type="email" name="email" id="mail" class="form-control" required="true">
  </div>
  <div>
	  <label for="number"> Phone:</label>
	  <input type="number" name="phone" id="number" class="form-control">
  </div>
  <div>
	  <label for="msg"> Message:</label>
	  <textarea type="text" name="message" id="msg" class="form-control" required="true" rows="5" cols="50"></textarea>
  </div>
  <div>
	  <input type="checkbox" name="consent" id="consent">                 Do you consent to us contacting you in regards to your query?
  </div>
  <div>
	  <button type="Submit" name="submit">Submit</button>
	  <button type="reset" name="reset">Reset</button>
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