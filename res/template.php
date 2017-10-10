<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> | <?php echo $settings['site_name'] ?></title>
	<!-- Styles -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/media.css" media="all and (max-width:900px)">
</head>
<body>

<header>
	<div class="header">
		<div class="section-inner">
			<div class="logo"><?php echo $settings['site_name'] ?></div>
			<div class="slogan"><?php echo $settings['site_slogan'] ?></div>
		</div>
	</div>

	<input type="checkbox" id="dws-menu">
	<div class="leb-menu">
		<label for="dws-menu"><img src="images/icono-menu.png"></label>
	</div>

	<!-- nav -->
	<nav class="menu">
		<div class="section-inner indents">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="#">Блог</a></li>
				<li><a href="#">Статьи</a></li>
				<li><a href="test.html">Портфолио</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
	</nav><!--/nav-->
</header><!--/header-->

<!-- banner -->
<div class="banner hide-mobile">
	<h2 class="text-banner">Семейство кошачьих</h2>
	<img src="images/4.jpg" alt="Баннер">
</div><!--/banner-->

<!-- body-content -->
<div class="body-content">
	<div class="section-inner">

		<h1>Свежак</h1>
		<!-- news-list -->
		<div class="news-list">
			<!-- one-news -->
			<div class="one-news mobile">
				<img src="images/1.jpg" alt="Кошка">
				<h2>О жизни кошек</h2>
				<p>Curabitur suscipit orci id mollis porttitor. Mauris aliquam egestas elit vel porta. Curabitur sit
					amet ligula volutpat ipsum sollicitudin ultrices sed vel metus. Quisque aliquet elit sit amet
					ipsum
					fringilla fringilla. Donec sit amet pharetra erat, aliquam euismod dolor. Nulla quis pulvinar
					purus.
					Sed tristique orci pharetra tellus eleifend, in condimentum nisl interdum.</p>
			</div><!--/one-news-->

			<!-- one-news -->
			<div class="one-news one-news-second mobile">
				<img src="images/2.jpg" alt="Кошка">
				<h2>Необычные слоны</h2>
				<p>Curabitur suscipit orci id mollis porttitor. Mauris aliquam egestas elit vel porta. Curabitur sit
					amet ligula volutpat ipsum sollicitudin ultrices sed vel metus. Quisque aliquet elit sit amet
					ipsum
					fringilla fringilla. Donec sit amet pharetra erat, aliquam euismod dolor. </p>
			</div><!--/one-news-->

			<!-- one-news -->
			<div class="one-news one-news-last mobile">
				<img src="images/3.jpg" alt="Кошка">
				<h2>Наши животные</h2>
				<p>Curabitur suscipit orci id mollis porttitor. Mauris aliquam egestas elit vel porta. Curabitur sit
					amet ligula volutpat ipsum sollicitudin ultrices sed vel metus. Quisque aliquet elit sit amet
					ipsum
					fringilla fringilla. Donec sit amet pharetra erat, aliquam euismod dolor. Nulla quis pulvinar
					purus.
					Sed tristique orci pharetra tellus eleifend, in condimentum nisl interdum. </p>
			</div><!--/one-news-->

		</div><!--/news-list-->

		<!-- text-columns -->
		<div class="text-columns clear">

			<!-- main -->
			<div class="main mobile">
				<button id="button">Get Text File</button>
                		
                		<!-- DISPLAY -->
                		<div id="display">

                			
                			
                		</div>
			</div><!--/main-->


			<!-- right-side -->
			<div class="right-side mobile">

				<!-- box -->
				<div class="box-1">
					<h4>Важный контент</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan finibus est sed
						ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div><!--/box-->

				<!-- box -->
				<div class="box-2 hide-mobile">
					<h4>Средней важности</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan finibus est sed
						ultricies</p>
				</div><!--/box-->

				<!-- box -->
				<div class="box-3 hide-mobile">
					<h4>Не важно</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan finibus est sed
						ultricies</p>
				</div><!--/box-->

			</div><!--/right-side-->
			<div class="clear"></div>
		</div><!--/text-columns-->
	</div>
</div><!--/body-content-->

<!-- footer --->
<div class="footer">
	<div class="section-inner">
		<p>Подвал сайта Footer</p>
	</div>
</div><!-- footer-->

<!-- Scripts -->
<script src="js/main.js" type="text/javascript"></script>

</body>
</html>