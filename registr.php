<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	    <title> Log in </title>
    <link rel = "stylesheet" href = "style 1000.css">
	<script type="text/javascript" src="jquery-3.2.1.js"></script> 
    <script type="text/javascript" src="jQuery.js"></script>
	<!-- Facebook APP ID -->
	<meta property="fb:app_id" content="12345"/>

	<meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
	<meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Open Graph -->
	<meta property="og:site_name" content="Auto Dealer HTML"/>
	<meta property="og:title" content="Product Page" />
	<meta property="og:url" content="http://localhost/06_product_page.html" />
	<meta property="og:image" content="http://cdn.winterjuice.com/example/autodealer/image.jpg" />
	<meta property="og:description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	<title>Car</title>
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
	<style>
	body{
         background: url(bmw_i8.jpg) no-repeat;
		-moz-background-size: 100%;
		-webkit-dackground-size: 100%;
		-o-background-size: 100%;
	    background-size: 100%;
		}
	</style>
	<body style="background-attachment:fixed" topmargin="0">
<body class="car">
	<!--BEGIN HEADER-->
		<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="#">Range<span>Auto</span></a>
				</div>
				<div class="header_contacts">
					
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
							<li><a href="#">For Salers</a></li>
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
	<form action="registr.php" method="post">
	<p id="login"> <input id="login1" type="text" name="login" placeholder="Login"/> </p> 
			<p id="name"> <input id="name1" type="text" name="name" placeholder="Name"/> </p> 
<p id="surname"> <input id="surname1" type="text" name="surname" placeholder="Surename"/> </p> 
<p id="email"> <input id="email1" type="text" name="email" placeholder="Email"/> </p> 
<p id="pas"> <input id="pas1" type="password" name="password" placeholder="Password"/> </p> 
<p id="repas"> <input id="repas1" type="password" name="repassword" placeholder="Repeat Password"/> </p> 
<input id="my_button" type="submit" value="Sing up" />
</form>
									<?php
require_once 'connection.php'; // подключаем скрипт
 
if(isset($_POST['login']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])  && isset($_POST['password'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
         $login= htmlentities(mysqli_real_escape_string($link, $_POST['login']));
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $surname = htmlentities(mysqli_real_escape_string($link, $_POST['surname']));
     $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
     $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));
    // создание строки запроса
    $query ="INSERT INTO account VALUES('$login','$password' , '$name' , '$surname', '$email')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    // закрываем подключение
    mysqli_close($link);
}
?>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
