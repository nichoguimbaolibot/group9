<?php
session_start();
if(!isset($_SESSION["user"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<meta charset="UTF-8">
		<title>ShopN'Gift</title>	
</head>
<body>
	
	<div>
		<a href="index.php" id="head">shop<span class="n">N</span>gift.com</a>			
	</div>
	<div>
		<ul class="bar">
	  		<li class="bar bar2" style="background-color:#FF0000;"><a class="bar" href="profile.php">Home</a></li>
	  		<li class="bar bar2"><a class="bar" href="shoplog.php">Shop</a></li>
	  		<li class="bar bar2"><a class="bar" href="upload.php">Sell</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="logout.php">Logout</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="out.php">Checkout</a></li>
		</ul>
	</div>

	<div id="slideshow-container"> 
		<div class="mySlides fade">
			<img class="slide" src="1.jpg">
		</div>
		<div class="mySlides fade">
			<img class="slide" src="2.jpg">
		</div>
		<div class="mySlides fade">
			<img class="slide" src="3.jpg">
		</div>
		<div class="mySlides fade">
			<img class="slide" src="4.jpg">
		</div>
		<div class="mySlides fade">
			<img class="slide" src="5.jpg">
		</div>
	</div> 
</body>
	<script type="text/javascript">
		
		/* SLIDE SHOW */
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		    var i;
		    var slides = document.getElementsByClassName("mySlides");
			    for (i = 0; i < slides.length; i++) {
			       slides[i].style.display = "none";  
			    }
		    slideIndex++;
		    if (slideIndex > slides.length) {slideIndex = 1}    
		    slides[slideIndex-1].style.display = "block";  
		    setTimeout(showSlides, 3000);
		}
	</script>

</html>