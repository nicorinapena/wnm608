<?php

include_once "lib/php/functions.php";

?>

	
	<header class="navbar">

		<div class="container display-flex">
			<div class="flex-none">
				<h3><i>Rhin-O-Roo</i></h3>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Store</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?=makeCartBadge(); ?></span>
					</a></li>
				</ul>

		</div>
	</header>