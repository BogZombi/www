<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="12345"/>

	<meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
	<meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Open Graph -->
	<meta property="og:site_name" content="Auto Dealer HTML"/>
	<meta property="og:title" content="Add Product" />
	<meta property="og:url" content="http://localhost/07_add.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Add</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style980.css" />
	<link rel="stylesheet" type="text/css" href="css/style800.css" />
	<link rel="stylesheet" type="text/css" href="css/style700.css" />
	<link rel="stylesheet" type="text/css" href="css/style600.css" />
	<link rel="stylesheet" type="text/css" href="css/style500.css" />
	<link rel="stylesheet" type="text/css" href="css/style400.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
	<!--[if IE]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.selectik.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.checkbox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body class="sell">
	<!--BEGIN HEADER-->
		<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="#">Range<span>Auto</span></a>
				</div>
				<div class="header_contacts">
					<div class="phone"> +38(099) - 023 - 9743</div>
					<div>Lviv, Lukasha Street, 5</div>
				</div>
				<div class="socials">
					<a href="#"><img src="images/fb_icon.png" alt=""></a>
					<a href="#"><img src="images/twitter_icon.png" alt=""></a>
					<a href="#"><img src="images/in_icon.png" alt=""></a>
				</div>
			</div>
			<div class="bg_navigation">
				<div class="navigation_wrapper">
					<div id="navigation">
						<span>Home</span>
						<ul>
							<li class="current"><a href="01_index.php">Home</a></li>
							<li><a href="10_page.html">About Us</a></li>
							<li><a href="08_blog.html">Blog</a></li>
							<li><a href="#">News</a></li>
							<li><a href="07_add.php">For Salers</a></li>
							<li><a href="02_contacts.html">Contacts</a></li>
						</ul>
					</div>
					<div id="search_form">
						<form method="get" action="#">
							<input type="text" onblur="if(this.value=='') this.value='Search on site';" onfocus="if(this.value=='Search on site') this.value='';" value="Search on site" class="txb_search"/>
							<input type="submit" value="Search" class="btn_search"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="breadcrumbs">
					<a href="#">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Add an offer</span>
				</div>
				<div class="main_wrapper">
					<div class="steps">
						<span>1. new offer</span>
						<a href="#"><span>2. preview</span></a>
						<a href="#"><span>3. submit</span></a>
					</div>
					<h1><strong>Sell</strong> your vehicle</h1>
					<div class="message">
						<h3>Sell ​​your car on <strong>RangeAuto</strong> and benefit from more than 1 million potential buyers every month!</h3>
						<p>Required fields are marked with *<br/>Please post offers only on the car (parts are a special category).<br/>If you are a dealer, please visit the dealers section<br/>If you have difficulties in posting an offer on the website, please call 0742 016 570</p>
					</div>
					<div class="sell_box sell_box_1">
					<form action="07_add.php" method="post">
						<h2><strong>Vehicle</strong> data</h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>Manufacturer:</strong></label>
							<select class="select_5" name="model">
								<option value="0">Select</option>
								<option value="Audi">Audi</option>
								<option value="Mercedes-Benz">Mercedes-Benz</option>
								<option value="BMW">BMW</option>
								<option value="Lexus">Lexus</option>
								<option value="Lincoln">Lincoln</option>
								<option value="Ford">Ford</option>
								<option value="Fiat">Fiat</option>
								<option value="Dodge">Dodge</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>Model: </strong></label>
							<select class="select_5" name="manufacturer">
								<option value="0">Select</option>
								<option value="R8">R8</option>
								<option value="S500">S500</option>
								<option value="540i">540i</option>
								<option value="RX300">RX300</option>
								<option value="Navigator">Navigator</option>
								<option value="Taurus">Taurus</option>
								<option value="Doblo">Doblo</option>
								<option value="Viper">Viper</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>Fabrication:</strong></label>
							<select class="select_5" name="year">
								<option value="0">Select</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><span>* </span><strong>Doors:</strong></label>
							<select class="select_5">
								<option value="0">Select</option>
								<option value="1">2</option>
								<option value="2">3</option>
								<option value="3">4</option>
								<option value="4">5</option>
							</select>
						</div>
						<div class="input_wrapper large">
							<label><span>* </span><strong>VIN / chassis number:</strong></label>
							<input type="text" class="txb large" value="" name="Mlleage" />
						</div>
						<div class="select_wrapper last">
							<label><span>* </span><strong>Color:</strong></label>
							<select class="select_5">
								<option value="0">Select</option>
								<option value="1">Red</option>
								<option value="2">Green</option>
								<option value="3">Blue</option>
								<option value="4">Grey</option>
								<option value="5">White</option>
								<option value="6">Black</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="sell_box sell_box_3">
						<h2><strong>Vehicle</strong> price</h2>
						<div class="select_wrapper">
							<label><span>* </span><strong>Price: </strong></label>
							<input type="text" class="txb" value="0.00" onblur="if(this.value=='') this.value='0.00';" onfocus="if(this.value=='0.00') this.value='';" name="price" />
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>Currency: </strong></label>
							<select class="select_5">
								<option value="0">Euro</option>
								<option value="1">USD</option>
							</select>
						</div>
						<div class="single_chb_wrapper">
							<span class="custom_chb_wrapper">
								<span class="custom_chb">
									<input type="checkbox" name=""/>
								</span>
								<label>Price Negotiable</label>
							</span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_4">
						<h2><strong>Vehicle</strong> photos</h2>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								upload photo
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								upload photo
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								upload photo
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								upload photo
							</a>
						</div>
						<div class="foto_wrapper">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								upload photo
							</a>
						</div>
						<div class="foto_wrapper last">
							<a href="#">
								<img src="images/upload.png" alt="" class="upload"/>
								upload photo
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_box sell_box_5">
						<h2><strong>Seller</strong> details</h2>
						<div class="input_wrapper">
							<label><span>* </span><strong>Name: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>Phone: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>Phone 2: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper last">
							<label><span>* </span><strong>City:</strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="select_wrapper">
							<label><strong>Country: </strong></label>
							<select class="select_5">
								<option value="0">Select</option>
								<option value="1">Germany</option>
								<option value="2">Great Britain</option>
								<option value="3">USA</option>
								<option value="4">China</option>
								<option value="5">Japan</option>
								<option value="6">Russia</option>
								<option value="7">Ukraine</option>
							</select>
						</div>
						<div class="select_wrapper">
							<label><strong>State: </strong></label>
							<select class="select_5">
								<option value="0">Select</option>
								<option value="1">Germany</option>
								<option value="2">Great Britain</option>
								<option value="3">USA</option>
								<option value="4">China</option>
								<option value="5">Japan</option>
								<option value="6">Russia</option>
								<option value="7">Ukraine</option>
							</select>
						</div>
						<div class="input_wrapper">
							<label><span>* </span><strong>E-mail: </strong></label>
							<input type="text" class="txb" value=""/>
						</div>
						<div class="input_wrapper last">
							<label><span>* </span><strong>Password:</strong></label>
							<input type="password" class="txb" value=""/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sell_submit_wrapper">
						<span class="custom_chb_wrapper fL">
							<span class="custom_chb">
								<input type="checkbox" name=""/>
							</span>
							<label>I agree to the Terms and Conditions</label>
						</span>
						<input type="submit" value="Submit" class="sell_submit"/>
						</form>
						<?php
