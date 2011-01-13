<? 			   session_start();
			   if($user==""||$pass==""){
			   		header("Location: Login.php");
			   }
			   ob_end_flush();
?>
<html><title>Fabric List Page</title>
<header>
</header>
<body>
	<h1>Fabric List Page</h1>
	<form>
		Sort by : <select><option value="1">Fabric-In-House Date</option></select>
		Order : <select><option value="1">ASC</option></select>
		<input type="submit" value="go"></input>
	</form>
	<br/>
	<table border ="1">
		<tr>
			<th>Fabric-In-House Date</th>
			<th>Reference No.</th>
			<th>Customer PO.</th>
			<th>Style</th>
			<th>Job</th>
			<td>Action</td>
		</tr>
		<tr>
			<td>test</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
			<td>test</td>
			<td><form><select> <option value="1">Test Result Input</option></select><input type="submit" value="go"></input></form></td>
		</tr>
	</table>
    </body>
</html>