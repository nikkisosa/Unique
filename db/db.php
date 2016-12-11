<?php
	$mysql_hostname = "localhost";//192.168.1.112 orginal ip
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "uhack";
    $connect =mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database) or die("can't connect to database");
?>