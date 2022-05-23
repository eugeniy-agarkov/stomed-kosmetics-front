@if( $sales->content )

    <!-- Text -->
    <section class="services__detail-text">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Text Style -->
                    <div class="collapse__text text_style textCollapse">

                        {!! $sales->content !!}

                    </div>
                    <!-- End Text Style -->

                    <!-- collapse button -->
                    <div class="collapse__button">

                        <a
                            href="javascript:;"
                            class="btn btn-opacity buttonCollapse"
                            data-text-collapsed="Свернуть"
                            data-text-collapse="Развернуть"
                        >
                            <span>{{ __( 'Развернуть' ) }}</span>
                            <svg class="icon right" width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1L7 7L1 0.999999" stroke="#424242" stroke-width="1.5"/>
                            </svg>
                        </a>

                    </div>
                    <!-- end collapse button -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Text -->

@endif
