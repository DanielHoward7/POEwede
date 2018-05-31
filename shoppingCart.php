<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>

<?php

require('cartClass.php');
require('itemClass.php');

	if (isset($_SESSION['cart'])) {
        $shop = unserialize($_SESSION['cart']);
   }else{

      if (class_exists("ShoppingCart")) {
          $shop = new ShoppingCart();
    }else{

      exit("<p>Shop Class not available</p>");
    }
   }
 
   $_SESSION['cart'] = serialize($shop);


		//example of adding to the cart, needs work 
		foreach ($items as $item) {
			$item = new Item();//needs to be populated correctly or would i create a new object at each add to cart button with that itemID
		}
		//Add items to cart
		$cart->addItem($item);
		//quantity of two as an example
		$cart->updateItem($item1, 2);


		//show cart's contents
		echo '<h2> cart contains: (' .count($cart) . ' items)</h2>';

		if (!$cart->isEmpty()) {
			foreach ($cart as $arr) {
				//get item object
				$item = $arr['item'];

				printf('<p>%s: %d @ $%0.2f each.</p>' , $item->getName(), $arr['qty'], $item->getPrice());
			}
		}
		?>

</body>
</html>