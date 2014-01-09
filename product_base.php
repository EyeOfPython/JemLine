<?php
$products = simplexml_load_file("db/products.xml");

function echo_product($product, $small)
{
	echo '<div class="product">';
	echo '<img src="assets/'.$product->image.'" width="'.($small?200:350).'"/>';
	echo '<h2>'.$product->title.'</h2>';
	echo '<div class="price">'.number_format($product->price*1, 2).' &pound;</div>';
	echo '<ul>';
	foreach($product->properties->property as $property)
	{
		echo '<li>'.$property.'</li>';
	}
	echo '</ul>';
	if(!$small)
	{
		echo '<div class="description">';
		echo nl2br($product->description);
		echo '</div>';
	}
	echo '</div>';
}

?>