 <!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->
<?php include('userClass.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

  $email = "";
  $username = "";
  $password = "";
  $ErrorMsgs = array();
 
  include('dbConn.php');

		//User login once login button has been clicked
	if (isset($_POST['login'])) {
  		$username = mysqli_real_escape_string($db, $_POST['username']);
  		$password = mysqli_real_escape_string($db, $_POST['password']);
  		echo "login button works";

  if (empty($username)) {
  	array_push($ErrorMsgs, "Username is required");
  	echo "valid username";
  }
  if (empty($password)) {
  	array_push($ErrorMsgs, "Password is required");
  	echo "valid password";
  }

  if (validLogin($_POST['username'],$_POST['password'])) {
    	 header("location: shop.php");
    	echo "got here";
    	 exit();
      }
}

  function validLogin($username, $password){

  	global $db;
  	$sql = "SELECT * FROM tbl_user WHERE userName='$username' AND password='$password'";
  	$results = mysqli_query($db, $sql);

  	print_r($results->fetch_assoc());

  	if ($results) {
  		$data = $results->fetch_assoc();

  		$user = new userClass();

  		$user->setUserID($data['userID']);
  		$user->setUserName($data['userName']);
  		$user->setUserEmail($data['userEmail']);
  		$user->isAdmin($data['isAdmin']);
  		$user->setPassword($data['password']);

  		$sesh_id = $_COOKIE['PHPSESSID'];
		$_SESSION[$sesh_id] = serialize($user);

  		return true;

  	}
  		return false;

}

?>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<div class="input">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not registered? <a href="register.php">Sign Up!</a>
		</p>
	</form>	
</body>
</html>