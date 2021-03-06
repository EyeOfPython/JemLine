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
<h1>Category List</h1>
<div class="categories">
<?php
foreach($categories as $category_name => $sample_product)
{
	echo '<div class="category">';
	echo '<a href="index.php?page=category&amp;category='.$category_name.'">';
	echo '<span class="image-bounds">';
	if($sample_product)
	{
		echo '<img src="assets/'.$sample_product->image.'" alt="'.$category_name.'"/> ';
	}
	echo '</span>';
	echo $category_name;
	echo '</a>';
	echo '</div>';
}
?>
</div>

