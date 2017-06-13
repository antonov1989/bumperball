<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <title>{{ config('app.name') }} - @yield('title')</title>
        
        <meta name="description" content="VapingDog" />
        <meta name="keywords" content="VapingDog" />
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
                        <div class="" style="float: left; height: 600px; margin-top: 120px; width: 489px;">
                            <ul class="list-menu-left">
                                <li>
                                    <a id="i4" href="/cat/dronyi/kvadrokopteryi">Квадрокоптеры</a>
                                </li>
                                <li>
                                    <a id="i32" href="/cat/dronyi/geksakopteryi">Гексакоптеры</a>
                                </li>
                                <li>
                                    <a id="i33" href="/cat/dronyi/oktokopteryi">Октокоптеры</a>
                                </li>
                                <li>
                                    <a id="i74" href="/cat/dronyi/prochie-upravlyaemyie-dronyi">Прочие управляемые дроны</a>
                                </li>
                                <li>
                                    <a id="i34" href="/cat/dronyi/kameryi-dlya-dronov">Камеры для дронов</a>
                                </li>
                                <li>
                                    <a id="i9" href="/cat/dronyi/aksessuaryi-dlya-dronov">Аксессуары для дронов</a>
                                </li>
                                <li>
                                    <a id="i10" href="/cat/dronyi/zapchasti-dlya-dronov">Запчасти для дронов</a>
                                </li>
                                <li>
                                    <a id="i37" href="/cat/dronyi/aksessuaryi-dlya-dronov">Аксессуары для дронов</a>
                                </li>
                                <li>
                                    <a id="i38" href="/cat/dronyi/zapchasti-dlya-dronov">Запчасти для дронов</a>
                                </li>
                            </ul>
                        </div>
                        <div class="" style="float: left; height: 600px; margin-top: 120px; width: 881px;">
                            <div id="main-carousel" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="/img/lp_vape/slider/banner-1-small.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/banner-2-small.png" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/banner-4-small.jpg" />
                                </div>
                                <div class="item">
                                    <img src="/img/lp_vape/slider/banner-3-small.jpg" />
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
                
                <section class="interesting-models catalog-page clearfix">
                    <div class="container">
                        <div class="page-header clearfix">
                            <h1 class="name pull-left">электронные сигареты</h1>
                        </div>
                        
                        <div class="grid-catalog">
                            <div class="row">
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item-product col-xs-12 col-sm-4 col-md-6 col-lg-3 no-padd-xs">
                                    <div class="product-block product-small" itemscope itemtype="https://schema.org/Product">
                                        <div class="top-block">
                                            <div class="sale-box">
                                                <span class="onsale-bg"></span>
                                                <span class="onsale">SALE</span>
                                            </div>

                                            <div class="product-image-container">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product_img_link" itemprop="url">
                                                    <img src="/img/1_small.jpg" alt="Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="bottom-block">
                                            <h5 class="" itemprop="name">
                                                <a href="/item/startovyiy-nabor-kanger-topbox-mini-starter-kit-platinum-krtbmk7-1556" class="product-name" itemprop="url">
                                                    <span>Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)</span>
                                                </a>
                                            </h5>
                                            <div class="content_price" itemprop="offers" itemtype="https://schema.org/Offer">
                                                <meta itemprop="priceCurrency" content="UAH" />
                                                <span class="old-price product-price">2 399</span>
                                                <span class="price product-price product-price-new">2 349 грн</span>
                                            </div>
                                            <div class="wrap-block">
                                                <div class="button-container">
                                                    <a href="/store/add_to_cart/1556" id="addToCartButton_1556"><span>в корзину</span></a>
                                                    <script type="text/javascript">
                                                        $('#addToCartButton_1556').click(function() {
                                                            fbq('track', 'AddToCart', {
                                                                content_name: 'Стартовый набор Kanger TOPBOX Mini Starter kit Platinum (KRTBMK7)', 
                                                                content_category: 'Электронные сигареты, стартовые комплекты и моды',
                                                                content_ids: ['1556'],
                                                                content_type: 'product',
                                                                value: 2349.0,
                                                                currency: 'UAH' 
                                                            });
                                                            dataLayer.push({'event':'basket'});
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="box-btn">
                            <a href="/cat/veyping/elektronnyie-sigaretyi-startovyie-komplektyi-i-modyi" class="btn-main"><span>Смотреть все</span></a>
                        </div>
                    </div>
                </section>

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
    
        <nav id="menu">
            <ul>
                <li><a href="/">Главная</a></li>

                <li><a href="">Каталог товаров</a>
                    <ul>

                        <li><a href="">Дроны</a>
                            <ul>
                                    <li><a href="/cat/dronyi/kvadrokopteryi">Квадрокоптеры</a></li>
                                    <li><a href="/cat/dronyi/geksakopteryi">Гексакоптеры</a></li>
                                    <li><a href="/cat/dronyi/oktokopteryi">Октокоптеры</a></li>
                                    <li><a href="/cat/dronyi/prochie-upravlyaemyie-dronyi">Прочие управляемые дроны</a></li>
                                    <li><a href="/cat/dronyi/kameryi-dlya-dronov">Камеры для дронов</a></li>
                                    <li><a href="/cat/dronyi/aksessuaryi-dlya-dronov">Аксессуары для дронов</a></li>
                                    <li><a href="/cat/dronyi/zapchasti-dlya-dronov">Запчасти для дронов</a></li>
                            </ul>
                        </li>

                        <li><a href="">Видеокамеры</a>
                            <ul>
                                    <li><a href="/cat/videokameryi/ekshn-kameryi">Экшн-камеры</a></li>
                                    <li><a href="/cat/videokameryi/ruchnyie-kameryi">Ручные камеры</a></li>
                                    <li><a href="/cat/videokameryi/ip-kameryi">IP-Камеры</a></li>
                                    <li><a href="/cat/videokameryi/krepleniya-dlya-kamer">Крепления для камер</a></li>
                                    <li><a href="/cat/videokameryi/stabilizatsionnyie-podvesyi">Стабилизационные подвесы</a></li>
                                    <li><a href="/cat/videokameryi/monopodyi">Моноподы</a></li>
                                    <li><a href="/cat/videokameryi/aksessuaryi-dlya-kamer-i-podvesov">Аксессуары для камер и подвесов</a></li>
                            </ul>
                        </li>

                        <li><a href="">Умный дом</a>
                            <ul>
                                    <li><a href="/cat/umnyiy-dom/gadzhetyi-dlya-kuhni">Гаджеты для кухни</a></li>
                                    <li><a href="/cat/umnyiy-dom/gadzhetyi-dlya-domashnih-zhivotnyih">Гаджеты для домашних животных</a></li>
                                    <li><a href="/cat/umnyiy-dom/robotyi-pomoshniki">Роботы помошники</a></li>
                                    <li><a href="/cat/umnyiy-dom/umnyie-zamki">Умные замки</a></li>
                                    <li><a href="/cat/umnyiy-dom/umnyiy-svet">Умный свет</a></li>
                                    <li><a href="/cat/umnyiy-dom/umnyie-rozetki-i-vyiklyuchateli">Умные розетки и выключатели</a></li>
                                    <li><a href="/cat/umnyiy-dom/upravlenie-i-kontrol">Управление и контроль</a></li>
                                    <li><a href="/cat/umnyiy-dom/izveschateli-i-datchiki">Извещатели и датчики</a></li>
                            </ul>
                        </li>

                        <li><a href="">Все для здоровья</a>
                            <ul>
                                    <li><a href="/cat/vse-dlya-zdorovya/pulsometryi">Пульсометры</a></li>
                                    <li><a href="/cat/vse-dlya-zdorovya/fitnes-brasletyi">Фитнес-браслеты</a></li>
                                    <li><a href="/cat/vse-dlya-zdorovya/aksessuaryi-k-fitnes-brasletam">Аксессуары к фитнес-браслетам</a></li>
                                    <li><a href="/cat/vse-dlya-zdorovya/umnyie-chasyi">Умные часы</a></li>
                                    <li><a href="/cat/vse-dlya-zdorovya/analizatoryi-sostava-tela">Анализаторы состава тела</a></li>
                                    <li><a href="/cat/vse-dlya-zdorovya/tonometryi">Тонометры</a></li>
                            </ul>
                        </li>

                        <li><a href="">Мобильный транспорт</a>
                            <ul>
                                    <li><a href="/cat/mobilnyiy-transport/monokolesa">Моноколеса</a></li>
                                    <li><a href="/cat/mobilnyiy-transport/giroskuteryi">Гироскутеры</a></li>
                                    <li><a href="/cat/mobilnyiy-transport/girobordyi">Гироборды</a></li>
                            </ul>
                        </li>

                        <li><a href="">3-D печать и ручки</a>
                            <ul>
                                    <li><a href="/cat/3-d-pechat-i-ruchki/3-d-ruchki">3-D ручки</a></li>
                                    <li><a href="/cat/3-d-pechat-i-ruchki/3-d-printeryi">3-D принтеры</a></li>
                                    <li><a href="/cat/3-d-pechat-i-ruchki/aksessuaryi-dlya-3-d-ustroystv">Аксессуары для 3-D устройств</a></li>
                            </ul>
                        </li>

                        <li><a href="">Мобильные аксессуары</a>
                            <ul>
                                    <li><a href="/cat/mobilnyie-aksessuaryi/universalnyie-batarei">Универсальные батареи</a></li>
                                    <li><a href="/cat/mobilnyie-aksessuaryi/aksessuaryi-k-universalnyim-batareyam">Аксессуары к универсальным батареям</a></li>
                                    <li><a href="/cat/mobilnyie-aksessuaryi/chehlyi">Чехлы</a></li>
                                    <li><a href="/cat/mobilnyie-aksessuaryi/dok-stantsii-i-zaryadnyie-ustroystva">Док-станции и зарядные устройства</a></li>
                                    <li><a href="/cat/mobilnyie-aksessuaryi/kabeli-adapteryi-i-perehodniki">Кабели, адаптеры и переходники</a></li>
                                    <li><a href="/cat/mobilnyie-aksessuaryi/kartyi-pamyati-i-drugie-nositeli-informatsii">Карты памяти и другие носители информации</a></li>
                            </ul>
                        </li>

                        <li><a href="">Звук</a>
                            <ul>
                                    <li><a href="/cat/zvuk/naushniki">Наушники</a></li>
                                    <li><a href="/cat/zvuk/akustika">Акустика</a></li>
                                    <li><a href="/cat/zvuk/muzyikalnyie-gadzhetyi">Музыкальные гаджеты</a></li>
                            </ul>
                        </li>

                        <li><a href="">Вейпинг</a>
                            <ul>
                                    <li><a href="/cat/veyping/elektronnyie-sigaretyi-startovyie-komplektyi-i-modyi">Электронные сигареты, стартовые комплекты и моды</a></li>
                                    <li><a href="/cat/veyping/zhidkosti">Жидкости</a></li>
                                    <li><a href="/cat/veyping/komplektuyuschie-aksessuaryi-i-zapchasti">Комплектующие, аксессуары и запчасти</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/page/delivery">Оплата и доставка</a></li>
                <li><a href="/page/warranty">Гарантия</a></li>
                <li><a href="/contacts">Контакты</a></li>
            </ul>
        </nav>
        <!-- Login / Sign Up Modal -->
        
        <div class="modal fade" id="login-modal">
            <div class="modal-dialog">
                <div class="container">
                    <div class="modal-form">
                        <div class="tab-content">
                            <form class="tab-pane transition scale fade" id="signin-form" autocomplete="off" novalidate="novalidate">
                                <h3 class="modal-title space-bottom-2x">Войти</h3>
                                <div class="form-input">
                                    <input type="email" name="si_email" id="si_email" readonly="" onfocus="$(this).removeAttr('readonly');" required="" aria-required="true">
                                    <label for="si_email">Email</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                                <div class="form-input">
                                    <a class="helper-link" href="#">Забыли пароль?</a>
                                    <input type="password" name="si_password" id="si_password" readonly="" onfocus="$(this).removeAttr('readonly');" required="" aria-required="true">
                                    <label for="si_password">Password</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox" class="icheckbox"/>
                                    <span>Запомнить меня</span>
                                </label>
                                <div class="space-top-2x clearfix">
                                    <button type="button" class="btn btn-round btn-ghost btn-danger pull-left" data-dismiss="modal"><i class="ion-ios-close-empty"></i></button>
                                    <button type="submit" class="btn btn-round btn-ghost btn-success pull-right"><i class="ion-ios-checkmark-empty"></i></button>
                                </div>
                                <!-- Switching forms (Fake nav tab) -->
                                <div class="form-switch helper-text space-top-2x">Еще нет аккаунта? <a href="#form-1">Зарегистрироваться</a></div>
                            </form>

                            <form class="tab-pane transition scale fade active in" id="signup-form" novalidate="novalidate">
                                <h3 class="modal-title space-bottom-2x">Зарегистрироваться</h3>
                                <div class="form-input">
                                    <input type="email" name="su_email" id="su_email" required="" aria-required="true">
                                    <label for="su_email">Email</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                                <div class="form-input">
                                    <input type="password" name="su_password" id="su_password" required="" aria-required="true">
                                    <label for="su_password">Password</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                                <div class="form-input">
                                    <input type="password" name="su_password_repeat" id="su_password_repeat" required="" aria-required="true">
                                    <label for="su_password_repeat">Repeat password</label>
                                    <span class="error-label"></span>
                                    <span class="valid-label"></span>
                                </div>
                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox" class="icheckbox"/>
                                    <span>Subscribe for our news</span>
                                </label>
                                <div class="space-top-2x clearfix">
                                    <button type="button" class="btn btn-round btn-ghost btn-danger pull-left" data-dismiss="modal"><i class="ion-ios-close-empty"></i></button>
                                    <button type="submit" class="btn btn-round btn-ghost btn-success pull-right"><i class="ion-ios-checkmark-empty"></i></button>
                                </div>
                                <!-- Switching forms (Fake nav tab) -->
                                <div class="form-switch helper-text space-top-2x">Есть аккаунт? <a href="#form-2">Войти</a></div>
                            </form>
                        </div>
                        <!-- Hidden real nav tabs -->
                        <ul class="nav-tabs hidden">
                            <li id="form-1" class="active"><a href="#signup-form" data-toggle="tab" aria-expanded="true">Sign up</a></li>
                            <li id="form-2" class=""><a href="#signin-form" data-toggle="tab" aria-expanded="false">Sign in</a></li>
                        </ul>
                    </div>
                </div>

            </div>
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