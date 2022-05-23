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
                    {{ isset($seo->h1) ? $seo->h1 : $sales->name }}
                </h1>
                <!-- End Title -->

                <!-- Timer -->
                <div class="sales__detail-timer mobile">

                    @if( $sales->isActive() )

                        <!-- title -->
                        <span class="sales__detail-timer-title">{{ __( 'До конца акции' ) }}:</span>
                        <!-- end title -->

                        <div class="timer" data-time="{{ $sales->date_end }}"></div>

                    @else

                        {{ __( 'Акция закончилась' ) }}

                    @endif

                </div>
                <!-- End Timer -->

                <!-- Row -->
                <div class="intro_column__row">

                    <!-- Row > Left -->
                    <div class="intro_column__row-left hidden-md">

                        <!-- Header -->
                        <div class="intro_column__header">

                            <!-- Title -->
                            <h1 class="intro_column__title desctope">
                                {{ isset($seo->h1) ? $seo->h1 : $sales->name }}
                            </h1>
                            <!-- End Title -->

                        </div>
                        <!-- End Header -->

                        <!-- Footer -->
                        <div class="intro_column__footer">

                            @if( $sales->isActive() )
                                <!-- Timer -->
                                <div class="sales__detail-timer">

                                    <!-- title -->
                                    <span class="sales__detail-timer-title">{{ __( 'До конца акции' ) }}:</span>
                                    <!-- end title -->

                                    <div class="timer" data-time="{{ $sales->date_end }}"></div>

                                </div>
                                <!-- End Timer -->
                            @else

                                {{ __( 'Акция закончилась' ) }}

                            @endif

                        </div>
                        <!-- End Footer -->

                    </div>
                    <!-- End Row > Left -->

                    <!-- Row > Right -->
                    <div class="intro_column__row-right no-maxwidth">

                        @if ( Storage::disk('public')->exists('images/' . $sales->photo) )

                            <!-- Image -->
                            <div class="intro_column__image is-share">

                                <!-- img -->
                                <img
                                    src="{{ Storage::url('images/' . $sales->photo) }}"
                                    alt="{{ $sales->name }}"
                                    title="{{ $sales->name }}"
                                    class="img-responsive intro_column__image-img"
                                >
                                <!-- end img -->

                                <!-- share -->
                                <div class="intro_column__share">

                                    @include( 'partials.share', ['item' => $sales] )

                                </div>
                                <!-- end share -->

                            </div>
                            <!-- End Image -->

                        @endif

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
