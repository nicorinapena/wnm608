<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rhin-O-Roo Product</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<p>This is item # <?= $_GET['id'] ?></p>
			
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''>
					<figcaption><div>Product</div>
						<div>$3.99</div></figcaption>
				</figure>
			</div>
		</div>
		<div class="card soft">
		<label class="form-label">Quantity</label>
		<div class="form-select"> 
		<select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
		</div>
		<div class="form-button">
		<p><a href="product_added_to_cart.php">Add To Cart</a>
		</div>
	</div>
</body>
</html>