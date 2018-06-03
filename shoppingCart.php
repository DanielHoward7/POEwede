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

		$total = 0;

		 foreach ($item as $value) {
		 	$total += $value->getItem()->getPrice();
			echo "<td>".$value->getItem()->getItemDesc(), $value->getItem()->getPrice()."</td>";
			echo "<td><form action='removeBtn.php' method='post'><input type='hidden' name='remove' value=''><input type='submit' class='btn' value='Remove Item'/></form></td>";
			  
		 }


        echo "</tr>";
        echo "</table>";

        echo $total;
?>

</body>
</html>