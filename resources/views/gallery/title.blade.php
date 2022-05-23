<!-- Title Page -->
<section class="title_page">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-sm-12">

                <!-- Title -->
                <h1 class="title_page__title">

                    @if( request()->routeIs('gallery'))
                        {{ isset($seo->h1) ? $seo->h1 : __( 'Фото до и после' ) }}
                    @else
                        @if( $direction->id )
                            {{ isset($seo->h1) ? $seo->h1 : $direction->name . ': ' . __( 'Фото до и после' ) }}
                        @else
                            {{ isset($seo->h1) ? $seo->h1 : $category->name . ': ' . __( 'Фото до и после' ) }}
                        @endif
                    @endif

                </h1>
                <!-- End Title -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<!-- End Title Page -->
