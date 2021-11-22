@section('header')
    <!doctype html>
<html id="EURODO" lang="ru">
<!--
    ** Coded by Ivan Dmitrienko
    ** https://www.fl.ru/users/nineteenofive/portfolio/
-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Eurodo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
<div id="mmenu" class="mmenu slideout-menu">
    <div class="menu-header">
        <a href="/"><img width="113" src="{{ asset('icons/logo.png') }}" alt=""></a>
    </div>
    <div class="menu-section">
        <a href="#user-location" class="select-location get-location">
            <i class="fas fa-map-marker-alt me-2"></i>Мадрид
        </a>
        <ul>
            <li><a href="/">Заказчикам</a></li>
            <li><a href="/">Исполнителям</a></li>
        </ul>
    </div>
</div>
<div id="page" class="panel-side">
    <div class="install-app install-app--not-installed">
        <div class="install-app__close">
            +
        </div>

        <div class="install-app__app">
            <div class="install-app__icon">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="55" height="55" rx="9.5" fill="white" stroke="#D7D7D7"/>
                    <path d="M34.1761 19.5798C33.9127 19.5737 33.651 19.62 33.4057 19.7159C33.1604 19.8119 32.9366 19.9557 32.7476 20.1389C32.5583 20.3222 32.4074 20.5411 32.3036 20.7832C32.1998 21.0252 32.1452 21.2855 32.1428 21.5489V31.952C32.1819 32.456 32.4098 32.9265 32.7807 33.2699C33.1516 33.6132 33.6385 33.8038 34.1439 33.8038C34.6494 33.8038 35.1363 33.6132 35.5072 33.2699C35.8781 32.9265 36.106 32.456 36.1451 31.952V21.5489C36.1441 21.027 35.9364 20.5267 35.5672 20.1577C35.1981 19.7887 34.6979 19.5809 34.1761 19.5798Z" fill="#468BEC"/>
                    <path d="M49.1014 27.8112C49.1556 21.2377 46.191 16.551 40.3521 13.5603C35.7356 11.1999 30.7819 9.94742 25.7761 8.86556C23.0036 8.25843 20.1538 8.08442 17.3279 8.34971C12.6291 8.79129 9.0724 11.6395 7.74767 16.1777C6.45304 20.6215 6.88057 25.0714 7.65534 29.5274C8.32774 33.3912 10.0639 36.7853 12.4545 39.8241C13.8896 41.6466 15.8667 42.9051 17.8999 44.0051C23.9535 47.2828 30.529 48.1719 37.2691 47.8628C43.2043 47.5939 46.5121 44.6152 48.1078 38.666C48.8485 35.9001 48.9588 33.068 49.1114 30.1054C49.1114 29.425 49.1114 28.6141 49.1114 27.8032L49.1014 27.8112ZM25.0394 31.952C25.0384 33.1449 24.5637 34.2884 23.7199 35.1314C22.8761 35.9746 21.7322 36.4481 20.5393 36.4481H16.2661V17.5807H21.1014C22.1451 17.5817 23.1459 17.9967 23.8841 18.7346C24.6223 19.4724 25.0378 20.473 25.0394 21.5167V31.952ZM38.7404 31.952C38.7404 33.171 38.2562 34.3401 37.3941 35.2022C36.5321 36.0641 35.3631 36.5484 34.1439 36.5484C32.925 36.5484 31.7558 36.0641 30.8937 35.2022C30.0319 34.3401 29.5475 33.171 29.5475 31.952V21.5489C29.5485 20.3387 30.0298 19.1783 30.8855 18.3226C31.7414 17.4668 32.9017 16.9856 34.1118 16.9846H34.1761C35.3864 16.9856 36.5467 17.4668 37.4024 18.3226C38.258 19.1783 38.7394 20.3387 38.7404 21.5489V31.952Z" fill="#468BEC"/>
                    <path d="M21.1014 20.1077H18.7931V33.919H20.5393C21.0608 33.9184 21.5608 33.7111 21.9297 33.3424C22.2984 32.9735 22.5058 32.4735 22.5064 31.952V21.5147C22.5064 21.1421 22.3582 20.7847 22.0949 20.5212C21.8314 20.2577 21.4739 20.1097 21.1014 20.1097" fill="#468BEC"/>
                </svg>

            </div>

            <div class="install-app__description">
                <div class="install-app__title">
                    Eurodo.es
                </div>

                <div class="install-app__text">
                    <span>Найдите исполнителя или работу</span>
                    <div class="install-app__status">
                        <span class="mod--not-installed">		НЕ УСТАНОВЛЕНО</span>
                        <span class="mod--installed">		УСТАНОВЛЕНО</span>
                    </div>

                </div>
            </div>
        </div>

        <div class="install-app__button">
            <span class="mod--not-installed">Установить</span>
            <span class="mod--installed">Открыть</span>

        </div>
    </div>
    <header>
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-3 col-md-4 d-lg-none header-mobile-button">
                    <a href="#" class="mobile-toggle-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="col d-md-none header-location">
                    <a href="#user-location" class="get-location"><i class="fas fa-map-marker-alt me-2"></i>Мадрид и длинное название города, ну очень длинное для теста</a>
                </div>
                <div class="col-3 col-lg-12 col-md-4 d-flex justify-content-end justify-content-md-center d-lg-block">
                    <div class="header-primary">
                        <div class="header-logo">
                            <a href="/"><img width="113" src="{{ asset('icons/logo.png') }}" alt=""></a>
                        </div>
                        <ul class="header-type">
                            <li><a href="/">Заказчикам</a></li>
                            <li class="active"><a href="/">Исполнителям</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @show
