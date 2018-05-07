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
	<meta property="og:title" content="Home" />
	<meta property="og:url" content="http://localhost/01_index.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Home</title>
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
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.checkbox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body class="page">
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
							<li class="current"><a href="#">Home</a></li>
							<li><a href="10_page.html">About Us</a></li>
							<li><a href="08_blog.html">Blog</a></li>
							<li><a href="#">News</a></li>
							<li><a href="07_add.php">For Salers</a></li>
							<li><a href="02_contacts.html">Contacts</a></li>
						</ul>
					</div>
					<div class="all_wrapper">
						<a href="04_catalog.php" class="sng_in">Sing in</a>
						<a href="#" class="sng_up">Sing up</a>
					</div>
				</div>
			</div>
		</div>
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<div class="wrapper_1">
					<div class="slider_wrapper">
						<div class="home_slider">
							<div class="slider slider_1">
							<?php 
					require_once 'connection.php';
										$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
     
										$query ="SELECT * FROM Cars";
 
										$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
										if($result)
										{
   											$rows = mysqli_num_rows($result); // количество полученных строк
   											$number = 0;
     										for ($i = 0 ; $i < 5 ; ++$i){
										    $row = mysqli_fetch_array($result);
						echo "<div class='slide'>
								<img src='images/placeholders/620x425.gif' alt=''/>
									<div class='description'>
										<h2 class='title'>
										$row[0]  $row[1]						 	
										 </h2>
										<p class='desc'><span><strong>Miles: </strong>$row[4]</span><span><strong>Engine: </strong>2.6</span></p>
										<div class='price'>$ $row[3]</div>

										
									</div>
								
								</div>";
					}
											mysqli_free_result($result);
											mysqli_close($link); 
				}
						?>
								
							</div>
						</div>
					</div>
					<div class="search_auto_wrapper">
						<div class="search_auto">
							<h3><strong>Search</strong> auto</h3>
							<div class="clear"></div>
							<label><strong>Manufacturer:</strong></label>
							<div class="select_box_1">
								<select class="select_1">
									<option value="0">Any</option>
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
							<label><strong>Model:</strong></label>
							<div class="select_box_1">
								<select class="select_1">
									<option value="0">Any</option>
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
							<label><strong>Year:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">From</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
								</select>
								<select class="select_2">
									<option value="0">To</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
								</select>
								<div class="clear"></div>
							</div>
							<label><strong>Price:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">From</option>
									<option value="1000">1000</option>
									<option value="2000">2000</option>
									<option value="3000">3000</option>
									<option value="4000">4000</option>
									<option value="5000">5000</option>
									<option value="6000">6000</option>
									<option value="7000">7000</option>
									<option value="8000">8000</option>
								</select>
								<select class="select_2">
									<option value="0">To</option>
									<option value="1000">1000</option>
									<option value="2000">2000</option>
									<option value="3000">3000</option>
									<option value="4000">4000</option>
									<option value="5000">5000</option>
									<option value="6000">6000</option>
									<option value="7000">7000</option>
									<option value="8000">8000</option>
								</select>
								<div class="clear"></div>
							</div>
							<label><strong>Mileage:</strong></label>
							<div class="select_box_2">
								<select class="select_2">
									<option value="0">From</option>
									<option value="1000">1000</option>
									<option value="2000">2000</option>
									<option value="3000">3000</option>
									<option value="4000">4000</option>
									<option value="5000">5000</option>
									<option value="6000">6000</option>
									<option value="7000">7000</option>
									<option value="8000">8000</option>
								</select>
								<select class="select_2" id = "sel5">
									<option value="0">To</option>
									<option value="1000">1000</option>
									<option value="2000">2000</option>
									<option value="3000">3000</option>
									<option value="4000">4000</option>
									<option value="5000">5000</option>
									<option value="6000">6000</option>
									<option value="7000">7000</option>
									<option value="8000">8000</option>
								<div class="clear"></div>
							</div>
							<div class="chb_wrapper">
								<input type="checkbox"/>
								<label class="check_label">Only new cars</label>
							</div>
							<a href="04_catalog.php"><input type="submit" value="Search" class="btn_search"/></a>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="recent">
					<h2><strong>Recent</strong> listings</h2>
					<div class="recent_carousel">
					<?php 
					require_once 'connection.php';
										$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link)); 
     
										$query ="SELECT * FROM Cars";
 
										$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
										if($result)
										{
   											$rows = mysqli_num_rows($result);
   											$number = 0;
     										for ($i = 0 ; $i < $rows ; ++$i){
										    $row = mysqli_fetch_array($result);
						echo "<div class='slide'>
							<a href='06_product_page.html'>
								<img src='images/placeholders/220x164.gif' alt=''/>
								<div class='description'>Registration $row[2]<br/>3.0 Diesel<br/>230 HP<br/>Body Coupe<br/>$row[4] Miles</div>
								<div class='title'>$row[0] $row[1] <span class='price'>$ $row[3]</span></div>
							</a>
						</div>";
					}
											mysqli_free_result($result);
											mysqli_close($link); 
				}
						?>
						
					</div>
				</div>
				<div class="banners">
					<div class="banner_1 main_banner">
						<div class="text_wrapper">
							<p class="title"><strong>Looking</strong> for a car?</p>
							<p class="desc">1.000 new offers every day. 35.000 offers on site</p>
						</div>
						<a href="12_gallery.php">Search</a>
					</div>
					<div class="banner_2 main_banner">
						<div class="text_wrapper">
							<p class="title"><strong>Want</strong> to sell a car?</p>
							<p class="desc">200.000 visitors every day. Add your offer now!</p>
						</div>
						<a href="07_add.php">Sell</a>
					</div>
				</div>
				<div class="wrapper_2">
					<div class="left">
						<div class="recent_blog">
							<h2><strong>Recent</strong> from the blog</h2>
							<div class="post_block">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="09_blog_single.html">HOW I BOUGHT AND SOLD CARS BEFORE AND NOW</a></h5>
								<div class="date">November 1, 2012 </div>
								<div class="post"><p>Borsch is the famous soup in many Ukraine families, as well as many Eastern and Central European countries. </p></div>
							</div>
							<div class="post_block">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">HOW I BOUGHT AND SOLD CARS BEFORE AND NOW</a></h5>
								<div class="date">May 1, 2018 </div>
								<div class="post"><p>Borsch is the famous soup in many Ukraine families, as well as many Eastern and Central European countries. </p></div>
							</div>
							<div class="post_block last">
								<a href="#" class="thumb"><img src="images/placeholders/180x135.gif" alt=""/></a>
								<h5><a href="#">HOW I BOUGHT AND SOLD CARS BEFORE AND NOW</a></h5>
								<div class="date">May 1, 2018 </div>
								<div class="post"><p>Borsch is the famous soup in many Ukraine families, as well as many Eastern and Central European countries. </p></div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tabs_wrapper home_tabs section">
						  	<ul class="tabs">
						    	<li class="current">Auctions</li>
						 	</ul>
						  	<div class="box visible">
						    	<a href="#" class="all">Show all...</a>
						   		<div class="results">Found 50 stations</div>
						   		<div class="clear"></div>
						   		<div class="tabs_carousel">
						   			<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Auction</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">St. Louis Auto Dealers</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Executive Cars Group</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Rim Wear</a>
									</div>
									<div class="slide">
										<a href="#" class="img"><img src="images/placeholders/150x110.gif" alt=""/></a>
										<a href="#" class="title">Dj Cruz’s Auto Sales</a>
									</div>
								</div>
						  	</div>
						</div>
											</div>
					<div class="right">
						<div class="news_wrapper">
							<div class="news">
								<h2><strong>Auto</strong> news</h2>
								<div class="news_box">
									<a href="#" class="thumb">
										<img src="images/placeholders/180x135.gif" alt=""/>
									</a>
									<h5><a href="#">UNOFFICIAL PORSCHE 918 SPYDER PRICING POPS UP</a></h5>
									<div class="date">May 1, 2018 </div>
									<div class="post">
										<p>Borsch is the famous soup in many Ukraine families, as well as many Eastern and Central European countries... </p>
									</div>
								</div>
								<div class="news_box bottom">
									<a href="#" class="thumb">
										<img src="images/placeholders/180x135.gif" alt=""/>
									</a>
									<h5><a href="#">UNOFFICIAL PORSCHE 918 SPYDER PRICING POPS UP</a></h5>
									<div class="date">May 1, 2018 </div>
									<div class="post">
										<p>Borsch is the famous soup in many Ukraine families, as well as many Eastern and Central European countries... </p>
									</div>
								</div>
								<div class="all_wrapper"><a href="#" class="all_news">All news</a></div>
							</div>
						</div>
						<div class="banners_wrapper">
							<div class="get_news_box">
								<h3><strong>Get</strong> daily news</h3>
								<form method="get" action="#">
									<input type="text" onblur="if(this.value=='') this.value='Enter your email';" onfocus="if(this.value=='Enter your email') this.value='';" value="Enter your email" class="txb"/>
									<input type="submit" value="subscribe" class="btn_subscribe"/>
								</form>
							</div>
							<div class="side_banners">
								<a href="#"><img src="images/banners/banner.jpg" alt=""/></a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
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
						<a href="#" class="footer_logo">RagneAuto</a>
						<p>Borsch is the famous soup in many Russian families, as well as many Eastern and Central European countries. The recipes of borsch vary, but vegetables (mainly beet) and sour cream are always the main ingredients. </p>
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
				<div class="copyright">&copy; 2018 Auto Sale. All Rights Reserved. Bogdan^_^</div>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
