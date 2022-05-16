<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rhin-O-Roo Product List</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
			<h2>Product List</h2>

			<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<?php 

			$result = makeQuery (
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `date_create` DESC
				LIMIT 12
				"	

			);

			echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

				?>

		</div>

</body>
</html>