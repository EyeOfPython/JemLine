<?php
function to_price($p) { return number_format($p*1,2) . ' &pound;'; }
if(!isset($_SESSION['cart']) || !$_SESSION['cart'])
	include 'main.php';
elseif(isset($_POST['send-order'])) {{

$products_db = simplexml_load_file("db/products.xml");
$sum = 0;
foreach($products_db as $product)
{
	$pid = $product['id']*1;
	if(isset($_SESSION['cart'][$pid]))
	{
		$sum += $_SESSION['cart'][$pid] * $product->price;
		$product->stock -= $_SESSION['cart'][$pid];
	}
}
echo '<div class="checkout">';
echo '<div><small>Cart > Checkout > Order complete</small></div>';
echo '<h2>Thank you for ordering stuff!</h2>';
echo 'An e-mail was sent to you. Please pay us '.to_price($sum+10).' as soon as possible.';
echo '</div>';

$xml = new SimpleXMLElement("<order></order>");
$products = $xml->addChild('products');
foreach($_SESSION['cart'] as $product_id => $quantity)
{
	$product = $products->addChild('product');
	$product->addAttribute('id', $product_id);
	$product->addChild('quantity', $quantity);
}
$customer = $xml->addChild('customer');
$customer->addChild('first-name',    ($_POST['first-name']));
$customer->addChild('last-name',     ($_POST['last-name']));
$customer->addChild('street-name',   ($_POST['street-name']));
$customer->addChild('street-number', ($_POST['street-number']));
$customer->addChild('city',    		 ($_POST['city']));
$customer->addChild('zip',    		 ($_POST['zip']));
$customer->addChild('lang',    		 ($_POST['lang']));
$customer->addChild('email',   		 ($_POST['email']));
$filename = 'orders/order-'.date('Y-m-d-h-i-s').'.xml';
$xml->asXML($filename);
$products_db->asXML("db/products.xml");
session_destroy();
}}
else
{{
?>
<script type="text/javascript">
function check_name(element)
{
	var valid = /^[a-zA-Zäöüßàèùìòáéíóú., ]+$/g.test(element.value);
	if(!valid)
		element.className = "invalid";
	else
		element.className = "";
	return valid;
}

function check_number(element)
{
	var valid = /^[\d]+$/g.test(element.value);
	if(!valid)
		element.className = "invalid";
	else
		element.className = "";
	return valid;
}

function check_email(element)
{
	var valid = /^[a-zA-Z\d\._]+@[a-z\d\._]+\.[a-z]+$/g.test(element.value);
	if(!valid)
		element.className = "invalid";
	else
		element.className = "";
	return valid;
}

function check_elements()
{
	if(!document.forms['checkout'].terms.checked) 
	{
		alert('Accept the terms.'); 
		return false;
	}
	
	var elms = document.forms["checkout"].elements;
	var valid = true;
	for(var i = 0; i < elms.length; i++)
		if(elms[i].onblur)
		{
			elms[i].onblur();
			valid = valid && elms[i].className != "invalid";
		}
	return valid;
}

//document.forms["checkout"].onSubmit = check_terms();
</script>

<div class="checkout">
<div><small>Cart > Checkout</small></div>
<h2>Checkout</h2>
<form action="?page=checkout" method="post" name="checkout" onsubmit="return check_elements();" >
<table>
<tr>
<td width="120">First Name:</td>
<td><input type="text" name="first-name" value="" onblur="check_name(this);" /></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="last-name" value="" onblur="check_name(this);" /></td>
</tr>
<tr>
<td>Street:</td>
<td><input type="text" name="street-name" value="" onblur="check_name(this);" /></td>
<td>No. <input type="text" size="3" name="street-number" value="" onblur="check_number(this);" /></td>
</tr>
<tr>
<td>City:</td>
<td><input type="text" name="city" value="" onblur="check_name(this);" /></td>
</tr>
<tr>
<td>ZIP Code:</td>
<td><input type="text" name="zip" value="" size="7" onblur="check_number(this);" /></td>
</tr>
<tr>
<td>Country:</td>
<td>  <select id="lang-chooser" class="lang-chooser" name="lang">
  <option value="af"
                 >
  ‪Afrikaans‬
  </option>
  <option value="az"
                 >
  ‪azərbaycan‬
  </option>
  <option value="in"
                 >
  ‪Bahasa Indonesia‬
  </option>
  <option value="ms"
                 >
  ‪Bahasa Melayu‬
  </option>
  <option value="ca"
                 >
  ‪català‬
  </option>
  <option value="cs"
                 >
  ‪čeština‬
  </option>
  <option value="da"
                 >
  ‪dansk‬
  </option>
  <option value="de"
                 >
  ‪Deutsch‬
  </option>
  <option value="et"
                 >
  ‪eesti‬
  </option>
  <option value="en-GB"
  selected="selected"
                 >
  ‪English (United Kingdom)‬
  </option>
  <option value="en"
                 >
  ‪English (United States)‬
  </option>
  <option value="es"
                 >
  ‪español (España)‬
  </option>
  <option value="es-419"
                 >
  ‪español (Latinoamérica)‬
  </option>
  <option value="eu"
                 >
  ‪euskara‬
  </option>
  <option value="fil"
                 >
  ‪Filipino‬
  </option>
  <option value="fr-CA"
                 >
  ‪français (Canada)‬
  </option>
  <option value="fr"
                 >
  ‪français (France)‬
  </option>
  <option value="gl"
                 >
  ‪galego‬
  </option>
  <option value="hr"
                 >
  ‪hrvatski‬
  </option>
  <option value="zu"
                 >
  ‪isiZulu‬
  </option>
  <option value="is"
                 >
  ‪íslenska‬
  </option>
  <option value="it"
                 >
  ‪italiano‬
  </option>
  <option value="sw"
                 >
  ‪Kiswahili‬
  </option>
  <option value="lv"
                 >
  ‪latviešu‬
  </option>
  <option value="lt"
                 >
  ‪lietuvių‬
  </option>
  <option value="hu"
                 >
  ‪magyar‬
  </option>
  <option value="nl"
                 >
  ‪Nederlands‬
  </option>
  <option value="no"
                 >
  ‪norsk‬
  </option>
  <option value="pl"
                 >
  ‪polski‬
  </option>
  <option value="pt"
                 >
  ‪português‬
  </option>
  <option value="pt-BR"
                 >
  ‪português (Brasil)‬
  </option>
  <option value="pt-PT"
                 >
  ‪português (Portugal)‬
  </option>
  <option value="ro"
                 >
  ‪română‬
  </option>
  <option value="sk"
                 >
  ‪slovenčina‬
  </option>
  <option value="sl"
                 >
  ‪slovenščina‬
  </option>
  <option value="fi"
                 >
  ‪suomi‬
  </option>
  <option value="sv"
                 >
  ‪svenska‬
  </option>
  </select></td>
</tr>
<tr>
<td>E-Mail:</td>
<td><input type="text" name="email" value="" onblur="check_email(this);" /></td>
</tr>
</table>
<input type="checkbox" name="terms" /> I accept the <a href="?page=terms">Terms &amp; Conditions</a>
<div class="buttons">
<input type="submit" name="send-order" value="Order" />
<input type="reset" value="Reset" />
</div>
</form>

</div>
<?php

}}
?>