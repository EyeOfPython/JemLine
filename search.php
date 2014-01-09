<?php
include 'product_base.php';

$products = simplexml_load_file("db/products.xml");

if(!isset($_GET['query'])) {{
	include 'main.php';
}}
else {{

$results = array();
foreach($products as $product)
{
	if(strpos(strtolower($product->title), strtolower($_GET['query'])) !== false)
	{
		$results[] = $product;
	}
}

echo '<div class="category-list">';
foreach($results as $result)
{
	echo_product($result, true);
}
echo '</div>';

}}
?>