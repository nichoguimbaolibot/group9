<?php
	session_start();	
	if (isset($_POST['user'])){
	$connect = new mysqli('localhost','root', '11111', 'shop');
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "insert into login (user, pass) values ('$user', '$pass')";
	$connect->query($sql);
	header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
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

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
        <div>
        <a href="index.php" id="head">shop<span class="n">N</span>gift.com</a>         
    </div>
    <div>
        <ul class="bar">
            <li class="bar bar2"><a class="bar">Home</a></li>
            <li class="bar bar2"><a class="bar" href="shop.php">Shop</a></li>
            <li class="bar bar2" style="float: right;"><a class="bar" href="login.php">Login</a></li>
            <li class="bar bar2" style="float: right; background-color:#FF0000;"><a class="bar" href="signup.php">Sign up</a></li>    
        </ul>
    </div>

<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" style="border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="user"><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="user" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <div class="clearfix">
            <a href="index.php"><button type="button" class="cancelbtn" >Cancel</button></a>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

</body>
</html>