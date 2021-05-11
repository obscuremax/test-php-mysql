<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css" />
	<title>Add product</title>
</head>
<body>
<?php require "components/product-add.php" ?>
<div class="main">
	<div class="container">
		<div class="form-container">
			<form action="vendor/create-card.php" class="form" id="form" method="post">
				<label>SKU
					<input type="text" name="sku" pattern="[a-zA-Z0-9\s]+" required>
				</label>
				<label>Name
					<input type="text" name="name" pattern="[a-zA-Z]+" required >
				</label>
				<label>Prise ($)
					<input type="text" step="0.01" pattern="[0-9]+\.\d\d" name="prise" required>
				</label>
				<label>Type Switcher
					<select name="type switcher" required>
						<option disabled>Type Switcher</option>
						<option value="dvd">DVD</option>
						<option value="book">Book</option>
						<option value="furniture">Furniture</option>
					</select>
				</label>
				<div class="switchers-box">
				<div class="type-switcher" id="dvd" data-description="Please, provide dimensions!">
						<label>Size (MB)
							<input type="number" name="size" pattern="[0-9]+" required>
						</label>
					</div>
					<div class="type-switcher none" id="book" data-description="Please, provide weight!">
						<label>Weight (KG)
							<input type="number" pattern="[0-9]+" name="weight">
						</label>
					</div>
					<div class="type-switcher none" id="furniture" data-description="Please, provide size!">
						<label>Height (CM)
							<input type="number" name="height" pattern="[0-9]+">
						</label>
						<label>Width (CM)
							<input type="number" name="width" pattern="[0-9]+">
						</label>
						<label>Length (CM)
							<input type="number" name="length" pattern="[0-9]+">
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php require "components/footer.php" ?>
<script src="js/index2.js"></script>
</body>
</html>