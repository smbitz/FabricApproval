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
<title>NotPermission</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="556" height="158" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="556" align="center"><span class="style1">Sorry, You don't have permission to see this page</span></td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><span class="style2"><a href="index.php">Goback</a></span></td>
  </tr>
</table>
</body>
</html>
