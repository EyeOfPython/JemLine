<?php
include 'product_base.php';

if(!isset($_GET['id']))
	include 'main.php';
else {{

$products = simplexml_load_file("db/products.xml");

foreach($products as $product)
{
	if($product['id'] == $_GET['id'])
	{
		echo '<div class="product-details">';
		echo_product($product, false);
		echo '</div>';
		break;
	}
}

}}
?>