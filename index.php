<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JemLine</title>
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<script src="js/jquery-1.10.2.min.js"></script>
<link  href="assets/fotorama.css" rel="stylesheet"> 
<script src="js/fotorama.js"></script>
</head>

<body>

<div class="container">
  <div class="header">
	<a href="?"><img src="assets/logo_small.png" class="logo" alt="Insert Logo Here" name="Insert_logo" width="180" height="90" id="Insert_logo" /></a> 
	<ul class="tabs">
	<li><a href="?page=categories"><span>C</span>ATEGORIES</a></li>
	<li><a href="#"><span>S</span>ALES</a></li>
	<li><a href="#"><span>H</span>ISTORY</a></li>
	</ul>
	<div class="cart">
	<img src="assets/shoppingcart.png" width="30" height="30" />
	</div>
	<div class="search">
	<form>
	<input type="text" size="40"/>
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
}
?>
	<!-- end .content --></div>
  <div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>