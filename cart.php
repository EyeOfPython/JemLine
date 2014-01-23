<?php
include 'product_base.php';

$products = simplexml_load_file("db/products.xml");

if(isset($_POST['add-product-id']))
{
	foreach($products as $product)
	{
		if($product['id'] == $_POST['add-product-id'])
		{
			$pid = $product['id']*1;
			if(!isset($_SESSION['cart']))
				$_SESSION['cart'] = array();
			if(array_key_exists($pid, $_SESSION['cart']))
				$_SESSION['cart'][$pid] += 1;
			else
				$_SESSION['cart'][$pid] = 1;
				
			if(isset($_SESSION['cart'][$pid]))
			{
				echo '<h2>The product '.$product->title.' was added successfully to the cart. Quantity: '.$_SESSION['cart'][$pid].'</h2>';
			}
			else
				echo 'This server sucks.';
		}
	}
}

if(isset($_POST['change-quantity']) && isset($_POST['product-id']))
{
	$pid = $_POST['product-id']*1;
	if(array_key_exists($pid, $_SESSION['cart']))
	{
		if($_POST['change-quantity'] == 0)
			unset($_SESSION['cart'][$pid]);
		else
			$_SESSION['cart'][$pid] = $_POST['change-quantity']*1;
	}
}

$sum = 0;

foreach($products as $product)
{
	$pid = $product['id']*1;
	if(isset($_SESSION['cart'][$pid]))
		$sum += $_SESSION['cart'][$pid] * $product->price;
}

echo '<h1>Items in your cart:</h1>';
if(isset($_SESSION['cart']) && $_SESSION['cart']) {{

echo '<div class="cart-overview">';
function to_price($p) { return number_format($p*1,2) . ' &pound;'; }

echo '<div class="price-panel">';
echo '<table>';
echo '<tr><td>Cart:</td><td class="price">' . to_price($sum) . '</td></tr>';
echo '<tr><td>Shipment:</td><td class="price">' . to_price(10) . '</td></tr>';
echo '<tr><td>Total:</td><td class="price">' . to_price($sum+10) . '</td></tr>';
echo '</table>';
echo '<form action="" method="get">';
echo '<input type="hidden" name="page" value="checkout" />';
echo '<input type="submit" value="Checkout" name="checkout"/>';
echo '</form>';
echo '</div>';

echo '<div class="cart-list">';
foreach($_SESSION['cart'] as $product_id => $quantity)
{
	foreach($products as $product)
	{
		$pid = $product['id']*1;
		if($pid == $product_id)
		{
			echo '<div class="cart-item">';
			echo '<img src="assets/'.$product->image.'" alt="'.$product->title.'" width="90" />';
			echo '<h3><a href="?page=product&amp;id='.$pid.'">'.$product->title.'</a></h3>';
			echo '<div class="cart-options">';
			echo '<span class="cart-price">'.to_price($product->price).' <small>per item</small></span> ';
			echo '<form method="post" action="?page=cart" >';
			echo 'Quantity: <input name="change-quantity" type="text" value="'.$quantity.'"/>';
			echo '<input type="hidden" name="product-id" value="'.$pid.'" />';
			echo '<input type="submit" value="Change" />';
			echo '</form>';
			echo '</div>';
			
			echo '</div>';
		}
	}
}
echo '</div>';

echo '</div>';

}}
else {{
	echo '<p>There ain\'t any products in your cart.';
}}
?>