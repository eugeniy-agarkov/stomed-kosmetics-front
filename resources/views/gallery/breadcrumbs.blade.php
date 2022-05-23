<!-- Breadcrumbs -->
<section class="breadcrumbs">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- List -->
                <ul class="breadcrumbs__list">

                    <li>

                        <a href="{{ route('home') }}">{{ __( 'Главная' ) }}</a>

                    </li>

                    @if( request()->routeIs('gallery.show'))

                        <li>
                            <a href="{{ route('gallery') }}">{{ __( 'Галерея' ) }}</a>
                        </li>

                        @if( $direction->id )

                            <li>
                                <a href="{{ route('gallery.show', $category) }}">{{ $category->name }}</a>
                            </li>

                            <li>
                                {{ $direction->name }}
                            </li>

                        @else

                            <li>
                                {{ $category->name }}
                            </li>

                        @endif

                    @else

                        <li>
                            {{ __( 'Галерея' ) }}
                        </li>

                    @endif

                </ul>
                <!-- End List -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Breadcrumbs -->
