@extends('layouts.app')

@section('meta')
    <title>{{ $seo->meta_title ? $seo->meta_title : settings('company_name') }}</title>
@endsection

@section('content')

    <!-- Intro -->
    <section class="home_intro">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- row -->
                    <div class="home_intro__row">

                        <!-- row > left -->
                        <div class="home_intro__row-left">

                            <!-- text -->
                            <div class="home_intro__text">

                                <h1>
                                    {{ $seo->h1 }}
                                </h1>

                                <p>
                                    {{ $seo->excerpt }}
                                </p>

                                <a href="javascript:;" data-src="#modalSubmitApplication" data-fancybox class="btn btn-opacity btn-opacity-white">
                                    {{ __( 'Оставить заявку' ) }}
                                </a>

                            </div>
                            <!-- end text -->

                            <!-- Sales -->
                            <ul class="home_intro__sales">

                                <li>

                                    <a href="#">
                                        <small>акция</small>
                                        <p>Ботулинотерапия -15%</p>
                                    </a>

                                </li>

                                <li>

                                    <a href="#">
                                        <small>акция</small>
                                        <p>Лазерная хирургия -30%</p>
                                    </a>

                                </li>

                                <li>

                                    <a href="#">
                                        <small>акция</small>
                                        <p>Безинъекционная мезотерапия -8%</p>
                                    </a>

                                </li>

                                <li>

                                    <a href="#" class="archive">
                                        <img
                                            src="assets/images/icons/plus.svg"
                                            alt=""
                                            title=""
                                        >
                                        <p>Больше акций</p>
                                    </a>

                                </li>

                            </ul>
                            <!-- End Sales -->

                        </div>
                        <!-- end row > left -->

                        <!-- row > right -->
                        <div class="home_intro__row-right">

                            <!-- app -->
                            <div class="home_intro__app">

                                <!-- point -->
                                <div class="home_intro__app-point one">
                                        <span class="homeIntroPoint">
                                            <i>+</i>
                                            <i>-</i>
                                        </span>

                                    <!-- message -->
                                    <div class="home_intro__app-point-message left bottom">
                                        <p>Лазерная хирургия -30%</p>
                                        <a href="#">Смотреть акцию</a>
                                    </div>
                                    <!-- end message -->

                                </div>
                                <!-- end point -->

                                <!-- point -->
                                <div class="home_intro__app-point two">
                                        <span class="homeIntroPoint">
                                            <i>+</i>
                                            <i>-</i>
                                        </span>

                                    <!-- message -->
                                    <div class="home_intro__app-point-message right top">
                                        <p>Ботулинотерапия -15%</p>
                                        <a href="#">Смотреть акцию</a>
                                    </div>
                                    <!-- end message -->

                                </div>
                                <!-- end point -->

                                <!-- point -->
                                <div class="home_intro__app-point three">
                                        <span class="homeIntroPoint">
                                            <i>+</i>
                                            <i>-</i>
                                        </span>

                                    <!-- message -->
                                    <div class="home_intro__app-point-message right bottom">
                                        <p>Безинъекционная мезотерапия -8%</p>
                                        <a href="#">Смотреть акцию</a>
                                    </div>
                                    <!-- end message -->

                                </div>
                                <!-- end point -->

                                <img
                                    src="assets/images/home-intro-woman.png"
                                    alt=""
                                    title=""
                                    class="img-responsive"
                                >

                            </div>
                            <!-- end app -->

                        </div>
                        <!-- end row > right -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Intro -->

    @include( 'home.advantages' )

    @include( 'home.directions' )

    <!-- Doctors Last -->
    <section class="doctors_last">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Headpanel -->
                    <div class="headpanel">

                        <!-- Title -->
                        <h2 class="headpanel__title">
                            Наши врачи косметологи
                        </h2>
                        <!-- End Title -->

                        <!-- Link -->
                        <div class="headpanel__archive">

                            <a href="#">
                                Смотреть всех врачей
                            </a>

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- List -->
                    <ul class="doctors__list">

                        <li>

                            <!-- Item -->
                            <div class="doctors__list-item">

                                <!-- photo -->
                                <div class="doctors__list-item-photo">

                                    <span class="badge">Опыт 17 лет</span>

                                    <a href="#">
                                        <img
                                            src="assets/images/doctors/doctor-1.png"
                                            alt=""
                                            title=""
                                        >
                                    </a>

                                </div>
                                <!-- end photo -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="doctors__list-item-title">
                                        Колесникова Наталья Геннадьевна
                                    </h5>
                                    <!-- end title -->
                                </a>

                                <!-- excerpt -->
                                <p class="doctors__list-item-excerpt">
                                    Венеролог, Дерматолог, Косметолог
                                </p>
                                <!-- end excerpt -->

                            </div>
                            <!-- End Item -->

                        </li>

                        <li>

                            <!-- Item -->
                            <div class="doctors__list-item">

                                <!-- photo -->
                                <div class="doctors__list-item-photo">

                                    <span class="badge">Опыт 9 лет</span>

                                    <a href="#">
                                        <img
                                            src="assets/images/doctors/doctor-2.png"
                                            alt=""
                                            title=""
                                        >
                                    </a>

                                    <!-- links -->
                                    <ul class="doctors__list-item-links">

                                        <li>

                                            <a href="#">
                                                <img
                                                    src="assets/images/icons/comments.svg"
                                                    alt=""
                                                    title=""
                                                >
                                                Подробнее
                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">
                                                <img
                                                    src="assets/images/icons/play.svg"
                                                    alt=""
                                                    title=""
                                                >
                                                Видео
                                            </a>

                                        </li>

                                        <li>

                                            <a href="#">
                                                <img
                                                    src="assets/images/icons/location.svg"
                                                    alt=""
                                                    title=""
                                                >
                                                Клиника
                                            </a>

                                        </li>

                                    </ul>
                                    <!-- end links -->

                                </div>
                                <!-- end photo -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="doctors__list-item-title">
                                        Авин Марика
                                    </h5>
                                    <!-- end title -->
                                </a>

                                <!-- excerpt -->
                                <p class="doctors__list-item-excerpt">
                                    Венеролог, Дерматолог, Косметолог
                                </p>
                                <!-- end excerpt -->

                            </div>
                            <!-- End Item -->

                        </li>

                        <li>

                            <!-- Item -->
                            <div class="doctors__list-item">

                                <!-- photo -->
                                <div class="doctors__list-item-photo">

                                    <span class="badge">Опыт 13 лет</span>

                                    <a href="#">
                                        <img
                                            src="assets/images/doctors/doctor-3.png"
                                            alt=""
                                            title=""
                                        >
                                    </a>

                                </div>
                                <!-- end photo -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="doctors__list-item-title">
                                        Краснова Ирина Викторовна
                                    </h5>
                                    <!-- end title -->
                                </a>

                                <!-- excerpt -->
                                <p class="doctors__list-item-excerpt">
                                    Венеролог, Дерматолог, Дерматоонколог, Косметолог
                                </p>
                                <!-- end excerpt -->

                            </div>
                            <!-- End Item -->

                        </li>

                        <li>

                            <!-- Item -->
                            <div class="doctors__list-item">

                                <!-- photo -->
                                <div class="doctors__list-item-photo">

                                    <span class="badge">Опыт 15 лет</span>

                                    <a href="#">
                                        <img
                                            src="assets/images/doctors/doctor-4.png"
                                            alt=""
                                            title=""
                                        >
                                    </a>

                                </div>
                                <!-- end photo -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="doctors__list-item-title">
                                        Нилова Светлана Андреевна
                                    </h5>
                                    <!-- end title -->
                                </a>

                                <!-- excerpt -->
                                <p class="doctors__list-item-excerpt">
                                    Дерматолог, Косметолог
                                </p>
                                <!-- end excerpt -->

                            </div>
                            <!-- End Item -->

                        </li>

                    </ul>
                    <!-- End List -->

                    <!-- Footer -->
                    <div class="doctors_last__footer">

                        <a href="" class="btn btn-opacity">
                            Смотреть всех врачей
                        </a>

                    </div>
                    <!-- End Footer -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Doctors Last -->

    <!-- Reviews Slider -->
    <section class="reviews_slider">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- inner -->
                    <div class="reviews_slider__inner">

                        <!-- title -->
                        <h2 class="reviews_slider__title">
                            Отзывы нашей клиники
                        </h2>
                        <!-- end title -->

                        <!-- archive -->
                        <div class="reviews_slider__archive">

                            <a href="#">
                                Смотреть все
                            </a>

                        </div>
                        <!-- end archive -->

                        <!-- slider -->
                        <div class="swiper swiperReviews">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <!-- item -->
                                    <div class="reviews__list-item">

                                        <!-- header -->
                                        <div class="reviews__list-item-header">

                                            <img
                                                src="assets/images/icons/like.svg"
                                                alt=""
                                                title=""
                                            >

                                            <span>Осипова Ирина Владимировна</span>

                                        </div>
                                        <!-- end header -->

                                        <!-- content -->
                                        <div class="reviews__list-item-content">

                                            Хочу выразить свою признательность и благодарность врачу - косметологу Колесниковой Наталье Геннадьевне. Особенно хочется отметить её индивидуальный и профессиональный подход и внимательность. Лазерная эпиляция . чистка лица и др. процедуры, которые я делаю у неё, не вызывают дискомфорта и чувства неловкости. Посещать её стала по совету дочери, которая уже давно является её пациентом. Так же в свою очередь , хотела бы посоветовать её всем, кто ещё не нашел своего косметолога. Дельный совет по уходу за кожей лица и тела, подбор препаратов для красоты волос  и кожи, а так же позитив и хорошее настроение - это всё Колесникова Наталья Геннадьевна.

                                        </div>
                                        <!-- end content -->

                                        <!-- footer -->
                                        <div class="reviews__list-item-footer">

                                            21 декабря, 2021 года

                                        </div>
                                        <!-- end footer -->

                                    </div>
                                    <!-- end item -->

                                </div>
                                <!-- End Slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <!-- item -->
                                    <div class="reviews__list-item">

                                        <!-- header -->
                                        <div class="reviews__list-item-header">

                                            <img
                                                src="assets/images/icons/like.svg"
                                                alt=""
                                                title=""
                                            >

                                            <span>Осипова Ирина Владимировна</span>

                                        </div>
                                        <!-- end header -->

                                        <!-- content -->
                                        <div class="reviews__list-item-content">

                                            Хочу выразить свою признательность и благодарность врачу - косметологу Колесниковой Наталье Геннадьевне. Особенно хочется отметить её индивидуальный и профессиональный подход и внимательность. Лазерная эпиляция . чистка лица и др. процедуры, которые я делаю у неё, не вызывают дискомфорта и чувства неловкости. Посещать её стала по совету дочери, которая уже давно является её пациентом. Так же в свою очередь , хотела бы посоветовать её всем, кто ещё не нашел своего косметолога. Дельный совет по уходу за кожей лица и тела, подбор препаратов для красоты волос  и кожи, а так же позитив и хорошее настроение - это всё Колесникова Наталья Геннадьевна.

                                        </div>
                                        <!-- end content -->

                                        <!-- footer -->
                                        <div class="reviews__list-item-footer">

                                            21 декабря, 2021 года

                                        </div>
                                        <!-- end footer -->

                                    </div>
                                    <!-- end item -->

                                </div>
                                <!-- End Slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <!-- item -->
                                    <div class="reviews__list-item">

                                        <!-- header -->
                                        <div class="reviews__list-item-header">

                                            <img
                                                src="assets/images/icons/like.svg"
                                                alt=""
                                                title=""
                                            >

                                            <span>Осипова Ирина Владимировна</span>

                                        </div>
                                        <!-- end header -->

                                        <!-- content -->
                                        <div class="reviews__list-item-content">

                                            Хочу выразить свою признательность и благодарность врачу - косметологу Колесниковой Наталье Геннадьевне. Особенно хочется отметить её индивидуальный и профессиональный подход и внимательность. Лазерная эпиляция . чистка лица и др. процедуры, которые я делаю у неё, не вызывают дискомфорта и чувства неловкости. Посещать её стала по совету дочери, которая уже давно является её пациентом. Так же в свою очередь , хотела бы посоветовать её всем, кто ещё не нашел своего косметолога. Дельный совет по уходу за кожей лица и тела, подбор препаратов для красоты волос  и кожи, а так же позитив и хорошее настроение - это всё Колесникова Наталья Геннадьевна.

                                        </div>
                                        <!-- end content -->

                                        <!-- footer -->
                                        <div class="reviews__list-item-footer">

                                            21 декабря, 2021 года

                                        </div>
                                        <!-- end footer -->

                                    </div>
                                    <!-- end item -->

                                </div>
                                <!-- End Slide -->

                            </div>
                            <!-- End Wrapper -->

                            <!-- controls -->
                            <div class="reviews_slider__controls">

                                <!-- controls > left -->
                                <div class="reviews_slider__controls-left">

                                    <div class="swiper-button-prev"></div>

                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- End Pagination -->

                                    <div class="swiper-button-next"></div>

                                </div>
                                <!-- end controls > left -->

                                <!-- controls > right -->
                                <div class="reviews_slider__controls-right">

                                    <a href="#" class="btn">
                                        Оставить свой отзыв
                                    </a>

                                    <a href="#" class="btn btn-transparent">
                                        Смотреть все
                                    </a>


                                </div>
                                <!-- end controls > right -->

                            </div>
                            <!-- end controls -->



                        </div>
                        <!-- end slider -->

                    </div>
                    <!-- end inner -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Reviews Slider -->

    @include('partials.news-last')

    <!-- Intro Video -->
    <section class="intro_video">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Row -->
                    <div class="intro_video__row">

                        <!-- Row > Left -->
                        <div class="intro_video__row-left">

                            <!-- Video -->
                            <a href="#" class="intro_video__video">

                                <!-- text -->
                                <div class="intro_video__video-text">

                                    <h3 class="intro_video__video-text-title">Пластическая хирургия</h3>

                                    <p>Если вы не готовы сейчас обратиться к пластическому хирургу, рекомендуем вам узнать больше о нитях Aptos – запишитесь на консультацию к нашим опытным дерматокосметологам.</p>

                                    <!-- author -->
                                    <div class="intro_video__author">

                                        <!-- author > photo -->
                                        <div class="intro_video__author-photo">

                                            <img
                                                src="assets/images/users/user-1.png"
                                                alt=""
                                                title=""
                                                class="img-responsive"
                                            >

                                        </div>
                                        <!-- end author > photo -->

                                        <!-- author > text -->
                                        <div class="intro_video__author-text">

                                            <div>
                                                <small>Хирург</small>
                                                <span>Кулиев Сердар Атаевич</span>
                                            </div>

                                        </div>
                                        <!-- end author > text -->

                                    </div>
                                    <!-- end author -->

                                </div>
                                <!-- end text -->

                            </a>
                            <!-- End Video -->

                        </div>
                        <!-- End Row > Left -->

                        <!-- Row > Right -->
                        <div class="intro_video__row-right">

                            <!-- Text -->
                            <div class="intro_video__text">

                                <h3>3-х минутное видео о пластической хирургии</h3>

                                <p>Красота не имеет возраста, она подчиняется особым вневременным законам гармонии: открытый взгляд, высокие скулы, четкий овал лица и стройная, подтянутая фигура с упругими формами.</p>

                                <p>Теперь стать заметно моложе и замедлить процессы старения без оперативных вмешательств возможно благодаря нитям Aptos.</p>

                                <a href="#" class="btn btn-opacity">
                                    Смотреть все услуги
                                </a>

                            </div>
                            <!-- End Text -->

                        </div>
                        <!-- End Row > Right -->

                    </div>
                    <!-- End Row -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Intro Video -->

    @include('partials.contacts')

@endsection
