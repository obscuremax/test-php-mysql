<?php

	require_once 'connect.php';

	$str = $_GET["id"];
	$res = explode(",", $str);

	foreach($res as $index) {
		mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = +$index");
	}

	header('location: /');
?>