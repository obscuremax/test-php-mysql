<?php

	$connect = mysqli_connect('localhost', 'root', '', 'cards');

	if (!$connect) {
		die('error connect to database!');
	}

?>