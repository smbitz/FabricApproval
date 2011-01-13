<? 			   session_start();
			   if($user==""||$pass==""){
			   		header("Location: Login.php");
			   }
			   ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu List</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; }
-->
</style>
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><span class="style3">Menu List</span></td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="313" height="386" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16" rowspan="9" bgcolor="#666666">&nbsp;</td>
    <td width="297" height="40"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Fabric List.php">Fabric List</a></span></td>
  </tr>
  <tr>
    <td height="44"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Add New Test.php">Add New Test</a></span></td>
  </tr>
  <tr>
    <td height="43"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Test Result Input.php">Test Result Input</a></span></td>
  </tr>
  <tr>
    <td height="42"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Merchandise Approval.php">Merchandise Approval</a></span></td>
  </tr>
  <tr>
    <td height="40"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Product Manager Approval.php">Product Manager Approval</a></span></td>
  </tr>
  <tr>
    <td height="41"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Rejected Option.php">Rejected Option</a></span></td>
  </tr>
  <tr>
    <td height="49"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Report View.php">Report View</a></span></td>
  </tr>
  <tr>
    <td height="39"><span class="style1">&nbsp;&nbsp;&nbsp;<a href="Add Drop Down Item.php">Add Drop Down Item</a></span></td>
  </tr>
  <tr>
    <td height="46">&nbsp;&nbsp;&nbsp;<span class="style1"><a href="Logout.php">Logout</a></span></td>
  </tr>
</table>
</body>
</html>
