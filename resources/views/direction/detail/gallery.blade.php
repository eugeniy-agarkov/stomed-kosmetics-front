@if( $galleries->count() )

    <!-- Gallery Last -->
    <section class="gallery_last">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- Headpanel -->
                    <div class="headpanel">

                        <!-- Title -->
                        <h3 class="headpanel__title">
                            {{ $direction->category->name }}, {{ __( 'до и после' ) }}
                        </h3>
                        <!-- End Title -->

                        <!-- Link -->
                        <div class="headpanel__archive hide-sm">

                            <a href="{{ route('gallery.show', [ 'category' => $direction->category, 'direction' => $direction ]) }}">
                                {{ __( 'Смотреть все фото' ) }}
                            </a>

                        </div>
                        <!-- End Link -->

                    </div>
                    <!-- End Headpanel -->

                    <!-- list -->
                    <ul class="gallery_last__list">

                        @foreach( $galleries as $gallery )

                            @include( 'partials.loop.gallery-item', [ 'gallery' => $gallery ] )

                        @endforeach

                    </ul>
                    <!-- end list -->

                    <!-- footer -->
                    <div class="gallery_last__footer">

                        <a href="{{ route('gallery.show', [ 'category' => $direction->category, 'direction' => $direction ]) }}" class="btn btn-opacity">
                            {{ __( 'Смотреть все фото' ) }}
                        </a>

                    </div>
                    <!-- end footer -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Gallery Last -->

@endif
