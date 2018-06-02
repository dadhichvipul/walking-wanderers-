</!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
	

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
extract($_POST);
$my_sql = "INSERT INTO user(name,email,password,state,level,gender)
VALUES ('$name','$email','$password','$state','$level','$gender')";

//query checking
if($conn->query($my_sql)===TRUE)
{
	header("location:reg_sucess.php");
}
else
{
	echo "not executed";
}
$conn->close();
?>
<body>

</body>
</html>