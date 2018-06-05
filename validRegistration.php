 <!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->
<?php
	
	session_start();
	//initiallization of required variables
	$email = "";
	$username = "";
	$password = "";
	$ErrorMsgs = array();
	//Connect to db
	include('dbConn.php'); 
	// If register button is clicked
	if (isset($_POST['register'])) {
		//get input values from form
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

	}
	$sql = "INSERT INTO tbl_user VALUES ('$email', '$username', '$password')";

			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Registeration Successful!";
			header('location: index.php'); //redirect to home page
		}
	// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $sql = "SELECT * FROM tbl_user WHERE userName='$username' OR userEmail='$email' LIMIT 1";
  // $result = mysqli_query($db, $sql);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['userName'] === $username) {
  //     array_push($ErrorMsgs, "Username already exists");
  //   }

  //   if ($user['userEmail'] === $email) {
  //     array_push($ErrorMsgs, "email already exists");
  //   }
  // }
	// If there are no errors, register user to db
	if (count($ErrorMsgs) == 0) {
			// $password = md5(trim($password)); //encrypt password
			
?>