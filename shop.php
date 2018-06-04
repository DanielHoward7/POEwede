<!-- 
  Name: Daniel
  Surname: Howard
  Student Number: 16000911
  Declaration:
  This is my own code and any code from other sources will be referenced.
-->

<?php
    include('dbConn.php'); 
   include('stateManager.php'); 
   
   //check if user is already logged in
    if (!loggedIn()) {
        header("Location:login.php");
    }
?>

<html>
<head>
  <title>Dan's PC Shop</title>
  <link rel="stylesheet" type="text/css" href="cartCss.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <div class="header">
    <h2 style="font-family:Times New Roman, Georgia, Serif; text-align: center;">Welcome To ZZGAMING's Online Store</h2>
    <h4 style="font-family:Times New Roman, Georgia, Serif; text-align: center;">Your favourite specialist keyboard supplier</h4>
    <h5 style="font-family:Times New Roman, Georgia, Serif; text-align: center;">View Our shop for great deals on selected brands and keep posted for more products</h5>
  </div>

  <div class="content">
   
      <button class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" onclick="toggle('items');">Show Items</button> 
      <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shoppingCart.php">Show cart</a>
      <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="admin.php">Admin</a>
    
</div>

<div id="items" class="shopping-cart">
    <h2 style="font-family:Times New Roman, Georgia, Serif; text-align: center;">Items</h2>
    <!-- Table creation for items -->
      <table >
      <tr>
        <!-- <th>Item Sku</th> -->
        <th>Description</th>
        <th>Price</th> 
        <th>Quantity</th> 
        <th>Image</th> 
        <th> Add to cart</th>
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
        echo "<td> <img class='image' src='images/". $count .".jpg'></td>";
        echo "<td><form class='w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large' action='addToCartBtn.php' method='post'><input type='hidden' name='item' value='{$serialItem}'><input type='submit' onclick='popup(". $price .")' class='btn' value='Add To Cart'/></form></td>";
        echo "</tr>";
      }

      echo "</table>";

      echo "<form style='padding:20px;' action='logout.php' method='post'><input type='submit' name='logout' value='Logout'></form>";
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