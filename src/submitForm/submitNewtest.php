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
    <td align="center"><a href="../Add New Test.php">Goback</a></td>
  </tr>
</table>
<?
			include("../connectBase.php");
			connectSQL();
			   $receiveDate = $YYYY."-".$MM."-".$DD;
			   $strSQl = "INSERT INTO fabric(fabricinhousedate,customername,referenceno,pono,customerpo,style,job,suppliercode,fabriccode,fabricno,	fabriccolor,batchno,quantity) VALUES ('$receiveDate','$CusName','$RefNo','$PoNo','$CusNo','$Style','$Job','$SupCode','$FabCode','$FabNo','$Fabcolor','$BatNo','$Quantity')";
			   mysql_query($strSQl);
?>