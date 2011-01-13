<?
	include("connectBase.php");
	connect_db($user,$pass);
	
	if($user==""||$pass==""){
		header("Location: Login.php?fail=กรุณาใส่ ID หรือ Password");
	}else 	if($row==0){
		header("Location: Login.php?fail=Username หรือ Password ไม่ถูกต้อง");
	}else {
		header("Location: index.php");
		session_register("user","pass");
		ob_end_flush();
	}
	disconnect_db()
?>