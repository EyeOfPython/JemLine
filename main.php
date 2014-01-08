<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JemLine</title>
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link  href="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.css" rel="stylesheet"> 
<script src="http://fotorama.s3.amazonaws.com/4.4.9/fotorama.js"></script> 
</head>

<body>

<div class="container">
  <div class="header">
	<a href="#"><img src="assets/logo_small.png" class="logo" alt="Insert Logo Here" name="Insert_logo" width="180" height="90" id="Insert_logo" /></a> 
	<ul class="tabs">
	<li><a href="#"><span>C</span>ATEGORIES</a></li>
	<li><a href="#"><span>S</span>ALES</a></li>
	<li><a href="#"><span>H</span>ISTORY</a></li>
	</ul>
	<div class="search">
	<form>
	<input type="text" size="40"/>
	</form>
	</div>
	<!-- end .header --></div>
  <div class="content" style="clear: both;">
    <div class="fotorama slideshow" data-width="980" 
									data-autoplay="true"
									data-loop="true"
									data-stopautoplayontouch="true"
									data-transition="crossfade">
		<img src="assets/background1.jpg"/>
		<img src="assets/Logo_small.png"/>
	</div>
	<h2>Layout</h2>
    <p>Since this is a one-column layout, the .content is not floated. </p>
    <h3>Logo Replacement</h3>
    <p>An image placeholder was used in this layout in the .header where you'll likely want to place  a logo. It is recommended that you remove the placeholder and replace it with your own linked logo. </p>
    <p> Be aware that if you use the Property inspector to navigate to your logo image using the SRC field (instead of removing and replacing the placeholder), you should remove the inline background and display properties. These inline styles are only used to make the logo placeholder show up in browsers for demonstration purposes. </p>
    <p>To remove the inline styles, make sure your CSS Styles panel is set to Current. Select the image, and in the Properties pane of the CSS Styles panel, right click and delete the display and background properties. (Of course, you can always go directly into the code and delete the inline styles from the image or placeholder there.)</p>
    <p>
	<br/> bla <br> bla <br> a <br>d <br>
	</p>
	<!-- end .content --></div>
  <div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>