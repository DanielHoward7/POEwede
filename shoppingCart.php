<!DOCTYPE html>
  <html>
  <head>
	<link rel="stylesheet" type="text/css" href="cartCss.css">

  	<title></title>
  </head>
  <body>
  
 <a href="shop.php">Back To Shop</a>

 	<div class="shopping-cart">
  <!-- Title -->
  <div class="title">
    Shopping Cart
  </div>
  <!-- Product  -->
  <div class="item">
    <div class="buttons">
      
    </div>

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
			echo "<td>".$value->getItem()->getPrice()."</td>";
			echo "<td>".$value->getQty()."</td>";
			
			$serialItem = serializeItem($value->getItem());
			
			// echo "<td><label>1</label><br/>";

			echo "<td><form action='addToCartBtn.php' method='post'><input type='hidden' name='item' value='{$serialItem}'><input type='submit' class='' value='Add Item'/></form>";
			echo "<form action='removeFromCart.php' method='post'><input type='hidden' name='item' value='{$serialItem}'><input type='submit' class='' value='Remove Item'/></form></td>";
			  
		 }


        echo "</tr>";
        echo "</table>";
		 	echo "<td><div class='total-price' style='padding-bottom: 100px;'> Your total is: R$total</div></td>";


    	
?>
</div>

</body>
</html>