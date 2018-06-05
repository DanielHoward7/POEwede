<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<!-- Validation with php -->
		<div class="input">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already registered? <a href="login.php">Login!</a>
		</p>
	</form>	

	<?php  
		//initiallization of required variables
		$email = "";
		$username = "";
		$password = "";
		$ErrorMsgs = array();
		//Connect to db
		include('dbConn.php'); 

			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
		// If register button is clicked
		if (isset($_POST['register'])) {
			//get input values from form
			$sql = "INSERT INTO tbl_user (userEmail,userName,isAdmin,password) VALUES ('$email', '$username',0, '$password')";

			$result = $db->query($sql);
			if ($resultA === FALSE){
				echo "<p> Unable to perform SQL Insert </p>";
				}
		else{
			echo "<p> ".$sql. " done " .mysqli_get_host_info($db)."</p>";
			header('location: index.php'); //redirect to home page
			}
		
		}	

	?>
</body>
</html>