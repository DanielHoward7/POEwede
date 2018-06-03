<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>
	<a href="shop.php">Back To Shop</a>

<?php 
	
	include('dbConn.php');
	include('statemanager.php');

	$id = $_POST['ItemID'];
	$price = $_POST['ItemPrice'];
	$desc = $_POST['ItemDesc'];
	$qty = $_POST['ItemQty'];

if (isset($_POST['save'])) {

	$sql = "INSERT INTO tbl_item (itemID,itemPrice,itemDesc,itemQuantity) VALUES('$id','$price',".'$desc'.",'$qty')";
		
	$sql = substr($sql,0,strlen($sql)-1);
	$resultA = $db->query($sql);
	if ($resultA === FALSE){
		echo "<p> Unable to perform SQL Insert </p>";
	}
	else{
		echo "<p> ".$sql. " done " .mysqli_get_host_info($db)."</p>";
	}
	
}		

?>

<form action="addBtn.php" method="post">
	
	<label id="id">Item ID</label><br/>
	<input type="text" name="ItemID"><br/>

	<label id="price">Item Price</label><br/>
	<input type="text" name="ItemPrice"><br/>
	
	<label id="desc">Item Name</label><br/>
	<input type="text" name="ItemDesc"><br/>

	<label id="qty">Total in stock</label><br/>
	<input type="text" name="ItemQty"><br/>

	<button type="submit" name="save">Insert Item</button>

</form>

</body>
</html>