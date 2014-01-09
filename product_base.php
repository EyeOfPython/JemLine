<?php
$products = simplexml_load_file("db/products.xml");

function echo_product($product, $small)
{
	echo '<div class="product">';
	echo '<div class="product-overview">';
	if(!$small)
		echo '<h1>'.nl2br($product->title).'</h1>';
	echo '<img src="assets/'.$product->image.'" width="'.($small?200:320).'"/>';

	if($small)
		echo '<h2><a href="?page=product&id='.$product['id'].'">'.$product->title.'</a></h2>';
	echo '<div class="price">'.number_format($product->price*1, 2).' &pound;</div>';
	echo '<div class="properties">';
	echo '<ul>';
	$k = 0;
	foreach($product->properties->property as $property)
	{
		if($small && $k > 2)
			break;
		echo '<li>'.$property.'</li>';
		++$k;
	}
	echo '</ul>';
	echo '</div>';
	echo '</div>';
	if(!$small)
	{
		echo '<div class="description">';
		echo '<h3>Description:</h3>';
		echo nl2br($product->description);
		echo '</div>';
	}
	echo '</div>';
}

?>