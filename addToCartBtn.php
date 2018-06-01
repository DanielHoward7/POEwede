<?php
	include('stateManager.php');

	
	$item = loadItem($_POST['item']);

	$user = loadUser();

	$cart = loadCart($user);

	$cart->addItem($item);



	saveCart($cart, $user);

	$item = $cart->getCartContents();

	print_r($item);

	// foreach ($item as $key => $value) {
		// echo $value->getItemDesc() . " " . $item[$value->getItemID()]['qty'];
		// print_r($item[$value->getItemID()]);
	// }

// print_r($cart->getCartContents()['qty']);

	// header("Location: shop.php");

?>