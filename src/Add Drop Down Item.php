<? 			   session_start();
			   if($user==""||$pass==""){
			   		header("Location: Login.php");
			   }
			   include("connectBase.php");
			   connect_db($user,$pass); 
			   if($rowFetch[12]==0){
			   		header("Location: NotPermission.php");
			   }
			   ob_end_flush();
?>
<html>
<style type="text/css">
<!--
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-size: 36px}
-->
</style><title>Add Drop Down Item Page</title>
<header>
<script language="javascript" src="javaScript/allAddDrop-js.js"></script>
</header>
<body>
<table width="735" height="41" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="145" height="41" align="center" valign="middle" class="style2">&nbsp;</td>
    <td width="471" align="center" valign="middle" class="style2"><span class="style3">Add Drop Down Item Page</span></td>
    <td width="119" align="center" valign="middle" class="style2">&nbsp;</td>
  </tr>
</table>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<form class="style2" id="AddDrop" name="AddDrop" action="submitForm/submitAddDrop.php" onSubmit="JavaScript:return CheckData()">
<table width="535" height="116" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
            <td width="20" rowspan="3" bgcolor="#666666">&nbsp;</td>
            <td width="246">&nbsp;&nbsp;&nbsp;Type</td>
            <td width="261">&nbsp;&nbsp;&nbsp;:
              <select name="type" id="type">
                <option value="customer_name">Customer Name</option>
                <option value="supplier_code">Supplier Code</option>
                <option value="fabric_code">Fabric Code</option>
              </select></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;ID</td>
            <td>&nbsp;&nbsp;&nbsp;:
            <input name="id" type="text" id="id" /></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;Full Name</td>
            <td>&nbsp;&nbsp;&nbsp;:
            <input name="fullname" type="text" id="fullname" /></td>
          </tr>
        </table>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="115">&nbsp;</td>
    <td width="163"><input type="submit" value="Submit" /></td>
    <td width="487"><label>
      <input type="reset" name="Reset" id="button" value="Reset">
    </label></td>
  </tr>
</table>
<br/>
<br/>
<br/>
</form>
</body>
</html>