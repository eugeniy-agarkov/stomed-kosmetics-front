<!-- Header -->
<header class="header">

    <!-- Header > Top -->
    <div class="header__top">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- row -->
                    <div class="header__top-row">

                        <!-- row > left -->
                        <div class="header__top-row-left">

                            @if( $clinics->count() )
                                <!-- list -->
                                <ul class="header__locations">

                                    @foreach( $clinics as $clinic )
                                            <li>

                                            <a href="{{ route('contact.clinic', $clinic) }}">
                                                <span>{{ __( 'Косметология' ) }}</span> {{ $clinic->name }}
                                            </a>

                                        </li>
                                    @endforeach

                                </ul>
                                <!-- end list -->
                            @endif

                        </div>
                        <!-- end row > left -->

                        <!-- row > right -->
                        <div class="header__top-row-right">

                            <!-- search -->
                            <form action="{{ route('search') }}" method="get" class="header__search">

                                <button type="submit"></button>
                                <input
                                    type="text"
                                    placeholder="{{ __( 'Поиск' ) }}"
                                    name="q"
                                    value="{{ request()->q }}"
                                >

                            </form>
                            <!-- end search -->

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

    </div>
    <!-- End Header > Top -->

    <!-- Header > Center -->
    <div class="header__center">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- row -->
                    <div class="header__center-row">

                        <!-- row > left -->
                        <div class="header__center-row-left">

                            <!-- logo -->
                            <a href="{{ route('home') }}" class="header__logo">

                                <img
                                    src="{{ asset('build/assets/images/logo.png') }}"
                                    alt="{{ settings('company_name') }}"
                                    title="{{ settings('company_name') }}"
                                >

                            </a>
                            <!-- end logo -->

                            <!-- menu -->
                            <ul class="header__submenu">

                                <li>

                                    <a href="{{ route('sale') }}">
                                        {{ __( 'Акции' ) }}
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('doctor') }}">
                                        {{ __( 'Наши косметологи' ) }}
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('contact') }}">
                                        {{ __( 'Контакты' ) }}
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('review') }}">
                                        {{ __( 'Отзывы' ) }}
                                    </a>

                                </li>

                            </ul>
                            <!-- end menu -->

                        </div>
                        <!-- end row > left -->

                        <!-- row > right -->
                        <div class="header__center-row-right">

                            <!-- contacts -->
                            <ul class="header__contacts">

                                <li>

                                    <!-- time -->
                                    <div class="header__contacts-cell time">
                                        <small>{{ __( 'График работы' ) }}:</small>
                                        <span>{{ settings('general_time_work') }}</span>
                                    </div>
                                    <!-- end time -->

                                </li>

                                <li>

                                    <!-- phone -->
                                    <div class="header__contacts-cell phone">
                                        <small>{{ __( 'Телефон' ) }}:</small>
                                        <span>{{ settings('general_phone') }}</span>
                                    </div>
                                    <!-- end phone -->

                                </li>

                            </ul>
                            <!-- end contacts -->

                            <!-- btn -->
                            <a href="javascript:;" data-src="#modalOnlineBooking" data-fancybox class="btn btn-opacity">
                                {{ __( 'Онлайн запись' ) }}
                            </a>
                            <!-- end btn -->

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

    </div>
    <!-- End Header > Center -->

    <!-- Header > Bottom -->
    <div class="header__bottom">

        <!-- Inner -->
        <div class="header__bottom-inner">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-sm-12">

                        @if( $directionCategories->count() )
                            <!-- Nav -->
                            <ul class="header__nav">

                                @foreach( $directionCategories as $category )
                                    <li>

                                        <a href="{{ route('direction.category', $category) }}">
                                            {{ $category->title_menu }}
                                        </a>

                                    </li>
                                @endforeach

                            </ul>
                            <!-- End Nav -->
                        @endif

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

        </div>
        <!-- End Inner -->

    </div>
    <!-- End Header > Bottom -->

    <!-- Mobile -->
    <div class="header_mobile">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Row -->
                    <div class="header_mobile__row">

                        <!-- Logo -->
                        <a href="javascript:;" class="header_mobile__logo">
                            <img
                                src="{{ asset('build/assets/images/logo.png') }}"
                                alt="{{ settings('company_name') }}"
                                title="{{ settings('company_name') }}"
                            >
                        </a>
                        <!-- End Logo -->

                        <!-- Actions -->
                        <div class="header_mobile__actions">

                            <!-- Phone -->
                            <a href="tel:{{ settings('general_phone') }}" class="header_mobile__actions-phone">
                                <img
                                    src="{{ asset('build/assets/images/icons/telephone.svg') }}"
                                    alt="{{ __( 'Телефон компании' ) }}"
                                    title="{{ __( 'Телефон компании' ) }}"
                                >
                            </a>
                            <!-- End Phone -->

                            <!-- Search -->
                            <a href="javascript:;" class="header_mobile__actions-search searchMobile">
                                <img
                                    src="{{ asset('build/assets/images/icons/search-mobile.svg') }}"
                                    alt="{{ __( 'Поиск информации' ) }}"
                                    title="{{ __( 'Поиск информации' ) }}"
                                >
                            </a>
                            <!-- End Search -->

                            <!-- Burger -->
                            <a href="javascript:;" class="header_mobile__actions-burger mobileMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Burger -->

                        </div>
                        <!-- End Actions -->

                        <!-- search -->
                        <div class="header_mobile__search searchMobileForm">

                            <form action="" method="get">

                                <input type="text" placeholder="{{ __( 'Поиск по запросу' ) }}">

                                <a href="javascript:;" class="close searchMobile"></a>

                            </form>

                        </div>
                        <!-- end search -->

                    </div>
                    <!-- End Row -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

        <!-- Menu -->
        <div class="header_mobile__menu">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-sm-12">

                        <!-- header -->
                        <a href="javascript:;" class="header_mobile__menu-header mobileMenu">

                            <span>{{ __( 'Меню' ) }}</span>
                            <img
                                src="{{ asset('build/assets/images/icons/close.svg') }}"
                                alt="{{ __( 'Закрыть меню' ) }}"
                                title="{{ __( 'Закрыть меню' ) }}"
                            >

                        </a>
                        <!-- end header -->

                        <!-- content -->
                        <div class="header_mobile__menu-content">

                            <!-- List -->
                            <ul class="header_mobile__menu-list mobileMenuAccordion">

                                <li>

                                    <a href="javascript:;" class="mobileMenuAccordionItem">
                                        <span>{{ __( 'Услуги' ) }}</span>
                                        <img
                                            src="{{ asset('build/assets/images/icons/arrow-bottom.svg') }}"
                                            alt="{{ __( 'Услуги' ) }}"
                                            title="{{ __( 'Услуги' ) }}"
                                        >
                                    </a>

                                    @if( $directionCategories->count() )
                                        <!-- Nav -->
                                        <ul>

                                            @foreach( $directionCategories as $category )
                                                <li>

                                                    <a href="{{ route('direction.category', $category) }}">
                                                        {{ $category->title_menu }}
                                                    </a>

                                                </li>
                                            @endforeach

                                        </ul>
                                        <!-- End Nav -->
                                    @endif

                                </li>

                                <li>

                                    <a href="{{ route('sale') }}">
                                        <span>{{ __( 'Акции' ) }}</span>
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('doctor') }}">
                                        <span>{{ __( 'Наши косметологи' ) }}</span>
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('review') }}">
                                        <span>{{ __( 'Отзывы' ) }}</span>
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('news') }}">
                                        <span>{{ __( 'Новости' ) }}</span>
                                    </a>

                                </li>

                                <li>

                                    <a href="{{ route('contact') }}">
                                        <span>{{ __( 'Контакты' ) }}</span>
                                    </a>

                                </li>

                            </ul>
                            <!-- End List -->

                            @if( $clinics->count() )
                                <!-- Locations -->
                                <ul class="header_mobile__menu-locations">

                                    @foreach( $clinics as $clinic )
                                        <li>

                                            <a href="#">
                                                <span>Косметология</span> {{ $clinic->name }}
                                            </a>

                                        </li>
                                    @endforeach

                                </ul>
                                <!-- End Locations -->
                            @endif

                            <!-- contacts -->
                            <ul class="header__contacts">

                                <li>

                                    <!-- time -->
                                    <div class="header__contacts-cell time">
                                        <small>{{ __( 'График работы' ) }}:</small>
                                        <span>{{ settings('general_time_work') }}</span>
                                    </div>
                                    <!-- end time -->

                                </li>

                                <li>

                                    <!-- phone -->
                                    <div class="header__contacts-cell phone">
                                        <small>{{ __( 'Телефон' ) }}:</small>
                                        <span>{{ settings('general_phone') }}</span>
                                    </div>
                                    <!-- end phone -->

                                </li>

                            </ul>
                            <!-- end contacts -->

                            <!-- btn -->
                            <a href="javascript:;" data-src="#modalOnlineBooking" data-fancybox class="btn btn-opacity">
                                {{ __( 'Онлайн запись' ) }}
                            </a>
                            <!-- end btn -->

                        </div>
                        <!-- end content -->

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

        </div>
        <!-- End Menu -->

    </div>
    <!-- End Mobile -->

</header>
<!-- End Header -->
