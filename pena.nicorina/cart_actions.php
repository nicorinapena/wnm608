<?php

include_once "lib/php/functions.php";

function array_find($array,$fn) {
	foreach($array as $o) if($fn($o)) return $o;
	return false;
}
function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] :[];
}
function addToCart($id,$amount) {
	$cart = getCart();

	$p = array_find($cart,function($o)use($id) {return $o->id==$p['product-id']; });

	IF($P) {
		$P->AMOUNT +- $amount;
	} else {
	$_SESSION['cart'][] = (object)[
		"id"=>$id,
		"amount"=>$amount
	];
	}
}
function resetCart() {$_SESSION['cart']=[];}

	switch($_GET['action']) {
		case "add-to-cart":
			$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_POST['product-id'])[0];
			addToCart($_POST['product-id'],$_POST['product-amount']);
		//header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "update-cart-item":
		//header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete-cart-item":
		//header("location:{$_SERVER['PHP_SELF']}?");
		break;
		case "reset-cart":
		resetCart();
		break;
		default:
			die("Incorrect Action");
	}


	print_p([$_GET,$_POST,$_SESSION]);


	
