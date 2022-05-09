<?php

include_once "lib/php/functions.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (7,10,12)");

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>In Your Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<?= array_reduce($cart,function($r,$o){return $r."<div>$o->name</div>";}) ?>
			</div>	
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
					<div class="flex-stretch"><strong>Sub Total</strong></div>
					<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
					<div class="flex-stretch"><strong>Taxes</strong></div>
					<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
					<div class="flex-stretch"><strong>Total</strong></div>
					<div class="flex-none">&dollar;7.00</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>