<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<a href="shop.php">Back To Shop</a>

	<h2>Items</h2>

	<table>
		<tr>
		

<?php

include('stateManager.php');

		$user = loadUser();
		$cart = loadCart($user);
		$item = $cart->getCartContents();

		 foreach ($item as $value) {
			printf('<p>%s: %d @ $%0.2f each.</p>' , $value->getItemDesc(), $value->getQuantity(), $value->getPrice());
			echo "<td><form action='removeBtn.php' method='post'><input type='hidden' name='remove' value=''><input type='submit' class='btn' value='Remove Item'/></form></td>";
		 }

        echo "</tr>";
        echo "</table>";
?>

</body>
</html>