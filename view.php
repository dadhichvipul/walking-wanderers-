<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		body
		{
			
			background-color:#ffba66;
			font-family: sans-serif;

		}
		a{
			text-decoration: none;
			color: red;
			font-family: sans-serif;
			font-size: 25px;
		}
		div
		{
			padding-left: 20px;
	       background-color: #ffffff;
	       width: 500px;
		}

	</style>
</head>
<?php
require 'connect.php'; 

$query="select*from user";
if($is_query_run=mysql_query($query))
{
	while($query_execute=mysql_fetch_assoc($is_query_run))
	{
		echo'<div>
		<p><strong>user</strong></p>
				<p>name:'.$query_execute['name'].'<p>
				<p>email:'.$query_execute['email' ].'</p>  
				<p>state:'.$query_execute['state' ].'</p> 
				<p>gender:'.$query_execute['gender' ].'</p> 
				<br>  
			</div>
			';
	}
}
else
{
	echo "not executed";
}

?>
<body>

</body>
<a href="home.php">HOME</a>
</html>
