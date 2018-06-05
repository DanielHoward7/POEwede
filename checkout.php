<?php 
	include('dbConn.php');
	include('stateManager.php');


 ?>

 <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="cartCss.css">
  <title>Checkout</title>
</head>
<body>
  <div class="header">
    <h2>Checkout</h2>
  </div>
  <div class="w3-display-container w3-content w3-wide" style="">
  	<h3>Congratulations! Your order has been placed</h3>
  </div>


  <?php 
		$seshId = $_COOKIE['PHPSESSID'];
		$user = loadUser();
		$cart = loadCart($user);
		$item = $cart->getCartContents();
		$userID = $user->getUserID();

		foreach ($item as $value) {
			$itemID = $value->getItem()->getItemID();
			$price = $value->getItem()->getPrice();
			$qty = $value->getQty();
		}
			$orderID = generateID();

		$sql = "INSERT INTO tbl_orders (orderID, userID) VALUES('$orderID',$userID)";
		$result = $db->query($sql);
		
		if ($result === FALSE){
			echo "<p> Unable to perform SQL Insert </p>";
		}
		else{
		}

	$sqli = "INSERT INTO tbl_orderitem (orderID, itemID, quantity, quoted_price) VALUES('$orderID',$itemID,$price,$qty)";
	
	$resultA = $db->query($sqli);
	if ($resultA === FALSE){
	}
	else{
	}
		 echo "<p>Your order number for reference is: ". $seshId . "</p>";



	function generateID($length = 10) {
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		$charactersLength = strlen($characters);
    		$randomString = '';
    		
    		for ($i = 0; $i < $length; $i++) {
        		$randomString .= $characters[rand(0, $charactersLength - 1)];
    		}
    			return $randomString;
}


   ?>
  	<a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="logout.php">Logout</a>

  
</body>
</html>
