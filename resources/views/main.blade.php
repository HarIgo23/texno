@extends('layouts.navigation')

@section('content')
<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(/images/header_img.jpg);">
    <div class="overlay"></div>
    <div class="gtco-container container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <div class="hidden-md hidden-lg">
                            <h2>Лучший магазин электроники в Беларуси</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 slider hidden-sm hidden-xs animate-box" data-animate-effect="fadeIn">
                    <div class="owl-carousel owl-theme">
                        
                        @foreach($news as $tempNews)
                        <div class="item slider-xiaomi col-md-8 col-xs-8">
                            <a href="{{$tempNews->href}}"><img class="img-responsive" src="{{$tempNews->img}}" alt="">
                                <p>{{$tempNews->text}}</p></a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>



                <div class="after-slider animate-box" data-animate-effect="fadeIn">
                    <div class="after-slider-buttons col-md-4">
                        <a href="{{route('catalogPage')}}" class="main-screen-btns btn-outline btn btn-catalog">Каталог</a>
                    </div>
                    <div class="after-slider-buttons after-slider-buttons-2 col-md-4">
                        <a href="{{route('aboutPage')}}" class="main-screen-btns btn-outline btn">О нас</a>
                    </div>
                    <div class="col-md-4 main-screen-search">
                        <form method="post" action="{{route('product.Search')}}">

                            <input type="text" class="typeahead" name="search" placeholder="поиск">
                            <input type="submit" value="">
                            {{ csrf_field() }}

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>	
</header>

<div id="gtco-features">
    <div class="gtco-container gtco-features">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-eye"></i>
                    </span>
                    <h3>Проверка</h3>
                    <p>Вся реализуемая продукция тчательно проверяется</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-shield"></i>
                    </span>
                    <h3>Бонусы</h3>
                    <p>Все наши постоянные покупатели получают подарки. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="icon-home"></i>
                    </span>
                    <h3>Доставка</h3>
                    <p>В целом про доставку. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="gtco-features-2">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Обзоры на технику</h2>
                <p>Подписывайся на наш <a href="">youtube <i class="icon-youtube"></i></a> канал </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="gtco-video gtco-video-sm gtco-bg" style="background-image: url(/images/img_1.jpg); ">
                    <a href="https://www.youtube.com/watch?v=c2xC-ARgnOQ" class="popup-vimeo"><i class="icon-video"></i></a>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gtco-video gtco-video-sm gtco-bg" style="background-image: url(/images/img_1.jpg); ">
                    <a href="https://www.youtube.com/watch?v=c2xC-ARgnOQ" class="popup-vimeo"><i class="icon-video"></i></a>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gtco-video gtco-video-sm gtco-bg" style="background-image: url(/images/img_1.jpg); ">
                    <a href="https://www.youtube.com/watch?v=c2xC-ARgnOQ" class="popup-vimeo"><i class="icon-video"></i></a>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="gtco-testimonial">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Отзывы</h2>
            </div>
        </div>
        <div class="row animate-box">


            <div class="owl-carousel owl-carousel-fullwidth ">
                
                @foreach($reviews as $review)
                <div class="item">
                    <div class="testimony-slide active text-center">
                        <figure>
                            <img src="{{$review->img}}" alt="user">
                        </figure>
                        <span>{{$review->author}}, <a href="{{$review->href_place}}" class="twitter">{{$review->place}}</a></span>
                        <blockquote>
                            <p>&ldquo;{{$review->text}}.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
</div>

<div id="gtco-services">
    <div class="gtco-container">

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Чем мы занимаемся</h2>
                <p>Здесь вы найдёте ответы как мы работаем по всем направлениям.</p>
            </div>
        </div>

        <div class="row animate-box">

            <div class="gtco-tabs">
                <ul class="gtco-tab-nav">
                    <li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-command"></i></span><span class="hidden-xs">Реализация продукции</span></a></li>
                    <li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Консультация</span></a></li>
                    <li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-bag"></i></span><span class="hidden-xs">Доставка</span></a></li>
                    <li><a href="#" data-tab="4"><span class="icon visible-xs"><i class="icon-box"></i></span><span class="hidden-xs">Наша атрибутика</span></a></li>
                </ul>

                <!-- Tabs -->
                <div class="gtco-tab-content-wrap">

                    <div class="gtco-tab-content tab-content active" data-tab-content="1">
                        <div class="col-md-6">
                            <div class="gtco-video gtco-bg" style="background-image: url(images/img_1.jpg); ">
                                <a href="https://www.youtube.com/watch?v=c2xC-ARgnOQ" class="popup-vimeo"><i class="icon-video"></i></a>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Реализация продукции</h2>
                            <p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

                            <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="uppercase">Конкуренты</h2>
                                    <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="uppercase">Мы</h2>
                                    <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="gtco-tab-content tab-content" data-tab-content="2">
                        <div class="col-md-6 col-md-push-6">
                            <div class="gtco-video gtco-bg" style="background-image: url(images/img_1.jpg); ">
                                <a href="https://www.youtube.com/watch?v=c2xC-ARgnOQ" class="popup-vimeo"><i class="icon-video"></i></a>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <h2>Консультация и проверка наличия</h2>
                            <p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

                            <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="uppercase">Готово к использованию</h2>
                                    <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="uppercase">100% соответствие</h2>
                                    <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="gtco-tab-content tab-content" data-tab-content="3">
                        <div class="col-md-6 col-md-push-6">
                            <div class="gtco-video gtco-bg" style="background-image: url(images/img_1.jpg); ">
                                <a href="https://www.youtube.com/watch?v=c2xC-ARgnOQ" class="popup-vimeo"><i class="icon-video"></i></a>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                                <span class="icon">
                                    <i class="icon-check"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>В пределах Минска</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                </div>
                            </div>

                            <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                                <span class="icon">
                                    <i class="icon-check"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Близлежащие пункты с Минском</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                </div>
                            </div>

                            <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                                <span class="icon">
                                    <i class="icon-check"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3>Республиканская доставка</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="gtco-tab-content tab-content" data-tab-content="4">
                        <div class="col-md-6">
                            <div class="icon icon-xlg">
                                <i class="icon-box"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>Наша атрибутика</h2>
                            <p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

                            <p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection