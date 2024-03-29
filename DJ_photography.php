<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/jumbotron.css">
	<link rel="stylesheet" href="css/photography.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/photography.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	
    <title>Photography</title>
</head>
<body>
    <!--Navigation-->
	
	<nav class="navbar" id="myNavbar"> 
	<a href="index.php">Home</a> 
	<a href="DJ_about.php" >About me</a> 
	<a href="DJ_sd.php">Software development</a> 
	<a href="DJ_photography.php" class="active">Photography</a> 
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
	  <h1>Photography</h1>
	  <p></p>
	  
	</div>  
	
	<!--information section-->
	
	<div class="container">
    	<div class equiptment>
	        <h3>A selection of photos taken on our travels.</h3>
	        <h4><u>Equiptment list </u></h4>
	        <p>Camera - Nikon D750</p>
	        <p> Lenses - Nikon 50mm, Sigma 105mm, Sigma 24-70mm </p>
	    </div>
	</div>
	
	<!--horizontal ruler-->
	<hr/>
	
	<!--3 column photo section-->
	
	<div class="row">
  <div class="column">
      <p>Rawai beach - Thailand</p>
    <img src="../css/assets/Thailand-14.jpg">
    <p>Macro photography</p>
    <img src="../css/assets/flower.jpg">
    <p>Lake district</p>
    <img src="../css/assets/Lakes-1.jpg">
    <p>Dovestones</p>
    <img src="../css/assets/hills.jpg">
    <p>Hartshead Pike</p>
    <img src="../css/assets/manchester.jpg">
    <p>Peak district - Mottram</p>
    <img src="../css/assets/Mottram-4.jpg">
    <p>Peak district - Ladybower</p>
    <img src="../css/assets/peaks-2.jpg">
    <p>Phi Phi Island - Thailand</p>
    <img src="../css/assets/Thailand-8.jpg">
  </div>
  <div class="column">
      <p>Porthmadog beach</p>
    <img src="../css/assets/porthmadog.jpg">
    <p>Torquay</p>
    <img src="../css/assets/rocks.jpg">
    <p>Torquay</p>
    <img src="../css/assets/Seascape1.jpg">
    <p>Southport</p>
    <img src="../css/assets/Southport-1.jpg">
    <p>Peak distric - Castleton</p>
    <img src="../css/assets/Steeple-1.jpg">
    <p>Dubai</p>
    <img src="../css/assets/sunset.jpg">
    <p>Surprise view</p>
    <img src="../css/assets/Surpriseview-1.jpg">
    <p>Walkerwood reservoir</p>
    <img src="../css/assets/walkerwood.jpg">
    </div>
    
    <div class="column">
        <p>Kata, karon, Patong beach - Thailand</p>
    <img src="../css/assets/Thailand-4.jpg">
    <p>Werneth low golf course</p>
    <img src="../css/assets/werneth.jpg">
    <p>Thailand</p>
    <img src="../css/assets/Thailand-5.jpg">
    <p>Surprise view    </p>
    <img src="../css/assets/surpriseview.jpg">
    <p>Peak district - Surprise view</p>
    <img src="../css/assets/surprise view1.jpg">
    <p>Peak district - Surprise view</p>
    <img src="../css/assets/surpriseview.jpg">
    <p>Werneth low</p>
    <img src="../css/assets/Wernethsunrise1.jpg">
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