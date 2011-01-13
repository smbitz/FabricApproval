<?php
	$strSupCode = trim($_POST["SupCode"]);
	include("../connectBase.php");
	connectSQL();	
	
	$strSQL = "SELECT fullname FROM supplier_code WHERE id = '$strSupCode' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	echo $objResult[0];
?>