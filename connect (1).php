<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password) )
{
	die('cannot connect to server ');
}
else
{	
	 if(@mysql_select_db('trek'))
	{
		//echo "success";
	}
	else
	{
		die("connection fault to database");
	}

}

?>