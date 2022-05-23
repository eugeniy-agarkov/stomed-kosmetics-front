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
                    {{ isset($seo->h1) ? $seo->h1 : $news->name }}
                </h1>
                <!-- End Title -->

                @if( $news->excerpt )

                    <!-- Excerpt -->
                    <div class="intro_column__excerpt mobile">
                        {!! $news->excerpt !!}
                    </div>
                    <!-- End Excerpt -->

                @endif

                <!-- Row -->
                <div class="intro_column__row">

                    <!-- Row > Left -->
                    <div class="intro_column__row-left hidden-md">

                        <!-- Header -->
                        <div class="intro_column__header">

                            <!-- Title -->
                            <h1 class="intro_column__title desctope">
                                {{ isset($seo->h1) ? $seo->h1 : $news->name }}
                            </h1>
                            <!-- End Title -->

                            @if( $news->excerpt )

                                <!-- Excerpt -->
                                <div class="intro_column__excerpt desctope">
                                    {!! $news->excerpt !!}
                                </div>
                                <!-- End Excerpt -->

                            @endif

                        </div>
                        <!-- End Header -->

                    </div>
                    <!-- End Row > Left -->

                    <!-- Row > Right -->
                    <div class="intro_column__row-right no-maxwidth">

                        @if ( Storage::disk('public')->exists('images/' . $news->photo) )

                            <!-- Image -->
                            <div class="intro_column__image is-share">

                                <!-- img -->
                                <img
                                    src="{{ Storage::url('images/' . $news->photo) }}"
                                    alt="{{ $news->name }}"
                                    title="{{ $news->name }}"
                                    class="img-responsive intro_column__image-img"
                                >
                                <!-- end img -->

                                <!-- share -->
                                <div class="intro_column__share">

                                    @include( 'partials.share', ['item' => $news] )

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
