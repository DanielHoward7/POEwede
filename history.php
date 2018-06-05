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
    <h2 style=" font-family:Times New Roman, Georgia, Serif;">Your Purchase History</h2>
  </div>

  <div>
  	
  	<table >
      <tr>
        <!-- <th>Item Sku</th> -->
        <th>Order Number</th>
        <th>Date</th>

    </tr>
 

<?php 
	include('dbConn.php');
	include('stateManager.php');
	$user = loadUser();
	$userID = $user->getUserID();

	$sql = "SELECT * from tbl_orders where userID = $userID";
   	$results = mysqli_query($db, $sql);

   	while ($record=mysqli_fetch_assoc($results)) {
   			
   		$id = $record['orderID'];
   		$date=$record['orderDate'];
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$date</td>";
        echo "</tr>";

        
    }

    	echo "</table>";




 ?>
  </div>
</body>
</html>