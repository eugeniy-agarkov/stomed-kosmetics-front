@if( $news->count() )

    <!-- News Last -->
    <section class="news_last">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Headpanel -->
                    <div class="headpanel">

                        <!-- Title -->
                        <h2 class="headpanel__title">
                            {{ __( 'Новости' ) }}
                        </h2>
                        <!-- End Title -->

                        <!-- Link -->
                        <div class="headpanel__archive">

                            <a href="{{ route('news') }}">
                                {{ __( 'Смотреть все новости' ) }}
                            </a>

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- List -->
                    <ul class="news__list">

                        @foreach( $news as $item )

                            @include( 'partials.loop.news-item', compact('item') )

                        @endforeach

                    </ul>
                    <!-- End List -->

                    <!-- Footer -->
                    <div class="news_last__footer">

                        <a href="" class="btn btn-opacity">
                            Смотреть все новости
                        </a>

                    </div>
                    <!-- End Footer -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End News Last -->

@endif
