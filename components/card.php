<?php
		$products = mysqli_query($connect, "SELECT * FROM `products`");
		$products = mysqli_fetch_all($products);
		foreach ($products as $product) {
			?>
				<div class="card" id="<?= $product[0] ?>">
					<input type="checkbox" class="card-checkbox" id="<?= $product[0] ?>i">
					<ul class="card-data">
						<li class="card-data-item"><?= $product[1] ?></li>
						<li class="card-data-item"><?= $product[2] ?></li>
						<li class="card-data-item"><?= $product[3] . ' $' ?></li>
						<li class="card-data-item"><?php 
						if ($product[4] == 'book') {
							echo 'Weight: ' . $product[6] . 'KG';
						} elseif ($product[4] == 'dvd') {
							echo 'Size: ' . $product[5] . ' MB';
						} elseif ($product[4] == 'furniture') {
							echo 'Dimension: ' . $product[7] . 'x' . $product[8] . 'x' . $product[9];
						}
						?></li>
					</ul>
				</div>
			<?php
		}
	?>