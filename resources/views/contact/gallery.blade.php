<!-- Gallery -->
<section class="contacts__gallery">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Slider Container -->
                <div class="contacts__gallery-slider swiperContactsGallery">

                    <!-- slider -->
                    <div class="swiper">

                        <!-- Wrapper -->
                        <div class="swiper-wrapper">

                            @if( request()->routeIs('contact.clinic'))

                                @if( $galleries->count() )

                                    @foreach( $galleries as $gallery )

                                        @include( 'contact.loop.item-gallery', ['gallery' => $gallery] )

                                    @endforeach

                                @endif

                            @else

                                @foreach( $clinics as $clinic )

                                    @php( $gallery = $clinic->images->take(1)->first() )

                                    @if( $gallery )
                                        @include( 'contact.loop.item-gallery', ['gallery' => $gallery] )
                                    @endif

                                @endforeach

                            @endif

                        </div>
                        <!-- End Wrapper -->

                    </div>
                    <!-- end slider -->

                    <!-- controls -->
                    <div class="contacts__gallery-slider-controls">

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
<!-- End Gallery -->
