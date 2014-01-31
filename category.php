<?php
include 'product_base.php';

if(!isset($_GET['category']))
{
	include 'main.php';
}
else {{

echo '<div class="category-list">';
$categories = simplexml_load_file("db/categories.xml");
$products = simplexml_load_file("db/products.xml");

foreach($categories as $category)
{
	$category_name = $category.'';
	if($category_name == $_GET['category'])
	{
		echo '<h1>'.$category_name.'</h1>';
		
		foreach($products as $product)
		{
			if($product['category'] == $category_name)
			{
				echo_product($product, true);
			}
		}
		
		break;
	}
}
echo '</div>';
}}
?>