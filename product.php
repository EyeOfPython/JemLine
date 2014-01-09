<?php
$products = simplexml_load_file("db/products.xml");

function echo_product($product, $with_descr)
{
	echo '<div class="product">';
	echo '<img src="assets/'.$product->image.'" width="350"/>';
	echo '<h2>'.$product->title.'</h2>';
	echo '<div class="price">'.$product->price.'</div>';
	echo '<ul>';
	foreach($product->properties->property as $property)
	{
		echo '<li>'.$property.'</li>';
	}
	echo '</ul>';
	if($with_descr)
	{
		echo '<div class="description">';
		echo nl2br($product->description);
		echo '</div>';
	}
	echo '</div>';
}

foreach($products as $product)
{
	echo_product($product, false);
}
?>
  <!--<div class = "ring1">

	<p>3/4 ct. Princess Cut Diamond Solitaire</br>Engagement Ring in 18k White Gold </p>

	<img src="assets/ring1.jpg" width="350"/>
	
		<ul>
		<li><span>18k White gold</span></li>
		<li>Conflict Free diamonds</li>
		<li>100% natural diamonds</li>
		</ul>
	
  </div>-->