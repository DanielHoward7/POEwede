	<!DOCTYPE html>
<html>
<head>
	<title>Cart Array</title>
</head>
<body>
	<h2>This page isn't hidden to show that each item was added to the cartItems array</h2>
	<a href="shop.php">Back To Shop</a>

<?php
	include('stateManager.php');
	include_once('orderLine.php');

	
	$item = loadItem($_POST['item']);

	$user = loadUser();

	$cart = loadCart($user);

	// $orderItem = new new OrderLine($item, );

	$cart->addItem($item);

	saveCart($cart, $user);

	$item = $cart->getCartContents();

	print_r($item);

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