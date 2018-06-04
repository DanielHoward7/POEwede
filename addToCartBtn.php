	<!DOCTYPE html>
<html>
<head>
	<title>Cart Array</title>
  <link rel="stylesheet" type="text/css" href="cartCss.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<h2>Your item has been added!</h2>
    <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shoppingCart.php">View your cart</a>
	<a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shop.php">Back To Shopping!</a>

<?php
	include('stateManager.php');
	include_once('orderLine.php');

	
	$item = loadItem($_POST['item']);

	$user = loadUser();

	$cart = loadCart($user);

	$cart->addItem($item);

	saveCart($cart, $user);

	$item = $cart->getCartContents();

	// print_r($item);

	 // header("location :shop.php");

	// foreach ($item as $key => $value) {
		// echo $value->getItemDesc() . " " . $item[$value->getItemID()]['qty'];
		// print_r($item[$value->getItemID()]);
	// }

// print_r($cart->getCartContents()['qty']);

	// header("Location: shop.php");

?>
</body>
</html>