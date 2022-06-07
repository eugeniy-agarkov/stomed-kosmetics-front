<!-- Intro Column -->
<section class="intro_column">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Title -->
                <h1 class="intro_column__title mobile">
                    {{ isset($seo->h1) ? $seo->h1 : $direction->name }}
                </h1>
                <!-- End Title -->

                <!-- Row -->
                <div class="intro_column__row">

                    <!-- Row > Left -->
                    <div class="intro_column__row-left">

                        <!-- Header -->
                        <div class="intro_column__header">

                            <!-- Title -->
                            <h1 class="intro_column__title desctope">
                                {{ isset($seo->h1) ? $seo->h1 : $direction->name }}
                            </h1>
                            <!-- End Title -->

                        </div>
                        <!-- End Header -->

                        <!-- Footer -->
                        <div class="intro_column__footer">

                            <!-- List -->
                            <ul class="intro_column__footer-list">

                                <li>

                                    <!-- icon -->
                                    <div class="icon">

                                        <img
                                            src="{{ asset('build/assets/images/icons/price.svg') }}"
                                            alt="{{ __( 'Цена' ) }}"
                                            title="{{ __( 'Цена' ) }}"
                                        >

                                    </div>
                                    <!-- end icon -->

                                    @if( $direction->prices()->count() > 1 )
                                        <span>{{ __( 'Цена от' ) }}: {{ $direction->minPrice() }} руб.</span>
                                    @elseif( $direction->prices()->count() == 1 )
                                        <span>{{ __( 'Цена' ) }}: {{ $direction->minPrice() }} руб.</span>
                                    @endif

                                </li>

                                @if( $direction->time_spending )
                                    <li>

                                        <!-- icon -->
                                        <div>

                                            <img
                                                src="{{ asset('build/assets/images/icons/o-clock.svg') }}"
                                                alt="{{ __( 'Время проведения' ) }}"
                                                title="{{ __( 'Время проведения' ) }}"
                                            >

                                        </div>
                                        <!-- end icon -->

                                        <span>{{ __( 'Время проведения' ) }}: {{ $direction->time_spending }}</span>

                                    </li>
                                @endif

                            </ul>
                            <!-- End List -->

                            <!-- Btn Group -->
                            <div class="intro_column__footer-btn">

                                <a href="javascript:;" data-src="#modalOnlineBooking" data-fancybox class="btn btn-blue">
                                    {{ __( 'Записаться на прием' ) }}
                                </a>

                                <a href="javascript:;" class="btn btn-opacity scrollSection" data-section=".prices">
                                    {{ __( 'Смотреть цены' ) }}
                                </a>

                            </div>
                            <!-- End Btn Group -->

                        </div>
                        <!-- End Footer -->

                    </div>
                    <!-- End Row > Left -->

                    <!-- Row > Right -->
                    <div class="intro_column__row-right">

                        <!-- Slider -->
                        <div class="intro_column__slider">

                            <!-- Swiper Big -->
                            <div class="intro_column__slider-big swiper introColumnSwiperBig">

                                <!-- wrapper -->
                                <div class="swiper-wrapper">

                                    @if ( Storage::disk('public')->exists('thumbnail/single-' . $direction->image) )
                                        <!-- slide -->
                                        <div class="swiper-slide">

                                            <img
                                                src="{{ Storage::url('thumbnail/single-' . $direction->image) }}"
                                                alt="{{ $direction->name }}"
                                                title="{{ $direction->name }}"
                                                class="img-responsive"
                                            />

                                        </div>
                                        <!-- end slide -->
                                    @endif

                                    @php( $images = $direction->images )
                                    @if( $images )

                                        @foreach( $images as $image )

                                            <!-- slide -->
                                            <div class="swiper-slide">

                                                <img
                                                    src="{{ Storage::url('thumbnail/single-' . $image->image) }}"
                                                    alt="{{ $image->alt }}"
                                                    title="{{ $image->title }}"
                                                    class="img-responsive"
                                                />

                                            </div>
                                            <!-- end slide -->

                                        @endforeach

                                    @endif

                                </div>
                                <!-- end wrapper -->

                                <!-- Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- End Pagination -->

                            </div>
                            <!-- End Swiper Big -->

                            <!-- Swiper Big -->
                            <div thumbsSlider="" class="intro_column__slider-thumb swiper introColumnSwiperThumb">

                                <!-- wrapper -->
                                <div class="swiper-wrapper">

                                    @if ( Storage::disk('public')->exists('thumbnail/single-' . $direction->image) )
                                        <!-- slide -->
                                        <div class="swiper-slide">

                                            <img
                                                src="{{ Storage::url('thumbnail/single-' . $direction->image) }}"
                                                alt="{{ $direction->name }} Thumb"
                                                title="{{ $direction->name }} Thumb"
                                                class="img-responsive"
                                            />

                                        </div>
                                        <!-- end slide -->
                                    @endif

                                        @if( $images )

                                            @foreach( $images as $image )

                                                <!-- slide -->
                                                <div class="swiper-slide">

                                                    <img
                                                        src="{{ Storage::url('thumbnail/single-' . $image->image) }}"
                                                        alt="{{ $image->alt }}"
                                                        title="{{ $image->title }}"
                                                        class="img-responsive"
                                                    />

                                                </div>
                                                <!-- end slide -->

                                            @endforeach

                                        @endif

                                </div>
                                <!-- end wrapper -->

                            </div>
                            <!-- End Swiper Big -->

                        </div>
                        <!-- End Slider -->

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
<!-- End Intro Column -->
