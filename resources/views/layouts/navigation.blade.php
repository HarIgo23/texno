<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
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
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Modernizr JS -->
        <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
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
                            <div id="gtco-logo"><a href="{{route('mainPage')}}">ABAZABA.</a></div>
                        </div>
                        <div class="col-xs-10 menu-1">
                            <h2 class="main-h2 visible-md visible-lg">Пожалуй лучший магазин электроники в Беларуси</h2>
                            <ul class="text-right">
                                <li class="active"><a href="{{route('mainPage')}}">Главная</a></li>
                                <li class="has-dropdown">
                                    <a href="{{route('catalogPage')}}">Каталог</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('categoriesPage',['categories'=>'mobile','page'=>1])}}">Мобильные телефоны</a></li>
                                        <li><a href="{{route('categoriesPage',['categories'=>'tv','page'=>1])}}">Телевизоры</a></li>
                                        <li><a href="{{route('categoriesPage',['categories'=>'vr','page'=>1])}}">VR</a></li>
                                        <li><a href="{{route('categoriesPage',['categories'=>'soft','page'=>1])}}">Программное обеспечение</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('aboutPage')}}">О нас</a></li>
                                <!-- <li><a href="contact.html">Контакты</a></li> -->
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>

            @yield('content')
            
            <footer id="gtco-footer" role="contentinfo">
                <div class="gtco-container">

                    <div class="row copyright">
                        <div class="col-md-12">
                            <p class="pull-left">
                                <small class="block">&copy; 2017 ABAZABA. Все права защищены.</small>
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
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap3-typeahead-for-main.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Carousel -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- countTo -->
        <script src="{{asset('js/jquery.countTo.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <!-- Main -->
        <script src="{{asset('js/main.js')}}"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                // nav:true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        </script>
        <script type="text/javascript">
            var path = "{{ route('autocomplete') }}";
            $('input.typeahead').typeahead({
                source:  function (query, process) {
                    return $.get(path, { query: query }, function (data) {
                        return process(data);
                    });
                }
            });
        </script>

    </body>
</html>
