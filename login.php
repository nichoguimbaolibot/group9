<?php
	session_start();
	if (isset($_POST['user'])){
	$connect = new mysqli('localhost','root', '11111', 'shop');
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "select 1 from login where user='$user' and pass='$pass'";

	$result = $connect->query($sql);
	if ($result-> num_rows>0){
		$_SESSION['user'] = $user;
    header("location:profile.php");
    $connect->close();
		} else
    {
      echo "Wrong Username/Password";
    }
	} 
	?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #7f7f7f;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #7f7f7f;
    text-decoration: none;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    text-align: center; 
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div>
        <a href="index.php" id="head">shop<span class="n">N</span>gift.com</a>         
    </div>
    <div>
        <ul class="bar">
            <li class="bar bar2"><a class="bar">Home</a></li>
            <li class="bar bar2"><a class="bar" href="shop.php">Shop</a></li>
            <li class="bar bar2" style="float: right; background-color:#FF0000;"><a class="bar" href="login.php">Login</a></li>
            <li class="bar bar2" style="float: right;"><a class="bar" href="signup.php">Sign up</a></li>    
        </ul>
    </div>

<h2>Login</h2>

<form  method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" >
  <div class="imgcontainer">
    <img src="loginicon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <a class="cancelbtn" href="index.php">Cancel</a>
  </div>
</form>

</body>
</html>
