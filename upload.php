<?php
	session_start();
	if(isset($_POST['submit'])){
		if(getimagesize($_FILES['image']['tmp_name']) == false){
			echo "Please select an image.";
		}else{
			$connect = new mysqli('localhost','root', '', 'shop');
			$image = addslashes($_FILES['image']['tmp_name']);
			$name = $_POST['name'];
			$price = $_POST['price'];
			$image = file_get_contents($image);
			$image = base64_encode($image);	
			$sql = "insert into items (name, image, price) values ('$name','$image','$price')";			
		}
			$connect->query($sql);
	} 

?>
<style type="text/css">
	body {font-family: Arial, Helvetica, sans-serif;}
		input[type=text]{
	    width: 100%;
	    padding: 15px;
	    margin: 5px 0 22px 0;
	    display: inline-block;
	    border: none;
	    background: #f1f1f1;
	}

	input[type=text]:focus{
	    background-color: #ddd;
	    outline: none;
	}
	button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
	}

	button:hover {
	    opacity:1;
	}
	.cont{
		margin: 2px;
		border: 1px;
		border-style: solid;
	}
	.body{
		margin: 20px;
	}
	h1{
		margin: 5px;
	}
	hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
	}
</style>
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
	  		<li class="bar bar2"><a class="bar" href="profile.php">Home</a></li>
	  		<li class="bar bar2"><a class="bar" href="shoplog.php">Shop</a></li>
	  		<li class="bar bar2" style="background-color:#FF0000;"><a class="bar" href="upload2.php">Sell</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="logout.php">Logout</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="out.php">Checkout</a></li>

		</ul>
	</div>

	<div class="cont">
		<div>
			<h1>Sell an item</h1>
		</div>
		<hr>
		<div class="body">
			<form method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>' enctype="multipart/form-data">
				<label for="name"><b>Item Name</b></label>
				<input type="text" name="name">
				<br/><br/>
				<label for="price"><b>Price</b></label>
				<input type="text" name="price">
				<br/>
				<input type="file" name="image" />
				<br/><br/>
				<button type="submit" name="submit"><h2>SELL</h2></button>
			</form>
		</div>		
	</div>
</body>
</html>