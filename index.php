<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JemLine</title>
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<link  type="text/css" href="assets/fotorama.css" rel="stylesheet" /> 
<script type="text/javascript" src="js/fotorama.js"></script>
</head>

<body>
<div class="container">
  <div class="header">
	<a href="?"><img src="assets/logo_small.png" class="logo" alt="JemLine" name="Insert_logo" width="180" height="90" id="Insert_logo" /></a> 
	<ul class="tabs">
	<li><a href="?page=categories"><span>C</span>ATEGORIES</a></li>
	<li><a href="?page=sales"><span>S</span>ALES</a></li>
	<li><a href="?page=history"><span>H</span>ISTORY</a></li>
	</ul>
	<div class="cart">
	<a href="?page=cart">
	<img src="assets/shoppingcart.png" width="30" height="30" alt="cart" />
	</a>
	</div>
	<div class="search">
	<form action="?">
	<input type="hidden" name="page" value="search" />
	<input type="text" name="query" size="40"/>
	</form>
	</div>
	<!-- end .header --></div>
  <div class="content" style="clear: both;">
<?php
$page = isset($_GET['page']) ? strtolower($_GET['page']) : 'main';
switch($page)
{
	case 'main': 		include 'main.php'; break;
	case 'categories':  include 'categories.php'; break;
	case 'category':	include 'category.php'; break;
	case 'product': 	include 'product.php'; break;
	case 'history':		include 'history.php' ; break;
	case 'cart':		include 'cart.php'; break;
	case 'search':		include 'search.php'; break;
	case 'contact': 	include 'contact.php'; break;
	case 'checkout':	include 'checkout.php'; break;
	case 'terms':		include 'terms.php'; break;
	case 'sales':		include 'sales.php'; break;
	case 'copyright':	include 'copyright.php'; break;
	case 'language':	include 'language.php'; break;
}
?>
	<!-- end .content --></div>
  <div class="footer">
    <ul class="footer_content">
    	<li><a href="?page=terms">Terms</a></li>
        <li><a href="?page=copyright">Copyright</a></li>
        <li><a href="?page=contact">Contact</a></li>
        <li><a href="?page=language">Language</a></li>     
    </ul>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>