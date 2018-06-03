<?php 

	include('dbConn.php'); 
   include('stateManager.php'); 
 ?>


 <html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Admin</h2>
  </div>

  <div class="content">
   
      <button class="btn" onclick="toggle('items');">Show Items</button>
      <td><a href="addBtn.php?">Add Item</a></td>


 </div>

<div id=>
  </div>
<div id="items" class="content">
    <h1 class="header" style="width: 95%">Items</h1>
    <!-- Table creation for items -->
      <table >
      <tr>
        <!-- <th>Item Sku</th> -->
        <th>Description</th>
        <th>Price</th> 
        <th>Quantity</th> 
             <!-- <th>Image</th>  -->
        <th>Remove</th>
        <th>Edit</th>
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
        echo "<td>$price</td>";
        echo "<td>$qty</td>";
        // echo "<td> <img class='image' src='images/". $count .".jpg'></td>";
        echo "<td><a href=\"removeBtn.php?id=". $id ."\">Remove Item</a></td>";
        echo "<td><a href=\"editBtn.php?id=". $id ."\">Edit Item</a></td>";
        echo "</tr>";
      }

      echo "</table>";

      echo "<form action='logout.php' method='post'><input type='submit' name='logout' value='Logout'></form>";
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