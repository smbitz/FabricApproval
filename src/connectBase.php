<?
function connect_db($user,$pass)
{
	global $connect;
	global $row;
	global $rowFetch;
	$host = "localhost"; 
	$db_username = "codegears"; 
	$db_password = "Neon2302"; 
	$dbname = "codegears_fa1"; 
	$connect = mysql_connect("$host", "$db_username", "$db_password") or die("Die Host");
	mysql_select_db("$dbname", $connect) or die("Die Database");
	mysql_query("SET NAMES UTF8");
	
	$strSQL = "Select * from user join job on job_id = id where username = '$user' And password = '$pass'";
	$result = mysql_query($strSQL);
	$row = mysql_num_rows($result);
	$rowFetch = mysql_fetch_row($result);
}
function disconnect_db()
{
	global $connect;
	mysql_close($connect);
}
function connectSQL()
{
	global $connect;
	$host = "localhost"; 
	$db_username = "codegears"; 
	$db_password = "Neon2302"; 
	$dbname = "codegears_fa1"; 
	$connect = mysql_connect("$host", "$db_username", "$db_password") or die("Die Host");
	mysql_select_db("$dbname", $connect) or die("Die Database");
	mysql_query("SET NAMES UTF8");
} 
?>