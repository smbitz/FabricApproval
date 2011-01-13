<? 			   session_start();
			   if($user==""||$pass==""){
			   		header("Location: Login.php");
			   }
			   include("connectBase.php");
			   connect_db($user,$pass); 
			   if($rowFetch[7]==0){
			   		header("Location: NotPermission.php");
			   }
			   ob_end_flush();
?>
<html>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; }
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 30px;
}
.style6 {font-size: 36px}
-->
</style>
<header></header>
<title>Test Result Input Page</title><body>
	<form name="form1" method="post" action="">
	  <table width="735" height="41" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="183" height="41" align="center" valign="middle" class="style1">&nbsp;</td>
          <td width="415" align="center" valign="middle" class="style1"><span class="style5">Test Result Input Page</span></td>
          <td width="137" align="center" valign="middle" class="style1">&nbsp;</td>
        </tr>
      </table>
	  <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  <table width="556" height="502" border="1" align="center" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="18" rowspan="9" bgcolor="#666666">&nbsp;</td>
          <td height="115" colspan="3"><span class="style1">&nbsp;&nbsp;Fabric-In-House Date : 15 Jan 2011 <br/>
            &nbsp;&nbsp;Reference No. : 1111 <br/>
            &nbsp;&nbsp;Customer No. : 1111 <br/>
            &nbsp;&nbsp;Style : 1111 <br/>
          &nbsp;&nbsp;Job : 1111</span></td>
        </tr>
        <tr>
          <td height="67" colspan="3"><span class="style3">&nbsp;Shrinkage</span></td>
        </tr>
        <tr>
          <td width="214" height="34">&nbsp;</td>
          <td width="154" align="center"><span class="style1">Weight</span></td>
          <td width="160" align="center"><span class="style1">Length</span></td>
        </tr>
        <tr>
          <td height="35"><span class="style1">&nbsp;&nbsp;Before Wash</span></td>
          <td align="center"><label>
          <input type="text" name="textfield" id="textfield">
          </label></td>
          <td align="center"><input type="text" name="textfield2" id="textfield2"></td>
        </tr>
        <tr>
          <td height="33"><span class="style1">&nbsp;&nbsp;After Wash</span></td>
          <td align="center"><input type="text" name="textfield3" id="textfield3"></td>
          <td align="center"><input type="text" name="textfield4" id="textfield4"></td>
        </tr>
        <tr>
          <td height="50" class="style1">&nbsp;&nbsp;Dimensional Stability &nbsp;&nbsp;(Difference %)</td>
          <td align="center"><input type="text" name="textfield5" id="textfield5"></td>
          <td align="center"><input type="text" name="textfield6" id="textfield6"></td>
        </tr>
        <tr>
          <td height="76" colspan="3"><span class="style3">&nbsp;Weight (G/Sq.m.)</span></td>
        </tr>
        <tr>
          <td height="39"><span class="style1">&nbsp;&nbsp;Required Weight</span></td>
          <td colspan="2" align="left">&nbsp;&nbsp;<input type="text" name="textfield7" id="textfield7"></td>
        </tr>
        <tr>
          <td height="38" class="style1">&nbsp;&nbsp;Average Actual Weight</td>
          <td colspan="2" align="left">&nbsp;&nbsp;<input type="text" name="textfield8" id="textfield8"></td>
        </tr>
      </table>
	  <table width="200" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  <table width="591" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="24">&nbsp;</td>
          <td width="134"><span class="style1">
            <input type="submit" value="Submit" />
          </span></td>
          <td width="433"><label>
            <input type="reset" name="Reset" id="button" value="Reset">
          </label></td>
        </tr>
      </table>
        </form>
	<p class="style1">&nbsp;</p>
</body>
</html>