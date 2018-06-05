<?php 

	include('dbConn.php'); 
   include('stateManager.php'); 
 ?>


 <html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="cartCss.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <div class="header">
    <h2 style="font-family:Times New Roman, Georgia, Serif; text-align: center;">Admin</h2>
  </div>

  <div class="content">
   
      <button class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" onclick="toggle('items');">Show Items</button>
      <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large " href="addBtn.php">Add Item</a>
      <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shop.php">Back To Shop</a>

 </div>
<div id="items" class="shopping-cart">
    <h2 style=" font-family:Times New Roman, Georgia, Serif; text-align: center;">Items</h2>

    <div style="">
    <!-- Table creation for items -->
      <table >
      <tr>
        <th>Description</th>
        <th>Price</th> 
        <th>Quantity</th> 
        <th>Remove</th>
      </tr> 
  

 <?php
  $count = 0;
  $items = array();


  $sql = "SELECT * from tbl_item";
  $results = mysqli_query($db, $sql);

  while ($record=mysqli_fetch_assoc($results)) {
        $count++;
        $id = $record['itemID'];
        $desc = $record['itemDesc'];
        $price = $record['itemPrice'];
        $qty = $record['itemQuantity'];

        $item = new itemClass($id, $desc, $price, $qty);
        $items[] = $item;
		
		//$serialItem = serializeItem($item);
        $serialItem = serializeItem($item);
        
        echo "<tr>";
        echo "<td>$desc</td>";
        echo "<td>R$price</td>";
        echo "<td>$qty</td>";
        echo "<td><a href=\"removeBtn.php?id=". $id ."\">Remove Item</a></td>";
        echo "</tr>";
      }

      echo "</table>";

      echo "<form class='w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large' action='logout.php' method='post'><input type='submit' name='logout' value='Logout'></form>";
?>       

</div>
  <!-- JS for toggle items button and popup window for add to cart -->
  <script type="text/javascript">
  function toggle(id){
    var div = document.getElementById(id);
      if (div.style.display =='none') {
        div.style.display = 'block';
      }else {
        div.style.display = 'none';
      }
  }
  function popup(price){

      alert(" Item added to cart \n Price is: R" + price);
    }

</script>
</body>
</html>