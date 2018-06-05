<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->

	<!-- test database needs to be empty have not added drop database code in case you would prefer to do it when you're ready. -->

<?php

include("dbConn.php");

	// $m = "drop database test";
	// $n = $db->query($m);

	// if ($n === FALSE) {
	// 	echo "Alter didnt work";
	// }
	// else{
	// 	echo "Alter worked";
	// }
    

	// $c = "create database test";
	// $z = $db->query($c);

	// if ($z === FALSE) {
	// 	echo "Alter didnt work";
	// }
	// else{
	// 	echo "Alter worked";
	// }
    

    //Create Table users
 	$sql = "drop table tbl_user";
 	$result = $db->query($sql);
 if ($result === FALSE){
		echo "<p> Unable to perform SQL Drop Table </p>";
 }
	else{
		echo "<p>  ".$sql. " done ".mysqli_info($db)."</p>";
	}
	
  	$sqlCreate = "CREATE TABLE tbl_user (userID int(11) NOT NULL,userEmail varchar(255) NOT NULL,userName varchar(255) NOT NULL, isAdmin boolean, password varchar(255))";
  	$resultCT = $db->query($sqlCreate);
  if ($resultCT === FALSE){
		echo "<p> Unable to perform SQL Create Table </p>";
  }
	else{
		 echo "<p>".$sqlCreate. " done " .mysqli_info($db)."</p>";
	}
	
  $sqlIns = "INSERT INTO tbl_user (userID, userEmail, userName, isAdmin, password) VALUES
(1,'Dan@gmail.com', 'Dan', 'true','1234'),
(2,'John@gmail.com', 'John','false','1234'),
(3,'Mike@gmail.com', 'Mike','false','1234'),
(4,'Jack@gmail.com', 'Jack','false','1234'),
(5,'Luke@gmail.com', 'Luke','false','1234'),
(6,'Mark@gmail.com', 'Mark','false','1234'),
(7,'Jett@gmail.com', 'Jett','false','1234'),
(8,'Morne@gmail.com', 'Morne','false','1234'),
(9,'Jamie@gmail.com', 'Jamie','false','1234'),
(10,'Kayla@gmail.com', 'Kayla','false','1234'),
(11,'Janine@gmail.com', 'Janine','false','1234'),
(12,'Rubin@gmail.com', 'Rubin','false','1234'),
(13,'Alex@gmail.com', 'Alex','false','1234'),
(14,'Jessica@gmail.com', 'Jessica','false','1234'),
(15,'Michele@gmail.com', 'Michele','false','1234'),
(16,'Abby@gmail.com', 'Abby','false','1234'),
(17,'Shannon@gmail.com', 'Shannon','false','1234'),
(18,'Lizzy@gmail.com', 'Lizzy','false','1234'),
(19,'Etienne@gmail.com', 'Etienne','false','1234'),
(20,'Emile@gmail.com', 'Emile','false','1234'),
(21,'Renaldo@gmail.com', 'Renaldo','false','1234'),
(22,'William@gmail.com', 'William','false','1234'),
(23,'Josh@gmail.com', 'Josh','false','1234'),
(24,'Tracy@gmail.com', 'Tracy','false','1234'),
(25,'Kyle@gmail.com', 'Kyle','false','1234'),
(26,'Michael@gmail.com', 'Michael','false','1234'),
(27,'Lee@gmail.com', 'Lee','false','1234'),
(28,'Amanda@gmail.com', 'Amanda','false','1234'),
(29,'Bob@gmail.com', 'Bob','false','1234'),
(30,'Jane@gmail.com', 'Jane','false','1234');";


  	$sqlIns = substr($sqlIns,0,strlen($sqlIns)-1);
	$resultA = $db->query($sqlIns);
	if ($resultA === FALSE){
		echo "<p> Unable to perform SQL Insert </p>";
	}
	else{
		echo "<p> ".$sqlIns. " done " .mysqli_get_host_info($db)."</p>";
	}

$sql1 = "drop table tbl_item";
 	$result1 = $db->query($sql1);
 if ($result1 === FALSE){
		echo "<p> Unable to perform SQL Drop Table </p>";
 }
	else{
		echo "<p>  ".$sql1. " done ".mysqli_info($db)."</p>";
	}
	
  	$sqlCreate1 = "CREATE TABLE tbl_item (itemID int(11) NOT NULL,itemPrice float NOT NULL,itemDesc varchar(255) NOT NULL, itemQuantity int)";
  	$resultCT1 = $db->query($sqlCreate1);
  if ($resultCT1 === FALSE){
		echo "<p> Unable to perform SQL Create Table </p>";
  }
	else{
		 echo "<p>".$sqlCreate1. " done " .mysqli_info($db)."</p>";
	}
	
  $sqlIns1 = "INSERT INTO tbl_item (itemID, itemPrice, itemDesc, itemQuantity) VALUES
