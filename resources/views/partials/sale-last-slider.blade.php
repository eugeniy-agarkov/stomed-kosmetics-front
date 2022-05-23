@if( $sales->count() )

    <!-- Sales -->
    <section class="sales_last">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Title -->
                    <h3 class="sales_last__title">
                        {{ $title }}
                    </h3>
                    <!-- End Title -->

                    <!-- Slider Container -->
                    <div class="sales_last__slider swiperSalesLast">

                        <!-- slider -->
                        <div class="swiper">

                            <!-- Wrapper -->
                            <div class="swiper-wrapper">

                                @foreach( $sales as $sale )

                                    @include( 'partials.loop.sale-slider-item', [ 'item' => $sale ] )

                                @endforeach

                            </div>
                            <!-- End Wrapper -->

                        </div>
                        <!-- end slider -->

                        <!-- controls -->
                        <div class="services__relevant-slider-controls">

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
    <!-- End Sales -->

@endif
