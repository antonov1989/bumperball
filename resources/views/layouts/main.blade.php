<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="@yield('keywords')" />
        <!--bootstrap css -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen" />
        <!--font-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/fonts/ico-parallax/icoparallax.css"/>
        <link rel="stylesheet" href="/css/fonts/font-mm/font-mm.css"/>
        <link rel="stylesheet" href="/css/fonts/ionicons/ionicons.min.css"/>
        <link rel="stylesheet" href="/css/fonts/fontawesome/font-awesome.min.css"/>
        <link rel="stylesheet" href="/css/fonts/font-icons-lp/icon-lp.css"/>
        <!--.css files -->
        <link rel="stylesheet" href="/css/libs/mmenu/jquery.mmenu.all.css"/>
        <link rel="stylesheet" href="/css/libs/owl-carousel/owl.carousel.css"/>
        <link rel="stylesheet" href="/css/libs/owl-carousel/owl.theme.css"/>
        <link rel="stylesheet" href="/css/libs/owl-carousel/owl.transitions.css"/>
        <link rel="stylesheet" href="/css/libs/form-styler/jquery.formstyler.css"/>
        <link rel="stylesheet" href="/css/libs/gallery/magnific-popup.css"/>
        <link rel="stylesheet" href="/css/libs/master-slider/masterslider.css"/>
        <link rel="stylesheet" href="/css/libs/notify/toastr.min.css"/>
        <link rel="stylesheet" href="/css/libs/animated/animate.css"/>

        <link rel="stylesheet" href="/css/style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
        <!-- Jquery -->
        <script src="/js/libs/jquery.min.js" type="text/javascript"></script>
        <!-- Bootstrap Jquery -->
        <script src="/js/libs/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="page lp-page lp-vape grey">
            <!--Header-->
            <header>
                <div class="container">
                    <div class="header-inner">
                        <div class="header-top clearfix hidden-xs">
                            <!--<div class="nav-site pull-left">
                                <button type="button" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div class="navbar-collapse" id="top-menu">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/page/about"><span>О магазине</span></a></li>
                                        <li><a href="/page/delivery"><span>Оплата и доставка</span></a></li>
                                        <li><a href="/page/warranty"><span>Гарантия</span></a></li>
                                        <li><a href="/contacts"><span>Контакты</span></a></li>
                                    </ul>
                                </div>
                            </div>-->

                            <ul class="nav navbar-nav navbar-left">
                                <li class="social-btn">
                                    <a href="#" class="social-box" title="facebook" target="_blank">
                                        <div class="icon">
                                            <i class="fa ion-social-facebook"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="social-box" title="twitter" target="_blank">
                                        <div class="icon">
                                            <i class="fa ion-social-twitter"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="social-box" title="googleplus" target="_blank">
                                        <div class="icon">
                                            <i class="fa ion-social-googleplus-outline"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="social-box" title="instagram" target="_blank">
                                        <div class="icon">
                                            <i class="fa ion-social-instagram-outline"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="social-box" title="youtube" target="_blank">
                                        <div class="icon">
                                            <i class="fa ion-social-youtube-outline"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <!--<li class="phone-numbers">
                                    <div class="current">
                                        <span>+380 (97) 521-37-73</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li><a href="">+380 (95) 521-37-73</a></li>
                                        <li><a href="">+380 (95) 521-37-73</a></li>
                                        <li><a href="">+380 (95) 521-37-73</a></li>
                                    </ul>
                                </li>-->
                                <li class="search">
                                    <div class="header-search">
                                        <a href="">поиск <i class="ion-ios-search"></i></a>
                                        <div class="search-dropdown">
                                            <form action="/shops/search" method="get">
                                                <div class="input-box">
                                                    <input type="text" name="q" class="form-control"/>
                                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden-xs">
                                    <a class="cart" href="/store/show_cart"><i class="ion-bag"></i><i class="cart-count">7</i></a>
                                </li>
                                <!--<li class="enter-btn">
                                    <a href="/signup"><i class="ion-android-person-add"></i> Регистрация</a>
                                </li>-->
                                <li class="menu-dropdown">
                                    <div class="current">
                                        <span><i class="ion-android-person"></i> Меню</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li><a href="/signup"><i class="ion-android-person-add"></i> Регистрация</a></li>
                                        <li><a href="/login"><i class="ion-log-in"></i> Войти</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="main-header">
                            <ul class="main-menu">
                                <li class="logo">
                                    <div class="inner">
                                        <a href="/"><img src="/img/logo.png" alt="VapinDog"/></a>
                                    </div>
                                </li>
                                <li class="dropdown btn-catalog-menu">
                                    <div class="inner">
                                        <a href="#" class="hidden-xs"><i class="ion-ios-calculator-outline"></i> калькулятор баз </a>
                                    </div>
                                </li>
                                <li class="dropdown btn-second-menu">
                                    <div class="inner">
                                        <a href="#" class="hidden-xs"><i class="ion-ios-calculator"></i> калькулятор койлов </a>
                                    </div>
                                </li>
                                <li class="dropdown btn-third-menu">
                                    <div class="inner">
                                        <a href="" class="hidden-xs"><i class="ion-ios-filing-outline"></i> хз пока что <i class="ion-ios-arrow-down"></i></a>
                                    </div>
                                </li>
                            </ul>

                            <!--<ul class="nav navbar-right hidden-xs">
                                <li>
                                    <div class="header-search">
                                        <a href="">поиск <i class="ion-ios-search"></i></a>
                                        <div class="search-dropdown">
                                            <form action="/shops/search" method="get">
                                                <div class="input-box">
                                                    <input type="text" name="q" class="form-control"/>
                                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="hidden-xs">
                                    <a href="/store/show_cart">корзина<div class="icon-cart">0</div></a>
                                </li>
                            </ul>-->

                            <div class="clearfix visible-xs"></div>

                            <div class="xs-search visible-xs">
                                <div class="xs-header-search">
                                    <div class="search-dropdown">
                                        <div class="input-box">
                                            <form action="/shops/search" method="get">
                                                <input type="text" name="q" class="form-control" placeholder="Поиск"/>
                                                <button type="submit"><i class="ion-ios-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Header End-->

            <!--Main-->
            <main>
                <div class="slider-bg hidden-xs">
                    <div class="container">
                        <div class="" style="float: left; height: 600px; margin-top: 120px; width: 1370px;">
                            <div id="main-carousel" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-12.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-1.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-2.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-3.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-4.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-5.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-6.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-7.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-8.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-9.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/slider-10.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="video-bg hidden-xs" data-vide-bg="/img/lp_vape/vape-video.mp4" data-vide-options="loop: true, muted: false, position: 0% 50%, resizing: true, autoplay: true">
                   <div class="container">
                       <div class="txt">Что такое вейпинг?</div>
                   </div>
                </div>-->

                <!--for mobile header-->
                <section class="intro intro-image fixed-bg visible-xs" data-stellar-background-ratio="0.3" data-stellar-ratio="0.3" style="background-image: url(/img/lp_vape/slider/banner-1.png);"></section>
                <!--for mobile header-->

                <section class="description-product">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12 text-container">
                                <h1 class="title-block">ТЫ НЕ ЗНАЕШЬ ЧЕМ ЗАНЯТЬСЯ НА ВЫХОДНЫХ? ИГРАЙ В БАМПЕРБОЛ!</h1>

                                <p>
                                    Если ты активный человек, любишь спорт или просто побегать. Если ты в душе еще ребенок и любишь подурачиться. Если в тебе горит желание познать что то новое. Тогда бампербол - это то, что тебе нужно! Побольше текста!</p>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>

                <div class="point-block">
                    <div class="container">
                        <div class="header-point">
                            <div class="number wow flipInY">1.</div>
                            <div class="title wow fadeIn">ЧТО ТАКОЕ БАМПЕРБОЛ?</div>
                            <div class="descr wow fadeIn">Бампербол - это очень молодая и невероятно энергичная игра. Это игра, которая не требует абсолютно никаких особых навыков. Начните играть и вы уже не сможете остановиться.</div>
                        </div>
                        <div class="inner scrollimation">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="content left-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/1.png" alt="">
                                        </div>
                                        <div class="txt wow slideInRight">
                                            <div class="cell">Море положительных эмоций, здоровье, адреналин и что то еще. Море положительных эмоций, здоровье, адреналин и что то еще</div>
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="content right-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/2.png" alt="">
                                        </div>
                                        <div class="txt wow slideInLeft">
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                            <div class="cell">Море положительных эмоций, здоровье, адреналин и что то еще</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="point-block">
                    <div class="container">
                        <div class="header-point">
                            <div class="number wow flipInY">2.</div>
                            <div class="title wow fadeIn">ЧТО ЭТО ЗА ШАРЫ ТАКИЕ?</div>
                            <div class="descr wow fadeIn">В таких шарах любой человек, вне зависимости от физической подготовки и навыков, а главное - абсолютно безопасно, может сталкиваться с другими игроками, а также совершать кувырки через голову вперед, назад и в любую сторону.</div>
                        </div>
                        <div class="inner scrollimation">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="content left-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/3.png" alt="">
                                        </div>
                                        <div class="txt wow slideInRight">
                                            <div class="cell">Море положительных эмоций, здоровье, адреналин и что то еще. Море положительных эмоций, здоровье, адреналин и что то еще</div>
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="content right-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/4.png" alt="">
                                        </div>
                                        <div class="txt wow slideInLeft">
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                            <div class="cell">Море положительных эмоций, здоровье, адреналин и что то еще</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="point-block">
                    <div class="container">
                        <div class="header-point">
                            <div class="number wow flipInY">3.</div>
                            <div class="title wow fadeIn">ГДЕ МОЖНО ИГРАТЬ В БАМПЕРБОЛ?</div>
                            <div class="descr wow fadeIn">
                                Минимальное колличество участников - 4 человека.<br />
                                Игроки делятся на команды в зависимости от количества участников. Игроки каждой команды надевают шары разного цвета, чтобы различать своих и чужих и пытаются забить гол в ворота команды соперника.<br />
                                Вратарь может быть, а может и не быть. Фактически любой игрок (или несколько), оказавшийся ближе всех к своим воротам, пытается их защитить. Но суть не в этом, а в том, что видимость в шарах ограничена, передвигаться в них, особенно с непривычки достаточно тяжело, и при этом вокруг бегает еще немало людей в огромных шарах.<br />
                                В процессе игры участники постоянно сталкиваются друг с другом, разлетаясь в разные стороны, кувыркаются, стоят вверх ногами. Участвовать в такой "битве" очень весело и даже со стороны смотреть на это без смеха невозможно.<br />
                                После нескольких таймов по "футболу в шарах" проводятся различные конкурсы с использованием шаров, а также катания в шарах.
                            </div>
                        </div>
                        <div class="inner scrollimation">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="content left-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/1.png" alt="">
                                        </div>
                                        <div class="txt wow slideInRight">
                                            <div class="cell">Море положительных эмоций, здоровье, адреналин и что то еще. Море положительных эмоций, здоровье, адреналин и что то еще</div>
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="content right-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/2.png" alt="">
                                        </div>
                                        <div class="txt wow slideInLeft">
                                            <div class="cell cell-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                                            <div class="cell">Море положительных эмоций, здоровье, адреналин и что то еще</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="point-block">
                    <div class="container">
                        <div class="header-point">
                            <div class="number wow flipInY">4.</div>
                            <div class="title wow fadeIn">КТО МОЖЕТ ИГРАТЬ В БАМПЕРБОЛ?</div>
                            <div class="descr wow fadeIn">Электронная сигарета хороший способ бросить курить без стресса для вашего организма!</div>
                        </div>
                        <div class="inner scrollimation">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="content left-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/3.png" alt="">
                                        </div>
                                        <div class="txt wow slideInRight">
                                            <div class="cell">Электронная сигарета работает по принципу выпаривания жидкости, в составе которой, нет вредных смол. Она не содержит канцерогенов не оставляет запаха, а эффект пассивного курения сводится к нулю.</div>
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="content right-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/4.png" alt="">
                                        </div>
                                        <div class="txt wow slideInLeft">
                                            <div class="cell cell-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                                            <div class="cell">Смолы, перегоревшая бумага, некачественный табак – все это вредит Вашему здоровью.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="point-block">
                    <div class="container">
                        <div class="header-point">
                            <div class="number wow flipInY">5.</div>
                            <div class="title wow fadeIn">А ЭТО БЕЗОПАСНО?</div>
                        </div>
                        <div class="inner scrollimation">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="content left-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/1.png" alt="">
                                        </div>
                                        <div class="txt wow slideInRight">
                                            <div class="cell">Пар электронной сигареты имеет такой же запах как и в жидкости, так что Вы и Ваше окружение будут вдыхать абсолютно безвредный пар со вкусом клубники, цитрусовых, мяты, шоколада или многих других ароматов. </div>
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="content right-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/2.png" alt="">
                                        </div>
                                        <div class="txt wow slideInLeft">
                                            <div class="cell cell-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                                            <div class="cell">От табачного дыма прованивается всё – одежда, руки, помещение где вы курите, волосы, неприятный запах изо рта. Приходиться покупать жвачки и разные элементы чтобы его перебить. А как страдает Ваше окружение, когда дышит этим всем?</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="point-block">
                    <div class="container">
                        <div class="header-point">
                            <div class="number wow flipInY">6.</div>
                            <div class="title wow fadeIn">В КАКИЕ ЕЩЕ ИГРЫ МОЖНО ИГРАТЬ С ШАРАМИ?</div>
                            <div class="descr wow fadeIn">Любишь покурить со своей компанией, когда выпьешь? </div>
                        </div>
                        <div class="inner scrollimation">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="content left-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/3.png" alt="">
                                        </div>
                                        <div class="txt wow slideInRight">
                                            <div class="cell">Ты, когда купил электронную сигарету и не навредил своему здоровью.</div>
                                            <div class="cell cell-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="content right-content">
                                        <div class="image wow zoomIn">
                                            <img src="/img/lp_bumper/4.png" alt="">
                                        </div>
                                        <div class="txt wow slideInLeft">
                                            <div class="cell cell-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                                            <div class="cell">Ты, когда хочется закурить, а у всех только сигареты.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="grid-accessories">
                    <div class="row nopadding">
                        <div class="col-sm-3 nopadding creative-square-box square-box-title">
                            <div class="cell-view">
                                <div class="parallax-article">
                                    <div class="info">
                                        <p>Устройства для вейпинга</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 nopadding creative-square-box">
                            <div class="background-box" style="background-image: url(/img/lp_vape/accessories/1.png);"></div>
                            <div class="cell-view">
                                <div class="parallax-article">
                                    <div class="info">
                                        <a href="/cat/veyping/elektronnyie-sigaretyi-startovyie-komplektyi-i-modyi/elektronnaya-sigareta" class="button style-8 style-2">ЭЛЕКТРОННЫЕ
                                            СИГАРЕТЫ </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 nopadding creative-square-box">
                            <div class="background-box" style="background-image: url(/img/lp_vape/accessories/2.png);"></div>
                            <div class="cell-view">
                                <div class="parallax-article">
                                    <div class="info">
                                        <a href="/cat/veyping/elektronnyie-sigaretyi-startovyie-komplektyi-i-modyi/startovyiy-komplekt" class="button style-8 style-2">СТАРТОВЫЙ
                                            КОМПЛЕКТ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 nopadding creative-square-box">
                            <div class="background-box" style="background-image: url(/img/lp_vape/accessories/3.png);"></div>
                            <div class="cell-view">
                                <div class="parallax-article">
                                    <div class="info">
                                        <a href="/cat/veyping/elektronnyie-sigaretyi-startovyie-komplektyi-i-modyi/batareynyiy-mod" class="button style-8">БАТАРЕЙНЫЙ МОД </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!--Main End-->

            <div class="sticky-btns">
                <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
            </div>

            <!--Footer-->
            <footer>
                <div class="container">
                </div>
                <div class="bottom-block">
                    <div class="container">
                        <div class="col-sm-6 no-padd">
                            <div class="copyright">
                                &copy; 2016  Интернет магазин VapingDog
                            </div>
                        </div>
                        <div class="col-sm-6 no-padd">
                            <div class="design">
                                <span>Дизайн и разработка сайта:</span>
                                <a href="http://wizardry.ua" target="_blank"><img src="/img/wizardry-logo.png" alt="Разработка и дизайн сайта - Wizardry" width="61"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--Footer End-->
        </div>

        <!-- Custom js file -->
        <script src="/js/libs/mmenu/jquery.mmenu.min.all.js" type="text/javascript"></script>
        <script src="/js/libs/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="/js/libs/parallax-js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
        <script src="/js/libs/form-styler/jquery.formstyler.min.js" type="text/javascript"></script>
        <script src="/js/libs/gallery/jquery.magnific-popup.js" type="text/javascript"></script>
        <script src="/js/libs/master-slider/masterslider.min.js" type="text/javascript"></script>
        <script src="/js/libs/jquery.dotdotdot.js" type="text/javascript"></script>
        <script src="/js/libs/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="/js/libs/validator/is.mobile.js" type="text/javascript"></script>
        <script src="/js/libs/validator/formcheck.js" type="text/javascript"></script>
        <script src="/js/libs/notify/toastr.min.js" type="text/javascript"></script>
        <script src="/js/libs/jquery-ui.js" type="text/javascript"></script>
        <script src="/js/custom.js" type="text/javascript"></script>

        <script src="/js/libs/isotope/isotope.pkgd.js" type="text/javascript"></script>
        <script src="/js/libs/isotope/masonry.min.js" type="text/javascript"></script>
        <script src="/js/libs/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="/js/libs/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="/js/libs/animated/wow.min.js" type="text/javascript"></script>
        <script src="/js/libs/waypoints.min.js" type="text/javascript"></script>
        <script src="/js/libs/ytplayer/jquery.vide.js" type="text/javascript"></script>

        <script type="text/javascript">
            /*=================================================================
             Parallax Background
             =================================================================*/
            $(window).stellar({
                responsive: true,
                horizontalScrolling: false,
                hideDistantElements: false,
                horizontalOffset: 0,
                verticalOffset: 0
            });

            wow = new WOW(
                {
                    boxClass:     'wow',
                    animateClass: 'animated',
                    offset:       300,
                    mobile:       false,
                    live:         true
                }
            );
            wow.init();

            $(function(){
                $("#main-carousel").owlCarousel({
                    autoPlay: 5000,
                    navigation : false, // Show next and prev buttons
                    slideSpeed : 3000,
                    paginationSpeed : 1000,
                    singleItem: true,
                    stopOnHover: true,
                    pagination: true
                });

                /*
                 *  PARALLAX
                 */
                if ($.fn.parallax) {
                    //parallax on fullscreen slider
                    $.each($('.parallax-bg'), function(i) {
                        var background = $(this).data('background');
                        $(this).css({
                            'background': 'url(' + background + ') 50% 0 / cover no-repeat',
                            'background-attachment': 'fixed'
                        });
                    });
                    $('.parallax-bg').parallax("50%", 0.5);
                }

        //        var BV = new $.BigVideo();
        //        BV.init();
        //        BV.show('/img/lp_vape/vape-video.mp4');

                var e = $(".container-masonry");
                e.imagesLoaded(function() {
                    e.isotope({
                        itemSelector: ".nf-item",
                        layoutMode: "masonry",
                        masonry: {
                            columnWidth: 0,
                            gutter: 0
                        }
                    })
                }), $(".container-filter").on("click", ".categories", function() {
                    var a = $(this).attr("data-filter");
                    e.isotope({
                        filter: a
                    })
                });
                var a = $(".container-grid");
                a.imagesLoaded(function() {
                    a.isotope({
                        itemSelector: ".nf-item",
                        layoutMode: "fitRows"
                    })
                }), $(".container-filter").on("click", ".categories", function() {
                    var e = $(this).attr("data-filter");
                    a.isotope({
                        filter: e
                    })
                }), $(".categories-filter").each(function(e, a) {
                    var i = $(a);
                    i.on("click", ".categories", function() {
                        i.find(".active").removeClass("active"), $(this).addClass("active")
                    })
                });

                /** Magnific Popup Init
                 **********************************************************/
                // Image Popup
                if($('.popup-img').length > 0) {
                    $('.popup-img').magnificPopup({
                        type:'image',
                        gallery:{
                            enabled:true
                        },
                        removalDelay: 300,
                        mainClass: 'mfp-fade'

                    });
                }

                /* ---------------------------------------------- /*
                 * Scrolling Animations
                 /* ---------------------------------------------- */
                $('.scrollimation').waypoint(function(){
                    $(this).addClass('in');
                },{offset:'80%'});
            })
        </script>
    </body>
</html>