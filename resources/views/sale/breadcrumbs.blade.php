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

                    @if( request()->routeIs('sale.category'))

                        <li>
                            <a href="{{ route('sale') }}">{{ __( 'Акции' ) }}</a>
                        </li>

                        <li>
                            {{ $category->name }}
                        </li>

                    @else

                        <li>
                            {{ __( 'Акции' ) }}
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
