<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/jumbotron.css">
	<link rel="stylesheet" href="css/about.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Jomolhari|Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>About Me</title>
</head>
<body>
    <!--Navigation-->
	
	<nav class="navbar" id="myNavbar"> 
	<a href="index.php">Home</a> 
	<a href="DJ_about.php" class ="active">About me</a> 
	<a href="DJ_sd.php">Software development</a> 
	<a href="DJ_photography.php">Photography</a> 
	<a href="DJ_family.php">Family</a> 
	<a href="DJ_socialmedia.php">Social Media</a> 
	<a href="DJ_contactme.php">Contact Me</a>
	<a href="DJ_signup.php">Sign up</a>
	<a href="DJ_login.php">Log in</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</nav>
	
	<!--Main page header-->
	
	<div class="jumbotron text-center">
	  <h1>About me</h1>
	  <div class="container">
		 	<div class="row">
		 	    
		 	    <!--3 columns within the jumbotron header.-->
		 	    
			  	<div class="col-sm-4">
	  				<a href="mailto:dannyjebb@gmail.com"><p>dannyjebb@gmail.com</p>
	  				</a>
	  				
	  				
			</div>
	  	  		<div class="col-sm-4">
					<p>Danny Jebb</p> 
			</div>
			  	<div class="col-sm-4">
					<p>07956356879</p> 
			</div>
			
			<!--1 column within the jumbotron header. Each column is split into 12 so 4 would be a 1/3 of screen size.-->
			
			  	<div class="col-sm-12">
					<p>Manchester (Full address available upon request)</p> 
			</div>
			</div>
		</div>
	</div>
	
	<!--3 columns for different links to other pages.-->
  
	<div class="container">
	  <div class="row">
	    <div class="col-sm-4">
	      <a href="DJ_professional.html"><h2>Professional</h2></a>
	      <p>Please find my CV along with details of my work life so far.</p>
	      
	    </div>
	    <div class="col-sm-4">
	      <a href="DJ_hobbies.html"><h2>Hobbies</h2></a>
	      <p>Here is some information around activities I like to do outside of work.</p>
	      <p>Some of my hobbies are included in other areas of this site.</p>
	    </div>
	    <div class="col-sm-4">
	      <a href="DJ_personal.html"><h2>Personal</h2></a>      
	      <p>Here is some information about my family and personal life.</p>
	      <p>You can also find my contact details here.</p>
	    </div>
	  </div>
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