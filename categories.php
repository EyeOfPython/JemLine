<?php
$categories_xml = simplexml_load_file("db/categories.xml");
$categories = array();
$products = simplexml_load_file("db/products.xml");
foreach($categories_xml as $category)
{
	$categories[$category.''] = null;
}
foreach($products as $product)
{
	$category_name = $product['category'].'';
	if(array_key_exists($category_name, $categories) && $categories[$category_name] === null)
	{
		$categories[$category_name] = $product;
	}
}
?>

<div class="categories">
<?php
foreach($categories as $category_name => $sample_product)
{
	echo '<div class="category">';
	echo '<a href="?page=category&category='.$category_name.'">';
	echo '<div class="image-bounds">';
	if($sample_product)
	{
		echo '<img src="assets/'.$sample_product->image.'"/> ';
	}
	echo '</div>';
	echo $category_name;
	echo '</a>';
	echo '</div>';
}
?>
</div>

