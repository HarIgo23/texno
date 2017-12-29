@extends('layouts.navigation')

@section('content')
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(/images/img_bg_1.jpg);">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>O HAC</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Почему выбирают нас</h2>
                <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-6">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
                        <i class="icon-check"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Причина</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
                        <i class="icon-check"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Причина</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
                        <i class="icon-check"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Причина</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">


                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
                        <i class="icon-check"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Причина</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
                        <i class="icon-check"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Причина</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon">
                        <i class="icon-check"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>Причина</h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gtco-cover gtco-cover-sm" style="background-image:url(images/img_bg_3.jpg);">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Недорого &amp; Быстро</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gtco-section gto-section-about"><!-- / сделал меньше отступ снизу при слиянии контактов и О НАС -->
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-6 animate-box feedback-form">
                <h3>Свяжитесь с нами и мы ответим</h3>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="fname">Имя</label>
                            <input type="text" id="fname" class="form-control" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Фамилия</label>
                            <input type="text" id="lname" class="form-control" placeholder="Ваша фамилия">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="Ваш email адрес">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="subject">Тема</label>
                            <input type="text" id="subject" class="form-control" placeholder="Ваша тема этого сообщения">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Сообщение</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Напишите нам в этом поле">{{$message}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Отправить" class="btn btn-primary">
                    </div>

                </form>		
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">

                <div class="gtco-contact-info">
                    <h3>Минск</h3>
                    <ul>
                        <li class="address">проспект Независимости, <br> д.1, офис - 4</li>
                        <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                        <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li class="url"><a href="http://texno-arena.by">texno-arena.by</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</div>

<div id="gtco-subscribe">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Подпишитесь на новости</h2>
                <p>Будьте первым, кто узнает о нашем новом ассортименте.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-12">
                <form class="form-inline">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Ваш email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="name" class="sr-only">Имя</label>
                            <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <button type="submit" class="btn btn-default btn-block">Подписаться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection