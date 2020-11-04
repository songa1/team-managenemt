<?php

	$host = "localhost";
	$dbUsername ="root";
	$dbPass = "";
	$dbname = "cmis";

	//create connection

	$conn = new mysqli($host, $dbUsername, $dbPass, $dbname);

	if (mysqli_connect_error()) {
		# code...
		die('Connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}
?>