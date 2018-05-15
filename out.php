<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<meta charset="UTF-8">
		<title>ShopN'Gift</title>	
</head>
<style type="text/css">
	input[type=text], input[type=password] {
    width: 40%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: block;
    border: none;
    background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus {
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
    width: 10%;
    opacity: 0.9;
	}
	.container {
    padding: 16px;
	}
button:hover {
    opacity:1;
}
</style>
<body>
	
	<div>
		<a href="index.php" id="head">shop<span class="n">N</span>gift.com</a>			
	</div>
	<div>
		<ul class="bar">
	  		<li class="bar bar2"><a class="bar" href="profile.php">Home</a></li>
	  		<li class="bar bar2"><a class="bar" href="shoplog.php">Shop</a></li>
	  		<li class="bar bar2"><a class="bar" href="upload.php">Sell</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="logout.php">Logout</a></li>
	  		<li class="bar bar2" style="float: right; background-color:#FF0000;"><a class="bar" href="out.php">Checkout</a></li>
		</ul>
	</div>

	<div class="container">
		<form>
			<label for="user"><b>Send to</b></label>
        	<input type="text" placeholder="Enter complete address" name="user" required>
        	<label for="user"><b>Name of sender</b></label>
        	<input type="text" placeholder="Enter Name" name="user" required>
        	<label for="met"><b>Shop or Gift</b></label>
        	<select name="met">
			    <option value="shop">Shop</option>
			    <option value="gift">Gift</option>
  			</select>
  			<label for="met"><b>Payment Method</b></label>
        	<select name="pmet">
			    <option value="shop">COD</option>
			    <option value="gift">ShopNGift Points</option>
  			</select>
  			<a href="index.php"><button type="button">Confirm</button></a>
		</form>

	</div>
</body>
</html>