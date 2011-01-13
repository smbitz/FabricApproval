<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 36px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="style2">&nbsp;</td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="style2"><span class="style1">Login From</span></td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="style2">&nbsp;</td>
  </tr>
</table>
<table width="348" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="348" align="center" class="style2"><span class="style3"><?=$fail?>&nbsp;</span>    </td>
  </tr>
</table>
<form action="checkUser.php" method="post" name="form1" class="style2" id="form1">
  <table width="316" height="71" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="15" rowspan="2" bgcolor="#666666">&nbsp;</td>
      <td width="96" height="21">&nbsp;Username</td>
      <td width="197"><label>
         &nbsp;&nbsp;<input name="user" type="text" id="user" size="24" />
      </label></td>
    </tr>
    <tr>
      <td height="19">&nbsp;Password</td>
      <td>&nbsp;&nbsp;<input name="pass" type="password" id="pass" size="24" /></td>
    </tr>
  </table>
  <table width="200" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>  
  <label></label>
  <table width="445" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="67">&nbsp;</td>
      <td width="94"><input type="submit" name="submit" id="submit" value="Submit" /></td>
      <td width="284"><label>
        <input type="reset" name="Reset" id="Reset" value="Reset" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
