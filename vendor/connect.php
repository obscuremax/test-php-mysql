<?php

  $server = "sql309.epizy.com";
	$username = "epiz_28593937";
	$password = "dauQk92wTh8u";
	$dbname = "epiz_28593937_obscuremax";

	$connect = mysqli_connect($server, $username, $password, $dbname);

	if (!$connect) {
		die('error connect to database!');
	}

?>