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
  <link rel="stylesheet" type="text/css" href="cartCss.css">
  <title>Login</title>
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <div class="w3-display-container w3-content w3-wide" style="padding-left: 43%;">

  <form method="post" action="admin.php">
    <div class="input" style="text-align: center;">
      <label>Username</label>
      <input type="text" name="username">
    </div>
    <div class="input" style="text-align: center;">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input" style="text-align: center;">
      <button class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" type="submit" name="login" class="btn">Login</button>
    </div>
    <p>
      Not registered? <a href="register.php">Sign Up!</a>
    </p>
  </form> 
  </div>
</body>
</html>

<?php 

include ('cartClass.php');
include ('stateManager.php');

  $email = "";
  $username = "";
  $password = "";
  $ErrorMsgs = array();
 
  include('dbConn.php');

    //User login once login button has been clicked
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

   if (validLogin($username, $password)) {
       header('location: shop.php');
    }
}

  function validLogin($username, $password){

    global $db;
    $sql = "SELECT * FROM tbl_user WHERE userName='$username' AND password='$password'";
    $results = mysqli_query($db, $sql);

    if ($results) {


      if ($results->num_rows > 0) {
        
      $data = $results->fetch_assoc();

      $user = new UserClass();

      $user->setUserID($data['userID']);
      $user->setUserName($data['userName']);
      $user->setUserEmail($data['userEmail']);
      $user->isAdmin($data['isAdmin']);
      $user->setPassword($data['password']);

      // $sesh_id = $_
      ['PHPSESSID'];
      // $_SESSION[$sesh_id] = serialize($user);
      saveUser($user);

      if ($user->isAdmin() === True) {
        echo "YES!";
      }

        return true;

      }
    }
      return false;
    }
?>

