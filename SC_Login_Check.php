<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="trek"; 
$tbl_name="user"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['uname'];
$mypassword=$_POST['pwd'];

$sql="SELECT * FROM $tbl_name WHERE email='$myusername' password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
	$row=mysql_fetch_row($result);
 	$sname=$row[0];
	session_start();
	$_SESSION['SName']=$sname;
	$_SESSION['Status']="Session Status: Login Success!!!";
	
	if (isset($_POST['remuser'])){
		setcookie("UName",$myusername,time()+60*60*24);
		setcookie("Pwd",$mypassword,time()+60*60*24);
	}
	else
	{
		setcookie("UName","",time()-5);
		setcookie("Pwd","",time()-5);
	}
	header("location:login_success.php");
}
else {
	unset($_SESSION['SName']);
	unset($_SESSION['Status']);
	echo "<h2>Login Failed!!!</h2>";
	header("location:home.php");
}

?>
