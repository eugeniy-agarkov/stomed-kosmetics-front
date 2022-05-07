@extends('layouts.app')

@section('meta')
    <title>{{ __( 'Галерея' ) }}</title>
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
                                    Сеть клиник «Столица» пластической хирургии и косметологии
                                </h1>

                                <p>
                                    Сеть медицинских клиник «Столица» – это ультрасовременная инфраструктура с широким спектром профильных услуг.
                                </p>

                                <a href="#" class="btn btn-opacity btn-opacity-white">
                                    Оставить заявку
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

    <!-- Advantages -->
    <section class="advantages">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- head -->
                    <div class="advantages__head">

                        <!-- Title -->
                        <h2 class="advantages__head-title">
                            Преимущества нашей клиники
                        </h2>
                        <!-- End Title -->

                        <p class="advantages__head-excerpt">Сеть медицинских клиник «Столица» – это ультрасовременная инфраструктура с широким спектром профильных услуг. Если Вы ищите комфортное медицинское обслуживание, деликатный персонал и гарантию качества, Вам – в «Столицу». Подробнее</p>

                    </div>
                    <!-- end head -->

                    <!-- slider -->
                    <div class="swiper advantages__slider swiperAdvantages">

                        <!-- Wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">

                                <!-- item -->
                                <div class="advantages__list-item">

                                    <img
                                        src="assets/images/icons/advantages-support.svg"
                                        alt=""
                                        title=""
                                    >

                                    <span>Бесплатная консультация</span>

                                </div>
                                <!-- end item -->

                            </div>
                            <!-- End Slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">

                                <!-- item -->
                                <div class="advantages__list-item">

                                    <img
                                        src="assets/images/icons/advantages-services.svg"
                                        alt=""
                                        title=""
                                    >

                                    <span>Большой выбор услуг</span>

                                </div>
                                <!-- end item -->

                            </div>
                            <!-- End Slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">

                                <!-- item -->
                                <div class="advantages__list-item">

                                    <img
                                        src="assets/images/icons/advantages-equipment.svg"
                                        alt=""
                                        title=""
                                    >

                                    <span>Новейшее оборудование</span>

                                </div>
                                <!-- end item -->

                            </div>
                            <!-- End Slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">

                                <!-- item -->
                                <div class="advantages__list-item">

                                    <img
                                        src="assets/images/icons/advantages-sale.svg"
                                        alt=""
                                        title=""
                                    >

                                    <span>Гибкая система скидок</span>

                                </div>
                                <!-- end item -->

                            </div>
                            <!-- End Slide -->

                        </div>
                        <!-- End Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- End Pagination -->

                    </div>
                    <!-- end slider -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Advantages -->

    <!-- Categories -->
    <section class="categories">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12 col-md-6 col-lg-6 one">

                    <!-- Item -->
                    <div class="categories__item">

                        <!-- text -->
                        <div class="categories__item-text">

                            <!-- content -->
                            <div class="categories__item-text-content">

                                <!-- title -->
                                <h4 class="categories__item-title">
                                    Классическая косметология
                                </h4>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="categories__item-list">

                                    <li>
                                        <a href="#">Пилинг лица</a>
                                    </li>

                                    <li>
                                        <a href="#">Чистка лица у косметолога</a>
                                    </li>

                                    <li>
                                        <a href="#">Лечение растяжек (стрий)</a>
                                    </li>

                                    <li>
                                        <a href="#">Лечение сосудистой патологии</a>
                                    </li>

                                    <li>
                                        <a href="#">Нитевой лифтинг лица</a>
                                    </li>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end content -->

                            <!-- footer -->
                            <div class="categories__item-text-footer">

                                <a href="#" class="btn btn-white">
                                    <span>Смотреть все услуги</span>
                                    <i>Перейти</i>
                                </a>

                            </div>
                            <!-- end footer -->

                        </div>
                        <!-- end text -->

                        <img
                            src="assets/images/categories-item-1.png"
                            alt=""
                            title=""
                            class="img-responsive"
                        >

                    </div>
                    <!-- End Item -->

                </div>
                <!-- end col -->

                <!-- col -->
                <div class="col-sm-12 col-md-6 col-lg-6 one">

                    <!-- Item -->
                    <div class="categories__item">

                        <!-- text -->
                        <div class="categories__item-text">

                            <!-- content -->
                            <div class="categories__item-text-content">

                                <!-- title -->
                                <h4 class="categories__item-title">
                                    Инъекционная косметология
                                </h4>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="categories__item-list">

                                    <li>
                                        <a href="#">Плазмолифтинг лица</a>
                                    </li>

                                    <li>
                                        <a href="#">Плазмолифтинг шеи</a>
                                    </li>

                                    <li>
                                        <a href="#">Биоревитализация</a>
                                    </li>

                                    <li>
                                        <a href="#">Увеличение губ</a>
                                    </li>

                                    <li>
                                        <a href="#">Контурная пластика</a>
                                    </li>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end content -->

                            <!-- footer -->
                            <div class="categories__item-text-footer">

                                <a href="#" class="btn btn-white">
                                    <span>Смотреть все услуги</span>
                                    <i>Перейти</i>
                                </a>

                            </div>
                            <!-- end footer -->

                        </div>
                        <!-- end text -->

                        <img
                            src="assets/images/categories-item-2.png"
                            alt=""
                            title=""
                            class="img-responsive"
                        >

                    </div>
                    <!-- End Item -->

                </div>
                <!-- end col -->

                <!-- col -->
                <div class="col-sm-12 two">

                    <!-- Item -->
                    <div class="categories__item full">

                        <!-- text -->
                        <div class="categories__item-text">

                            <!-- content -->
                            <div class="categories__item-text-content">

                                <!-- title -->
                                <h4 class="categories__item-title">
                                    Аппаратная косметология
                                </h4>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="categories__item-list">

                                    <li>
                                        <a href="#">Фототерапия кожи лица на аппарате HARMONY XL</a>
                                    </li>

                                    <li>
                                        <a href="#">Безоперационный SMAS-лифтинг: лифтинг тела (до 1500 линий)</a>
                                    </li>

                                    <li>
                                        <a href="#">Безоперационный SMAS-лифтинг</a>
                                    </li>

                                    <li>
                                        <a href="#">Фотодинамическая терапия на аппарате HELEO 4 (1 зона)</a>
                                    </li>

                                    <li>
                                        <a href="#">Безынъекционная мезотерапия методом электропорации INFUSION
                                        </a>
                                    </li>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end content -->

                            <!-- footer -->
                            <div class="categories__item-text-footer">

                                <a href="#" class="btn btn-white">
                                    <span>Смотреть все услуги</span>
                                    <i>Перейти</i>
                                </a>

                            </div>
                            <!-- end footer -->

                        </div>
                        <!-- end text -->

                        <img
                            src="assets/images/categories-item-3.png"
                            alt=""
                            title=""
                            class="img-responsive"
                        >

                    </div>
                    <!-- End Item -->

                </div>
                <!-- end col -->

                <!-- col -->
                <div class="col-sm-12 col-md-4 col-lg-4 three">

                    <!-- Item -->
                    <div class="categories__item mini">

                        <!-- text -->
                        <div class="categories__item-text">

                            <!-- content -->
                            <div class="categories__item-text-content">

                                <!-- title -->
                                <h4 class="categories__item-title">
                                    Дерматология
                                </h4>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="categories__item-list">

                                    <li>
                                        <a href="#">Нарушение оттенка</a>
                                    </li>

                                    <li>
                                        <a href="#">Выделения с неприятным запахом</a>
                                    </li>

                                    <li>
                                        <a href="#">Выпадение волос</a>
                                    </li>

                                    <li>
                                        <a href="#">Изменение внешнего вида ногтевых пластин</a>
                                    </li>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end content -->

                            <!-- footer -->
                            <div class="categories__item-text-footer">

                                <a href="#" class="btn btn-white">
                                    <span>Смотреть все услуги</span>
                                    <i>Перейти</i>
                                </a>

                            </div>
                            <!-- end footer -->

                        </div>
                        <!-- end text -->

                        <img
                            src="assets/images/categories-item-4.png"
                            alt=""
                            title=""
                            class="img-responsive"
                        >

                    </div>
                    <!-- End Item -->

                </div>
                <!-- end col -->

                <!-- col -->
                <div class="col-sm-12 col-md-4 col-lg-4 three">

                    <!-- Item -->
                    <div class="categories__item mini">

                        <!-- text -->
                        <div class="categories__item-text">

                            <!-- content -->
                            <div class="categories__item-text-content">

                                <!-- title -->
                                <h4 class="categories__item-title">
                                    Эпиляция
                                </h4>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="categories__item-list">

                                    <li>
                                        <a href="#">Эпиляция лица</a>
                                    </li>

                                    <li>
                                        <a href="#">Эпиляция зоны бикини</a>
                                    </li>

                                    <li>
                                        <a href="#">Эпиляция всего тела</a>
                                    </li>

                                    <li>
                                        <a href="#">Эпиляция ног</a>
                                    </li>

                                    <li>
                                        <a href="#">Эпиляция рук</a>
                                    </li>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end content -->

                            <!-- footer -->
                            <div class="categories__item-text-footer">

                                <a href="#" class="btn btn-white">
                                    <span>Смотреть все услуги</span>
                                    <i>Перейти</i>
                                </a>

                            </div>
                            <!-- end footer -->

                        </div>
                        <!-- end text -->

                        <img
                            src="assets/images/categories-item-5.png"
                            alt=""
                            title=""
                            class="img-responsive"
                        >

                    </div>
                    <!-- End Item -->

                </div>
                <!-- end col -->

                <!-- col -->
                <div class="col-sm-12 col-md-4 col-lg-4 three">

                    <!-- Item -->
                    <div class="categories__item mini">

                        <!-- text -->
                        <div class="categories__item-text">

                            <!-- content -->
                            <div class="categories__item-text-content">

                                <!-- title -->
                                <h4 class="categories__item-title">
                                    Массаж
                                </h4>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="categories__item-list">

                                    <li>
                                        <a href="#">Спортивный массаж</a>
                                    </li>

                                    <li>
                                        <a href="#">Массаж тайский</a>
                                    </li>

                                    <li>
                                        <a href="#">Массаж с камнями</a>
                                    </li>

                                    <li>
                                        <a href="#">Массаж рук</a>
                                    </li>

                                    <li>
                                        <a href="#">Массаж лица</a>
                                    </li>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end content -->

                            <!-- footer -->
                            <div class="categories__item-text-footer">

                                <a href="#" class="btn btn-white">
                                    <span>Смотреть все услуги</span>
                                    <i>Перейти</i>
                                </a>

                            </div>
                            <!-- end footer -->

                        </div>
                        <!-- end text -->

                        <img
                            src="assets/images/categories-item-6.png"
                            alt=""
                            title=""
                            class="img-responsive"
                        >

                    </div>
                    <!-- End Item -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Categories -->

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

    <!-- News Last -->
    <section class="news_last">

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
                            Новости
                        </h2>
                        <!-- End Title -->

                        <!-- Link -->
                        <div class="headpanel__archive">

                            <a href="#">
                                Смотреть все новости
                            </a>

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- List -->
                    <ul class="news__list">

                        <li>

                            <!-- Item -->
                            <div class="news__list-item">

                                <a href="#">
                                    <img
                                        src="assets/images/news/news-img-1.jpg"
                                        alt=""
                                        title=""
                                        class="img-responsive"
                                    >
                                </a>

                                <!-- labels -->
                                <ul class="news__list-item-labels">

                                    <li>
                                        <span>19 НОЯБРЯ</span>
                                    </li>

                                    <li>
                                        <span>НОВОСТИ</span>
                                    </li>

                                </ul>
                                <!-- end labels -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="news__list-item-title">
                                        Что такое лазерная косметология?
                                    </h5>
                                    <!-- end title -->
                                </a>

                            </div>
                            <!-- End Item -->

                        </li>

                        <li>

                            <!-- Item -->
                            <div class="news__list-item">

                                <a href="#">
                                    <img
                                        src="assets/images/news/news-img-2.jpg"
                                        alt=""
                                        title=""
                                        class="img-responsive"
                                    >
                                </a>

                                <!-- labels -->
                                <ul class="news__list-item-labels">

                                    <li>
                                        <span>31 НОЯБРЯ</span>
                                    </li>

                                    <li>
                                        <span>НОВОСТИ</span>
                                    </li>

                                </ul>
                                <!-- end labels -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="news__list-item-title">
                                        Инъекции все секреты данной процедуры?
                                    </h5>
                                    <!-- end title -->
                                </a>

                            </div>
                            <!-- End Item -->

                        </li>

                        <li>

                            <!-- Item -->
                            <div class="news__list-item">

                                <a href="#">
                                    <img
                                        src="assets/images/news/news-img-3.jpg"
                                        alt=""
                                        title=""
                                        class="img-responsive"
                                    >
                                </a>

                                <!-- labels -->
                                <ul class="news__list-item-labels">

                                    <li>
                                        <span>21 ДЕКАБРЯ</span>
                                    </li>

                                    <li>
                                        <span>НОВОСТИ</span>
                                    </li>

                                </ul>
                                <!-- end labels -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="news__list-item-title">
                                        Для чего нужна апаратная косметология?
                                    </h5>
                                    <!-- end title -->
                                </a>

                            </div>
                            <!-- End Item -->

                        </li>

                        <li>

                            <!-- Item -->
                            <div class="news__list-item">

                                <a href="#">
                                    <img
                                        src="assets/images/news/news-img-4.jpg"
                                        alt=""
                                        title=""
                                        class="img-responsive"
                                    >
                                </a>

                                <!-- labels -->
                                <ul class="news__list-item-labels">

                                    <li>
                                        <span>27 ДЕКАБРЯ</span>
                                    </li>

                                    <li>
                                        <span>НОВОСТИ</span>
                                    </li>

                                </ul>
                                <!-- end labels -->

                                <a href="#">
                                    <!-- title -->
                                    <h5 class="news__list-item-title">
                                        В каком возрасте лучше делать татуаж губ
                                    </h5>
                                    <!-- end title -->
                                </a>

                            </div>
                            <!-- End Item -->

                        </li>

                    </ul>
                    <!-- End List -->

                    <!-- Footer -->
                    <div class="news_last__footer">

                        <a href="" class="btn btn-opacity">
                            Смотреть все новости
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
    <!-- End News Last -->

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

    <!-- Contacts -->
    <section class="contacts">

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
                            Адреса клиник
                        </h2>
                        <!-- End Title -->

                        <a href="javascript:;" class="tab_mobile__link">
                            Выбрать клинику
                        </a>

                        <!-- Link -->
                        <div class="headpanel__archive tab_mobile__content">

                            <a href="#" class="btn btn-opacity">
                                <svg class="icon left" width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9167 3.07449C13.8176 -1.02461 7.18282 -1.02505 3.08328 3.07449C-1.01572 7.17344 -1.01636 13.8084 3.08328 17.9079L9.94568 24.7703C10.2519 25.0765 10.7482 25.0765 11.0544 24.7703L17.9168 17.9079C22.0157 13.809 22.0164 7.17407 17.9167 3.07449ZM13.8156 13.8067C11.9833 15.6391 9.01717 15.6395 7.18443 13.8067C5.35205 11.9743 5.35175 9.00832 7.18443 7.17569C9.01668 5.34335 11.9828 5.34301 13.8155 7.17569C15.6479 9.00798 15.6482 11.9741 13.8156 13.8067Z" fill="#19385E"/>
                                </svg>
                                Арбат
                            </a>

                            <a href="#" class="btn btn-opacity">
                                <svg class="icon left" width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9167 3.07449C13.8176 -1.02461 7.18282 -1.02505 3.08328 3.07449C-1.01572 7.17344 -1.01636 13.8084 3.08328 17.9079L9.94568 24.7703C10.2519 25.0765 10.7482 25.0765 11.0544 24.7703L17.9168 17.9079C22.0157 13.809 22.0164 7.17407 17.9167 3.07449ZM13.8156 13.8067C11.9833 15.6391 9.01717 15.6395 7.18443 13.8067C5.35205 11.9743 5.35175 9.00832 7.18443 7.17569C9.01668 5.34335 11.9828 5.34301 13.8155 7.17569C15.6479 9.00798 15.6482 11.9741 13.8156 13.8067Z" fill="#19385E"/>
                                </svg>
                                Ленинский проспект
                            </a>

                            <a href="#" class="btn btn-opacity">
                                <svg class="icon left" width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9167 3.07449C13.8176 -1.02461 7.18282 -1.02505 3.08328 3.07449C-1.01572 7.17344 -1.01636 13.8084 3.08328 17.9079L9.94568 24.7703C10.2519 25.0765 10.7482 25.0765 11.0544 24.7703L17.9168 17.9079C22.0157 13.809 22.0164 7.17407 17.9167 3.07449ZM13.8156 13.8067C11.9833 15.6391 9.01717 15.6395 7.18443 13.8067C5.35205 11.9743 5.35175 9.00832 7.18443 7.17569C9.01668 5.34335 11.9828 5.34301 13.8155 7.17569C15.6479 9.00798 15.6482 11.9741 13.8156 13.8067Z" fill="#19385E"/>
                                </svg>
                                Бабушкина
                            </a>

                            <a href="#" class="btn btn-opacity">
                                <svg class="icon left" width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9167 3.07449C13.8176 -1.02461 7.18282 -1.02505 3.08328 3.07449C-1.01572 7.17344 -1.01636 13.8084 3.08328 17.9079L9.94568 24.7703C10.2519 25.0765 10.7482 25.0765 11.0544 24.7703L17.9168 17.9079C22.0157 13.809 22.0164 7.17407 17.9167 3.07449ZM13.8156 13.8067C11.9833 15.6391 9.01717 15.6395 7.18443 13.8067C5.35205 11.9743 5.35175 9.00832 7.18443 7.17569C9.01668 5.34335 11.9828 5.34301 13.8155 7.17569C15.6479 9.00798 15.6482 11.9741 13.8156 13.8067Z" fill="#19385E"/>
                                </svg>
                                Профсоюзная
                            </a>

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- map -->
                    <div class="contacts__map" id="map">


                    </div>
                    <!-- end map -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Contacts -->

@endsection
