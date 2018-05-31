<!-- 
	Name: Daniel
	Surname: Howard
	Student Number: 16000911
	Declaration:
	This is my own code and any code from other sources will be referenced.
-->

<?php

	//Connect to db
	$db = new mysqli("localhost","root","password", "test");
	if  (!$db)
		$ErrorMsgs[] = "The database server is not available.";
	else
		//echo "<p>Connection is valid</p>";
?>