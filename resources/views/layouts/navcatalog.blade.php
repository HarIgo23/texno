<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Techno-arena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

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
    <link rel="stylesheet" href="{{asset('tovar/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">

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
                    <div id="gtco-logo"><a href="{{route('mainPage')}}">TEXHOAPEHA.</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li><a href="{{route('mainPage')}}">Главная</a></li>
                        <li class="has-dropdown active">
                            <a href="{{route('catalogPage')}}">Каталог</a>
                            <ul class="dropdown">
                                <li><a href="{{route('categoriesPage',['categories'=>'mobile','page'=>1])}}">Мобильные
                                        телефоны</a></li>
                                <li><a href="{{route('categoriesPage',['categories'=>'tv','page'=>1])}}">Телевизоры</a>
                                </li>
                                <li><a href="{{route('categoriesPage',['categories'=>'vr','page'=>1])}}">VR</a></li>
                                <li><a href="{{route('categoriesPage',['categories'=>'soft','page'=>1])}}">Программное
                                        обеспечение</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('aboutPage')}}">О нас</a></li>
                        <!-- <li><a href="contact.html">Контакты</a></li> -->
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <header id="gtco-header" class="gtco-cover" role="banner"
            style="background-image:url(/images/header_img.jpg); background-position: center;">
        <div class="overlay"></div>
    </header>

    <div class="search_logo">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <form method="post" action="{{route('product.Search')}}">
                        <input type="text" name="search" placeholder="поиск" class="typeahead search">
                        <input type="submit" value="">
                        {{ csrf_field() }}

                    </form>
                </div>

                <div class="col-xs-1 no-margin">
                    <img src="/images/mi.png" alt="Xiaomi" class="img-responsive brand">
                </div>
                <div class="col-xs-1 no-margin">
                    <img src="/images/philips.png" alt="Philips" class="img-responsive brand">
                </div>
                <div class="col-xs-1 no-margin">
                    <img src="/images/huawei.png" alt="huawei" class="img-responsive brand">
                </div>
                <div class="col-xs-1 no-margin">
                    <img src="/images/meizu.png" alt="meizu" class="img-responsive brand">
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


    <section class="prev">
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumbs_list">
                    <li class="breadcrumbs_item">
                        <a href="{{route('catalogPage')}}" class="breadcrumbs_link">Каталог</a>
                    </li>
                    @if(isset($inCat))
                        <li class="breadcrumbs_item">
                            <a href="{{route('categoriesPage',['categories'=>$category->path,'page'=>1])}}"
                               class="breadcrumbs_link">{{$category->cat_name}}</a>
                        </li>
                    @endif
                    @if(isset($inProd))
                        <li class="breadcrumbs_item">
                            <a href="{{route('productPage',['categories'=>$category->path,'model'=>$product->name])}}"
                               class="breadcrumbs_link">{{$product->name}}</a>
                        </li>
                    @endif
                </ul>
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
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
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
            <script src="{{asset('js/common.js')}}"></script>
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
