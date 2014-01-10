<div class="sample_products">
    <img src="assets/sample1.jpg" class="pic1" alt="Awesome Picture you're missing"/>
</div>
<?php
include 'product_base.php';
$products = simplexml_load_file("db/products.xml");

$k = 0;
foreach($products as $product)
{
	echo_product($product, true);
	$k++;
	if($k >= 3)
		break;
}
?>
<div style="padding: 30px;">&nbsp;</div>