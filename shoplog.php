<?php
session_start();
	
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	table{
		margin-top: 50px;
		margin-left: 240px;
	}
	.items{
		display: block;
	}
	tr{
	}
	td{
		border: 1px;
		border-style: solid;	
		padding: 10px 10px 10px 10px;

	}
	img{
		width: 200px;
		height: 200px;
	}
</style>
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
	  		<li class="bar bar2" style="background-color:#FF0000;"><a class="bar" href="home.php">Shop</a></li>
	  		<li class="bar bar2"><a class="bar" href="upload.php">Sell</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="logout.php">Logout</a></li>
	  		<li class="bar bar2" style="float: right;"><a class="bar" href="out.php">Checkout</a></li>

		</ul>
	</div>
<div class="table">
	<table>
			<?php
				$connect = new mysqli('localhost','root', '', 'shop');
				$sql = "select 	* from items";
				$result = $connect->query($sql);
				if ($result->num_rows > 0){
						for ($x=1; $x<=25; $x++){
  				 		 echo "<tr>";
						for ($i=1; $i<=4; $i++){				 
							if($row = $result->fetch_assoc()) {  				 
								echo '<td> <img src="data:image;base64,'.$row['image'].'"> <br> <b>'.$row['name'].'</b><br>P
							'.$row['price'].' <br><form method="POST"> <button type="submit" name="submit">Add to Cart</button></form></td>';
  				 			}
  				 		}
  				 		echo "</tr>";
  				 	} 	
  				 	if(isset($_POST['submit'])){
					echo "test";
					} 			
  				}
			
			?>
			</tr>
	</table>
</div>
</body>
</html>