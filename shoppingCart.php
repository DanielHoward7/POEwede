<!DOCTYPE html>
  <html>
  <head>
	<link rel="stylesheet" type="text/css" href="cartCss.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Shopping Cart</title>
  </head>
  <body>
  
 <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shop.php">Back To Shop</a>

  <!-- Title -->
  <div class="w3-display-container w3-content w3-wide">
    <h2 style=" font-family:Times New Roman, Georgia, Serif;">Shopping Cart</h2>
  </div>
  <!-- Product  -->
  <div class="w3-display-container w3-content w3-wide" style="text-align: center;">
    <table>
		<tr>
			<th>Description</th>
        	<th>Price</th> 
        	<th>Quantity</th> 
        	<th></th>
        </tr>	
		

<?php

include('stateManager.php');


		$user = loadUser();
		$cart = loadCart($user);
		$item = $cart->getCartContents();

		$total = 0;

		 foreach ($item as $value) {
		 	$total += $value->getItem()->getPrice() * $value->getQty();
		 	echo "<tr>";
			echo "<td style='text-align: center;'>".$value->getItem()->getItemDesc()."</td>";
			echo "<td>R".$value->getItem()->getPrice()."</td>";
			echo "<td>".$value->getQty()."</td>";
			
			$serialItem = serializeItem($value->getItem());
			
			// echo "<td><label>1</label><br/>";

			echo "<td><form action='addToCartBtn.php' method='post'><input type='hidden' name='item' value='{$serialItem}'><input type='submit' class='w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large' value='Add Item'/></form>";
			echo "<form action='removeFromCart.php' method='post'><input type='hidden' name='item' value='{$serialItem}'><input type='submit' class='w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large' value='Remove Item'/></form></td>";
			  
		 }

        echo "</tr>";
        echo "</table>";
		 	echo "<td><div class='total-price' style='padding-bottom: 100px;'> Your total is: R$total</div></td>";
		 	echo "</div>";

		 	echo "<div style='text-align: center; padding-top: 20px;'>" . "<form action='checkout.php' method='post'><input type='hidden' name='item' value=''><input type='submit' class='w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large' value='Checkout'/></form>"."</div>";


    	
?>
</div>
</div>

</body>
</html>