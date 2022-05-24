@if( $direction->title_excerpt && $direction->excerpt )

    <!-- Excerpt -->
    <section class="excerpt">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    @if( $direction->title_excerpt )
                        <!-- Title -->
                        <h3 class="excerpt__title">
                            {{ $direction->title_excerpt }}
                        </h3>
                        <!-- End Title -->
                    @endif

                    @if( $direction->excerpt )
                        <!-- Text -->
                        <div class="excerpt__text">

                            {!! $direction->excerpt !!}

                        </div>
                        <!-- End Text -->
                    @endif

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Excerpt -->

@endif
