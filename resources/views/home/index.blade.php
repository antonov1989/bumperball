@extends('layouts.public')

@section('title', 'Home Page')
@section('description', 'Bumperball')
@section('keywords', 'Bumperball')

@section('content')
    <!--Main-->
    <main>
        <section class="main-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a class="order-add-button" href="#" data-toggle="modal" data-target="#add-order">Заказать игру</a>
                    </div>
                    <div class="col-sm-6">
                         <a class="order-add-button" href="#" data-toggle="modal" data-target="#add-callback">Перезвоните мне</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-container">
                        <p>
                            Бампербол в СПб (футбол в шарах) - экстремальная, невероятно веселая, но абсолютно безопасная игра, одинаково подходящая, как детям, так и взрослым. Участники одеты в надувные шары, закрывающие все тело, кроме ног. Сталкиваясь друг с другом, игроки разлетаются в разные стороны, падают и кувыркаются, доставляя при этом немало удовольствия не только себе но и зрителям. Бампербол может по праву считаться одним из самых веселых видов активного отдыха!
                        </p>
                        <p>
                            Игра проводится опытными инструкторами, которые ни на одну секунду не заставят Вас скучать. В перерывах между играми в бампербол, инструкторами проводится множество развлекательных конкурсов, которые Вам запомнятся ничуть не меньше, чем сама игра.
                        </p>
                        <p>
                            При всей динамичности игры, данный вид спорта гораздо менее опасен, чем классический футбол. Большой надувной шар, закрывающий большую часть тела, обеспечивает полную безопасность игроков. Перед началом игры всем участникам раздаются наколенники, исключающие самые незначительные шансы на получение травмы. (Нужен реврайт)
                        </p>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </section>

        <div class="slider-bg hidden-xs">
            <div class="container">
                <div class="" style="float: left; height: 600px; width: 1370px;">
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

        <section class="description-product">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 text-container">
                        <h1 class="title-block">НЕ ЗНАЕШЬ ЧЕМ ЗАНЯТЬСЯ НА ВЫХОДНЫХ? ИГРАЙ В БАМПЕРБОЛ!</h1>

                        <p>
                            Если ты активный человек, любишь спорт или просто побегать. Если ты в душе еще ребенок и любишь подурачиться.
                            Если в тебе горит жажда к новым ощущениям и эмоциям, желание получить хороший заряд адреналина. Тогда бампербол - это то, что тебе нужно!
                        </p>
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
                    <div class="descr wow fadeIn">
                        Бампербол - это очень молодая и невероятно энергичная игра. <br />
                        Игроки надевают на себя защитные шары, в которых можно толкаться, падать, катиться.
                        Цель игры забить как можно больше мячей в ворота соперника.
                        Эта игра, которая не требует абсолютно никаких особых навыков. <br />
                        Начните играть и вы уже не сможете остановиться!
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/2.png" alt="">
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
                    <div class="descr wow fadeIn">
                        Шары сделаны из высокопрочного, пластичного, прозрачного материала. <br />
                        В таких шарах любой человек, вне зависимости от физической подготовки и навыков, а главное - абсолютно безопасно, может сталкиваться с другими игроками,
                            а также совершать кувырки через голову вперед, назад и в любую сторону.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/4.png" alt="">
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
                    <div class="title wow fadeIn">СТОИМОСТЬ ИГРЫ</div>
                    <div class="descr wow fadeIn">
                        В стоимость входит: аренда поля, инструктор, который расскажет правила игры и технику безопасности, судья, шары для игры, а так же вода.
                        Мы найдем место для проведения мероприятия в удобном для вас районе города.
                    </div>
                </div>
                <div class="inner scrollimation price-block">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/price/incity.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/price/outcity.png" alt="">
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
                    <div class="title wow fadeIn">КАК ИГРАТЬ В БАМПЕРБОЛ?</div>
                    <div class="descr wow fadeIn">
                        Минимальное колличество участников - 4 человека.<br />
                        Игроки делятся на команды в зависимости от количества участников.
                        Игроки каждой команды надевают шары разного цвета, чтобы различать своих и чужих и пытаются забить гол в ворота команды соперника.<br />
                        Вратарь может быть, а может и не быть. Фактически любой игрок (или несколько), оказавшийся ближе всех к своим воротам, пытается их защитить. <br />
                        В процессе игры участники постоянно сталкиваются друг с другом, разлетаясь в разные стороны, кувыркаются, стоят вверх ногами. Участвовать в такой "битве" очень весело и даже со стороны смотреть на это без смеха невозможно.<br />
                        После нескольких таймов можно проводить различные конкурсы с использованием шаров, а также катания в шарах.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/4.png" alt="">
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
                    <div class="title wow fadeIn">ОТМЕНА ЗАКАЗА</div>
                    <div class="descr wow fadeIn">
                        При отмене заказа менее чем за 48 часов - деньги не возвращаются. <br />
                        При отмене заказа менее чем за 7 дней - возвращается полная сумма, за исключением аренды поля. <br />
                        При отмене заказа более чем за 7 дней - возвращается полная сумма, с вычетом комиссии банка.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/2.png" alt="">
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
                    <div class="title wow fadeIn">ВЫЕЗД ЗА ЧЕРТУ ГОРОДА?</div>
                    <div class="descr wow fadeIn">
                        Вы можете так же заказать выездную игру за городом или в черте города на ваше место. Стоимость в этом случае будет меньше на 250 грн.
                    </div>
                </div>
                <div class="inner scrollimation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="content left-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="content right-content">
                                <div class="image wow zoomIn">
                                    <img src="/img/lp_bumper/4.png" alt="">
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
                                <p>Бампербол для вас</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 nopadding creative-square-box">
                    <div class="background-box" style="background-image: url(/img/lp_vape/accessories/1.png);"></div>
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <a href="/gallery" class="button style-8 style-2">ГАЛЕРЕЯ </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 nopadding creative-square-box">
                    <div class="background-box" style="background-image: url(/img/lp_vape/accessories/2.png);"></div>
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <a href="/video" class="button style-8 style-2">ВИДЕО </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 nopadding creative-square-box">
                    <div class="background-box" style="background-image: url(/img/lp_vape/accessories/3.png);"></div>
                    <div class="cell-view">
                        <div class="parallax-article">
                            <div class="info">
                                <a href="/map" class="button style-8 style-2">КАРТА </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main End-->

    <div id="bottomLine"></div>
    
    
    <!-- Modal -->
    <div id="add-order" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Заказать игру прямо сейчас</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отправить</button>
                </div>
            </div>

        </div>
    </div>
    
    <div id="add-callback" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Укажите свой номер телефона и мы Вам перезвоним!</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отправить</button>
                </div>
            </div>

        </div>
    </div>
@endsection