require_once 'connection.php'; // подключаем скрипт
 
if(isset($_POST['model']) && isset($_POST['manufacturer']) && isset($_POST['price'])  && isset($_POST['Mlleage']) && isset($_POST['year'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $model = htmlentities(mysqli_real_escape_string($link, $_POST['model']));
    $manufacturer = htmlentities(mysqli_real_escape_string($link, $_POST['manufacturer']));
     $year = htmlentities(mysqli_real_escape_string($link, $_POST['year']));
     $price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));
     $mlleage = htmlentities(mysqli_real_escape_string($link, $_POST['Mlleage']));
    // создание строки запроса
    $query ="INSERT INTO cars VALUES('$model','$manufacturer' , '$year' , '$price', '$mlleage')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    // закрываем подключение
    mysqli_close($link);
}
?>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<div id="footer">
			<div class="bg_top_footer">
				<div class="top_footer">
					<div class="f_widget first">
						<h3><strong>About</strong> us</h3>
						<a href="#" class="footer_logo">RangeAuto</a>
						<p>Borsch is the famous soup in many Russian families, as well as many Eastern and Central European countries. The recipes of borsch vary, but vegetables (mainly beet) and sour cream are always the main ingredients.</p>
					</div>
					<div class="f_widget divide second">
						<h3><strong>Open</strong> hours auction</h3>
						<ul class="schedule">
							<li>
								<strong>Monday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Tuesday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Wednesday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Thursday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Friday</strong>
								<span>9:30 am - 6:00 pm</span>
							</li>
							<li>
								<strong>Saturday</strong>
								<span>9:30 am - 4:00 pm</span>
							</li>
							<li>
								<strong>Sunday</strong>
								<span>closed</span>
							</li>
						</ul>
					</div>
					<div class="fwidget_separator"></div>
					<div class="f_widget third">
						<h3><strong>Our</strong> contacts</h3>
						<div class="f_contact f_contact_1"><strong>Address Info:<br/></strong>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</div>
						<div class="f_contact f_contact_2"><strong>Phone:</strong> +1 (234) 567-8901 <br/><strong>FAX:</strong> +1 (234) 567-8902</div>
						<div class="f_contact f_contact_3"><strong>Email:</strong> <a href="mailto:#">testmail@sitename.com</a></div>
					</div>
					<div class="f_widget divide last frame_wrapper">
						<iframe width="204" height="219" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2293.0334224982694!2d24.013849597888086!3d49.82662241204023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae787c37035ff%3A0x2dd12ba1871f61a8!2z0JPRg9GA0YLQvtC20LjRgtC-0Log4oSWMTEgItCd0KMg0JvQnyI!5e0!3m2!1sru!2sua!4v1525631236786"></iframe>
					</div>
				</div>
			</div>
			<div class="bottom_footer">
				<div class="f_widget ">
					<h3><strong>About</strong> us</h3>
					<ul>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Our Partners</a></li>
						<li><a href="#">Advertising Online</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="f_widget divide">
					<h3><strong>Need</strong> help?</h3>
					<ul>
						<li><a href="#">How do I add an offer?</a></li>
						<li><a href="#">How do I find a vehicle</a></li>
						<li><a href="#">Price list</a></li>
						<li><a href="#">Office for car dealers</a></li>
					</ul>
				</div>
				<div class="fwidget_separator"></div>
				<div class="f_widget">
					<h3><strong>User</strong> area</h3>
					<ul>
						<li><a href="#">Add an offer</a></li>
						<li><a href="#">Register dealder</a></li>
						<li><a href="#">Login Dealer</a></li>
						<li><a href="#">News</a></li>
					</ul>
				</div>
				<div class="f_widget divide last">
					<h3><strong>Find</strong> us here</h3>
					<ul class="horizontal">
						<li><a href="#"><img src="images/fb_icon.png" alt=""></a></li>
						<li><a href="#"><img src="images/twitter_icon.png" alt=""></a></li>
						<li><a href="#"><img src="images/in_icon.png" alt=""></a></li>
					</ul>
				</div>
			</div>
			<div class="copyright_wrapper">
				<div class="copyright">&copy; 2018 Auto Sale. All Rights Reserved. Bogdan ^_^</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
