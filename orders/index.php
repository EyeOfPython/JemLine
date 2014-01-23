<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
if(isset($_GET['order'])) {{

$order_path = $_GET['order'];
$order = simplexml_load_file($order_path);

$products = simplexml_load_file("../db/products.xml");
echo '<h1>'.$order_path.'</h1>';
echo '<h3>Customer</h3>';
echo '<table>';
foreach($order->customer->children() as $customer_prop)
{
	echo '<tr>';
	echo '<td>'.$customer_prop->getName().':</td>';
	echo '<td>'.$customer_prop.'</td>';
	echo '</tr>';
}
echo '</table>';
echo '<h3>Products</h3>';
echo '<table cellspacing="10">';
echo '<tr><td width="50">Id</td><td>Name</td><td width="50">Quantity</td></tr>';
foreach($order->products->product as $product)
{
	echo '<tr>';
	echo '<td>'.$product['id'].'</td>';
	foreach($products as $product_base)
	{
		$pid = $product_base['id']*1;
		if($pid == $product['id']*1)
			echo '<td>'.$product_base->title.'</td>';
	}
	echo '<td>'.$product->quantity.'</td>';
	echo '</tr>';
}
echo '</table>';
}}
else
{{
echo '<table>';
foreach(scandir(".") as $dir)
{
	if(strpos($dir, ".xml") !== false)
	{
		echo '<tr>';
		echo '<td><a href="?order='.$dir.'">'.$dir.'</a></td>';
		echo '</tr>';
	}
}
echo '</table>';
}}
?>
</body>
</html>