(1,99,'Redragon 104 Crystal Key Caps', 8),
(2,654,'Redragon 104 Round Key Caps', 9),
(3,548,'Zoweetek Presenter and Laser Pointer Black',10),
(4,546,'GoFreetech Wired KB/MOUSE Combo',5),
(5,325,'GoFreetech Wireless KB/MOUSE Combo',5),
(6,54,'Kanex EasySync Ipad Keyboard Stand Cover',6),
(7,155,'Kanex EasySync Ipad Mini Keyboard with Stand Cover',7),
(8,365,'Kanex MultiSync Bluetooth Mac Aluminium Keyboard',8),
(9,354,'Kanex MultiSync Bluetooth Mac Keyboard',6),
(10,345,'Kanex Multisync Foldover Mini Travel Keyboard',9),
(11,125,'Kanex Ultraslim Mini MultiSync Bluetooth Keyboard',9),
(12,154,'Redragon ASURA Gaming Keyboard',8),
(13,165,'Redragon DEVARAJAS MECHANICAL Gaming Keyboard',9),
(14,985,'Redragon HARPE Gaming Keyboard',5),
(15,884,'Redragon INDRAH WHITE RGB MECHANICAL Gaming Keyboard',7),
(16,686,'Redragon hello peter',9),
(17,586,'Redragon hello peter mark 2',10),
(18,186,'Redragon hello peter mark 45',10),
(19,826,'Redragon hello peter mark 415',10),
(20,766,'Redragon hello peter mark 121',10),
(21,716,'Redragon hello peter mark 45',10),
(22,785,'Redragon hello peter mark 3',10),
(23,456,'Redragon hello peter mark 45',10),
(24,765,'Redragon hello peter mark 41',10),
(25,116,'Redragon hello peter mark 2',10),
(26,266,'Redragon hello peter mark 4',10),
(27,456,'Redragon hello peter mark 6',10),
(28,126,'Redragon hello peter mark 98',10),
(29,751,'Redragon hello peter mark 14',10),
(30,781,'Redragon hello peter mark 54',10);";

  
	$sqlIns1 = substr($sqlIns1,0,strlen($sqlIns1)-1);
	$resultA1 = $db->query($sqlIns1);
	if ($resultA1 === FALSE){
		echo "<p> Unable to perform SQL Insert </p>";
	}
	else{
		echo "<p> ".$sqlIns1. " done " .mysqli_get_host_info($db)."</p>";
	}

	//Create orderitem table
	$sqlCreate2 = "CREATE TABLE tbl_orderitem (orderID varchar(50) NOT NULL,itemID int(11) NOT NULL, quantity int(11), quoted_price real)";
  	$resultCT2 = $db->query($sqlCreate2);
  if ($resultCT2 === FALSE){
		echo "<p> Unable to perform SQL Create Table </p>";
  }
	else{
		 echo "<p>".$sqlCreate2. " done " .mysqli_info($db)."</p>";
	}

	//Create orders table
	$sqlCreate3 = "CREATE TABLE tbl_orders (orderID varchar(50) NOT NULL,userID int(11) NOT NULL, orderDate DATE)";
  	$resultCT3 = $db->query($sqlCreate3);
  if ($resultCT3 === FALSE){
		echo "<p> Unable to perform SQL Create Table </p>";
  }
	else{
		 echo "<p>".$sqlCreate3. " done " .mysqli_info($db)."</p>";
	}


	//add primary key
	$q = "ALTER TABLE tbl_user ADD PRIMARY KEY (userID);";
	$r = $db->query($q);
	 if ($resultCT3 === FALSE){
		echo "<p> Unable to perform SQL Create Table </p>";
  }
	else{
		 echo "<p>".$q. " done " .mysqli_info($db)."</p>";
	}

	// Add primary key
	$q2 = "ALTER TABLE tbl_item ADD PRIMARY KEY (itemID);";
	$r2 = $db->query($q2);
	 if ($r2 === FALSE){
		echo "<p> Unable to perform SQL Create Table</p>";
  }
	else{
		 echo "<p>".$q2. " done " .mysqli_info($db)."</p>";
	}

	$x = "ALTER TABLE tbl_item MODIFY COLUMN itemID INT NOT NULL auto_increment";
	$l = $db->query($x);

	if ($l === FALSE) {
		echo "Alter didnt work";
	}
	else{
		echo "Alter worked";
	}


	
	$q3 = "ALTER TABLE tbl_orderitem ADD PRIMARY KEY (orderID,itemID)";
	$r3 = $db->query($q3);
	 if ($r3 === FALSE){
		echo "<p> Unable to perform SQL alter </p>";
  }
	else{
		 echo "<p>".$q3. " done " .mysqli_info($db)."</p>";
	}

	$q4 = "ALTER TABLE tbl_orders ADD PRIMARY KEY (orderID),
	ADD CONSTRAINT userID_FK FOREIGN KEY (userID) REFERENCES tbl_user(userID);";
	$r4 = $db->query($q4);
	 if ($r4 === FALSE){
		echo "<p> Unable to perform SQL Create Table</p>";
  }
	else{
		 echo "<p>".$q4. " done " .mysqli_info($db)."</p>";
	}

	$sq5 = "ALTER TABLE tbl_orderitem ADD CONSTRAINT orderID_FK FOREIGN KEY (orderID) REFERENCES tbl_orders(orderID),
			ADD CONSTRAINT itemID_FK FOREIGN KEY (itemID) REFERENCES tbl_item(itemID);";
	$r5 = $db->query($sq5);
	 if ($r5 === FALSE){
		echo "<p> Unable to perform SQL alter </p>";
  }
	else{
		 echo "<p>".$sq5. " done " .mysqli_info($db)."</p>";
	}
 <a class="w3-button w3-blue w3-hover-aqua w3-border w3-border-black w3-round-large" href="shop.php">Back To Shop</a>
 echo '<a href="index.php">To login</a>'



?>