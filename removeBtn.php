<?php 
	
	include('dbConn.php');
	include('statemanager.php');
	$id = $_GET['id'];


	$sql = "DELETE FROM tbl_item where itemID='".$id."'";
	mysqli_query($db, $sql);
	echo 'record deleted';
?>