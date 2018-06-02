<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<h1>Search Result:</h1>
<body>
<link rel="stylesheet"  href="home.css">
</body>
<div class="search">
<?php
require 'connect.php'; 
extract($_POST);
$query="select*from user where state='$state'&& level='$level' ";
$var=0;
if($is_query_run=mysql_query($query))
{
	while($query_execute=mysql_fetch_assoc($is_query_run))
	{
		
		$var++;
		echo'<div>
		<p><strong>user</strong></p>
				<p>name:'.$query_execute['name'].'<p>
				<p>email:'.$query_execute['email' ].'</p>  
				<p>gender:'.$query_execute['gender' ].'</p> 
			</div>
			';
         
	}
	if($var==0)
	{
		echo '<p>NOT FOUND</p>';
	}
}
else
{
	echo "not executed";
}

?>
<a href="home.php">back</a></div>
</html>