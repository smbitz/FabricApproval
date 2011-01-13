<? 			   session_start();
			   if($user==""||$pass==""){
			   		header("Location: Login.php");
			   }
			   include("connectBase.php");
			   connect_db($user,$pass); 
			   if($rowFetch[8]==0){
			   		header("Location: NotPermission.php");
			   }
			   ob_end_flush();
?>
<html>
<header>
</header>
<body>
	<h1>Merchandise Approval Page</h1>
	Fabric-In-House Date : 15 Jan 2011 <br/>
	Reference No. : 1111 <br/>
	Customer No. : 1111 <br/>
	Style : 1111 <br/>
	Job : 1111 <br/><hr/>
	<form>
		<h2>Shrinkage</h2><br/>
		<table border="1">
			<tr>
				<td></td>
				<td>Weight</td>
				<td>Length</td>
			</tr>
			<tr>
				<td>Before Wash</td>
				<td>10%</td>
				<td>10%</td>
			</tr>
			<tr>
				<td>After Wash</td>
				<td>10%</td>
				<td>10%</td>
			</tr>
			<tr>
				<td>Dimensional Stability (Difference %)</td>
				<td>10%</td>
				<td>10%</td>
			</tr>
		</table>
		<h2>Weight (G/Sq.m.)</h2>
		<table border="1">
			<tr>
				<td>Required Weight</td>
				<td>100</td>
			</tr>
			<tr>
				<td>Average Actual Weight</td>
				<td>100</td>
			</tr>
		</table>
		<input type="button" value="approve" />
		<input type="button" value="reject" />
</body>
</html>