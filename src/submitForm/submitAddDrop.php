<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #009900;
}
-->
</style>
<title>Save Data Success</title><table width="466" height="112" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><span class="style1">Save Data Success.</span></td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><a href="../Add Drop Down Item.php">Goback</a></td>
  </tr>
</table>
<?
			include("../connectBase.php");
			connectSQL();
			$strSQl = "INSERT INTO $type VALUES ('$id','$fullname')";
			mysql_query($strSQl);
?>