<? 			   session_start();
			   if($user==""||$pass==""){
			   		header("Location: Login.php");
			   }
			   include("connectBase.php");
			   connect_db($user,$pass); 
			   if($rowFetch[6]==0){
			   		header("Location: NotPermission.php");
			   }
			   ob_end_flush();
?>
<html><title>Add New Test</title>
<header>
<script language="JavaScript" src="javaScript/allAddTest-js.js"></script>
</header>
<style type="text/css">
<!--
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-size: 36px}
.style4 {color: #666666}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #00FF33;
}
-->
</style>
<body>
<table width="735" height="41" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
        <td width="183" height="41" align="center" valign="middle" class="style2">&nbsp;</td>
        <td width="415" align="center" valign="middle" class="style2"><span class="style3">Add New Test Page</span></td>
        <td width="137" align="center" valign="middle" class="style2">&nbsp;</td>
  </tr>
    </table>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><span class="style6">
    &nbsp;</span></td>
  </tr>
</table>
<form id="NewTest" name="NewTest" class="style2" action="submitForm/submitNewtest.php" onSubmit="JavaScript:return CheckData();">
  <table width="666" height="548" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="26" rowspan="16" bgcolor="#666666"><span class="style4"></span></td>
            <td width="280" height="30">&nbsp;&nbsp;&nbsp;Fabric-In-House Date</td>
            <td width="352">&nbsp;&nbsp;&nbsp;:
              <label>
              Day
              <select name="DD" id="DD">
                <? 
				foreach (range (01, 31) as $val){
				?>
                <option value="<?=$val?>">
                  <?=$val?>
                </option>
                <? } ?>
              </select>
Month
            
            <select name="MM" id="MM">
              <? 
				foreach (range (01, 12) as $val){
				?>
              <option value="<?=$val?>">
                <?=$val?>
              </option>
              <? } ?>
            </select>
Year
              <select name="YYYY" id="YYYY">
                <? 
				foreach (range (1950, 2100) as $val){
				?>
                <option value="<?=$val?>"><?=$val?></option>
                <? } ?>
              </select>
              </label>              
            </input>
            <label></label></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Customer Name</td>
            <td>&nbsp;&nbsp;&nbsp;:
                <select name="CusName" id="CusName" onChange="JavaScript:CallFullName();">
                  <option value="">Please Choose</option>
                  <?
				connectSQL();
				$strSQL = "select * from customer_name";
				$result = mysql_query($strSQL);
				while($fetch = mysql_fetch_array($result)){
				?>
                  <option value="<?=$fetch[0]?>"><?=$fetch[0]?></option>
                  <? } ?>
                </select>
              </input></td>
          </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Customer Name - Full Name</td>
            <td><table width="255" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                  <td width="12">&nbsp;</td>
                  <td width="14">:</td>
                  <td width="229"><div id="ChangeFullName" ></div></td>
              </tr>
              </table></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Ref. No.</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="RefNo" type="text" id="RefNo">
  </input></td>
          </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;PO. No.</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="PoNo" type="text" id="PoNo">
              </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Customer No.</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="CusNo" type="text" id="CusNo">
              </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Style</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="Style" type="text" id="Style">
              </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Job</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="Job" type="text" id="Job">
  </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Supplier Code</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <select name="SupCode" id="SupCode" onChange="JavaScript:CallSupFull();">
              	<option value="">Please Choose</option>
              	<?
				connectSQL();
				$strSQL = "select * from supplier_code";
				$result = mysql_query($strSQL);
				while($fetch = mysql_fetch_array($result)){
				?>
                <option value="<?=$fetch[0]?>"><?=$fetch[0]?></option>
                <? } ?>
              </select>
              </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Supplier Code - Full Name</td>
            <td><table width="255" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="12">&nbsp;</td>
                <td width="14">:</td>
                <td width="229"><div id="ChangeSupFull"></div></td>
              </tr>
            </table></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Fabric Code</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <select name="FabCode" id="FabCode" onChange="JavaScript:CallFabFull();">
              	<option value="">Please Choose</option>
              	<?
				connectSQL();
				$strSQL = "select * from fabric_code";
				$result = mysql_query($strSQL);
				while($fetch = mysql_fetch_array($result)){
				?>
                <option value="<?=$fetch[0]?>"><?=$fetch[0]?></option>
                <? } ?>
              </select>
              </input></td>
    </tr>
          <tr>
            <td height="96" valign="top">&nbsp;&nbsp;&nbsp;Fabric Code - Full Name</td>
            <td valign="top"><table width="255" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="12">&nbsp;</td>
                <td width="14">:</td>
                <td width="229"><div id="ChangeFabFull"></div></td>
              </tr>
            </table>
            <label></label></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Fabric No.</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="FabNo" type="text" id="FabNo">
              </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Fabric Color</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="Fabcolor" type="text" id="Fabcolor">
              </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Batch No.</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="BatNo" type="text" id="BatNo">
  </input></td>
    </tr>
          <tr>
            <td height="30">&nbsp;&nbsp;&nbsp;Quantity Kg.</td>
            <td>&nbsp;&nbsp;&nbsp;:
              <input name="Quantity" type="text" id="Quantity">
              </input></td>
    </tr>
        </table>
		<table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		<table width="575" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="176">&nbsp;</td>
            <td width="140"><input name="submit" type="submit" id="submit" value="Submit"></td>
            <td width="259"><label>
              <input type="reset" name="reset" id="reset" value="Reset">
            </label></td>
          </tr>
        </table>
		</form>
</body>
</html>