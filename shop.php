<!-- 
  Name: Daniel
  Surname: Howard
  Student Number: 16000911
  Declaration:
  This is my own code and any code from other sources will be referenced.
-->

<?php 
   session_start(); 
   //check if user is already logged in
    //   $sesh_id = $_COOKIE['PHPSESSID'];
    // if (!isset($_SESSION[$sesh_id])) {
    //    header('location: login.php');
    // }

   
   include('dbConn.php'); 
?>

<html>
<head>
  <title>Dan's PC Shop</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Home</h2>
  </div>

  <div class="content">
   
      <button class="btn" onclick="toggle('items');">Show Items</button>
    
</div>

<div id=>
  </div>
<div id="items" class="content">
    <h1 class="header" style="width: 95%">Items</h1>
    <!-- Table creation for items -->
      <table >
      <tr>
        <th>Item Sku</th>
        <th>Description</th>
        <th>Price</th> 
        <th>Image</th> 
        <th> Add to cart</th>
      </tr> 
        
<?php 
    //sql query 
    $sql = "SELECT itemID as SKU, itemDesc as DESCRIPTION, itemPrice as PRICE from tbl_item"; 
    $results = mysqli_query($db, $sql);
     
    if ($results->num_rows > 0) {
        //output of each row
      while ($user=mysqli_fetch_assoc($results)) {
        $price = $user['PRICE'];
        echo "<tr><td>".$user['SKU']."</td><td>".$user['DESCRIPTION']."</td><td>".$price."</td><td> <img class='image' src='images/{$user['SKU']}.jpg'></td><td><input type='button' onclick='popup(". $price .")' class='btn' value='Add To Cart'/></td></tr>";
      }
      $_SESSION['currentShop'] = serialize($shop); 

       echo "</table>";
     }else {
       echo "0 results";
     }   
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