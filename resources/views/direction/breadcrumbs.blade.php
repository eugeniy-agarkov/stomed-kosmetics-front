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

                    @if( request()->routeIs('direction.clinic'))

                        <li>
                            <a href="{{ route('direction', ['category' => $category]) }}">{{ $category->name }}</a>
                        </li>

                        <li>
                            {{ $clinic->name }}
                        </li>

                    @else

                        <li>
                            {{ $category->name }}
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
