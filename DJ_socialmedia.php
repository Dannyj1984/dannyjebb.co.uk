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
	
	<link rel="stylesheet" href="css/nav.css"/>
	<link rel="stylesheet" href="css/jumbotron.css">
	<link rel="stylesheet" href="css/socialmedia.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>Social Media</title>
</head>
<body>
    
    <!--Navigation-->
	
	<nav class="navbar" id="myNavbar"> 
	<a href="index.php">Home</a> 
	<a href="DJ_about.php" >About me</a> 
	<a href="DJ_sd.php">Software development</a> 
	<a href="DJ_photography.php">Photography</a> 
	<a href="DJ_family.php">Family</a> 
	<a href="DJ_socialmedia.php" class="active">Social Media</a> 
	<a href="DJ_contactme.php">Contact Me</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</nav>
	
	<!--Main page header-->
	
	<div class="jumbotron text-center">
	<h1> Social Media</h1>
	<h3>Check out my social media channels</h3>
	</div>
	
	<!--social media photos and links-->
	
	<div class="accounts1">
		
		<div class="insta">
			<a href ="http://www.instagram.com/dannyjphotography84"> <img src="css/assets/insta.png" alt="Instagram Logo"></a>
	
        </div>
	    <div class="facebook">
	        <a href ="http://www.facebook.com/dannyjebbphotos"> <img src="css/assets/facebook.png" alt="Facebook Logo"></a> 
            </div>
            
            <div class="linkedin">
			<a href ="https://www.linkedin.com/in/danny-jebb-006610116/"> <img src="css/assets/linkedin.png" alt="Linkedin Logo"></a>
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