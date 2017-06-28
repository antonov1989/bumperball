@extends('layouts.master')

@section('layout')
    <div class="page lp-page lp-vape grey">
        <!--Header-->
        <header>
            <div class="container">
                <div class="header-inner">
                    <div class="header-top clearfix hidden-xs">
                        <div class="scroll-menu">
                            <div class="scroll-menu-container">
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="social-btn">
                                        <a href="#" class="social-box" title="facebook" target="_blank">
                                            <div class="icon icon-facebook">

                                            </div>
                                        </a>
                                        <a href="#" class="social-box" title="twitter" target="_blank">
                                            <div class="icon icon-twitter">

                                            </div>
                                        </a>
                                        <a href="#" class="social-box" title="googleplus" target="_blank">
                                            <div class="icon icon-googleplus">

                                            </div>
                                        </a>
                                        <a href="#" class="social-box" title="instagram" target="_blank">
                                            <div class="icon icon-instagram">

                                            </div>
                                        </a>
                                        <a href="#" class="social-box" title="youtube" target="_blank">
                                            <div class="icon icon-youtube">

                                            </div>
                                        </a>
                                        <a href="#" class="social-box" title="vkontakte" target="_blank">
                                            <div class="icon icon-vk">

                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="nav-site pull-right">
                                    <button type="button" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div class="navbar-collapse" id="top-menu">
                                        <ul class="nav navbar-nav">
                                            <li><a href="/faq"><span>Вопросы и ответы</span></a></li>
                                            <li><a href="/price"><span>Оплата</span></a></li>
                                            <li><a href="/contacts"><span>Контакты</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                {{--<ul class="nav navbar-nav navbar-right">
                                    <li class="search">
                                        <div class="header-search">
                                            <a href="">поиск <i class="ion-ios-search"></i></a>
                                            <div class="search-dropdown">
                                                <form action="/search" method="get">
                                                    <div class="input-box">
                                                        <input type="text" name="q" class="form-control"/>
                                                        <button type="submit"><i class="ion-ios-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-dropdown">
                                        <div class="current">
                                            <span><i class="ion-android-person"></i> Меню</span>
                                        </div>
                                        <ul class="dropdown">
                                            <li><a href="/"><i class="ion-android-person-add"></i> Регистрация</a></li>
                                            <li><a href="/"><i class="ion-log-in"></i> Войти</a></li>
                                        </ul>
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div>

                    <div class="main-header">
                        <ul class="main-menu">
                            <li class="logo">
                                <div class="inner">
                                    <a href="/"><img src="/img/logo.png" alt="Bumperball"/></a>
                                </div>
                            </li>
                            <li class="btn-catalog-menu">
                                <div class="inner">
                                    <a href="/gallery" class="hidden-xs"><i class="ion-images"></i> галерея </a>
                                </div>
                            </li>
                            <li class="btn-second-menu">
                                <div class="inner">
                                    <a href="/video" class="hidden-xs"><i class="ion-ios-videocam"></i> видео </a>
                                </div>
                            </li>
                            <li class="btn-third-menu">
                                <div class="inner">
                                    <a href="/promo" class="hidden-xs"><i class="ion-alert"></i> акции </a>
                                </div>
                            </li>
                        </ul>

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

        <div class="header-margin"></div>

        @yield('content')

        <!--Footer-->
        <footer>
            <div class="container">
            </div>
            <div class="bottom-block">
                <div class="container">
                    <div class="col-sm-6 no-padd">
                        <div class="copyright">
                            &copy; 2017  Bumperball в Харькове
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
            
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('header .header-top').addClass('scrolling');
                } else {
                    $('header .header-top').removeClass('scrolling');
                }
            });
        })
    </script>
@endsection