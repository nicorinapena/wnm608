<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"; 

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rhin-O-Roo Home</title>

	<?php include "parts/meta.php"; ?>
</head>
<body class="flush">
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url('img/summersale1.jpeg');">
	</div>

	<div class="container">
		<h2>About Rhin-O-Roo</h2>
		<article id="article1" class="article card soft">
		<div class="display-flex flex-align-center">
		<div class="flex-stretch">
		<h3>Our Mission</h3>
		</div>
		<div class="flex-none">
			<small>5:20am</small>
		</div>
		</div>
		<div class="article-body">
			<p>Rhin-O-Roo is a reputable reseller for amazing brands.  We bridge Philippine consumers to US Brands.  Our goal is to give our consumers the best possible deals and hassle free payment and shipping method. </p>
			<p>Our small business had been around for over a year now.  It is owned by amazing couples, Rhin & Bon who lived in California, USA.  It is also managed by Bon's amazing sisters in the Philippines.  They love shopping for awesome brands at sale prices.  They wanted to share the amazing deals with other people, specially to those who doesn't have stores that carry specific items.</p>
			<p>We hope that we can serve you by shopping with us and letting us bring you your shopping requests.</p>
		</div>
	</div>

		<div class="container">
		<div class="view-window" style="background-image: url('img/shopping_2.jpeg');">
		</div>
		</div>

	<div class="container">
		<h2>Blogs</h2>
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
				<h3>2022 Fashion Trends</h3>
			</div>
			<div class="flex-none">
				<small>5:20am</small>
				</div>
			</div>
			<div class="article-body">
				<p>2022 is bringing back some 80's vibes.  The high-waist and wide-leg jeans are now hitting the mainstream in the fashion world.  We spotted Mila Kunis all classy and casual with her cute tank top and her wide-leg pants.  <u>Read more</u></p>
			</div>
		</article>
	</div>


	<div class="container">
		<h2>You'll love these</h2>
		<div class="card soft">
			<h3>Latest Footwear!</h3>
			<?php recommendedCategory("footwear");?>
			<h3>Latest Bags!</h3>
			<?php recommendedCategory("bags");?>		
		</div>
	</div>




</body>
</html>