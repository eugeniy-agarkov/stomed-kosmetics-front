<!-- Footer -->
<footer class="footer">

    <!-- Footer > Top -->
    <div class="footer__top">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- row -->
                    <div class="footer__top-row">

                        <!-- row > left -->
                        <div class="footer__top-row-left">

                            <!-- title -->
                            <h5 class="footer__title socials">
                                {{ __( 'Мы в социальных сетях' ) }}:
                            </h5>
                            <!-- end title -->

                            <!-- socials -->
                            <ul class="footer__socials">

                                <li>

                                    <a href="https://vk.com/public50348501" target="_blank" rel="nofollow">

                                        <img
                                            src="{{ asset('build/assets/images/icons/vk.svg') }}"
                                            alt="{{ __( 'vk' ) }}"
                                            title="{{ __( 'vk' ) }}"
                                        >

                                    </a>

                                </li>

                                <li>

                                    <a href="https://twitter.com/stomedmed" target="_blank" rel="nofollow">

                                        <img
                                            src="{{ asset('build/assets/images/icons/twitter.svg') }}"
                                            alt="{{ __( 'Twitter' ) }}"
                                            title="{{ __( 'Twitter' ) }}"
                                        >

                                    </a>

                                </li>

                                <li>

                                    <a href="https://www.youtube.com/channel/UCBuC95xMFewxQb4jiwSnFgA/videos?view_as=subscriber" target="_blank" rel="nofollow">

                                        <img
                                            src="{{ asset('build/assets/images/icons/youtube.svg') }}"
                                            alt="{{ __( 'Youtube' ) }}"
                                            title="{{ __( 'Youtube' ) }}"
                                        >

                                    </a>

                                </li>

                            </ul>
                            <!-- end socials -->

                        </div>
                        <!-- end row > left -->

                        <!-- row > right -->
                        <div class="footer__top-row-right">

                            <!-- Columns -->
                            <ul class="footer__columns">

                                <li>

                                    <!-- title -->
                                    <h5 class="footer__title menu footerMenuMobile">
                                        {{ __( 'О клинике' ) }}
                                    </h5>
                                    <!-- end title -->

                                    <!-- list -->
                                    <ul class="footer__columns-list">

                                        <li>

                                            <a href="{{ route('doctor') }}">
                                                {{ __( 'Наши врачи' ) }}
                                            </a>

                                        </li>

                                        <li>

                                            <a href="{{ route('news') }}">
                                                {{ __( 'Новости' ) }}
                                            </a>

                                        </li>

                                        <li>

                                            <a href="{{ route('sale') }}">
                                                {{ __( 'Акции' ) }}
                                            </a>

                                        </li>

                                        @if( settings('link_price') )
                                            <li>

                                                <a href="{{ settings('link_price') }}" target="_blank">
                                                    {{ __( 'Прайс-лист' ) }}
                                                </a>

                                            </li>
                                        @endif

                                        <li>

                                            <a href="{{ route('contact') }}">
                                                {{ __( 'Контакты' ) }}
                                            </a>

                                        </li>

                                    </ul>
                                    <!-- end list -->

                                </li>

                                <li>

                                    <!-- title -->
                                    <h5 class="footer__title menu footerMenuMobile">
                                        {{ __( 'Услуги' ) }}
                                    </h5>
                                    <!-- end title -->

                                    @if( $directionCategories->count() )
                                        <!-- List -->
                                        <ul class="footer__columns-list">

                                            @foreach( $directionCategories as $category )
                                                <li>

                                                    <a href="{{ route('direction.category', $category) }}">
                                                        {{ $category->title_menu }}
                                                    </a>

                                                </li>
                                            @endforeach

                                        </ul>
                                        <!-- End List -->
                                    @endif

                                </li>

                                <li>

                                    <!-- title -->
                                    <h5 class="footer__title menu footerMenuMobile">
                                        {{ __( 'Документы' ) }}
                                    </h5>
                                    <!-- end title -->

                                    <!-- list -->
                                    <ul class="footer__columns-list">

                                        @if( settings('link_nalog') )
                                            <li>

                                                <a href="{{ settings('link_nalog') }}" target="_blank">
                                                    {{ __( 'Налоговый вычет' ) }}
                                                </a>

                                            </li>
                                        @endif

                                        @if( settings('link_dogovor') )
                                            <li>

                                                <a href="{{ settings('link_dogovor') }}" target="_blank">
                                                    {{ __( 'Договор оферты' ) }}
                                                </a>

                                            </li>
                                        @endif

                                        @if( settings('link_pravicy_policy') )
                                            <li>

                                                <a href="{{ settings('link_pravicy_policy') }}" target="_blank">
                                                    {{ __( 'Политика конфиденциальности' ) }}
                                                </a>

                                            </li>
                                        @endif

                                    </ul>
                                    <!-- end list -->

                                </li>

                                <li>

                                    <!-- title -->
                                    <h5 class="footer__title contact">
                                        {{ __( 'Контакты' ) }}
                                    </h5>
                                    <!-- end title -->

                                    <!-- list -->
                                    <ul class="footer__columns-contacts">

                                        <li>

                                            <small>{{ __( 'Телефон' ) }}:</small>
                                            <a href="tel:{{ settings('general_phone') }}">{{ settings('general_phone') }}</a>

                                        </li>

                                        <li>

                                            <small>{{ __( 'График работы' ) }}:</small>
                                            <span>{{ settings('general_time_work') }}</span>

                                        </li>

                                    </ul>
                                    <!-- end list -->

                                    <a href="javascript:;" data-src="#modalOnlineBooking" data-fancybox class="btn btn-opacity">
                                        {{ __( 'Онлайн запись' ) }}
                                    </a>

                                </li>

                            </ul>
                            <!-- End Columns -->

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
    <!-- End Footer > Top -->

    <!-- Footer > Bottom -->
    <div class="footer__bottom">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- row -->
                    <div class="footer__bottom-row">

                        <!-- row > left -->
                        <div class="footer__bottom-row-left">

                            <small>© 2006-{{ now()->year }} ООО Медицинский центр «СТОЛИЦА»</small>

                        </div>
                        <!-- end row > left -->

                        <!-- row > right -->
                        <div class="footer__bottom-row-right">

                            <p>{{ __( 'Материалы, размещенные на данном сайте, носят информационный характер и не являются публичной офертой. Получите консультацию специалистов по оказываемым медицинским услугам. Лицензия № ЛО-77-01-020273 от 18.08.2020 Ленинский проспект, д. 90 Ленинский проспект, д. 146 Большой Власьевский пер., д. 9 ул. Летчика Бабушкина, д. 48 Б' ) }}</p>

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
    <!-- End Footer > Bottom -->

</footer>
<!-- End Footer -->
