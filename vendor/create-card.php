<?php

	require_once 'connect.php';

	$sku = $_POST['sku'];
	$name = $_POST['name'];
	$prise = $_POST['prise'];
	$type_switcher = $_POST['type_switcher'];
	$size = $_POST['size'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$length = $_POST['length'];

	mysqli_query($connect, "INSERT INTO `products` (`id`, `sku`, `name`, `prise`, `type switcher`, `size`, `weight`, `height`, `width`, `length`) VALUES (NULL, '$sku', '$name', '$prise', '$type_switcher', '$size', '$weight', '$height', '$width', '$length')");

	header('location: /');
?>