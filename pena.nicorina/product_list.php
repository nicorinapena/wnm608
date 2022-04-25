<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rhin-O-Roo Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2>Product List</h2>

			<div class="grid gap">
			
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=1">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 1</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=2">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 2</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=3">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 3</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=4">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 4</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			 <div class="col-xs-12 col-md-4">
				<a href="product_item.phpid=5">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 5</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=6">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 6</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=7">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 7</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<a href="product_item.php?id=8">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt=''></a>
				<figcaption><div>Product 8</div>
					<div>$3.99</div>
				</figcaption>
					</figure>
			</div>

		</div>

			<?php

			include "lib/php/function.php";

			makeQuery(makeConn(), "SELECT * FROM `products`")

			print_p($result);

			?>
		
		
	</div>

</body>
</html>