<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>index</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="tovar/css/main.css">
        <link rel="stylesheet" href="css/style2.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div class="gtco-loader"></div>

        <div id="page">
            <nav class="gtco-nav" role="navigation">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="gtco-logo"><a href="index.html">TEXHOAPEHA.</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="index.html">Главная</a></li>
                                <li class="has-dropdown active">
                                    <a href="catalog.html">Каталог</a>
                                    <ul class="dropdown">
                                        <li><a href="mobile.html">Мобильные телефоны</a></li>
                                        <li><a href="tv.html">Телевизоры</a></li>
                                        <li><a href="vr.html">VR</a></li>
                                        <li><a href="soft.html">Программное обеспечение</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">О нас</a></li>
                                <!-- <li><a href="contact.html">Контакты</a></li> -->
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>

            <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/header_img.jpg); background-position: center;">
                <div class="overlay"></div>
            </header>

            <div class="search_logo">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8">
                            <input type="text" name="search" placeholder="поиск" class="search">
                            <input type="submit" value="">
                        </div>

                        <div class="col-xs-1 no-margin">
                            <img src="images/mi.png" alt="Xiaomi" class="img-responsive brand">
                        </div>
                        <div class="col-xs-1 no-margin">
                            <img src="images/philips.png" alt="Philips" class="img-responsive brand">
                        </div>
                        <div class="col-xs-1 no-margin">
                            <img src="images/huawei.png" alt="huawei" class="img-responsive brand">
                        </div>
                        <div class="col-xs-1 no-margin">
                            <img src="images/meizu.png" alt="meizu" class="img-responsive brand">
                        </div>
                        <!-- <div class="col-xs-1 no-margin">
                                <img src="images/apple.png" alt="apple" class="img-responsive brand">
                        </div>
                        <div class="col-xs-1 no-margin">
                                <img src="images/samsung.jpg" alt="samsung" class="img-responsive brand">
                        </div> -->
                    </div>
                </div>
            </div>

            @yield('contentCatalog')
<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2017 TEXHOAPEHA. Все права защищены.</small> 
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-vk"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/common.js"></script>

	</body>
</html>
