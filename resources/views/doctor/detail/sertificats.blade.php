@if( $sertificats->count() )

    <!-- Sertificates -->
    <section class="sert_last">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Title -->
                    <h3 class="sert_last__title">
                        {{ __( 'Сертификаты' ) }}
                    </h3>
                    <!-- End Title -->

                    <!-- Slider Container -->
                    <div class="sert_last__slider swiperLastSert">

                        <!-- slider -->
                        <div class="swiper">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                @foreach( $sertificats as $item )
                                    <!-- Slide -->
                                    <div class="swiper-slide">

                                        @include( 'partials.loop.doctor-sertificat-item', [ 'item' => $item ] )

                                    </div>
                                    <!-- End Slide -->
                                @endforeach

                            </div>
                            <!-- End Wrapper -->

                        </div>
                        <!-- end slider -->

                        <!-- controls -->
                        <div class="sert_last__slider-controls">

                            <div class="swiper-button-prev"></div>

                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- End Pagination -->

                            <div class="swiper-button-next"></div>

                        </div>
                        <!-- end controls -->

                    </div>
                    <!-- End Slider Container -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Sertificates -->

@endif
