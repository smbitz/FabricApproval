<?php
	$strCusName = trim($_POST["CusName"]);
	include("../connectBase.php");
	connectSQL();	
	
	$strSQL = "SELECT fullname FROM customer_name WHERE id = '$strCusName' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	echo $objResult[0];
?>