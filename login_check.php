<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="trek"; 
$tbl_name="user"; 
extract($_POST);
$url='bg.jpg';
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['a1'];
$mypassword=$_POST['a2'];

$sql="SELECT * FROM $tbl_name WHERE name='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
	$row=mysql_fetch_row($result);
 	$sname=$row[0];
 	session_start();
	$_SESSION['SName']=$sname;
	$_SESSION['Status']="Session Status: Login Success!!!";
	header("location:login_success.php");
	}
else {
session_start();
	if (isset($_SESSION['SName'])){
		unset($_SESSION['SName']);
	}
	
        $_SESSION['Status']="Session Expired!!!";
	echo "<h2>Login Failed!!!</h2>";

}

?>