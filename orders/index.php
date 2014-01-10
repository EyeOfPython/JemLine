<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
if(isset($_GET['order'])) {{

$order_path = $_GET['order'];
$order = simplexml_load_file($order_path);
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
echo '<table>';
echo '<tr><td width="50">Id</td><td width="100">Quantity</td></tr>';
foreach($order->products->product as $product)
{
	echo '<tr>';
	echo '<td>'.$product['id'].'</td>';
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