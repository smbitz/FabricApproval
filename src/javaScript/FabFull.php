<?php
	$strFabCode = trim($_POST["FabCode"]);
	include("../connectBase.php");
	connectSQL();	
	
	$strSQL = "SELECT fullname FROM fabric_code WHERE id = '$strFabCode' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	echo $objResult[0];
?>