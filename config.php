<?php 
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="shopping";

	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn){
		die("Could not connect to database".mysqli_connect_error());
	}
?>