<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$databasename="ban_hang";

	//truy vấn database
	$link=mysqli_connect($hostname,$username,$password,$databasename);
	if (!$link) {
	    die('Could not connect: ' . mysqli_error());
	}
	echo 'Connected successfully';
	mysqli_query($link,"SET NAMES 'utf8'");
?>