<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nav.css"/>
	<link rel="stylesheet" href="css/jumbotron.css">
	<link rel="stylesheet" href="css/family.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>Family</title>
</head>
<body>
    
    <!--Navigation-->
	
	<nav class="navbar" id="myNavbar"> 
	<a href="index.php">Home</a> 
	<a href="DJ_about.php" >About me</a> 
	<a href="DJ_sd.php">Software development</a> 
	<a href="DJ_photography.php">Photography</a> 
	<a href="DJ_family.php" class="active">Family</a> 
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
	  <h1>Family</h1>
	  <h3> I have an amazing wife Katy and we have been married 2 years. We have one gorgeous daughter Emily, and another on the way due in April.</h3>
	  
  </div>
  
  <!--Three separate sections for 3 family members-->
	  
	  
	  <div class="container">
	    
	    <div class="panel-group" id="accordion">
	      <div class="panel panel-default">
	        <div class="panel-heading">
	          <h4 class="panel-title">
	              <!--'data-parent="#accordian"' allows the panel to auto close when another is opened-->
	            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Danny</a>
	          </h4>
	        </div>
	        <!--Use 'collapse in' to make the panel open on load-->
	        <div id="collapse1" class="panel-collapse collapse">
	          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
	          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
	        </div>
	      </div>
	      <div class="panel panel-default">
	        <div class="panel-heading">
	          <h4 class="panel-title">
	            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Katy</a>
	          </h4>
	        </div>
	        <div id="collapse2" class="panel-collapse collapse">
	          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
	          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
	        </div>
	      </div>
	      <div class="panel panel-default">
	        <div class="panel-heading">
	          <h4 class="panel-title">
	            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Emily</a>
	          </h4>
	        </div>
	        <div id="collapse3" class="panel-collapse collapse">
	          <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
	          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
	        </div>
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