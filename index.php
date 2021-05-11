<?php 
  require_once 'vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Product List</title>
  </head>
  <body>
    <?php require "components/product-list.php" ?>
		  <div class="main">
			  <div class="container">
				  <div class="cards-container">
					  <?php require "components/card.php" ?>
				  </div>
			  </div>
		  </div>
		<?php require "components/footer.php" ?>
    <script src="js/index.js"></script>
  </body>
</html>
