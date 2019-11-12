<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Jomolhari|Dancing+Script|Indie+Flower|Shadows+Into+Light%26display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/header1.css">
	<title>Document</title>
</head>
<body>


	<header>
    	<div class="header-text">
    	<p id="header-text">Danny Jebb</p>
    </div>
    <div class="container-fluid">

		<!--<img  src="css/assets/dj.png">-->
		<?php
    		if(isset($_SESSION['userid'])) {
        		echo '
        		
        		<form action="includes/logout.inc.php" method="POST" >
				

				
				<button class="login-btn" type="submit" name="login-submit">Log out</button>
				
				</form>
				';
				

   		 } else {
       		 echo '<form action="includes/login.inc.php" method="POST" >
				
			    
				<span class="glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Username"  class="header-form">

				<span class="glyphicon glyphicon-lock"></span>
				
				<input type="password" name="password" id="password" placeholder="Password"  class="header-form">
				<span toggle="#password" form-control-feedback class="glyphicon glyphicon-eye-open" toggle-password" onclick="showPassword()"></span>
				

				<button class="login-btn" type="submit" name="login-submit">Log in</button>
				<a id="signup" href="DJ_signup.php">Sign up</a>
				
				
				
				
				</form>';
    	}
    
    ?>
</div>
    </header>
<script>
    $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script>
	  	function showPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
	
</body>
</html>