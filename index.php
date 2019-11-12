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
	<link rel="stylesheet" href="css/home.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>Home</title>
</head>
<body>
    <div id="page-container">
   		<div id="content-wrap">
    
    
    <!--Navigation-->
	
	<nav class="navbar" id="myNavbar"> 
	<a href="index.php" class="active">Home</a> 
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
		
		<!--Main page header-->
	
	<div class="jumbotron text-center">
	<h1> Daniel Jebb </h1>
	
	</div>
	
	<!--Information text-->
	
	<div class="container">
	    <div class="info">
	    <h1>Manchester based Computer Science student </h1>
	    <p id="maintext">The aim of this website is to showcase some of my experience so far and to give some insight into the kind of person I am. All the source code for this site can be viewed on my github page. See the software development page for info. </p>
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
	  </div>
	  
	  <?php
// at bottom:
include('footer.php');
?>
</div>

</body>

</html>