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

                        @if( $saleBanner->count() )

                            <!-- Sales -->
                            <ul class="home_intro__sales">

                                @foreach( $saleBanner as $sale )

                                    <li>

                                        <a href="{{ route('sale.detail', $sale) }}">
                                            <small>{{ __( 'акция' ) }}</small>
                                            <p>{{ \Illuminate\Support\Str::limit($sale->name, 35) }}</p>
                                        </a>

                                    </li>

                                @endforeach

                                <li>

                                    <a href="{{ route('sale') }}" class="archive">
                                        <img
                                            src="{{ asset('build/assets/images/icons/plus.svg') }}"
                                            alt="{{ __( 'Больше акций' ) }}"
                                            title="{{ __( 'Больше акций' ) }}"
                                        >
                                        <p>{{ __( 'Больше акций' ) }}</p>
                                    </a>

                                </li>

                            </ul>
                            <!-- End Sales -->

                        @endif

                    </div>
                    <!-- end row > left -->

                    <!-- row > right -->
                    <div class="home_intro__row-right">

                        <!-- app -->
                        <div class="home_intro__app">

                            @if( $saleBanner->count() )

                                @foreach( $saleBanner as $sale )

                                    <!-- point -->
                                    <div class="home_intro__app-point @if( $loop->iteration == 1 ) one @elseif( $loop->iteration == 2 ) two @elseif( $loop->iteration == 3 ) three @endif">
                                        <span class="homeIntroPoint">
                                            <i>+</i>
                                            <i>-</i>
                                        </span>

                                        <!-- message -->
                                        <div class="home_intro__app-point-message left bottom">
                                            <p>{{ $sale->name }}</p>
                                            <a href="{{ route('sale.detail', $sale) }}">{{ __( 'Смотреть акцию' ) }}</a>
                                        </div>
                                        <!-- end message -->

                                    </div>
                                    <!-- end point -->

                                @endforeach

                            @endif

                            <img
                                src="{{ asset('build/assets/images/home-intro-woman.png') }}"
                                alt="{{ $seo->h1 }}"
                                title="{{ $seo->h1 }}"
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