@section('content')
    @show


@section ('footer')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-2 order-5 order-md-1">
                        <div class="footer-copyrigth">
                            <div class="footer-logo">
                                <a href="/"><img width="113" src="{{ asset('icons/logo.png') }}" alt=""></a>
                            </div>
                            <div class="footer-copy">
                                © Eurodo 2021
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 order-2">
                        <div class="footer-menu">
                            <div class="fb-title">О НАС<div class="m-toggle"></div></div>
                            <ul>
                                <li><a href="/">Раздел 1</a></li>
                                <li><a href="/">Раздел 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 order-2">
                        <div class="footer-menu">
                            <div class="fb-title">Заказчикам<div class="m-toggle"></div></div>
                            <ul>
                                <li><a href="/">Раздел 1</a></li>
                                <li><a href="/">Раздел 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 order-2">
                        <div class="footer-menu">
                            <div class="fb-title">Исполнителям<div class="m-toggle"></div></div>
                            <ul>
                                <li><a href="/">Раздел 1</a></li>
                                <li><a href="/">Раздел 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 order-2">
                        <div class="f-webstores-wrapper">
                            <div class="fb-title">Приложение</div>
                            <div class="f-webstores">
                                <div class="el">
                                    <a href="/"><img src="{{ asset('icons/appstore.svg') }}" alt=""></a>
                                </div>
                                <div class="el">
                                    <a href="/"><img src="{{ asset('icons/googleplay.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 order-5 mt-1 mt-lg-0">
                        <div class="footer-media">
                            <div class="el-box order-2 order-lg-1">
                                <div class="el-title">Мы работаем с</div>
                                <div class="el-list">
                                    <img class="img-pays" src="https://foxnose.ru/assets/img/pays.png" alt="">
                                </div>
                            </div>
                            <div class="el-box order-1 order-lg-2">
                                <div class="el-title">Social media</div>
                                <div class="el-list social-list">
                                    <a href="#"><i class="fab fa-vk"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="f-language">
                            <div class="f-language_wrapper">
                                <i class="fas fa-globe-americas"></i>
                                <select name="" id="">
                                    <option value="/">Русский</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>
<div class="modal-base" id="user-location">
    <div class="modal-head">
        <div class="title">
            <a href="#" class="modal-back"><svg width="22" height="16" class="svg-icon icon-left">
                    <use xlink:href="../icons/icons.svg#arrow_back"></use>
                </svg></a>Выбрать ваш город
        </div>
        <div class="actions">
            <a href="/">Сбросить</a>
        </div>
    </div>
    <div class="modal-inner">
        <div class="modal-top-sticky">
            <div class="search-location">
                <input type="search" placeholder="Город, область" class="form-control">
            </div>
        </div>
        <div class="modal-inner-content">
            <ul class="locations-result">
                <li>Караганда</li>
                <li>Шахтинск</li>
                <li>Москва</li>
                <li>Санкт-Петербург</li>
                <li>Караганда</li>
                <li>Шахтинск</li>
                <li>Москва</li>
                <li>Санкт-Петербург</li>
                <li>Караганда</li>
                <li>Шахтинск</li>
                <li>Москва</li>
                <li>Санкт-Петербург</li>
            </ul>
        </div>
    </div>
</div>
<script src="{{ asset('js/fancybox.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
    @show

