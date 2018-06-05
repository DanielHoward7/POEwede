<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="cartCss.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>Add</title>
</head>
<body>
	<a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shop.php">Back To Shop</a>

<?php 
	
	include('dbConn.php');
	include('statemanager.php');

	$price = $_POST['ItemPrice'];
	$desc = $_POST['ItemDesc'];
	$qty = $_POST['ItemQty'];

if (isset($_POST['save'])) {

	$sql = "INSERT INTO tbl_item (itemPrice,itemDesc,itemQuantity) VALUES($price,'$desc',$qty)";

	$sql = substr($sql,0,strlen($sql));
	
	$resultA = $db->query($sql);
	if ($resultA === FALSE){
		echo "<p> Unable to perform SQL Insert </p>";
	}
	else{
		echo "<p> ".$sql. " done " .mysqli_get_host_info($db)."</p>";
	}
	
}		

?>

<form class="shopping-cart" style="box-shadow: 5px 10px 18px #888888;" action="addBtn.php" method="post">
	<div class="w3-display-container w3-content w3-wide ">
			<h2 style=" font-family:Times New Roman, Georgia, Serif; ">Add item to Shop:</h2>
	</div>
	
	
	<label id="price">Item Price:</label><br/>
	<div style="text-align: center;"><input class="input" style=" font-family:Times New Roman, Georgia, Serif;" type="text" name="ItemPrice"><br/></div>
	
	<label style="padding-top: 20px;" id="desc">Item Name:</label><br/>
	<div style="text-align: center;"><input class="inputdesc" style=" font-family:Times New Roman, Georgia, Serif;" type="text" name="ItemDesc"><br/></div>

	<label style="padding-top: 20px;" id="qty">Total in stock:</label><br/>
	<div style="text-align: center;"><input class="input" style=" font-family:Times New Roman, Georgia, Serif;" type="text" name="ItemQty"><br/></div>

	<div style="text-align: center; padding-top: 20px;"><button style=" width: 200px; text-align: center;"class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" type="submit" name="save">Insert Item</button></div>

</form>

</body>
</html>